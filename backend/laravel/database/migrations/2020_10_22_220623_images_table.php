<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class ImagesTable
 */
class ImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table){
            $table->id()->nullable(false)->autoIncrement();
            $table->char('uuid', 36)->unique();
            $table->string('file_name', 255)->nullable(false)->index();
            $table->string('file_path', 255)->nullable(false);
            $table->smallInteger('file_size', false, true)->nullable(false);
            $table->string('url_path', 255)->nullable(false);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable(true);
            $table->smallInteger('width', false, true)->nullable(false);
            $table->smallInteger('height', false, true)->nullable(false);
            $table->string('checksum', 255)->nullable(false);
            $table->smallInteger('language_id', false, true)->default(0);
            $table->string('status', 30)->default(\App\Entities\Type\ImageStatusType::STATUS_NEW);
            $table->string('mime_type', 255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
