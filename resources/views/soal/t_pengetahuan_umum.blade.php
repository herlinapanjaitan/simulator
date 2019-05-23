@extends('template')

@section('main')
    <div id="t_pengetahuan_umum">
        <h2>Tes Pengetahuan Umum</h2><br>
        <h4>Tes pengetahuan umum berisi soal-soal yang menguji pengetahuan anda secara umum/general.</h4>
        
        <div class="tombol-nav">
            <div>
                <a href="{{ URL::to('soal/t_pengetahuan_umum/1') }}" class="btn btn-success btn-sm">Mulai</a>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('footer')
@stop