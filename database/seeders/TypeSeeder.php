<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('types');

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->type = $type;
            $new_type->save();
        }
    }
}
