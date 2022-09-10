<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{


    function ShowBeranda()
    {
        return view('admin.beranda');
    }

    function ShowProduk()
    {
        return view('admin.produk');
    }

    function ShowKategori()
    {
        return view('admin.kategori');
    }

    function ShowPromo()
    {
        return view('admin.promo');
    }

    function test($produk, $hargaMin = 0, $hargaMax = 0)
    {
        if ($produk == 'kacamata') {
            echo "Tampilkan Produk Kacamata";
        } elseif ($produk == 'sepeda') {
            echo "Produk sepeda";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }

    public function testcollection()
    {
        $list_mobil = ['BMW', 'Porsche', 'Honda', 'Nissan', 'Lexus', 'Jeep', 'Chevrolet'];
        $list_mobil = collect($list_mobil);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));

        //    map
        // foreach($list_produk as $item){
        //     echo "$item->nama<br>";
        // }
        //  $list_produk->each(function ($item) {
        //      echo "$item->nama<br>";
        //  });

        // filter
        
        //  $filtered = $list_produk->filter(function ($item) {
        //      return $item->harga > 200000;
        //  });

        //  dd($filtered);

        //  $sum = $list_produk->avg('harga');
        //  dd($sum);

        $data['list'] = $list_produk;
        return view('test-collection', $data);

        dd($list_mobil, $list_produk);
    }
}
