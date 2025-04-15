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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->string("full_name", 50);
            $table->string("contact_number", 11);
            $table->string("email", 50);
            $table->string("profile_image", 100);

            $table->unsignedBigInteger("user_id");

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
           
        });
        $userId = DB::table('users')->insert([
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
                "userName" => "antiquina",
                "email" => "occ.antiquina@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "jessa",
                "email" => "occ.jessa@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "ariana",
                "email" => "occ.ariana@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "nicki",
                "email" => "occ.nicki@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "katy",
                "email" => "occ.katy@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "mike",
                "email" => "occ.mike@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "joel",
                "email" => "occ.joel@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "darlin",
                "email" => "occ.darlin@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "jandi",
                "email" => "occ.jandi@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "darelle",
                "email" => "occ.darelle@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "mona",
                "email" => "occ.mona@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "emma",
                "email" => "occ.emma@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "ann",
                "email" => "occ.ann@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "jericho",
                "email" => "occ.jericho@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "jingjing",
                "email" => "occ.jingjing@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ],
            [
                "userName" => "danna",
                "email" => "occ.danna@gmail.com",
                "password" => Hash::make("imba2"),
                "role" => "admin",
                "reset_token" => '',
                "token_expiry" => now(),
                "reset_token_hash" => '',
                "reset_token_expires_at" => now()
            ]
        ]);
            $userId = DB::table('user_profile')->insert([
            [
                "full_name" => "JB Abrea",
               "contact_number" => "09020105033",
                "email" => "occ.abrea@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Shandy Padere",
                "contact_number" => "09432453463",
                "email" => "occ.padere@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jonne Antiquina",
                "contact_number" => "09756732525",
                "email" => "occ.antiquina@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Joshua Tee",
                "contact_number" => "09756732598",
                "email" => "occ.tee@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jessa",
                "contact_number" => "09756732574",
                "email" => "occ.jessa@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Ariana Grande",
                "contact_number" => "09756732547",
                "email" => "occ.ariana@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jonne Antiquina",
                "contact_number" => "09756732587",
                "email" => "occ.antiquina@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Nicki Minaj",
                "contact_number" => "09756732593",
                "email" => "occ.nicki@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Katy",
                "contact_number" => "09756732565",
                "email" => "occ.katy@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Mike",
                "contact_number" => "09756732512",
                "email" => "occ.mike@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jonne Antiquina",
                "contact_number" => "09756732551",
                "email" => "occ.antiquina@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Joel",
                "contact_number" => "09756732519",
                "email" => "occ.joel@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Darlin",
                "contact_number" => "09756732666",
                "email" => "occ.darlin@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jandi",
                "contact_number" => "09756732777",
                "email" => "occ.jandi@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Darelle",
                "contact_number" => "09756732999",
                "email" => "occ.darelle@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Mona",
                "contact_number" => "09756732333",
                "email" => "occ.mona@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Mariza",
                "contact_number" => "09756732222",
                "email" => "occ.mariza@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "emma",
                "contact_number" => "09756732111",
                "email" => "occ.emma@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "anna",
                "contact_number" => "09756732555",
                "email" => "occ.ann@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "Jericho",
                "contact_number" => "09756732553",
                "email" => "occ.jericho@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "jingjing",
                "contact_number" => "09756732654",
                "email" => "occ.jing@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ],
            [
                "full_name" => "danna",
                "contact_number" => "09756732123",
                "email" => "occ.danna@gmail.com",
                "profile_image" => "default_profile_image.jpg",
                "user_id" => $userId
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
