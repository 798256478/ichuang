<?php namespace Acme\Serve\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeServeShops6 extends Migration
{
    public function up()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->boolean('isrecommend')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('acme_serve_shops', function($table)
        {
            $table->dropColumn('isrecommend');
        });
    }
}
