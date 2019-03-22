<!DOCTYPE html>
<html>
<head>
    <title>How to print report without open new tab in browser</title>
</head>
<body>

<h1>How to print report without open new tab in browser</h1>
<h2>seegatesite.com</h2>
<button id="btn1">Invoice 1</button>
<button id="btn2">Invoice 2</button>
<h1>PRINT DIRECTLY REPORT PAGE FROM BROWSER</h1>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<script>

    $("#btn1").click(function(){
        $("#printabel").remove();
        loadOtherPage1();
    });
    $("#btn2").click(function(){
        $("#printabel").remove();

        loadOtherPage2();
    });

    function loadOtherPage1() {
        $("<iframe id='printabel'>")
            .hide()
            .attr("src", "invoice.php")
            .appendTo("body");
    }
    function loadOtherPage2() {
        $("<iframe id='printabel'>")
            .hide()
            .attr("src", "invoice2.php")
            .appendTo("body");
    }

</script>
</body>

</html>