<?php

namespace Database\Seeders;

use App\Models\Dormitory;
use Illuminate\Database\Seeder;

class DormitorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'id' => 1,
                'name' => 'Kafernaum',
            ],
            [
                'id' => 2,
                'name' => 'Silo',
            ],
            [
                'id' => 3,
                'name' => 'Antiokhia',
            ],
            [
                'id' => 4,
                'name' => 'Pniel',
            ],
            [
                'id' => 5,
                'name' => 'Rusun I',
            ],
            [
                'id' => 6,
                'name' => 'Rusun II',
            ],
            [
                'id' => 7,
                'name' => 'Rusun III',
            ],
            [
                'id' => 8,
                'name' => 'Rusun IV',
            ],
        );
        foreach ($data as $d) {
            Dormitory::create([
                'id' => $d['id'],
                'name' => $d['name'],
            ]);
        }
    }
}
