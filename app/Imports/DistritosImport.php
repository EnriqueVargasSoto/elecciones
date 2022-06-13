<?php

namespace App\Imports;

use App\Models\Distrito;
use Maatwebsite\Excel\Concerns\ToModel;

class DistritosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Distrito([
            //
        ]);
    }
}
