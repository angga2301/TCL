<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class Transaksi extends Controller
{
    public function __construct()
    {
        $this->Barang = new Barang();
        $this->Pelanggan = new Pelanggan();
    }

    public function index()
    {
        $data = [
            'pelanggan' => $this->Pelanggan->alldataPelanggan(),
            'barang' => $this->Barang->allBarang(),
        ];

        return view('index', $data);
    }

    public function insert()
    {

        DB::beginTransaction();

        $dataPelanggan = [
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'no_telp' => Request()->no_telp,
        ];

        $this->Pelanggan->adddataPelanggan($dataPelanggan);

        $barang = [

            'id_pelanggan' => $this->Pelanggan->getLast()->id_pelanggan,
            'nama_barang' => Request()->barang,
            'jumlah' => Request()->jumlah,
        ];

        $this->Barang->addBarang($barang);

        DB::rollBack();
        //DB::commit();

        return redirect()->route('insert')->with('pesan', 'Data berhasil ditambahkan!!');

    }
}