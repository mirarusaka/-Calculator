@extends('layouts.app')

@section('title', 'main')

@section('contents')

<div class="box">
    <p> {{-- ここに数字を表示。 --}}
        @if (isset($number))
            {{ $number }}
        @else
            -1,345,678,900,000
        @endif
        <br>
    </p>
    {{-- ボタン それぞれリンクがつく Bootstrap5 使用--}}
        {{-- １行目 --}}
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">C</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">±</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">%</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">÷</button>
        <br>
        {{-- 2行目 --}}
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">1</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">2</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">3</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">×</button>
        <br>
        {{-- 3行目 --}}
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">4</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">5</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">6</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">-</button>
        <br>
        {{-- 4行目 --}}
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">7</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">8</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">9</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">+</button>
        <br>
        {{-- 5行目 0のみ長丸ボタン --}}
        <button type="button" class="btn btn-primary rounded-pill" style="width:8rem;height:4rem;">0</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">.</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">=</button>
</div>



@endsection
