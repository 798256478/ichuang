<?php namespace Acme\Serve\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeServeShops4 extends Migration
{
    public function up()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->dateTime('privilege')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->dropColumn('privilege');
        });
    }
}
