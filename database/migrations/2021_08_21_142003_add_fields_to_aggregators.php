<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAggregators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aggregators', function (Blueprint $table) {
            $table->integer('feed_pupils')->after('tin')->nullable();
            $table->string('amount_to_paid_cook')->after('feed_pupils')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aggregators', function (Blueprint $table) {
            $table->dropColumn('feed_pupils');
            $table->dropColumn('amount_to_paid_cook');

        });
    }
}
