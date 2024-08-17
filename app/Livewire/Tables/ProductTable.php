<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            // Column::make("Slug", "slug")
            //     ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Brand", "brand")
                ->sortable(),
            Column::make("Unit of Measurement", "unit")
                ->sortable(),
            Column::make("Unit price", "unit_price")
                ->sortable(),
            Column::make("Retail price", "retail_price")
                ->sortable(),
            Column::make("Critical stocks", "critical_stocks")
                ->sortable(),
            Column::make("Stocks", "stocks")
                ->sortable(),
            BooleanColumn::make("Is active", "is_active")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
