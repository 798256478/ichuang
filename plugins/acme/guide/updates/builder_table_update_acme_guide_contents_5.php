<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents5 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->boolean('ishot')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->dropColumn('ishot');
        });
    }
}
