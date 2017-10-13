<?php

function checkPalindrome($inputString) {
  $isPalindrome = true;
 $len=sizeof($inputString);
 if($len==1){
  //$isPalindrome=true;
  return $isPalindrome;
 }
 if($len>=10^5 || $len<1){
  $isPalindrome = false;
return $isPalindrome;

 }
  for($i=0;$i<$len/2;$i++){
    if($inputString[$i] !=$inputString[$len-$i-1]){
    $isPalindrome = false;
     return $isPalindrome;
  }
}
return $isPalindrome;
}

?>
