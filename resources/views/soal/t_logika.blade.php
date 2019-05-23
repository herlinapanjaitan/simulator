@extends('template')

@section('main')
    <div id="t_logika">
        <h2>Tes Logika</h2><br>
        <h4>Tes logika ini meliputi Logika Aritmatika (deret angka) dan Logika Matematika.</h4>
        
        <div class="tombol-nav">
            <div>
                <a href="{{ URL::to('soal/t_logika/1') }}" class="btn btn-success btn-sm">Mulai</a>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('footer')
@stop