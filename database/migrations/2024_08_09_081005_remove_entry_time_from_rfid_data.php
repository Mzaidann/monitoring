<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveEntryTimeFromRfidData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rfid_data', function (Blueprint $table) {
            $table->dropColumn('entry_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rfid_data', function (Blueprint $table) {
            $table->timestamp('entry_time')->nullable();
        });
    }
}
