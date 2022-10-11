<?php

use App\Models\Club;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->date("establishment");
            $table->string("location");
            $table->integer("max_number");
            $table->timestamps();
        });

        Club::create(["establishment" => '2015-03-21', "location" => 'Budapest', "max_number" => 50]);
        Club::create(["establishment" => '2011-02-23', "location" => 'Csongor', "max_number" => 15]);
        Club::create(["establishment" => '2018-10-21', "location" => 'Győr', "max_number" =>15]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};
