<?php
function redirect_to($location){
  if($location != NULL){
    header('Location:' .$location);
    exit();
  }
}
function greeting(){
  date_default_timezone_set('America/Toronto');
  $now = date('G');
  // echo $now;
  if($now < 12){
    echo "<h3>Good Mourning</h3>";
  } elseif($now >= 12 && $now < 17){
    echo "<h3>Good Afternoon</h3>";
  } elseif($now >= 17 && $now < 22){
    echo "<h3>Good Evening</h3>";
  } else {
    echo "<h3>Good Night</h3>";
  }
}