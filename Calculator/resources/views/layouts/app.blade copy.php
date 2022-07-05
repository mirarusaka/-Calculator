<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Oyama Calculator - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8036692312713514"
     crossorigin="anonymous"></script>
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
            const MAX_NUM = "17";
            let inputNum = ""; //左辺の値保存用 グローバル
            let math = ""; //演算子保存用 グローバル
            let equal = ""; //インクリメント用
            let flug = 0; //数値ボタン押したかフラグ
            let lastNum = ""; //最後に入力された数値
            function test(obj) {
                let outputArea = $(".number"); //現在表示されている値を取得
                let inputText = outputArea.text(); //左辺に保存

                if(!flug){ //演算子を押した場合、初期化
                    if(equal != "="){ //直前が = の場合、初期化せず進める
                        inputText = "";
                    }
                }

                switch(obj.innerText){
                case "AC":
                    equal = ""; //インクリメント用にフラグ消去
                    outputArea.text(0);
                    inputNum = "";
                    math = "";
                    inputText = 0;
                    flug = 0;

                    break;

                case "±":
                    outputArea.text(outputArea.text() * -1);
                    break;

                //TODO 計算結果の桁数制限を実装
                case "%":
                    equal = ""; //インクリメント用にフラグ消去
                    if(outputArea.text().length < MAX_NUM){ //表示する桁数が16以下の場合は表示

                        //小数点がある場合、現在第何位まであるかを取得し、さらに2位増やす
                        if(outputArea.text().indexOf('.') != -1){
                        let lastNum = outputArea.text().substr(outputArea.text().indexOf('.') + 1);
                        let parse = lastNum.length + 2;
                        inputText = Number(inputText / 100);
                        inputText = inputText.toFixed(parse);

                        }else{
                            inputText = outputArea.text() / 100;
                        }
                    }
                        outputArea.text(inputText);
                    break;

                case "+":
                    equal = ""; //インクリメント用にフラグ消去
                    switch(math){ //直前に入力した演算子で計算して、最終入力した演算子を更新
                        case "+":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) + Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "-":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) - Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "×":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) * Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "÷":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) / Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        default:
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                        break;
                    }
                    math = $(obj).text(); //演算子を保存
                    outputArea.text(inputNum); //現時点での計算結果を表示
                    flug = 0; //一旦式を終了
                    break;

                case "-":
                    equal = ""; //インクリメント用にフラグ消去
                    switch(math){ //直前に入力した演算子で計算して、最終入力した演算子を更新
                        case "+":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) + Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "-":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) - Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "×":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) * Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "÷":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) / Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        default:
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                        break;
                    }
                    math = $(obj).text(); //演算子を保存
                    outputArea.text(inputNum); //現時点での計算結果を表示
                    flug = 0; //一旦式を終了
                    break;

                case "×":
                    equal = ""; //インクリメント用にフラグ消去
                    switch(math){ //直前に入力した演算子で計算して、最終入力した演算子を更新
                        case "+":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) + Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "-":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) - Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "×":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) * Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "÷":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) / Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        default:
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                        break;
                    }
                    math = $(obj).text(); //演算子を保存
                    outputArea.text(inputNum); //現時点での計算結果を表示
                    flug = 0; //一旦式を終了
                    break;

                case "÷":
                    equal = ""; //インクリメント用にフラグ消去
                    switch(math){ //直前に入力した演算子で計算して、最終入力した演算子を更新
                        case "+":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) + Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "-":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) - Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "×":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(flug != 0){
                                    inputNum = Number(inputNum) * Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        case "÷":
                            if(inputNum != ""){ //左辺が入っている場合
                                if(!flug){
                                    inputNum = Number(inputNum) / Number(inputText);
                                    outputArea.text(inputNum);
                                }
                            }else{
                                inputNum = outputArea.text(); //左辺の値を変数に保存
                            }
                        break;

                        default:
                            inputNum = outputArea.text(); //左辺の値を変数に保存
                        break;
                    }
                    math = $(obj).text(); //演算子を保存
                    outputArea.text(inputNum); //現時点での計算結果を表示
                    flug = 0; //一旦式を終了
                    break;

                case "=":
                    let result = 0;
                    switch(math){
                        case "+":
                            if(equal == "="){ //直前に = を入力している場合
                                result = Number(outputArea.text()) + Number(lastNum);

                            }else if(!flug){ //数値入力→ =
                                result = Number(inputNum) + Number(inputNum);
                                lastNum = inputNum;

                            }else if(inputNum != 0){ //数値入力→演算子入力→ =
                                result = Number(inputNum) + Number(inputText);

                            }else{ //数値入力→演算子→数値入力→ =
                                result = Number(inputText) + Number(lastNum);
                            }
                            break;
                        case "-":
                            if(equal == "="){ //直前に = を入力している場合
                                result = Number(outputArea.text()) - Number(lastNum);

                            }else if(!flug){ //数値入力→ =
                                result = Number(inputNum) - Number(inputNum);
                                lastNum = inputNum;

                            }else if(inputNum != 0){ //数値入力→演算子入力→ =
                                result = Number(inputNum) - Number(inputText);

                            }else{ //数値入力→演算子→数値入力→ =
                                result = Number(inputText) - Number(lastNum);
                            }
                            break;

                        case "×":
                            if(equal == "="){ //直前に = を入力している場合
                                result = Number(outputArea.text()) * Number(lastNum);

                            }else if(!flug){ //数値入力→ =
                                result = Number(inputNum) * Number(inputNum);
                                lastNum = inputNum;

                            }else if(inputNum != 0){ //数値入力→演算子入力→ =
                                result = Number(inputNum) * Number(inputText);

                            }else{ //数値入力→演算子→数値入力→ =
                                result = Number(inputText) * Number(lastNum);
                            }
                            break;

                        case "÷":
                            if(equal == "="){ //直前に = を入力している場合
                                result = Number(outputArea.text()) / Number(lastNum);

                            }else if(!flug){ //数値入力→ =
                                result = Number(inputNum) / Number(inputNum);
                                lastNum = inputNum;

                            }else if(inputNum != 0){ //数値入力→演算子入力→ =
                                result = Number(inputNum) / Number(inputText);

                            }else{ //数値入力→演算子→数値入力→ =
                                result = Number(inputText) / Number(lastNum);
                            }
                            break;
                    }
                    inputNum = "";
                    equal = "=";
                    flug = 0; //数字を押したフラグ消去
                    result = Number(result);
                    outputArea.text(result);
                    break;

                case "0":
                    equal = ""; //インクリメント用にフラグ消去
                    let nko = String(outputArea).indexOf('.'); //小数点が含まれているか確認
                    if(outputArea.text() != "0"){
                        let num = ""; //入力された値を保存する用

                        if(outputArea.text().length < MAX_NUM){ //制限された桁数に達すると動かなくなる
                            if(outputArea.text() != "0" || obj.innerText != "0"){
                                if(math == "" && flug == 0){ //未入力の場合
                                    flug = 1;
                                    num = "";
                                }else if(math != "" && flug == 0){
                                    flug = 1;
                                    num = "";
                                }else{
                                    num = outputArea.text(); //表示文字を変数に代入
                                }
                            }
                            lastNum = num; //最終入力値を保存
                            num += Number($(obj).text()); //入力された値を連結
                            num = Number(num);
                            outputArea.text(num); //現在表示されている値を上書き
                        }
                    }else if(nko != -1){ //小数点がある場合
                        if(outputArea.text().length < MAX_NUM){ //制限された桁数に達すると動かなくなる
                            if(outputArea.text() != "0" || obj.innerText != "0"){
                                if(math == "" && flug == 0){ //未入力の場合
                                    flug = 1;
                                    num = ""; //表示文字を取得しない
                                }else if(math != "" && flug == 0){ //数値入力済+演算子入力済
                                    flug = 1;
                                    num = ""; //表示文字を取得しない
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
                    equal = ""; //インクリメント用にフラグ消去
                    let dot = outputArea.text();
                    if(dot.indexOf('.') == -1){ //.があるか判定
                        dot += ".";
                        outputArea.text(dot);
                        flug = 1;
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
                    let num = 0; //入力された値を保存する用
                    equal = ""; //インクリメント用にフラグ消去
                    if(outputArea.text().length < "17"){ //制限された桁数に達すると動かなくなる
                        lastNum = $(obj).text(); //履歴として保存
                        if(outputArea.text() != "0" || obj.innerText != "0"){
                            if(math == "" && flug == 0){ //数字も演算子も未入力
                                flug = 1;
                                num = "";
                            }else if(math != "" && flug == 0){ //演算子入力済
                                flug = 1;
                                num = "";
                            }else{
                                num = outputArea.text(); //取得した文字を変数に代入
                            }
                        }
                        if(outputArea.text().indexOf('.') != -1){
                        let lastNum = outputArea.text().substr(outputArea.text().indexOf('.') + 1);
                        let parse = lastNum.length + 2;
                        inputText = Number(inputText / 100);
                        inputText = inputText.toFixed(parse);

                        }else{

                        }
                        num += $(obj).text(); //入力された値を連結
                        num = num.replace(/,/g, '');
                        num = parseFloat(num);
                        console.log(typeof num);
                        lastNum = num; //最終入力値を保存
                        console.log(lastNum);
                        num = num.toLocaleString();
                        outputArea.text(num); //現在表示されている値を上書き
                        break;
                    }
                }
            }
        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
