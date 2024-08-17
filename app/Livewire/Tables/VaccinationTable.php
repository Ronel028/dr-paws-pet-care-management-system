<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\VaccinationHistory;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class VaccinationTable extends DataTableComponent
{
    protected $model = VaccinationHistory::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function builder(): Builder
    {
        return VaccinationHistory::query()->with(['pet', 'pet.client', 'immunizationReference', 'veterinarian']);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Pet', 'pet.name')
                ->sortable(),
            Column::make('Owner', 'pet.client.name')
                ->sortable(),
            Column::make("Vaccination date", "vaccination_date")
                ->sortable(),
            Column::make("Weight", "weight")
                ->sortable(),
            Column::make("Temperature", "temperature")
                ->sortable(),
            Column::make("Immunization", "immunizationReference.name")
                ->sortable(),
            Column::make("Manufacturer lot", "manufacturer_lot")
                ->sortable(),
            Column::make('Veterinarian', 'veterinarian.name')
                ->sortable(),
            BooleanColumn::make('Settled', 'is_settelled'),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.vaccination.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
