<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->mediumInteger('col1');
            $table->mediumText('col2');
            $table->smallInteger('col3');
            $table->string('col4', 1000);
            $table->time('col5');
            $table->timestamp('col6');
            $table->tinyInteger('col8');
            $table->unsignedBigInteger('col9');
            $table->unsignedInteger('col10');
            $table->text('col11');
            $table->unsignedMediumInteger('col12');
            $table->unsignedTinyInteger('col13');
            $table->unsignedSmallInteger('col14');
            $table->tinyText('col15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
