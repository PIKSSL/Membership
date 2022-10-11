<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(["name" => "Kati Béla", "email" => "katibela@gmail.com"]);
        User::create(["name" => "Béla A Kati", "email" => "kab@gmail.com"]);
        User::create(["name" => "Jézus Urunk", "email" => "JezusUrunk@gmail.com"]);
        User::create(["name" => "Sertés András", "email" => "sert@gmail.com"]);
        User::create(["name" => "Kalapos Kalaptalan", "email" => "vane@gmail.com"]);
        User::create(["name" => "Tamás", "email" => "csakTamás@gmail.com"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
