<?php
for($i=2;$i<=100;$i++){
      echo "{$i}<br>";
      for ($k=1;$k<=100;$k++){
         if ($i%$k==0){
          echo "prime"."number";
      } else
          {echo "non"."prime"."number";}
};}


