<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablsAddColStatusId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('posts', 'status_id'))
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('status_id')->unsigned()->nullable()->after('title');
                $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            });
        }
        if (!Schema::hasColumn('users', 'status_id'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('status_id')->unsigned()->nullable()->after('id');
                $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
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
        if (Schema::hasColumn('posts', 'status_id'))
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('status_id')->unsigned()->nullable()->after('title');
                $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            });
        }
        if (Schema::hasColumn('users', 'status_id'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('status_id')->unsigned()->nullable()->after('id');
                $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            });
        }
    }
}
