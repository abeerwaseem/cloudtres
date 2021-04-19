<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_servers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('server_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->string('name');
            $table->string('public_ip');
            $table->string('private_ip');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->enum('status',['start', 'reboot', 'stop', 'terminate', 'pause']);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('user_servers');
    }
}
