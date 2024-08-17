<?php

namespace App\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Inquiry;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Illuminate\Support\Str;

class InquiriesTable extends DataTableComponent
{
    protected $model = Inquiry::class;

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
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Subject", "subject")
                ->sortable(),
            Column::make("Message", "message")
                ->format(fn ($value, $row, Column $column) => Str::limit($value, 100))
                ->sortable(),
            BooleanColumn::make("Is opened", "is_opened")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make('Actions')
                ->label(fn ($row, Column $column) => view('components.datatables.inquiries.action-column', ['row' => $row, 'column' => $column]))
                ->html(),
        ];
    }
}
