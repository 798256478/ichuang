<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAcmeGuideContents extends Migration
{
    public function up()
    {
        Schema::create('acme_guide_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('etitle')->nullable();
            $table->string('builder')->nullable();
            $table->string('certificate')->nullable();
            $table->string('model')->nullable();
            $table->string('grade')->nullable();
            $table->string('location')->nullable();
            $table->string('area')->nullable();
            $table->string('allarea')->nullable();
            $table->string('investment')->nullable();
            $table->integer('onenterprise')->nullable();
            $table->string('overenterprise')->nullable();
            $table->string('csearch_num')->nullable();
            $table->string('psearch_num')->nullable();
            $table->string('tsearch_num')->nullable();
            $table->string('lab')->nullable();
            $table->string('income')->nullable();
            $table->text('short_introduce')->nullable();
            $table->text('introduce')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('acme_guide_contents');
    }
}
