
<?php
if(isset($_POST["Liczba1"])){
  $num1 = (int)$_POST["Liczba1"];
  $num2 = (int)$_POST["Liczba2"];
  $num3 = (int)$_POST["Liczba3"];
  if($num1 && $num2 && $num3 != 0){
    if($num1 > $num2){
      if($num1 > $num3){
        echo "Najwieksza cyfra to: $num1";
      }
      else {
        echo "Najwieksza cyfra to: $num3";
      }
    }
    else {
      if ($num2 > $num3) {
        echo "Najwieksza cyfra to: $num2";
      }
      else {
        echo "Najwieksza cyfra to: $num3";
      }
    }
  }
?>
