@extends('template')

@section('main')
    <div id="homepage">
        <div class="center">
            <h3>Welcome to Simulator</h3>
            <h4 style="color:MediumSeaGreen;">Enjoy Your Exam !!!</h4>
        </div>

        <br><br>

        <a href="soal/t_kemampuan_verbal" class="box-lesson button1">Tes Kemampuan Verbal</a>
        <a href="soal/t_logika" class="box-lesson button2">Tes Logika</a>
        <a href="soal/t_pengetahuan_umum" class="box-lesson button3">Tes Pengetahuan Umum</a>
        
        <!-- <div class="box-lesson button1">
        <button type="button" onclick="window.location='{{ url("soal/") }}'">Herlina</button>
            <a href="{{ URL::to('soal/') }}">Herlina</a>
        </div> -->
        <!-- <div class="box-lesson button2">
            <a href="{{ URL::to('soal/') }}">Meilani</a>
        </div>
        <div class="box-lesson button3">
            <a href="{{ URL::to('soal/') }}">Panjaitan</a>
        </div> -->
    </div>
@stop

@section('footer')
    @include('footer')
@stop
