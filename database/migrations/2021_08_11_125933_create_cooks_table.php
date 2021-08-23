<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bvn')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('photo')->nullable();
            $table->bigInteger('school_id')->unsigned()->nullable();
            $table->integer('students')->default(0);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('cooks');
    }
}
