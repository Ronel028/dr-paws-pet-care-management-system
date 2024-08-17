<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Appointment;

class AppointmentTable extends DataTableComponent
{
    protected $model = Appointment::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Client", "client.name")
                ->sortable(),
            Column::make("Pet", "pet.name")
                ->sortable(),
            Column::make("Service", "service")
                ->sortable(),
            Column::make("Appointment date time", "appointment_date_time")
                ->sortable(),
            Column::make("Remarks", "remarks")
                ->sortable(),
            Column::make("Status", "status.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
        ];
    }
}
