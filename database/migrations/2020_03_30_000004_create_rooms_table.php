<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('capacity')->nullable();
            $table->longText('description')->nullable();
            $table->integer('unit')->nullable();
            $table->integer('destination_id')->nullable();
            $table->double('resident_rate')->nullable();
            $table->double('non_resident_rate')->nullable();
            $table->longblob('room_type')->nullable();
            $table->binary('image');
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
