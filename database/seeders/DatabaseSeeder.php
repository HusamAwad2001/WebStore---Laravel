<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'roles' => 'admin',
            'password' => bcrypt('12341234'),
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'roles' => 'user',
            'password' => bcrypt('12341234'),
        ]);

        Warehouse::create([
            'name' => 'Gaza',
            'status' => '1',
            'created_by' => 1,
        ]);

        Category::create([
            'name' => 'AA',
            'status' => '1',
            'created_by' => 1,
        ]);

        Product::create([
            'name' => 'Ahmed',
            'description' => "Ahmed Ahmed",
            'image' => 'image',
            'count' => 50,
            'status' => '1',
            'category_id' => 1,
            'code' => '011',
            'warehouse_id' => 1,
        ]);
    }
}
