<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Oyama Calculator - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div>
    </head>
    <body>
        <a href="mailto:Pokepikacan@gmail.com"><button type="button" class="btn btn-light">お問い合わせ</button></a>
            @yield('contents')
            <div class="right">
                ©Norihisa Oyama 2021.
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">
            const MAX_NUM = "14"; //桁数制限
            const MAX_RESULT = "99999999999999"; //最大値の制限
            const MIN_RESULT = "-99999999999999"; //最小値の制限
            const ERROR_MSG = "ERROR!!"; //エラーメッセージ
            var length = 0; //マイナスの桁数制限、
            var lastNumber = "0"; //最後に入力した数値
            var lastOperator = ""; //最後に入力した演算子
            var stockOperator = ""; //演算子一時保存
            var formula = ""; //計算式保存
            var incriment = "";
            var operatorFlug = false;

            function test(obj) {
                var outputArea = $(".number"); //現在表示されているデータを取得
                var inputText = outputArea.text().replace(/,/g, ''); //表示されている数値(カンマを取る)
                if(inputText != ERROR_MSG){
                    switch(obj.innerText){
                    case "AC":
                        lastNumber = "0";
                        lastOperator = "";
                        stockOperator = "";
                        formula = "";
                        incriment = "";
                        operatorFlug = false;
                        $('.number').text("0");
                        break;

                    case "±":
                        inputText = inputText * -1;
                        $('.number').text(numberOrganize(String(inputText)));
                        break;

                    case "%":
                        if(inputText.length <= MAX_NUM || operatorFlug === true){
                            if(operatorFlug === true){
                                operatorFlug = false;
                            }
                            if(String(inputText).indexOf('.') != -1){
                                var after = String(inputText).split(".")[1]; //小数部を取得
                                var parse = after.length + 2;
                                inputText = Number(inputText / 100);
                                inputText = inputText.toFixed(parse);
                            }else{
                                inputText = Number(inputText / 100);
                            }
                            $('.number').text(numberOrganize(String(inputText)));
                        }
                        break;

                    case "+":
                        operatorFlug = true;
                        if(incriment != ""){
                            incriment = incrimentClear(incriment);
                        }
                        //直前に入力したのが演算子でない場合(=空である場合)
                        if(stockOperator == ""){
                            formula += inputText;
                            lastNumber = inputText;

                        }else if(stockOperator == "="){
                            formula += inputText;
                            lastNumber = inputText;
                        }

                        lastOperator = "+";
                        stockOperator = "+";
                        break;

                    case "-":
                        operatorFlug = true;
                        if(incriment != ""){
                            incriment = incrimentClear(incriment);
                        }
                        //直前に入力したのが演算子でない場合(=空である場合)
                        if(stockOperator == ""){
                            formula += inputText;
                            lastNumber = inputText;

                        }else if(stockOperator == "="){
                            formula += inputText;
                            lastNumber = inputText;
                        }

                        lastOperator = " - ";
                        stockOperator = " - ";
                        break;

                    case "×":
                        operatorFlug = true;
                        if(incriment != ""){
                            incriment = incrimentClear(incriment);
                        }
                        //直前に入力したのが演算子でない場合(=空である場合)
                        if(stockOperator == ""){
                            formula += inputText;
                            lastNumber = inputText;

                        }else if(stockOperator == "="){
                            formula += inputText;
                            lastNumber = inputText;
                        }

                        lastOperator = "*";
                        stockOperator = "*";
                        break;

                    case "÷":
                        operatorFlug = true;
                        if(incriment != ""){
                            incriment = incrimentClear(incriment);
                        }
                        //直前に入力したのが演算子でない場合(=空である場合)
                        if(stockOperator == ""){
                            formula += inputText;
                            lastNumber = inputText;

                        }else if(stockOperator == "="){
                            formula += inputText;
                            lastNumber = inputText;
                        }

                        lastOperator = "/";
                        stockOperator = "/";
                        break;

                    case "=":
                        stockOperator = "=";
                        operatorFlug = false;
                        lastNumber = inputText;
                        formula += inputText;

                        //演算子がいくつあるか判定、2個以上で分岐
                        let count = searchOperatior(formula);

                        if(count < 2){
                            //演算子を押している場合、インクリメント等を発動
                            //押していない時は何もしない
                            if(lastOperator != ""){
                                if(incriment == ""){
                                    incriment = lastNumber;
                                }
                                //右辺が無い時は入力されている数値同士で計算
                                if(rightNumber(formula) == 0){
                                    formula = "";
                                    formula += lastNumber;
                                    formula += lastOperator;
                                    formula += incriment;
                                    inputText = eval(formula);
                                }else{
                                    //インクリメント発動中かつ、演算子を押していない場合 or 現在の値が0より小さいかつ、演算子入力が1つある
                                    if((incriment != "" && searchOperatior(formula) == 0) ||
                                    (inputText < 0 && incriment != "" && searchOperatior(formula) == 1)){
                                        formula = "";
                                        formula += lastNumber;
                                        formula += lastOperator;
                                        formula += incriment;
                                        inputText = eval(formula);
                                    }else{

                                        inputText = eval(formula);
                                    }
                                }
                                $('.number').text(numberOrganize(String(inputText)));

                                if(inputText > MAX_RESULT){
                                    $('.number').text(ERROR_MSG);
                                }
                                if(inputText < MIN_RESULT){
                                    $('.number').text(ERROR_MSG);
                                }
                                length = String(inputText).length;
                                if(inputText < 0){
                                    length--;
                                }
                                if(length > MAX_NUM){
                                    if(inputText > 0){
                                        inputText = inputText.toFixed(MAX_NUM);
                                    }else if(inputText > 0){
                                        inputText = inputText.toFixed(MAX_NUM + 1);
                                    }else if(innerText == 0){
                                        $('.number').text(ERROR_MSG);
                                    }
                                    inputText = Number(inputText);
                                    $('.number').text(numberOrganize(String(inputText)));
                                }
                            }
                        }else{
                            if(incriment == ""){
                                incriment = lastNumber;
                            }

                            inputText = eval(formula);
                            $('.number').text(numberOrganize(String(inputText)));

                            if(inputText > MAX_RESULT){
                                $('.number').text(ERROR_MSG);
                            }
                            if(inputText < MIN_RESULT){
                                $('.number').text(ERROR_MSG);
                            }
                            length = String(inputText).length;
                            if(inputText < 0){
                                length--;
                            }
                            if(length > MAX_NUM){
                                if(inputText < 1){
                                    inputText = inputText.toFixed(MAX_NUM);
                                }else if(inputText < 0){
                                    inputText = inputText.toFixed(MAX_NUM + 1);
                                }else if(innerText == 0){
                                    $('.number').text(ERROR_MSG);
                                }
                                inputText = Number(inputText);
                                $('.number').text(numberOrganize(String(inputText)));
                            }
                        }
                        formula = "";
                        break;

                    case "0":
                        length = inputText.length;
                        if(inputText < 0){
                            length--;
                        }

                        if(length < MAX_NUM || operatorFlug === true){
                            if(operatorFlug === true){
                                operatorFlug = false;
                            }
                            if(incriment != ""){
                                incriment = incrimentClear(incriment);
                            }

                            if(stockOperator != ""){ //演算子を入力している場合
                                if(String(inputText).indexOf('.') == -1){ //小数点がない場合
                                    formula += stockOperator;
                                    $('.number').text(0);
                                }
                            }

                            //表示しているのが0のみの場合
                            if(inputText == "0" && inputText.length == "1"){
                                inputText = obj.innerText;
                            }else{
                                if(stockOperator != ""){
                                    if(String(inputText).indexOf('.') == -1){ //小数点がない場合
                                        inputText = obj.innerText;
                                    }else{
                                        if(stockOperator != ""){
                                            inputText = obj.innerText;
                                            formula += stockOperator;
                                        }else{
                                            inputText += obj.innerText;
                                        }
                                    }
                                }else{
                                    inputText += obj.innerText;
                                }
                            }
                        }

                        $('.number').text(numberOrganize(String(inputText)));
                        break;

                    case ".":
                        if(String(inputText).indexOf('.') == -1){ //小数点がない場合
                            inputText += ".";
                            $('.number').text(numberOrganize(String(inputText)));
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
                        length = inputText.length;
                        if(inputText < 0){
                            length--;
                        }

                        if(length < MAX_NUM || operatorFlug === true){
                            if(operatorFlug === true){
                                operatorFlug = false;
                            }

                            if(incriment != ""){
                                incriment = incrimentClear(incriment);
                            }

                            if(stockOperator != ""){ //演算子を入力している場合
                                if(String(inputText).indexOf('.') == -1){ //小数点がない場合
                                    formula += stockOperator;
                                    $('.number').text(0);
                                }
                            }
                            //表示しているのが0のみの場合
                            if(inputText == "0" && inputText.length == "1"){
                                inputText = obj.innerText;
                            }else{
                                if(stockOperator != ""){ //演算子を入力している場合
                                    if(String(inputText).indexOf('.') == -1){ //小数点がない場合
                                        inputText = obj.innerText;
                                    }else{
                                        inputText += obj.innerText;
                                        formula += stockOperator;
                                    }
                                }else{
                                    inputText += obj.innerText;
                                }
                            }
                            stockOperator = ""; //演算子入力判定を削除する
                        }

                        $('.number').text(numberOrganize(String(inputText)));
                        break;
                    }
                }else{
                    switch(obj.innerText){
                    case "AC":
                        lastNumber = "0";
                        lastOperator = "";
                        stockOperator = "";
                        formula = "";
                        incriment = "";
                        operatorFlug = false;
                        $('.number').text("0");
                        break;
                    default:
                        break;
                    }
                }
            }

            //数値のフォーマットを整える関数
            function numberOrganize(inputText){
                //小数点がある場合、整数部と小数部に分解してから再度結合。
                if(inputText.indexOf('.') != -1){
                    let before = String(inputText).split(".")[0]; //整数部を取得
                    let after = String(inputText).split(".")[1]; //小数部を取得

                    before = String(before).replace(/(\d)(?=(\d\d\d)+$)/g, "$1,"); //整数部にカンマをつける
                    inputText = before + "." + after; //小数部と結合

                }else{
                    inputText = String(inputText).replace(/(\d)(?=(\d\d\d)+$)/g, "$1,"); //カンマをつける
                }

                return inputText; //完成した数値を返す
            };

            //演算子がいくつ含まれているか判定
            function searchOperatior(formula){
                let count = 0;
                let search = "+";
                for (var i = 0; i < formula.length; i++){
                    if (formula[i] == search){
                        count ++;
                    }
                }
                search = "-";
                for (var i = 0; i < formula.length; i++){
                    if (formula[i] == search){
                        count ++;
                    }
                }
                search = "*";
                for (var i = 0; i < formula.length; i++){
                    if (formula[i] == search){
                        count ++;
                    }
                }
                search = "/";
                for (var i = 0; i < formula.length; i++){
                    if (formula[i] == search){
                        count ++;
                    }
                }

                return count;
            }

            //インクリメントを空に
            function incrimentClear(incriment){
                incriment = "";

                return incriment;
            }

            //右辺の桁数を判定(演算子が1つの時しか呼び出されない)
            function rightNumber(formula){
                let count = 0;
                count += formula.substr(formula.indexOf('+') + 1);
                count += formula.substr(formula.indexOf('-') + 1);
                count += formula.substr(formula.indexOf('*') + 1);
                count += formula.substr(formula.indexOf('/') + 1);

                return count;
            }

        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
