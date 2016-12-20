<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents7 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('slug', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('slug', 255)->nullable()->change();
        });
    }
}
