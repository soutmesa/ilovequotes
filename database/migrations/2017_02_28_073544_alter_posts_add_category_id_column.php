<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPostsAddCategoryIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('categories'))
        {
            Schema::create('categories', function (Blueprint $table) {
                $table->increments('category_id');
                $table->string('cate_name', 30)->unique();
                $table->timestamps();
            });
        }

        if (!Schema::hasColumn('posts', 'category_id'))
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('restrict');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
}
