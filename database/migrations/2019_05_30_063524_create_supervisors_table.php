<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->bigIncrements('supervisorId');
            $table->string('supervisorDesc');
            $table->string('supervisorPhno');
            $table->string('supervisorEmail');
            $table->string('supervisorAddress');
            $table->boolean('active');
            $table->string('remark');
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
        Schema::dropIfExists('supervisors');
    }
}
