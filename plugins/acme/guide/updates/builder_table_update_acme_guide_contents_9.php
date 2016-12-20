<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents9 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->integer('hot')->default(0);
            $table->dropColumn('ishot');
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->dropColumn('hot');
            $table->boolean('ishot')->default(0);
        });
    }
}
