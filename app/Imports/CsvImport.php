<?php

namespace App\Imports;

use App\Task;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Task([
            'user_id' => $row[Auth::user()->id],
            'name'     => $row[0],
            'notes'    => $row[1],
            'schedule' => $row[2],
            'status'   => $row[3],
        ]);
    }
}
