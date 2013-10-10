<?php
/*
 * C0de name: Cyb3rl0ck
 * Author: Stephen Mark Geronimo
 * Description: Custom word list for cracking WPA/WPA2
 * */
    $input = array('a','b','c','d','e','f','g','h','i','j','k','l','m',
                    'n','o','p','q','r','s','t','u','v','w','x','y','z',
                    'A','B','C','D','E','F','G','H','I','J','K','L'
                    ,'M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                     '!','@','#','$','%','^','&','*','('.')','-'.'+',
                   0,1,2,3,4,5,6,7,8,9);
    $store = array();
    $holdval = NULL;
    $length = 20;
    $output = NULL;
    foreach($input as $key => $value){
        $var = $input[$key];
        for($i=1; $i<=1;$i++){
            for($j=1;$j<=7;$j++){
                $store[$j] = $value;
            }
        }
        $ctrl = 0;
       for($x=1;$x<=$length;$x++){
            foreach($store as $key => $value){
                $output .= $value;
                $getVal = $value;
            }
           $output .= $holdval;
           $ctrl = $ctrl + 1;
           if($x == $length + 1){
               $ctrl = 1;
           }
           for($h=1;$h<=$ctrl;$h++){
               $output .= $getVal;
           }
           $output .= "\n";
       }
    }
file_put_contents('result.txt', $output);
