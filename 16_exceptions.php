<?php

function inverse($x){
    try{
        if(!$x){
            throw new Exception('Division by zero');
        }
    
        return 1/$x;
    
    } catch(Exception $e){
        echo 'Caught Exception: ', $e->getMessage(), '';

    } finally {
        echo 'First Finally';
    }
    
    
}

echo  inverse(0);
echo 'Hello';
echo  inverse(12);

?>