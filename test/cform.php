<?php
/*
 $name = 'test' ;
 $fname = 'firstname'
$input = $name.'<input type="text" name="'.$fname.'"><br>' ;

echo  $input ;

$_POST['    '];
*/


?>

<!--test <input type="text" name="firstname"><br>-->


<?php

//$values = explode(' ', $_POST['posted']);
//$count = count($values).'<br>';
//echo $count

//$c = count(!empty($_POST)) ;
//echo $c.'<br>' ;

//if( isset($_POST) && ($_POST != null) )
{
    
   // echo count($_POST);
}


//array_filter($array, function($x) { return !empty($x); });


echo count(array_filter($_POST));

 $ucount = @count(array_filter($_POST));
 
 for($i = 0 ; $i < $ucount; $i++)
{
  $user = $users[$i];
echo $user ;
}


$myboxes = $_POST['myCheckbox'];

  if(empty($myboxes))
  {
    echo("You didn't select any boxes.");
  }
  else
  {
       // $i = count($myboxes);
        $i = count($myboxes);
        echo("You selected $i box(es): ");
        for($j=0; $j < $i; $j++)
        {
        //  echo($myboxes[$i] . " ");
          $user = $users[$i];
         // print_r(array_unique($a));
          $test = array_unique($myboxes);
         $test1 = $user->myCheckbox ;
          foreach ($test as $param_namea => $param_val) {
           // echo "Param: $param_namea; Value: $param_val<br />\n";
           if ($param_val == 'name'){
               $val = 'nm';
           }else{
               $val = $param_val ;
           }
           
           // echo '<td>$user->'.$val.'</td>';
            
            $un = '<td>$user->'.$val.'</td>' ;
            $un = $val ;
            
          // $un1 = array_flip(array_flip($un)) ;
            
            
            echo $un ;
           
            
           } 
       
         
        }
        
         
     
    
  }

?>


    <!--
   <form method="post"> 
    
    
    
    <input type="text" name="firstname"><br>
<input type="text" name="firstnam1"><br>
<input type="text" name="firstname2"><br>
    
    <input type="checkbox" name="myCheckbox[]" value="Bike"> I have a bike<br>
  <input type="checkbox" name="myCheckbox[]" value="Car" > I have a car<br>
  <input type="checkbox" name="myCheckbox[]" value="Bike2"> I have a bike<br>
  <input type="checkbox" name="myCheckbox[]" value="Car2" > I have a car<br> 
  
     <input type="submit" value="Submit"/>
</form>
  
  -->  
  
   <form action="" method="post">
<input type="checkbox" name="myCheckbox[]" value="name" />val1<br />
<input type="checkbox" name="myCheckbox[]" value="B" />val2<br />
<input type="checkbox" name="myCheckbox[]" value="C" />val3<br />
<input type="checkbox" name="myCheckbox[]" value="D" />val4<br />
<input type="checkbox" name="myCheckbox[]" value="E" />val5
<input type="submit" name="Submit" value="Submit" />
</form>
  

  

