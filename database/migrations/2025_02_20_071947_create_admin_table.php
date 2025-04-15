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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();

        $table->unsignedBigInteger("user_id");

        $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
        });

        DB:: table ('admin') ->insert ([
            [
                'user_id' => 1
            ],
            [
                'user_id' => 2
            ],
            [
                'user_id' => 3
            ],
            [
                'user_id' => 4
            ],
            [
                'user_id' => 5
            ],
            [
                'user_id' => 6
            ],
            [
                'user_id' => 7
            ],
            [
                'user_id' => 8
            ],
            [
                'user_id' => 9
            ],
            [
                'user_id' => 10
            ],
            [
                'user_id' => 11
            ],
            [
                'user_id' => 12
            ],
            [
                'user_id' => 13
            ],
            [
                'user_id' => 14
            ],
            [
                'user_id' => 15
            ],
            [
                'user_id' => 16
            ],
            [
                'user_id' => 17
            ],
            [
                'user_id' => 18
            ],
            [
                'user_id' => 19
            ],
            [
                'user_id' => 20
            ],

            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
