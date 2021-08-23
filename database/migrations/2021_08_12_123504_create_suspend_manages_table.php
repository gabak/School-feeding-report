<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuspendManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspend_manages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('manager_id')->unsigned()->nullable();
            $table->set('type', ['Cooks', 'Aggregators'])->nullable();
            $table->bigInteger('cooks_aggregators_id')->unsigned()->nullable();
            $table->string('reason')->nullable();
            $table->string('status')->default('Requested');
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
        Schema::dropIfExists('suspend_manages');
    }
}
