<?php namespace Acme\Serve\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeServeShops5 extends Migration
{
    public function up()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->text('short_descript')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->dropColumn('short_descript');
        });
    }
}
