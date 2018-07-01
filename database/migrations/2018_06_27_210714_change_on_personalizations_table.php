<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOnPersonalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personalizations', function (Blueprint $table) {
            // $table->timestamps();
            $table->renameColumn('lognum','photo');
            $table->unsignedInteger('memorysize')->after('brand');
            $table->renameColumn('rom','ram');
        });
            //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personalizations', function (Blueprint $table) {
            //
        });
    }
}
