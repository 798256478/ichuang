<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents8 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('onenterprise', 255)->change();
            $table->string('overenterprise', 255)->change();
            $table->string('csearch_num', 255)->change();
            $table->string('psearch_num', 255)->change();
            $table->string('tsearch_num', 255)->change();
            $table->string('lab', 255)->change();
            $table->string('income', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('onenterprise', 10)->change();
            $table->string('overenterprise', 10)->change();
            $table->string('csearch_num', 10)->change();
            $table->string('psearch_num', 10)->change();
            $table->string('tsearch_num', 10)->change();
            $table->string('lab', 10)->change();
            $table->string('income', 10)->change();
        });
    }
}
