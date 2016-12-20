<?php namespace Acme\Serve\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAcmeServeShops extends Migration
{
    public function up()
    {
        Schema::create('acme_serve_shops', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('price')->nullable();
            $table->string('introduce')->nullable();
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('acme_serve_shops');
    }
}
