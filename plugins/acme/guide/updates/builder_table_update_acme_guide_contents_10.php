<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents10 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->text('parameter');
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->dropColumn('parameter');
        });
    }
}
