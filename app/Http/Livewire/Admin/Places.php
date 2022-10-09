<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Place;
use App\Models\Province;
use App\Models\Municipality;
use Illuminate\Support\Str;

class Places extends Component
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
    public $province_id, $municipality_id, $name, $slug, $description, $long, $lat, $type;
    public $search;
    public $provinces;
    public $municipalities;
    // public $searchByProvince;

    public function mount()
    {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'province_id' => 'required',
            'municipality_id' => 'required',
            'name' => 'required',
            // 'slug' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'type' => 'required',
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
        $data = Place::find($this->modelId);
        $this->modalFormVisible = true;
        $this->province_id = $data->province_id;
        $this->municipality_id = $data->municipality_id;
        $this->name = $data->name;
        $this->slug = Str::slug($data->name, '-');
        $this->description = $data->description;
        $this->long = $data->long;
        $this->lat = $data->lat;
        $this->type = $data->type;
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
            'municipality_id' => $this->municipality_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'description' => $this->description,
            'long' => $this->long,
            'lat' => $this->lat,
            'type' => $this->type,
        ];
    }

    public function create()
    {
        $this->validate();
        Place::create($this->modelData());
        $this->reset();
    }

    public function read()
    {
        return Place::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Place::where('id', $this->modelId)
            ->update($this->modelData());
        $this->reset();
    }

    public function delete()
    {
        Place::destroy($this->modelId);
        $this->reset();
    }

    public function render()
    {
        $this->provinces = Province::all();
        // if ($this->province_id)
        // {
        //     $this->municipalities = Municipality::where('province_id', $this->province_id)->get();
        // }else {
        //     $this->municipalities = Municipality::all();
        // }

        $this->municipalities = Municipality::where('province_id', $this->province_id)->get();

        return view('livewire.admin.places', [
            'places' => Place::where('id', 'LIKE', "%{$this->search}%")->orWhere('name', 'LIKE', "%{$this->search}%")->latest()->paginate(10),
        ]);
    }
}
