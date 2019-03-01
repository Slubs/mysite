var stack = [];
function digitButtonClick(){
    var buttons = $('.digitcalcButton');    
    buttons.click(function(){
        var buttonValue = $(this).attr('value');
        var currentValue = $('#result').val();
        
        $('#result').val(currentValue  + buttonValue);   
        
        
})}

function backButtonClick(){
    var button = $('#backspace');    
    button.click(function(){
        var currentValue = $('#result').val();
        
        $('#result').val(currentValue.substring(0, currentValue.length-1));           
        
})}


digitButtonClick()
backButtonClick()