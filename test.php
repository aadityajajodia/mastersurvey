<?php
  include('surveyForm.php');

 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width intial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <title>Survey</title>
     <style media="screen">
       body
       {
         
         text-align: center;
         transition: background-color 1s ease-in; 
        
         
       }

     </style>
     
   </head>
<body>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
       

 
  <div class="container" id="myContainer">
    <?php
    	$query="SELECT q.quesid,q.questext from surveyques s, question q where s.quesid=q.quesid and s.type='ePayment'";
      $result=mysqli_query($link,$query);
      echo '<div class="row">
      	<div class="col-md-12">
      		<form>';
      while ($row=mysqli_fetch_row($result))
    	{
    		$query2="SELECT a.ansid,a.text from answers a, offeredans o where a.ansid=o.ansid and o.quesid='".$row[0]."'";
    		$result2=mysqli_query($link,$query2);
    		echo'<br><h4>'.$row[1].'</h4>';
      		while ($row2=mysqli_fetch_row($result2))
			{
			echo '<input type="radio"  name="'.$row[0].'" value="'.$row2[0].'">'.$row2[1].'&#160;&#160;&#160;&#160;&#160;';
			}
    		echo '<br>';
    	}
    	echo '<input type="submit" name="submit" value=submit class="btn btn-success"></form>

      	</div>
    </div>';

    ?>
  </div>
 
</body>
</html>

       