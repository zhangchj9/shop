<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CouponsAddAdminId extends Migration
{
    /**   
     * Run the migrations. (by BLMYX01)
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coupon_codes', function (Blueprint $table) {
            $table->unsignedInteger('admin_id')->nullable()->after('name');
            $table->foreign('admin_id')->references('id')->on('admin_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations. (by BLMYX01)
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupon_codes', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
            $table->dropColumn('admin_id');
        });
    }
}
