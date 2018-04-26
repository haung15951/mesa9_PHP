<?php

  $year ='';
  $year = rand(0,10000);
  echo $year.'<br>';
  if (gettype($year/400)===integer){
      echo 'leap year';
  }else if(gettype($year/100)===integer){
      echo'no more year';
  }else if ( gettype($year/4)===integer){
      echo 'leap year';
  }
  ?>