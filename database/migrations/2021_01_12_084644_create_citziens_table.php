<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitziensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citziens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('citzien_full_name');
            $table->string('citzien_gender');
            $table->string('citzien_city');
            $table->string('citzien_nid');
            $table->string('citzien_mobile');
            $table->string('citzien_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citziens');
    }
}
