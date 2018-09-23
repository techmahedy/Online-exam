<?php include 'include/header.php'; 
  Session::checkUserSession();
?>
	<section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Your Exam Is Finished Successfully								
            		 </div>	

		 <div class="panel panel-default">
		  <div class="panel-heading" style="text-align: center;"><strong style="font-size: 25px;">Your Score -  
		  	          <?php
                          if (isset($_SESSION['score'])) {
                          	echo $_SESSION['score'];
                          	unset($_SESSION['score']);
                          }

						?>	
				</strong></div>
		   <div class="panel-body" style="margin-left: 250px;">                
		     <ul>
		     	<a href="viewanswer.php">View Answer</a><br>		     	
		     </ul>
		  </div>
		</div>
            	  
   </div>
        
