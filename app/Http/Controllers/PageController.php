<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PageController extends Controller
{
    public function index() {
        //echo 'OK';
        return view('home');
    }

    public function passingData() {
        $title = 'Adatok átadása';
        $subTitle = 'A kontrollerben lévő változók átadása a sablonnak';
        $frutis = array('Alma', 'Körte', 'Barack', 'Szilva');


        //asszociatív tömb
        $ages = array('Béla'=>26, 'Józsi'=>32, 'Zoli'=>40, 'Kata'=>23);

        //dd($ages)

        //többdimenziós tömb
        $cars = array(
                array("Name"=>"Volvo","Model"=>"GH-234","Grade"=>5),
                array("Name"=>"BMW","Model"=>"PAJD-231","Grade"=>4),
                array("Name"=>"Saab","Model"=>"OWED-7554","Grade"=>3.5 ,'Parts'=>array('light','engine','wheel')),
            array("Name"=>"Land Rover","Model"=>"LDKS-01454", "Grade" => 4.5)
        );

        //dd($cars);

        //object array
        $people = array(
            new People("Béla",32,"Győr"),
            new People("Józsi",48,"Sopron"),
            new People("Gyuri",55,"Kapuvár")
        );

        //dd($people);

        return view('simpleVariable',[
            'title' => $title,
            'subTitle' => $subTitle,
            'fruits' => $frutis,
            'ages' => $ages,
            'cars' => $cars,
            'people' => $people
        ]);
    }
}


