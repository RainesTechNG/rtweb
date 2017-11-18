<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_msgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact-name');
            $table->string('contact-phone');
            $table->string('contact-email');
            $table->string('contact-title');
            $table->text('contact-message');
            $table->boolean('attendedTo')->default(false);
            $table->integer('agent')->unsigned()->nullable();
            $table->foreign('agent')
                ->references('id')->on('users');
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
        Schema::dropIfExists('contact_msgs');
    }
}
