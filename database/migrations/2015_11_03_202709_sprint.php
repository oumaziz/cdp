<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprint', function (Blueprint $table) {
            $table->increments('id');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('UserStory_id');
        });


        DB::table('sprint')->insert(
            array(
                'StartDate' => '01/10/2015',
                'EndDate' => '15/10/2015',
                'UserStory_id' => '1'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sprint');
    }
}
