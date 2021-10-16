<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    // id_pengguna relasi ke table_dataBank

    protected $table = 'pelanggan';
    protected $fillable = ['nama', 'alamat', 'no_telp'];
    protected $key = 'id_pelanggan';
    public $timestamps = true;
    use HasFactory;

    public function alldataPelanggan()
    {
        return DB::table('pelanggan')->get();

    }

    public function adddataPelanggan($dataPelanggan)
    {
        DB::table('pelanggan')->insert($dataPelanggan);
    }

    public function getLast()
    {
        return DB::table('pelanggan')->orderBy('id_pelanggan', 'desc')->first();
    }

}