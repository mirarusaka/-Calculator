@extends('layouts.app')

@section('title', 'main')

@section('contents')

<div class="box">
    <ul>
        ここに数値が入ります<br>
    </ul>
    {{-- ボタン それぞれリンクがつく --}}
    <p>
        C +/- % ÷<br>
        1 2 3 ×<br>
        4 5 6 -<br>
        7 8 9 +<br>
        0   . =
    </p>
</div>



@endsection
