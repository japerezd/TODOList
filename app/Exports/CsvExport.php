<?php

namespace App\Exports;

use App\Task;
use Illuminate\Support\Facades\Auth;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

// use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    /* public function collection()
    {
        return Task::all();
    } */
    public function query()
    {
        return Task::query()->where('user_id','=',Auth::user()->id);
    }

    public function headings(): array
    {
        return[
            [
                'Name',
                'Notes',
                'Schedule',
                'Status',
            ]
        ];
    }
    public function map($task): array
    {
        return[
            [
                $task->name,
                $task->notes,
                $task->schedule,
                $task->status,
            ]
        ];
    }
}
