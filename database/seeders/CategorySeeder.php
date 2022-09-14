<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array('FICTION','SCIENCE','COMPUTER');
        foreach($data as $d){
            Category::create(['category' => $d]);
        }
    }
}
