<?php

namespace App\Livewire\Pos\InventoryManagement;

use App\Livewire\Forms\InventoryManagement\CreateForm;
use App\Livewire\Forms\InventoryManagement\UpdateForm;
use App\Models\ProductCategory;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    public CreateForm $create;
    public UpdateForm $update;
    public $createModal = false;

    public function resetCreateModal()
    {
        // $this->resetExcept('createModal', 'create', 'update');
        $this->create->reset();
        $this->createModal = false;
    }

    public function saveCreateForm()
    {
        // dd('create');
        $this->create->store();
    }

    public function render()
    {
        $categories = ProductCategory::all();
        return view('livewire.pos.inventory-management.index', compact('categories'))->layout('layouts.app');
    }
}
