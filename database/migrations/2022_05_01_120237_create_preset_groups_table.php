<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresetGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset_groups', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("name");
            $table->string("description");
            $table->string("declared_value");
            $table->string("harmonization_code");
            $table->string("origin_country");
            $table->string("dimension");
            $table->string("weight");
            $table->string("domestic_service");
            $table->string("domestic_package");
            $table->string("domestic_confirmation");
            $table->string("international_service");
            $table->string("international_package");
            $table->string("international_confirmation");
            $table->enum('is_active', array('0','1'))->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preset_groups');
    }
}
