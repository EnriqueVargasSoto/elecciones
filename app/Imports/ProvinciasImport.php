<?php

namespace App\Imports;

use App\Models\Provincia;
use Maatwebsite\Excel\Concerns\ToModel;

class ProvinciasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Provincia([
            //
        ]);
    }
}
