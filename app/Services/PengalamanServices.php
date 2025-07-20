<?php 

namespace App\Services;

use App\Models\Pengalaman;

class PengalamanServices {

    public function getFirstLatestData() {

        return Pengalaman::latest()->first();
    }

}