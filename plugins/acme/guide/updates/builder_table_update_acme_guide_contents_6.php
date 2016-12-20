<?php namespace Acme\Guide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAcmeGuideContents6 extends Migration
{
    public function up()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->string('onenterprise', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('overenterprise', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('csearch_num', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('psearch_num', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('tsearch_num', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('lab', 10)->nullable()->unsigned(false)->default(null)->change();
            $table->string('income', 10)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('acme_guide_contents', function($table)
        {
            $table->integer('onenterprise')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('overenterprise')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('csearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('psearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('tsearch_num')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('lab')->nullable(false)->unsigned(false)->default(0)->change();
            $table->integer('income')->nullable(false)->unsigned(false)->default(0)->change();
        });
    }
}
