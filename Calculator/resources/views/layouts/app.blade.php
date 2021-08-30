<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Oyama Calculator - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div>
    </head>
    <body>
        <div class="menubar">お問い合わせ</div>
            @yield('contents')
            <div class="right">
                ©Norihisa Oyama 2021.
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">
            function test(obj) {
                let outputArea = $(".number");
                let myTotal = ""; //現在の合計
                let output = new Array(); //入力中の値
                let myCalc = ""; //演算子
                let historyVal = 0; //前に何の値が入ったか
                let historyBtn = ""; //前に何のボタンを押したか

                switch(obj.innerText){
                case "AC":
                    myTotal = 0;	// 合計クリア
                    myCalc = "";	// 演算子クリア
                    output = [];	// 現在入力している値をクリア
                    document.getElementById('number').innerHTML = 0;
                    break;

                case "C":
                    if(historyBtn == ""){ //既に入力した履歴が無い場合
                        myTotal = 0;	// 合計クリア
                        output = 0;	// 現在入力している値をクリア
                    }else{
                        output = 0;	// 現在入力している値をクリア
                    }
                    document.getElementById('number').innerHTML = output;
                    break;

                case "%":
                    if(myTotal != ""){
                        output = output / 100;	// 現在入力している値を1/100に
                        var array = output.toString().split('.');
                        document.getElementById('number').innerHTML = output.toFixed(array[1].length);
                    }
                    break;

                case "÷":
                    document.getElementById('number').innerHTML = obj.innerText;
                    break;

                case "-":
                    document.getElementById('number').innerHTML = obj.innerText;
                    break;

                case "+":
                    document.getElementById('number').innerHTML = obj.innerText;
                    break;

                case "=":
                    document.getElementById('number').innerHTML = obj.innerText;
                    break;

                case "0":
                    //TODO 初期値が0以外の条件で、処理を実行する
                    document.getElementById('number').innerHTML = output;
                    break;

                case ".":
                    //TODO ドット判定を追加、無ければ処理(2つの存在はありえない)
                    document.getElementById('number').innerHTML = obj.innerText;
                    break;

                case "1":
                case "2":
                case "3":
                case "4":
                case "5":
                case "6":
                case "7":
                case "8":
                case "9":
                    let inputText = "";
                    if(outputArea.text() != "0"){
                        //TODO 桁数判定を追加しておく
                        inputText = outputArea.text(); //取得した文字を変数に代入
                    }
                    inputText += $(obj).text();

                    outputArea.text(inputText);
                    break;
                }
            }
        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
