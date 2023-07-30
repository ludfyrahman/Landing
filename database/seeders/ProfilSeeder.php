<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_profile')->insert([
            'name' => 'SMK',
            'address' => 'SMK',
            'description' => '-',
            'email' => '-',
            'facebook' => '-',
            'instagram' => '-',
            'twitter' => '-',
            'phone' => '0',
            'logo' => '',
            'intro' => '',
            'visi' => '',
            'misi' => '',
        ]);
    }
}
