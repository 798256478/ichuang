<?php namespace Acme\Serve\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeServeShops3 extends Migration
{
    public function up()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->renameColumn('hot', 'ishot');
        });
    }
    
    public function down()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->renameColumn('ishot', 'hot');
        });
    }
}
