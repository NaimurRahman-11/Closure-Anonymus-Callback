<?php
    #Normal Function
function showMessage(){
    echo "Normal Function <br>";
}
showMessage();

#Anonymous Function 
#Store in a variable

$fn = function(){
    echo "Anonymous Function <br>";
};
$fn();
    
#Anonymous Function with parameter 
$fn = function($p){
    echo "Anonymous Function $p <br>";
};
$fn(10);

#Anonymous Function with parameter for global variable 
$vr = 100;
$fn = function($p){
    echo "Anonymous Function $p <br>";
};
$fn($vr);

#Anonymous Function with parameter for global variable

?>






<?php
#Closure Function 

$vs = 110;
$fn = function() use ($vs){
    echo "Anonymous Function $vs <br>";
};
$fn();
?>



<?php
#Passing Anonymous Function as an argument 
#CallBack Function 


#CallBack Function  
function sum($a, $b) {
    echo $a + $b();
}



sum(2,function() {
    return 6;
});
?>

