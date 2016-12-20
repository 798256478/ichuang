<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents2 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->integer('onenterprise')->nullable(false)->default(0)->change();
            $table->integer('overenterprise')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('csearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('psearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('tsearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('lab')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('income')->nullable(false)->unsigned(false)->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->integer('onenterprise')->nullable()->default(null)->change();
            $table->string('overenterprise', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('csearch_num', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('psearch_num', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('tsearch_num', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('lab', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('income', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
