<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AppointmentRequest;
use Illuminate\Database\Eloquent\Builder;

class AppointmentRequestTable extends DataTableComponent
{
    protected $model = AppointmentRequest::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
    }

    public function builder(): Builder
    {
        return AppointmentRequest::query()
            ->with(['status', 'appointment']);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Client name", "client_name")
                ->sortable(),
            Column::make("Contact no", "contact_no")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Pet name", "pet_name")
                ->sortable(),
            Column::make("Service", "service")
                ->sortable(),
            Column::make("Appointment date", "appointment_date")
                ->sortable(),
            Column::make("Status", "status.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.appointment.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
