@extends('layouts.app')

@section('title', 'main')

@section('contents')

<div class="box">
    <p> {{-- ここに数字を表示。 --}}
        @if (isset($number))
            {{ $number }}
        @else
            0
        @endif
        <br>
    </p>
    {{-- ボタン それぞれリンクがつく Bootstrap5 使用--}}
        {{-- １行目 --}}
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">AC</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">C</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">%</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">÷</button></a>
        <br>
        {{-- 2行目 --}}
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">1</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">2</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">3</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">×</button></a>
        <br>
        {{-- 3行目 --}}
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">4</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">5</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">6</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">-</button></a>
        <br>
        {{-- 4行目 --}}
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">7</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">8</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">9</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">+</button></a>
        <br>
        {{-- 5行目 0のみ長丸ボタン --}}
        <a href=""><button type="button" class="btn btn-primary rounded-pill" style="width:8rem;height:4rem;">0</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">.</button></a>
        <a href=""><button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">=</button></a>
</div>



@endsection
