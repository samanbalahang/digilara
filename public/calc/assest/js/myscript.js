$(function () {
    $(".number").click(function () {
       // alert($("#result").val());
       var result = $("#result").val();
       var thisNumber = $(this).text();
        // alert($(this).text());
       if(result == 0){
           $("#result").val(thisNumber);
       }else {
           result = result + thisNumber;
           $("#result").val(result);
       }
    });
    // $(".number").on("click",function () {
    //
    // });
    $(".plus").click(function () {
        var result = $("#result").val();
        var thisNumber = "+"
        // alert(result);
        result = result + thisNumber;
        $("#result").val(result);
    });
    $(".minus").click(function () {
        var result = $("#result").val();
        var thisNumber = "-"
        // alert(result);
        result = result + thisNumber;
        $("#result").val(result);
    });
    $(".times").click(function () {
        var result = $("#result").val();
        var thisNumber = "*";
        // alert(result);
        result = result + thisNumber;
        $("#result").val(result);
    });
    $(".divide").click(function () {
        var result = $("#result").val();
        var thisNumber = "/"
        // alert(result);
        result = result + thisNumber;
        $("#result").val(result);
    });
    $(".percentage").click(function () {
        var result = $("#result").val();
        var thisNumber = "%"
        if(result != 0){
            result = result + thisNumber;
            $("#result").val(result);
        }else{
            $("#result").val("0");
        }
    });




    $(".result").click(function () {


        var result = $("#result").val();
        result = result.toString();
        var resultLength = result.length;
        percentagePos = result.indexOf("%");
        // alert(percentagePos);
        if(percentagePos == -1)
        {
            $("#result").val(eval(result));
        }else{

            //علامت درصد وجود دارد
            var isplus = result.indexOf("+");
            var isminus = result.indexOf("-");
            var isMultyply = result.indexOf("*");
            var isDivide = result.indexOf("/");
            // alert("ELSE");
            // alert(result.length);
            // alert(percentagePos);
            if(isplus != -1 || isminus != -1 || isMultyply != -1 || isDivide != -1){
                // alert("hi");
                // alert(isplus == -1)
                // alert(isminus == -1)
                // alert(isMultyply == -1)
                // alert(isDivide == -1)
                    if(isplus != -1){

                    }
                    if(isminus != -1){

                    }
                    if(isMultyply != -1){

                    }
                    if(isDivide != -1){

                    }
                }else{
                    if(result.length == (percentagePos+1)){
                        alert("عدد دوم را درج کنید.");
                    }
                    var a  = resultLength -1;
                    var lastNumber =result.substring(percentagePos+1);
                    var firstNumber  = eval(result.substring(0,percentagePos));
                    // alert(lastNumber);
                    // alert(firstNumber);
                   final =  lastNumber * firstNumber / 100 ;
                    $("#result").val(final);



            }


        }

    });
});
