<?php include 'include/header.php'; 
  Session::checkUserSession();  
?>
	
		 <section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Start exam - 
						
                       <?php 
                          echo Session::get("name");
						?>	
								
            		 </div>	

		 <div class="panel panel-default">
		  <div class="panel-heading" style="text-align: center; font-size: 25px;"><strong>Start Your Exam</strong></div>
		   <div class="panel-body" style="margin-left: 200px;">
		   	 <?php
                  $question = $exam->getQuestion();
                  $totalQuestion = $exam->getQuestionNumber();
                ?>   
                
 <ul>
 	<li><strong style="font-size: 25px;">Number of questions</strong>-
   <strong style="font-size: 25px;"><?php echo $totalQuestion;?></strong>
   </li>

 	<li><strong style="font-size: 25px;">Questions type</strong>
 		<strong style="font-size: 25px;">-Multiple choice</strong>
 	</li> 
 	<a href="startexam.php?questionNo=<?php echo $question['questionNo'];?>" style="font-size: 25px;">Start Test</a>
 </ul>
		  </div>
		</div>
            	  
   </div>
        
