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
        <div style="display:inline-flex">
            <form metod="post" action="">
                <button type="button" class="btn btn-danger rounded-circle p-0" style="width:4rem;height:4rem;">AC</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-danger rounded-circle p-0" style="width:4rem;height:4rem;">C</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">%</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">÷</button>
            </form>
        </div>
        <br>
        {{-- 2行目 --}}
        <div style="display:inline-flex">
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">1</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">2</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">3</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">×</button>
            </form>
        </div>
        <br>
        {{-- 3行目 --}}
        <div style="display:inline-flex">
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">4</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">5</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">6</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">-</button>
            </form>
        </div>
        <br>
        {{-- 4行目 --}}
        <div style="display:inline-flex">
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">7</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">8</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">9</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">+</button>
            </form>
        </div>
        <br>
        {{-- 5行目 0のみ長丸ボタン --}}
        <div style="display:inline-flex">
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-pill" style="width:8rem;height:4rem;">0</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-primary rounded-circle p-0" style="width:4rem;height:4rem;">.</button>
            </form>
            <form metod="post" action="">
                <button type="button" class="btn btn-success rounded-circle p-0" style="width:4rem;height:4rem;">=</button>
            </form>
        </div>
</div>



@endsection
