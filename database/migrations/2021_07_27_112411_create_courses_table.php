<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('objective');  
            $table->string('playlist_url');  
            $table->integer('view_count')->default(0);
            $table->integer('status')->default(0);
            $table->integer('subscriber_count');
            $table->string('photo')->nullable();
            $table->double('actual_price');
            $table->double('discount_price');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
