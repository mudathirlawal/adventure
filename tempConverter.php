<?php
function celsiusToKelvin($equivValue) {
    return ($equivValue + 273);
}

function kelvinToCelsius($equivValue) {
    return ($equivValue - 273);
}

function celsiusToFarenheit($equivValue) {
    return [(9/5 * $equivValue) + 32];
}

function farenheitToCelsius($equivValue) {
    return [5/9 * ($equivValue - 32)];
}

function farenheitToKelvin($equivValue){
    return [9/5 * ($equivValue - 32) + 273];
}

function kelvinToFarenheit($equivValue) {
    return [9/5 * ($equivValue - 273) + 32]; 
}		
  

function temperatureConverter($conversionType, $equivValue) { 
    
    switch($conversionType) 
    {
        case "Celsius to Kelvin":
            return celsiusToKelvin($equivValue);
            break;
        case "Kelvin to Celsius":
            return kelvinToCelsius($equivValue);
            break;
        case "Celsius to Farenheit":
            return celsiusToFarenheit($equivValue);
            break;
        case "Farenheit to Celsius":
            return farenheitToCelsius($equivValue);
            break;
        case "Farenheit to Kelvin":
            return farenheitToKelvin($equivValue);
            break;
        case "Kelvin to Karenheit":
            return kelvinToFarenheit($equivValue);
            break;
        default:
        echo "This tool is not deviced for your type of conversion!";
    }
    
    return;

}    

// Function call...
$temperature = temperatureConverter("Farenheit to Celsius", 550);
print_r($temperature);




                      
            
                
    