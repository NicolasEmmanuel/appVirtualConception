<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titre',180)->nullable();
            $table->text('description')->nullable();
            $table->string('image', 180)->nullable();
            $table->timestamps();

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Formation::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
