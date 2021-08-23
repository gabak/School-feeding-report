<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedings', function (Blueprint $table) {
            $table->id();
            $table->date('feeding_date');
            $table->bigInteger('manager_id')->nullable();
            $table->bigInteger('cooks_id')->nullable();
            $table->bigInteger('aggregators_id')->nullable();
            $table->bigInteger('school_id')->nullable();
            $table->string('day')->nullable();
            $table->string('items')->nullable();
            $table->string('unit_cost')->default(0.00);
            $table->integer('pupils')->default(0);
            $table->string('payable_amount')->default(0.00);
            $table->string('paid')->nullable();
            $table->enum('status', ['Unpaid', 'Paid', 'Cancel', 'Others'])->default('Unpaid');
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
        Schema::dropIfExists('feedings');
    }
}
