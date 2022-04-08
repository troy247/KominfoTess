<?php

namespace Database\Seeders;
use App\Models\SubDistrict;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Kotamobagu Barat',
            'Kotamobagu Selatan',
            'Kotamobagu Timur',
            'Kotamobagu Utara',
        ];

        foreach($data as $data){
            SubDistrict::create([
                'name' => $data,
                'slug' => Str::slug($data)
            ]);
        }
    }
}
