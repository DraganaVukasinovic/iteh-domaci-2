<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTrajanjeTablePredstavas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predstavas', function (Blueprint $table) {
          
            $table->integer('trajanje');
 

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predstavas', function (Blueprint $table) {
          
            $table->integer('trajanje');
 

            
        });
    }
}
