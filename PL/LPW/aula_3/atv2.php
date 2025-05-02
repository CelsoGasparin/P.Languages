<?php   




function arit(...$nums){
    $all = 0;
    $i = 0;
    foreach($nums as $num){
        $all += $num;
        $i++;
    }
    
    return $all/$i;
}


                    

print 'A média aritmética dos três números é ';
print arit($_GET['num1'],$_GET['num2'],$_GET['num3']);
print'//ISSO é com GET';
print 'A média aritmética dos três números é ';
print arit($_POST['num1'],$_POST['num2'],$_POST['num3']);
print'//ISSO é com POST';