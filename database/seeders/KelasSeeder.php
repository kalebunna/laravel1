<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
 
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Kelas::truncate();
        Schema::enableForeignKeyConstraints();
        
        $inputan = [
            ["nama"=>"VII a"],
            ["nama"=>"VI a"],
            ["nama"=>"VIII a"],
        ];
        foreach ($inputan as $key ) {   
            Kelas::insert([
                "nama_kelas"=>$key["nama"],
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now()
            ]);
        }
    }
}
