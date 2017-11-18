<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfsName');
            $table->string('rfsEmail');
            $table->string('rfsPhone');
            $table->string('rfsOrg')->nullable();
            $table->string('rfsOrgAddr')->nullable();
            $table->string('rfsOrgWeb')->nullable();
            $table->text('rfsMsg');
            $table->string('rfsService');
            $table->boolean('status')->default(0);
            $table->integer('agent')->nullable()->unsigned();
            $table->foreign('agent')->references('id')->on('users');
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
        Schema::dropIfExists('service_requests');
    }
}
