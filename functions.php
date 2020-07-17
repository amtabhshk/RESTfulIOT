<?php
function get_price($param) {
   $books = array("java"=>100,"C"=>200,"php"=>300) ;
   
   foreach ($books as $books=>$price)
   {
       if($books == $param)
       {
           return $price;
           break;
       }
   }
}
?>