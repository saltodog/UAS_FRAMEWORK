<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama' => 'admin',
                'nama' => 'pengelola',
                'nama' => 'mahasiswa',
                'nama' => 'dosen',
            ]
            ];

            foreach($data as $value){
                Role::Insert(
                    [
                        'nama'=>$value('nama'),
                        'created_at'=>Carbon::now(),
                        'update_at'=>Carbon::now()
                    ]
                );
            }
    }
}
