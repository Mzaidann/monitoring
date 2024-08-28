<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RfidData extends Model
{
    protected $fillable = ['id_card', 'name']; // Pastikan 'entry_time' tidak ada di sini jika tidak diperlukan
}
