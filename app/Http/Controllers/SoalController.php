<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tes1;
use App\Tes1_2;
use App\Tes2;
use App\Tes2_2;
use App\Tes3;
use App\Tes3_2;
use App\Jawaban1;
use App\Jawaban1_2;
use App\Jawaban2;
use App\Jawaban2_2;
use App\Jawaban3;
use App\Jawaban3_2;

class SoalController extends Controller
{
    private $counter;

    // public function __construct(){
    //     $this->counter = 1;
    // }

    // ---t_kemampuan_verbal---
    public function t_kemampuan_verbal()
    {
        return view('soal.t_kemampuan_verbal');
    }

    public function show_soal_t_kemampuan_verbal()
    {
        $soal = Tes1::all(); 
        return view('soal.show_soal_t_kemampuan_verbal', compact('soal'));
    }

    public function submit_t_kemampuan_verbal(Request $request)
    {
        for($i=1;$i<6;$i++){
            $jawaban = new\App\Jawaban1;
            $parameter_soal = "soal1".$i;
            $parameter_jawaban = "jawaban1".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        $soal = Tes1_2::all(); 
        return view('soal.show_soal_t_kemampuan_verbal_2', compact('soal'));
        // return view('pages.endpage');
    }

    public function submit_t_kemampuan_verbal_2(Request $request)
    {
        for($i=6;$i<11;$i++){
            $jawaban = new\App\Jawaban1_2;
            $parameter_soal = "soal6".$i;
            $parameter_jawaban = "jawaban6".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        return view('pages.endpage');
    }

    // ---t_logika---
    public function t_logika()
    {
        return view('soal.t_logika');
    }

    public function show_soal_t_logika()
    {
        $soal = Tes2::all();
        return view('soal.show_soal_t_logika', compact('soal'));
    }

    public function submit_t_logika(Request $request)
    {
        for($i=1;$i<6;$i++){
            $jawaban = new\App\Jawaban2;
            $parameter_soal = "soal2".$i;
            $parameter_jawaban = "jawaban2".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        $soal = Tes2_2::all();
        return view('soal.show_soal_t_logika_2', compact('soal'));
        // return view('pages.endpage');
    }

    public function submit_t_logika_2(Request $request)
    {
        for($i=6;$i<11;$i++){
            $jawaban = new\App\Jawaban2_2;
            $parameter_soal = "soal6".$i;
            $parameter_jawaban = "jawaban6".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        return view('pages.endpage');
    }

    // ---t_pengetahuan_umum---
    public function t_pengetahuan_umum()
    {
        return view('soal.t_pengetahuan_umum');
    }

    public function show_soal_t_pengetahuan_umum()
    {
        $soal = Tes3::all();
        return view('soal.show_soal_t_pengetahuan_umum', compact('soal'));
    }

    public function submit_t_pengetahuan_umum(Request $request)
    {
        for($i=1;$i<6;$i++){
            $jawaban = new\App\Jawaban3;
            $parameter_soal = "soal3".$i;
            $parameter_jawaban = "jawaban3".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        $soal = Tes3_2::all();
        return view('soal.show_soal_t_pengetahuan_umum_2', compact('soal'));
        // return view('pages.endpage');
    }

    public function submit_t_pengetahuan_umum_2(Request $request)
    {
        for($i=6;$i<11;$i++){
            $jawaban = new\App\Jawaban3_2;
            $parameter_soal = "soal6".$i;
            $parameter_jawaban = "jawaban6".$i;
            $jawaban->id_soal = $request[$parameter_soal];
            $jawaban->jawaban = $request[$parameter_jawaban];
            $jawaban->save();
        }

        return view('pages.endpage');
    }
}
