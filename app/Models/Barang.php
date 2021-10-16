<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama_barang','jumlah'];
    protected $key = 'id_barang';
    public $timestamps = true;

    public function allBarang()
    {
        return DB::table('barang')->get();

    }

    public function addBarang($barang)
    {
        DB::table('barang')->insert($barang);

        // return $this->hasOne(DataBank::class);

    }

    // public function kePengguna()
    // {
    //     $this->hasOne(Pengguna::class, );
    // }

    use HasFactory;
}