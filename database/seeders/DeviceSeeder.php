<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Device::create([
            'name' => 'iPhone 13',
            'color' => 'Space Gray',
            'price' => '1499.99'
        ]);

        Device::create([
            'name' => 'iPhone 15',
            'color' => 'Space Black',
            'price' => '1699.99'
        ]);

        Device::create([
            'name' => 'Samsung S24',
            'color' => 'Sapphire Black',
            'price' => '1299.99'
        ]);

        Device::create([
            'name' => 'Samsung S23 Ultra',
            'color' => 'Sapphire White',
            'price' => '1199.99'
        ]);

        Device::create([
            'name' => 'POCO X4 GT',
            'color' => 'Pearl Black',
            'price' => '399.99'
        ]);
    }
}
