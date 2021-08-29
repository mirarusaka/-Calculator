@extends('layouts.app')

@section('title', 'main')

@section('contents')
<div class="box">
    {{-- ここに数字を表示。 --}}
        <p id="number">
            0
        </p>
    {{-- ボタン それぞれリンクがつく Bootstrap5 使用--}}
        {{-- １行目 --}}
        <div style="display:inline-flex">
            <button class="btn btn-danger rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">AC</button>
            <button class="btn btn-danger rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">C</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">%</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">÷</button>
        </div>
        <br>
        {{-- 2行目 --}}
        <div style="display:inline-flex">
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">1</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">2</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">3</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">×</button>
        </div>
        <br>
        {{-- 3行目 --}}
        <div style="display:inline-flex">
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">4</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">5</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">6</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">-</button>
        </div>
        <br>
        {{-- 4行目 --}}
        <div style="display:inline-flex">
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">7</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">8</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">9</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">+</button>
        </div>
        <br>
        {{-- 5行目 0のみ長丸ボタン --}}
        <div style="display:inline-flex">
            <button class="btn btn-primary rounded-pill" onclick="javascript:test(this)" style="width:8rem;height:4rem;">0</button>
            <button class="btn btn-primary rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">.</button>
            <button class="btn btn-success rounded-circle p-0" onclick="javascript:test(this)" style="width:4rem;height:4rem;">=</button>
        </div>
</div>



@endsection
