<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan = [
            ["nama" => "admin"],
            ["nama" => "teacher"],
            ["nama" => "student"],
        ];
        foreach ($inputan as $key) {
            Role::insert([
                "name" => $key["nama"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
