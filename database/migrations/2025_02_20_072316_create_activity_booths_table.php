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
        Schema::create('activity_booths', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->decimal("price_per_hour");
        });
        DB::table('activity_booths')->insert([
            [
                "name" => "Photo Booth",
                "price_per_hour" => 100.00
            ],
            [
                "name" => "kissing Booth",
                "price_per_hour" => 200.00
            ],
            [
                "name" => "blind Booth",
                "price_per_hour" => 300.00
            ],            
            [
                "name" => "handcraf Booth",
                "price_per_hour" => 400.00
            ],
            [
                "name" => "jail Booth",
                "price_per_hour" => 500.00
            ],
            [
                "name" => "car Booth",
                "price_per_hour" => 600.00
            ],
            [
                "name" => "bike Booth",
                "price_per_hour" => 700.00
            ],
            [
                "name" => "lover Booth",
                "price_per_hour" => 800.00
            ],
            [
                "name" => "jump Booth",
                "price_per_hour" => 900.00
            ],
            [
                "name" => "food Booth",
                "price_per_hour" => 1000.00
            ],
            [
                "name" => "dessert Booth",
                "price_per_hour" => 11000.00
            ],
            [
                "name" => "liquor Booth",
                "price_per_hour" => 12000.00
            ],
            [
                "name" => "clown Booth",
                "price_per_hour" => 13000.00
            ],
            [
                "name" => "parent Booth",
                "price_per_hour" => 14000.00
            ],
            [
                "name" => "gadget Booth",
                "price_per_hour" => 15000.00
            ],
            [
                "name" => "game Booth",
                "price_per_hour" => 16000.00
            ],
            [
                "name" => "party Booth",
                "price_per_hour" => 17000.00
            ],
            [
                "name" => "boys Booth",
                "price_per_hour" => 18000.00
            ],
            [
                "name" => "girls Booth",
                "price_per_hour" => 19000.00
            ],
            [
                "name" => "yes Booth",
                "price_per_hour" => 20000.00
            ],
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_booths');
    }
};

