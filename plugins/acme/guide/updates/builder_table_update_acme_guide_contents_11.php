<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents11 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->dropColumn('etitle');
            $table->dropColumn('builder');
            $table->dropColumn('certificate');
            $table->dropColumn('model');
            $table->dropColumn('grade');
            $table->dropColumn('location');
            $table->dropColumn('area');
            $table->dropColumn('allarea');
            $table->dropColumn('investment');
            $table->dropColumn('onenterprise');
            $table->dropColumn('overenterprise');
            $table->dropColumn('csearch_num');
            $table->dropColumn('psearch_num');
            $table->dropColumn('tsearch_num');
            $table->dropColumn('lab');
            $table->dropColumn('income');
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('etitle', 255)->nullable();
            $table->string('builder', 255)->nullable();
            $table->string('certificate', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('grade', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->string('area', 255)->nullable();
            $table->string('allarea', 255)->nullable();
            $table->string('investment', 255)->nullable();
            $table->string('onenterprise', 255)->nullable();
            $table->string('overenterprise', 255)->nullable();
            $table->string('csearch_num', 255)->nullable();
            $table->string('psearch_num', 255)->nullable();
            $table->string('tsearch_num', 255)->nullable();
            $table->string('lab', 255)->nullable();
            $table->string('income', 255)->nullable();
        });
    }
}
