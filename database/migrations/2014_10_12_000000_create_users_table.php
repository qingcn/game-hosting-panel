<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();

            $table->unsignedInteger('server_limit')->default(1);
            $table->unsignedInteger('server_expiration_days')->default(1);

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')->nullable();

            $table->boolean('admin')->default(false);

            $table->unsignedBigInteger('panel_id')->unique()->nullable();

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
        Schema::dropIfExists('users');
    }
}
