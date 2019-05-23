@extends('template')

@section('main')
    <div id="t_pengetahuan_umum">
        <h2>Tes Pengetahuan Umum</h2><br>
        
        @if (!empty($soal))

        <form action="{{ URL::to('soal/t_pengetahuan_umum/2') }}" method="post">
            {!! csrf_field() !!}
                <?php
                    $i = 6;
                ?>
        
            @foreach($soal as $semua_soal)
                <p>{{ $semua_soal->id }} . {{ $semua_soal->pertanyaan }}</p>
        
                <div class="form-group">
                    <label>Jawaban</label>
                    <input type="hidden" name="soal6{{$i}}" value="{{$semua_soal->id}}">
                    {!! Form::text('jawaban6'.$i, null, ['class' => 'form-control']) !!}
                </div>
        
                <br>
                <?php
                    $i++;
                ?>
            @endforeach 
        
            <button type="submit" class="btn btn-success">Submit</button>         
        </form>
        
        @else
            <p>Tidak ada data</p>
        @endif
    </div>
@stop

@section('footer')
    @include('footer')
@stop