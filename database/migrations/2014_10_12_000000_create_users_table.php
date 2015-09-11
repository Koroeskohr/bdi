<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook_id');
            $table->string('name');
            $table->string('profile_pic_url');
            $table->string('token');
            $table->integer('promotion_id')->nullable()->unsigned();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_bde')->default(false);
            $table->boolean('is_content_creator')->default(false);
            $table->string('role')->nullable();

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
