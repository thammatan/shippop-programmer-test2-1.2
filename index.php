<pre>
<?php 
    $n = 5;
    $m = ($n%2==0)?$n*2:$n*2-1;
       for($i = 0 ; $i< $n ; $i++){
        for($j = 0 ; $j< $m ; $j++){
            if($j <= floor($m/2) + $i && $j >= floor($m/2) - $i ){
                echo "O";
            }else{
                echo " ";
            }
        }
        echo "<br/>";
    }
?>
</pre>
