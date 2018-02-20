<?php

$count = 0;
$sum = 0;

function cal($i,$j)
{
      if($j != 1)
      {
        if($i != 1)
        {
            $count++;
            cal($i/2,$j);
        }
        else{
          $sum++;
           cal(1024,$j-1);
        }
      }
}

cal(1024,1024);
echo $count."\n";
echo $sum."\n";
