<?php

namespace App\Services;

use App\Models\Informasi;

class InformasiServices {
    
    public function getAllData() {
        
        return Informasi::latest()->get();
    } 

    public function getDataBySlug(string $slug) {

        return Informasi::where('slug', $slug)->firstOrFail();
    }

}