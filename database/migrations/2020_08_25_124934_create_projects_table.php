<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('sub_title');
            $table->text('description')->nullable(false);
            $table->string('status')->nullable(false);
            $table->foreignId('user_id')
                    ->nullable($value = true)
                    ->onUpdate('CASCADE')
                    ->onDelete('SET NULL')->constrained('users','id');
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
        Schema::dropIfExists('projects');
    }
}
