<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        dump($collection);

    }

    public function collectionDua()
    {   //Collectoin dari berbagai type data
        $collection = collect(["Belajar","Laravel","Enak Banget", 1, 2, 3, 4]);
        echo $collection;

        echo "<br>";

        //Collection dari associative array
        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "SMA Negeri 1 Muara Enim",
            "Kota" => "Muara Enim",
            "Jurusan" => "IPA",
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        //untuk memeriksa apakah sebuah nilai ada di dalam collection atau tidak
        dump( $collection ->contains(3) );
        dump( $collection ->contains(8) );
    }

    public function collectionEmpat()
    {

    }

    public function collectionLima()
    {
        //... isi method collectionLima
    }
    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}
