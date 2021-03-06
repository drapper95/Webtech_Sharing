<?php

namespace App\Http\Controllers;

use App\fahrradvermietung;
use App\mietungenCounter;
use App\vermietungenCounter;
use Illuminate\Http\Request;
use App\autovermietung;
use App\uniqueVisitor;
use DB;

class welcomeController extends Controller
{
    public function index()
    {
        if(count(vermietungenCounter::all()) == 0){
            DB::table('vermietungenCounter')->insert(['views' => 0]);
        }
        if(count(mietungenCounter::all()) == 0){
            DB::table('mietungenCounter')->insert(['views' => 0]);
        }

        $this->countVisitor();
        $aAdresses = autovermietung::all();
        $fAdresses = fahrradvermietung::all();
        return view('welcome', ['aAdresses' => $aAdresses, 'fAdresses' => $fAdresses]);
    }

    public function countVisitor()
    {
        $date = date("Y-m-d");
        $userIP = $_SERVER['REMOTE_ADDR'];

        $result = uniqueVisitor::whereDate('date', '=', $date)->get();


        if (!isset($_COOKIE['visitor'])) {
            $time = strtotime('next day 00:00');
            setcookie('visitor', 'hey', $time);
        }

        if (count($result) == 0) {

            DB::table('unique_visitors')->insert([
                'date' => $date,
                'ip' => $userIP
            ]);

        } else {

            $row = $result["0"];

            if (!isset($_COOKIE['visitor'])) {
                $newIP = $row->ip;

                if (!preg_match('/' . $userIP . '/', $newIP)) {

                    $newIP .= " $userIP";
                    //$newIP = $userIP;
                }
                DB::table('unique_visitors')->where('date', '=', $date)
                    ->increment('views', 1, ['ip' => $newIP]);
                //->update(['ip'=>$newIP])

            }
        }
    }
}
