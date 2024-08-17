<?php

namespace App\Livewire\Forms\InventoryManagement;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateForm extends Form
{
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $brand;

    #[Validate('required')]
    public $unit;

    #[Validate('required')]
    public $unit_price;

    #[Validate('required')]
    public $retail_price;

    #[Validate('required')]
    public $critical_stocks;

    #[Validate('required')]
    public $stocks;

    #[Validate('required')]
    public $category_id;
}
