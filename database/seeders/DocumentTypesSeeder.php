<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('document_types')->insert([
            [
                'name' => 'SEC Fillings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Press Release',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shareholder Meeting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
