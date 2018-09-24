<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('workers', function(Blueprint $table) {
          $table->increments('id');
          
          $table->string('name', 255);
          $table->string('position', 255)->nullable();
          $table->date('employment_date')->nullable();
          $table->integer('salary')->nullable();
    
          $table->integer('chief_id')->nullable();
          $table->integer('level')->nullable();
    
          $table->timestamps();
        });
      }
    
      public function down() {
        Schema::drop('workers');
      }
    
}
