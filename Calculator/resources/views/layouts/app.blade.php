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
            let inputNum = ""; //左辺の値保存用 グローバル
            let math = ""; //演算子保存用 グローバル
            let flug = 0; //数値ボタン押したかフラグ
            let lastNum = ""; //最後に入力された数値
            function test(obj) {
                let outputArea = $(".number"); //現在表示されている値を取得

                switch(obj.innerText){
                case "AC":
                    outputArea.text(0);
                    inputNum = "";
                    math = "";

                    break;

                case "C":
                    outputArea.text(0);
                    break;

                // case "%":
                //     if(outputArea.text().length < "16"){ //制限された桁数に達すると動かなくなる
                //         let inputText = outputArea.text();
                //         inputText = inputText / 100;
                //         console.log(String(inputText).length);
                //         console.log(outputArea);
                //         //TODO inputTextの文字数をカウントさせる
                //         if(String(inputText).length > 16){
                //             let num = (String(inputText).length - 16);
                //             inputText = floorDecimal(inputText, num);
                //         }else{
                //             outputArea.text(inputText);
                //         }
                //     }
                //     break;

                case "+":
                    if(math == "+"){ //既に演算子が入力されている場合
                        if(inputNum != ""){ //左辺が入っている場合
                            if(flug != 0){
                            let inputText = outputArea.text();
                            inputNum = Number(inputNum) + Number(inputText);
                            flug = 0;
                            outputArea.text(inputNum);
                            }
                        }else{
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                            math = $(obj).text(); //演算子を保存
                        }

                    }else{
                        inputNum = outputArea.text(); //左辺の値を変数に保存
                        math = $(obj).text(); //演算子を保存
                    }
                    break;

                case "-":
                    if(math == "-"){ //既に演算子が入力されている場合
                        if(inputNum != ""){ //左辺が入っている場合
                            if(flug != 0){
                            let inputText = outputArea.text();
                            inputNum = Number(inputNum) - Number(inputText);
                            flug = 0;
                            outputArea.text(inputNum);
                            }
                        }else{
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                            math = $(obj).text(); //演算子を保存
                        }

                    }else{
                        inputNum = outputArea.text(); //左辺の値を変数に保存
                        math = $(obj).text(); //演算子を保存
                    }
                    break;
                case "×":
                    if(math == "×"){ //既に演算子が入力されている場合
                        if(inputNum != ""){ //左辺が入っている場合
                            if(flug != 0){
                            let inputText = outputArea.text();
                            inputNum = Number(inputNum) * Number(inputText);
                            flug = 0;
                            outputArea.text(inputNum);
                            }
                        }else{
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                            math = $(obj).text(); //演算子を保存
                        }

                    }else{
                        inputNum = outputArea.text(); //左辺の値を変数に保存
                        math = $(obj).text(); //演算子を保存
                    }
                    break;
                case "÷":
                    if(math == "÷"){ //既に演算子が入力されている場合
                        if(inputNum != ""){ //左辺が入っている場合
                            if(flug != 0){
                            let inputText = outputArea.text();
                            inputNum = Number(inputNum) / Number(inputText);
                            flug = 0;
                            outputArea.text(inputNum);
                            }
                        }else{
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                            math = $(obj).text(); //演算子を保存
                        }

                    }else{
                        inputNum = outputArea.text(); //左辺の値を変数に保存
                        math = $(obj).text(); //演算子を保存
                    }
                    break;

                case "=":
                    let inputText = outputArea.text();
                    let result = 0;
                    switch(math){
                        case "+":
                            if(flug != 0){ //数値ボタンを押している場合
                                result = Number(inputNum) + Number(inputText);
                            }else if(inputNum != 0){ //最初の入力値が入っている場合
                                result = Number(inputNum) + Number(inputNum);
                            }else{ //演算子→数字を入力した場合、もしくはそれ以外
                                result = Number(inputText) + Number(lastNum);
                            }
                            break;
                        case "-":
                            if(flug != 0){ //数値ボタンを押している場合
                                result = Number(inputNum) - Number(inputText);
                            }else if(inputNum != 0){ //最初の入力値が入っている場合
                                result = Number(inputNum) - Number(inputNum);
                            }else{ //演算子→数字を入力した場合、もしくはそれ以外
                                result = Number(inputText) - Number(lastNum);
                            }
                            break;
                        case "×":
                            if(flug != 0){ //数値ボタンを押している場合
                                result = Number(inputNum) * Number(inputText);
                            }else if(inputNum != 0){ //最初の入力値が入っている場合
                                result = Number(inputNum) * Number(inputNum);
                            }else{ //演算子→数字を入力した場合、もしくはそれ以外
                                result = Number(inputText) * Number(lastNum);
                            }
                            break;
                        case "÷":
                            if(flug != 0){ //数値ボタンを押している場合
                                result = Number(inputNum) / Number(inputText);
                            }else if(inputNum != 0){ //最初の入力値が入っている場合
                                result = Number(inputNum) / Number(inputNum);
                            }else{ //演算子→数字を入力した場合、もしくはそれ以外
                                result = Number(inputText) / Number(lastNum);
                            }
                            break;
                    }
                    if(result.indexOf('.') == -1 && result.length > "16")
                    {
                        console.log("オーバー！");
                        result = floorDecimal(result, 16);
                    }
                    outputArea.text(result);
                    inputNum = "";
                    flug = 0; //数字を押したフラグ消去
                    break;

                case "0":
                    //TODO 初期値が0以外の条件で、処理を実行する
                    let nko = String(outputArea).indexOf('.');
                    if(outputArea.text() != "0"){
                        let num = ""; //入力された値を保存する用

                        if(outputArea.text().length < "16"){ //制限された桁数に達すると動かなくなる
                            if(outputArea.text() != "0"){
                                if(math != "" && flug == 0){
                                    flug = 1; //演算子を押した後に数字を押したか
                                    num = ""; //取得した文字を変数に代入
                                }else{
                                    num = outputArea.text(); //取得した文字を変数に代入
                                }
                            }
                            lastNum = num; //最終入力値を保存
                            num += Number($(obj).text()); //入力された値を連結
                            outputArea.text(num); //現在表示されている値を上書き
                        }
                    }else if(nko != -1){
                        console.log("koko");
                        if(outputArea.text().length < "16"){ //制限された桁数に達すると動かなくなる
                            console.log("はぇ~");
                            if(outputArea.text() != "0"){
                                console.log("すっごいおっきい");
                                if(math != "" && flug == 0){
                                    console.log("入って、どうぞ");
                                    flug = 1; //演算子を押した後に数字を押したか
                                    num = ""; //取得した文字を変数に代入
                                }else{
                                    num = outputArea.text(); //取得した文字を変数に代入
                                }
                            }
                            lastNum = num; //最終入力値を保存
                            num += Number($(obj).text()); //入力された値を連結
                            outputArea.text(num); //現在表示されている値を上書き
                        }
                    }
                    break;

                case ".":
                    let dot = outputArea.text();
                    if(dot.indexOf('.') == -1){ //.があるか判定
                        dot += ".";
                        outputArea.text(dot);
                    }
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
                    let num = ""; //入力された値を保存する用

                    if(outputArea.text().length < "16"){ //制限された桁数に達すると動かなくなる
                        lastNum = $(obj).text(); //履歴として保存
                        if(outputArea.text() != "0"){
                            if(math != "" && flug == 0){
                                flug = 1; //演算子を押した後に数字を押したか
                                num = ""; //取得した文字を変数に代入
                            }else{
                                num = outputArea.text(); //取得した文字を変数に代入
                            }
                        }
                        num += $(obj).text(); //入力された値を連結
                        lastNum = num; //最終入力値を保存
                        outputArea.text(num); //現在表示されている値を上書き
                        break;
                    }
                }
            }
        function floorDecimal(value, n) {
            return Math.round(value * (10 ** n)) / (10 ** n);
        }
        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
