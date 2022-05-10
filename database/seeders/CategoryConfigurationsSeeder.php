<?php

namespace Database\Seeders;

use App\Models\CategoryConfigurations;
use Illuminate\Database\Seeder;

class CategoryConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryConfigurations::factory(8)->create();

    }
}
