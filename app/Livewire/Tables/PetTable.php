<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Builder;

class PetTable extends DataTableComponent
{
    protected $model = Pet::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('created_at', 'desc');
    }

    public function builder(): Builder
    {
        return Pet::query()->with('client');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Breed", "breed")
                ->searchable()
                ->sortable(),
            Column::make("Species", "species")
                ->searchable()
                ->sortable(),
            Column::make("Birthdate", "birthdate")
                ->searchable()
                ->sortable(),
            Column::make("Sex", "sex")
                ->searchable()
                ->sortable(),
            Column::make("Markings", "markings")
                ->searchable()
                ->sortable(),
            Column::make("Owner", 'client.name')
                ->searchable()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.pet-information.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
