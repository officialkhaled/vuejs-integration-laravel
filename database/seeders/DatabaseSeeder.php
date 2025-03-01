<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\Counter::factory(1)->create();
        \App\Models\Product::factory(5)->create();
        \App\Models\Customer::factory(5)->create();
        \App\Models\Invoice::factory(5)->create();
        \App\Models\InvoiceItem::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@example.com',
        // ]);
    }
}
