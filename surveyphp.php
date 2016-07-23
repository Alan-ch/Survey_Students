<?php
  if(isset($_POST['submit'])){

      $file = "survey.json";


     $post=$_POST;




    unset($post['submit']);

      // here we use the "json_encode"  function and
      //the "JSON_PRETTY_PRINT" is an attribute added in php5.4 without this attribute the code will be one string

      $json_string = json_encode($post, JSON_PRETTY_PRINT);


      // now we are ready to write out our data Because we are just adding record after record
      // we can use PHP's file put content function with its file append argument.
      file_put_contents($file,$json_string,FILE_APPEND);

      header('Location:thanks.html');// redirect to other page


}


 ?>
