<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contactform;

class ContactformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Contactform::factory()->count(34)->create();
    }
}
