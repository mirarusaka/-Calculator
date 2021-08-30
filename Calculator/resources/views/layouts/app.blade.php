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
                let myTotal = 0;
                let myInput = "";
                let myCalc = "+";
                let myFlg = 1;

                    switch(obj.innerText){
                        case "AC":
                        myTotal = 0;	// 合計クリア
                        myCalc = "+";	// 演算子クリア
                        myInput = "";	// 現在入力している値をクリア
                        document.getElementById('number').innerHTML = myTotal;
                        break;

                        case "C":
                            if(myTotal = 0){ //既に入力した数値が無い場合
                                myTotal = 0;	// 合計クリア
                                myInput = 0;	// 現在入力している値をクリア
                            }else{
                                myInput = 0;	// 現在入力している値をクリア
                            }

                            document.getElementById('number').innerHTML = myInput;
                        break;

                        case "%":
                            myInput = myInput / 100;	// 現在入力している値を1/100に
                            var array = myInput.toString().split('.');
                            document.getElementById('number').innerHTML = myInput(array[1].length);;
                        break;

                        case "÷":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "1":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "2":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "3":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "×":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "4":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "5":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "6":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "-":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "7":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "8":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "9":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "+":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "0":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case ".":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;

                        case "=":
                            document.getElementById('number').innerHTML = obj.innerText;
                        break;
                    }

            }
        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
