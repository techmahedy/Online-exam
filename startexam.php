<?php include 'include/header.php'; 
  
?>


<script type="text/javascript">
	/*
   function timeout(){
   	var minute = Math.floor(timeToGo/60);
   	var second = timeToGo%60;
   	if (timeToGo<=0) {
   		clearTimeout(tm);
        //document.getElementById("form").submit();
        window.location = 'lastpage.php';
   	}else{
        document.getElementById("time").innerHTML=minute+":"+second;
   	}
     timeToGo--;
     var tm = setTimeout(function(){timeout()},1000);
   }

</script>

   <?php

		   if (isset($_GET['questionNo'])) {
		     $questionNo = (int) $_GET['questionNo'];
		   }else{
		     header("Location:exam.php");
		   }

		 ?>
          
          <?php


         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $process = $process->processExam($_POST);
              }
		  ?>
  
	<section id="content_area" >
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Start exam - 
<script>
  	var timeToGo = 1*60;
</script> 


                       <?php 
                          echo Session::get("name");
						?>	
						<strong id="time" style="float: right;"></strong>
						</h2>

            		 </div>	

              <?php
                  $question = $exam->getDynamicQuestionNumber($questionNo);
                  $totalQuestion = $exam->getQuestionNumber();
              ?>  
		 <div class="panel panel-default">
		  <div class="panel-heading" style="text-align: center;"> 

		  	<strong style="font-size: 25px;">Question : <?php echo $question['questionNo']; ?> of <?php echo $totalQuestion; ?> </strong>
		  </div>
		   <div class="panel-body" style="margin-left: 250px;">


		     <form action="" method="post" id="form">
		     	<table>
		     		<tr>
		     			<td colspan="2">
		     				<h3>Q <?php echo $question['questionNo']; ?>: <?php echo $question['questionTitle']; ?></h3>
		     			</td>
		     		</tr>
                 
                 <?php 
		          $answer = $exam->getQuestionAnswer($questionNo);	     	              
                    if ($answer) {
                    	while ($result = $answer->fetch_assoc()) {                  		
		     	 ?>
		     		<tr>
		      
		     			<td>
		     				<input type="radio" name="rightAnswer" value="<?php $result['id']; ?>"><?php echo $result['answer']; ?>
		     			</td>
		     	
		     		</tr>
		     <?php }  } ?>
		     		<tr>
		     			<td>
		     				<input type="submit" name="submit" value="Next Question" class="btn btn-danger">
		     				<input type="hidden" name="number" value="<?php echo $questionNo;?>">
		     			</td>
		     		</tr>
		     	</table>
		     </form>

		  </div>
		</div>
            	  
   </div>
        
</div>
</div>
</section>