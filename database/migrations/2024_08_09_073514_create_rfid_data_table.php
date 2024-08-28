<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfidDataTable extends Migration
{
    public function up()
    {
        Schema::create('rfid_data', function (Blueprint $table) {
            $table->id();
            $table->string('id_card');
            $table->string('name');
            $table->timestamp('entry_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rfid_data');
    }
}
