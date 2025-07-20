<?php

namespace App\Imports;

use App\Models\Asesi;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportAsesis implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asesi([
            'image' => $row[0],
            'nama' => $row[1],
            'email' => $row[2],
            'no_telepon' => $row[3],
            'no_regis' => $row[4],
            'tgl_lahir' => $row[5],
            'status_kerja' => $row[5],
            'asal_instansi' => $row[7],
            'skemas_id' => $row[8],
        ]);
    }
}
