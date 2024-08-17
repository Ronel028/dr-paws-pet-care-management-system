<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\GroomingHistory;
use Illuminate\Database\Eloquent\Builder;

class GroomingTable extends DataTableComponent
{
    protected $model = GroomingHistory::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function builder(): Builder
    {
        return GroomingHistory::query()
            ->with(['pet', 'pet.client']);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Owner\'s Name', 'pet.client.name')
                ->sortable(),
            Column::make('Pet\'s Name', 'pet.name')
                ->sortable(),
            Column::make('Breed', 'pet.breed')
                ->sortable(),
            Column::make('Contact No.', 'pet.client.contact_no')
                ->sortable(),
            Column::make('Haircut', 'haircut')
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.grooming.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
