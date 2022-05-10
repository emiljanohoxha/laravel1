<?php

namespace Database\Seeders;

use App\Models\CategoryConfigurationKeys;
use Illuminate\Database\Seeder;

class CategoryConfigurationKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryConfigurationKeys::factory(10)->create();

    }
}
