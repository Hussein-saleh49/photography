<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ["Fashion", "Technology", "Travel", "Food", "Photography"];
        foreach ($data as $element) {
            Category::updateOrCreate(["name" => $element], [
                "name" => $element,
            ]);
        }
    }
}
