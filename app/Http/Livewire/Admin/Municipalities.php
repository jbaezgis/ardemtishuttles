<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Support\Str;

class Municipalities extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'searchByProvince' => ['except' => ''],
    ];

    public $modalFormVisible = false;
    public $modalConfirmDelete = false;
    public $modalActivar = false;
    public $modalInactivar = false;
    public $modelId;
    public $province_id, $name, $slug, $description, $long, $lat;
    public $search;
    public $provinces;
    // public $searchByProvince;

    public function mount()
    {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'province_id' => 'required',
            'name' => 'required',
            // 'slug' => 'required',
            // 'long' => 'required',
            // 'lat' => 'required',
        ];
    }

    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();

        $this->modelId = $id;
        $data = Municipality::find($this->modelId);
        $this->modalFormVisible = true;
        $this->province_id = $data->province_id;
        $this->name = $data->name;
        $this->slug = Str::slug($data->name, '-');
        $this->description = $data->description;
        $this->long = $data->long;
        $this->lat = $data->lat;
    }

    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDelete = true;
    }

    public function modelData()
    {
        return [
            'province_id' => $this->province_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'description' => $this->description,
            'long' => $this->long,
            'lat' => $this->lat,
        ];
    }

    public function create()
    {
        $this->validate();
        Municipality::create($this->modelData());
        $this->reset();
    }

    public function read()
    {
        return Municipality::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Municipality::where('id', $this->modelId)
            ->update($this->modelData());
        $this->reset();
    }

    public function delete()
    {
        Municipality::destroy($this->modelId);
        $this->reset();
    }

    public function render()
    {
        $this->provinces = Province::all();
        return view('livewire.admin.municipalities', [
            'municipalities' => Municipality::where('id', 'LIKE', "%{$this->search}%")->orWhere('name', 'LIKE', "%{$this->search}%")->latest()->paginate(10),
        ]);
    }
}
