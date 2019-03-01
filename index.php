<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
   
    <title>Random</title>
</head>
<body>
            
    <div class="calculator">
        <div class="result">
           <input type="text" id="result" name="result" class="result" />
            <script>
                
                
                
                
                function daivalue (id) {
                    var value = document.getElementById(id).value;
                    document.getElementById('result').value = value;
                    
                    
                }
            </script>
        </div>
        <form action="index.php" method="post">
           <input type="hidden" name="action" value="submit" />
            <div class="block_buttons fifth_block">
                <input class="calcButton" id="clear" type="button" name="button" value="C">
                <input class="calcButton" id="back-submit" type="button" name="button" value="Back">
                <input class="calcButton" id="/" onclick="javascript:daivalue('/');" type="button" name="button" value="/">
            </div>
            <div class="block_buttons fourth_block">
                <input class="calcButton" id="7" type="button" name="button" value="7">
                <input id="8" class="calcButton" type="button" name="button" value="8">
                <input id="9" class="calcButton" type="button" name="button" value="9">
                <input id="*" class="calcButton" type="button" name="button" value="*">
            </div>
            <div class="block_buttons third_block">
                <input id="4" class="calcButton" type="button" name="button" value="4">
                <input id="5" class="calcButton" type="button" name="button" value="5">
                <input id="6" class="calcButton" type="button" name="button" value="6">
                <input id="-" class="calcButton" type="button" name="button" value="-">
            </div>
            <div class="block_buttons second_block">
                <input id="1" class="calcButton" type="button" name="button" value="1">
                <input id="2" class="calcButton" type="button" name="button" value="2">
                <input id="3" class="calcButton" type="button" name="button" value="3">
                <input id="+" class="calcButton" type="button" name="button" value="+">
            </div>
            <div class="block_buttons first_block">
                <input class="calcButton" id="0" onclick="javascript:daivalue('0');" type="button" name="button" value="0">
                <input id="float-submit" type="button" name="button" value=".">
                <input id="equally-submit" type="submit" name="submit" value="=">
            </div>
        </form>
    </div>

 
</body>
</html>