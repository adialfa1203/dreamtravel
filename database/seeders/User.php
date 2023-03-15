<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => ('Kotlokot'),
            'email' => ('kotlokot@gmail.com'),
            'password' => ('Kotlokot123'),
            'alamat' => ('Kotlokott'),
            'no' => ('123'),
            'tanggal' => Carbon::now(1),
            'status' => ('Active'),
            'role_id' => ('3')
        ]);
    }
}
