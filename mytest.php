<?php
  if( $_POST["name"] || $_POST["age"] )
  {
     echo "Thank you! ". $_POST['name']. "<br />";
     echo "Final result: ". $_POST['jsonResult']. "<br /><br />";

     $directory = "./userResults/".$_POST['name'].".txt";
     $file = fopen($directory,"w");
     fwrite($file, "THANK YOU,\nThe result is below\n\n". $_POST['jsonResult']);
     fclose($file);

     exit();
  }
?>