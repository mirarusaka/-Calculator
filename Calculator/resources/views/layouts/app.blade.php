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
                    switch(obj.innerText){
                        case "AC":

                        break;

                        case "C":

                        break;

                        case "%":

                        break;

                        case "÷":

                        break;

                        case "1":

                        break;

                        case "2":

                        break;

                        case "3":

                        break;

                        case "×":

                        break;

                        case "4":

                        break;

                        case "5":

                        break;

                        case "6":

                        break;

                        case "-":

                        break;

                        case "7":

                        break;

                        case "8":

                        break;

                        case "9":

                        break;

                        case "+":

                        break;

                        case "0":

                        break;

                        case ".":

                        break;

                        case "=":

                        break;
                    }

            }
        </script>
        {{-- <script src="{{ asset('js/math.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
