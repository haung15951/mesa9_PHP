<?php
   $z=$x=$y=$OP='';
 if(isset($_GET['x'])&&isset($_GET['y'])) {
     $x = $_GET['x'];
     $y = $_GET['y'];
     $OP= $_GET['OP'];
     if ($OP=='1')
     {$z = $x + $y;
     }
     else if ($OP=='2'){
         $z = $x - $y;
     }
     else if ($OP=='3'){
         $z = $x * $y;
     }
     else if ($OP=='4'){
         $s = $x / $y=(ini)$z;
          $x % $y =$f ;
         echo  '$s'......'$f'
     }
 }
?>
<form>
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select name="OP">
        <OPTION value="1"<?php if ($OP==1) {echo 'selected';} ?>>+</OPTION>
        <OPTION value="2"<?php if ($OP==2) {echo 'selected';} ?>>-</OPTION>
        <OPTION value="3"<?php if ($OP==3) {echo 'selected';} ?>>X</OPTION>
        <OPTION value="4"<?php if ($OP==4) {echo 'selected';} ?>>/</OPTION>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
    echo $z;
    ?>
</form>


