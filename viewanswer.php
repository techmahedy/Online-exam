<?php include 'include/header.php'; 
   
?>
	<section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Your Wrong Answer
						
                       <?php 
                          echo Session::get("name");
						?>	
								
            		 </div>	
		 <div class="panel panel-default">
		  <div class="panel-heading" style="text-align: center;"> 

		  	<strong style="font-size: 25px;">All the questions answer</strong>
		  </div>
		   <div class="panel-body" style="margin-left: 250px;">


		     <form action="" method="post">
		     	<table>
                  <?php
                  $getQues = $exam->getQuestionByOrder();
                     if ($getQues) {
                     	while ($question = $getQues->fetch_assoc()) {
    
                  ?>
		     		<tr>
		     			<td colspan="2">
		     				<h3>Q <?php echo $question['questionNo']; ?>: <?php echo $question['questionTitle']; ?></h3>
		     			</td>
		     		</tr>
                 
                 <?php 
                    $number = $question['questionNo'];
		          $answer = $exam->getQuestionAnswer($number);	     	              
                    if ($answer) {
                    	while ($result = $answer->fetch_assoc()) {                  		
		     	 ?>
		     		<tr>
		      
		     			<td>
		     				<input type="radio">
		     			<?php 
		     				if ($result['rightAnswer'] == '1'){
		     				 echo "<span style='color:red'>".$result['answer']."</span>";
		     				}else{
		     					echo $result['answer'];
		     				}		     				
		     			 ?>
		     			</td>
		     	
		     		</tr>
		     <?php }  } ?>
		       <?php }  } ?>
		     		
		     	</table>
		     </form>

		  </div>
		</div>
            	  
   </div>
        
