<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesAddColDeletedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('posts', 'deleted_at'))
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (!Schema::hasColumn('users', 'deleted_at'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (!Schema::hasColumn('categories', 'deleted_at'))
        {
            Schema::table('categories', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (!Schema::hasColumn('roles', 'deleted_at'))
        {
            Schema::table('roles', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (!Schema::hasColumn('permissions', 'deleted_at'))
        {
            Schema::table('permissions', function (Blueprint $table) {
                $table->softDeletes();
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
        if (Schema::hasColumn('posts', 'deleted_at'))
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (Schema::hasColumn('users', 'deleted_at'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (Schema::hasColumn('categories', 'deleted_at'))
        {
            Schema::table('categories', function (Blueprint $table) {
                $table->softDeletes();
            });
        }

        if (Schema::hasColumn('roles', 'deleted_at'))
        {
            Schema::table('roles', function (Blueprint $table) {
                $table->softDeletes();
            });
        }
        
        if (Schema::hasColumn('permissions', 'deleted_at'))
        {
            Schema::table('permissions', function (Blueprint $table) {
                $table->softDeletes();
            });
        }
    }
}
