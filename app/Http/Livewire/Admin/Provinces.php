<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Province;
use Illuminate\Support\Str;
class Provinces extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'searchCategoria' => ['except' => ''],
    ];

    public $modalFormVisible = false;
    public $modalConfirmDelete = false;
    public $modalActivar = false;
    public $modalInactivar = false;
    public $modelId;
    public $name, $slug, $description, $long, $lat;
    public $search;

    public function mount()
    {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            // 'description' => 'required',
            'long' => 'required',
            'lat' => 'required',
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
        $data = Province::find($this->modelId);
        $this->modalFormVisible = true;
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
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'long' => $this->long,
            'lat' => $this->lat,
        ];
    }

    public function create()
    {
        $this->validate();
        Province::create($this->modelData());
        $this->reset();
    }

    public function read()
    {
        return Province::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Province::where('id', $this->modelId)
            ->update($this->modelData());
        $this->reset();
    }

    public function delete()
    {
        Province::destroy($this->modelId);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.provinces', [
            'provinces' => Province::where('id', 'LIKE', "%{$this->search}%")->orWhere('name', 'LIKE', "%{$this->search}%")->latest()->paginate(10),
        ]);
    }
}
