<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddingMultipleFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('role')->nullable();
           $table->string('phone')->nullable();
           $table->string('fax')->nullable();
           $table->string('website')->nullable();
           $table->string('facebook')->nullable();
           $table->string('instagram')->nullable();
           $table->string('twitter')->nullable();
           $table->string('linkedin')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
