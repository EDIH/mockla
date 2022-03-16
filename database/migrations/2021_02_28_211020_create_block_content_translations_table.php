<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockContentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->string('content');
            $table->string('image');
            $table->string('link');
            $table->unsignedBigInteger('lang_id')->nullable();
            $table->unsignedBigInteger('block_content_id');
            $table->unsignedBigInteger('admin_created_id')->nullable();
            $table->unsignedBigInteger('admin_updated_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            /** Foreign keys */
            $table
                ->foreign('lang_id')
                ->references('id')->on('languages');
            $table
                ->foreign('block_content_id')
                ->references('id')->on('block_contents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_content_translations');
    }
}
