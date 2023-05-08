<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/all.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/mdb.rtl.min.css">
    <link rel="stylesheet" href="{{url("/")}}/calc/assest/css/style.css">
    <title>Calculator</title>
</head>
<body class="d-flex flex-row-reverse">
<div class="container-fluid d-flex flex-row-reverse">
    <aside class="p-3">
            <span class="pb-2">
                History
            </span>
    </aside>
    <main>
        <form action="#">
            <div class="my-4 py-3">
                <input type="text" id="solution" class="w-100" readonly>
                <input type="text" id="result" class="w-100" readonly value="0">
            </div>
            <div class="d-flex">
                <div class="text-center py-4 operand percentage">%</div>
                <div class="text-center py-4 operand CE">CE</div>
                <button type="reset" class="text-center py-4 operand reset">C</button>
                <div class="text-center py-4 operand backspace"  ><i class="fas fa-backspace"></i></div>
            </div>
            <div class="d-flex">
                <div class="text-center py-4 operand">1/x</div>
                <div class="text-center py-4 operand"><i class="fas fa-superscript"></i></div>
                <div class="text-center py-4 operand"><i class="fas fa-square-root-alt"></i></div>
                <div class="text-center py-4 operand divide"><i class="fas fa-divide"></i></div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="seven()">7</div>--}}
{{--                <div class="text-center py-4 number" onclick="eight()">8</div>--}}
{{--                <div class="text-center py-4 number" onclick="nine()">9</div>--}}
{{--                <div class="text-center py-4 operand" onclick="multiply()"><i class="fas fa-times"></i></div>     --}}
                <div class="text-center py-4 number">7</div>
                <div class="text-center py-4 number">8</div>
                <div class="text-center py-4 number">9</div>
                <div class="text-center py-4 operand times"><i class="fas fa-times"></i></div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="four()">4</div>--}}
{{--                <div class="text-center py-4 number" onclick="five()">5</div>--}}
{{--                <div class="text-center py-4 number" onclick="six()">6</div>--}}
{{--                <div class="text-center py-4 operand" onclick="subtraction()"><i class="fas fa-minus"></i></div> --}}
                <div class="text-center py-4 number"  >4</div>
                <div class="text-center py-4 number"  >5</div>
                <div class="text-center py-4 number"  >6</div>
                <div class="text-center py-4 operand minus" ><i class="fas fa-minus"></i></div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="one()">1</div>--}}
{{--                <div class="text-center py-4 number" onclick="two()">2</div>--}}
{{--                <div class="text-center py-4 number" onclick="three()">3</div>--}}
{{--                <div class="text-center py-4 operand" onclick="sum()"><i class="fas fa-plus"></i></div>   --}}
                <div class="text-center py-4 number">1</div>
                <div class="text-center py-4 number">2</div>
                <div class="text-center py-4 number">3</div>
                <div class="text-center py-4 operand plus"><i class="fas fa-plus"></i></div>
            </div>
            <div class="d-flex">
{{--                <div class="text-center py-4 number" onclick="negative()">+/-</div>--}}
{{--                <div class="text-center py-4 number" onclick="zero()">0</div>--}}
{{--                <div class="text-center py-4 number" onclick="decimal()">.</div>--}}
{{--                <button type="submit" class="text-center py-4 result" onclick="calc()"><i class="fas fa-equals"></i></button>--}}
                <div class="text-center py-4 number">+/-</div>
                <div class="text-center py-4 number">0</div>
                <div class="text-center py-4 number">.</div>
                <button type="submit" class="text-center py-4 result"><i class="fas fa-equals"></i></button>
            </div>
        </form>
    </main>
</div>

<script src="{{url("/")}}/calc/assest/js/jquery-3.6.0.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/all.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/bootstrap.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/swiper-bundle.min.js"></script>
<script src="{{url("/")}}/calc/assest/js/mdb.min.js"></script>
{{--<script src="{{url("/")}}/calc/assest/js/script.js"></script>--}}
<script src="{{url("/")}}/calc/assest/js/myscript.js"></script>

</body>
</html>
