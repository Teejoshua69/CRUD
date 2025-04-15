<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_carts', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->decimal("price_per_hour");
        });
        DB::table('food_carts')->insert([
            [
                "name" => "Tasty Cart",
                "price_per_hour" => 50.00
            ],
            [
                "name" => "sioma Cart",
                "price_per_hour" => 20.00
            ],
            [
                "name" => "burger Cart",
                "price_per_hour" => 150.00
            ],
            [
                "name" => "halo halo Cart",
                "price_per_hour" => 250.00
            ],
            [
                "name" => "cake Cart",
                "price_per_hour" => 250.00
            ],
            [
                "name" => "milk tea Cart",
                "price_per_hour" => 350.00
            ],
            [
                "name" => "soda Cart",
                "price_per_hour" => 70.00
            ],
            [
                "name" => "candy Cart",
                "price_per_hour" => 30.00
            ],
            [
                "name" => "cotton candy Cart",
                "price_per_hour" => 550.00
            ],
            [
                "name" => "coffee Cart",
                "price_per_hour" => 750.00
            ],
            [
                "name" => "bread Cart",
                "price_per_hour" => 850.00
            ],
            [
                "name" => "fishball Cart",
                "price_per_hour" => 950.00
            ],
            [
                "name" => "kwek kwek Cart",
                "price_per_hour" => 350.00
            ],
            [
                "name" => "tempura Cart",
                "price_per_hour" => 10.00
            ],
            [
                "name" => "lumpia Cart",
                "price_per_hour" => 20.00
            ],
            [
                "name" => "fries Cart",
                "price_per_hour" => 950.00
            ],
            [
                "name" => "dynamite Cart",
                "price_per_hour" => 650.00
            ],
            [
                "name" => "proben Cart",
                "price_per_hour" => 650.00
            ],
            [
                "name" => "mais Cart",
                "price_per_hour" => 880.00
            ],
            [
                "name" => "mani Cart",
                "price_per_hour" => 80.00
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_carts');
    }
};
