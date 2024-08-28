<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRfidDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rfid_data', function (Blueprint $table) {
            // Mengubah kolom entry_time menjadi nullable jika tidak digunakan
            $table->timestamp('entry_time')->nullable()->change();
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
            // Menambahkan kembali kolom entry_time jika diperlukan dengan format datetime
            $table->timestamp('entry_time')->change();
        });
    }
}
