@extends('layouts.app')

@section('title', 'main')

@section('contents')

<div class="box">
    <ul>
        １２３４５６７８９　<br>
    </ul>
    {{-- ボタン それぞれリンクがつく Bootstrap5 使用--}}
    <p>
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
        <button type="button" class="btn btn-primary rounded-pill" style="width:8rem;height:4rem;">0　　　</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">.</button>
        <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">=</button>
    </p>
</div>



@endsection
