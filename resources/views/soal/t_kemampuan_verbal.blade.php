@extends('template')

@section('main')
    <div id="t_kemampuan_verbal">
        <h2>Tes Kemampuan Verbal</h2><br>
        <h4>Tes kemampuan verbal ini meliputi sinonim (persamaan kata), antonim (lawan kata), analogi dan kolerasi makna.</h4>
        
        <div class="tombol-nav">
            <div>
                <a href="{{ URL::to('soal/t_kemampuan_verbal/1') }}" class="btn btn-success btn-sm">Mulai</a>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('footer')
@stop