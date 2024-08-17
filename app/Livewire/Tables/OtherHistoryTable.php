<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\OtherHistory;
use Illuminate\Database\Eloquent\Builder;

class OtherHistoryTable extends DataTableComponent
{
    protected $model = OtherHistory::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function builder(): Builder
    {
        return OtherHistory::query()->with('drugReference');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Date administered", "date_administered")
                ->sortable(),
            Column::make('Administered', 'drugReference.name')
                ->sortable(),
            Column::make("Weight", "weight")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.vaccination.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
