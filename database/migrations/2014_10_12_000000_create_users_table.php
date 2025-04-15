<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("userName", 50);
            $table->string("email", 50);
            $table->string("password", 255);
            $table->enum("role",["admin", "customer"]);
            $table->string("reset_token", 64);
            $table->datetime("token_expiry");
            $table->string("reset_token_hash", 64);
            $table->datetime("reset_token_expires_at");

            
        });
        DB:: table ('users')-> insert ([
            [
                "userName" => "padere",//1
                "email" => "occ.padere.shandy@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'), 
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "abrea",//2
                "email" => "occ.abrea.jb@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'), 
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],      
            [
                "userName" => "tee",//3
                "email" => "occ.tee.joshua@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "jonee",//4
                "email" => "occ.jonee@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "jessa",//5
                "email" => "occ.jessa@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "ariana",//6
                "email" => "occ.ariana@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "nicki",//7
                "email" => "occ.nicki@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "katy",//8
                "email" => "occ.katy@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "mike",//9
                "email" => "occ.mike@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "joel",//10
                "email" => "occ.joel@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "darlin",//11
                "email" => "occ.darlin@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "jandi",//12
                "email" => "occ.jandi@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "darelle",//13
                "email" => "occ.darelle@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "mona",//14
                "email" => "occ.mona@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "mariza",//15
                "email" => "occ.mariza@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "emma",//16
                "email" => "occ.emma@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "ann",//17
                "email" => "occ.ann@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "jericho",//18
                "email" => "occ.jericho@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "jingjing",//19
                "email" => "occ.jingjing@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            [
                "userName" => "danna",//20
                "email" => "occ.danna@gmail.com",
                "role" => 'admin',
                "reset_token" => '',
                "password" => Hash::make('password'),
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now(),
            ],
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
