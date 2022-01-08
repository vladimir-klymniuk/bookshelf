<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImageThumbnails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_thumbnails', function (Blueprint $table){
            $table->id()->nullable(false)->autoIncrement();
            $table->char('uuid', 36)->unique();
            $table->string('name', 254)->nullable(false)->index();
            $table->text('base64')->nullable(false);
            $table->integer('image_id');
            $table->text('size');
            $table->dateTime('created_at')->useCurrent();
            // todo add composite index on size + image_id
            // todo add relation to parent table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_thumbnails');
    }
}
