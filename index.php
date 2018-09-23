<?php include 'include/header.php';  
   
     Session::checkUserLogin(); 
?>
	<section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						
    
        
<div class="clearfix sidebar_container floatright">            
    <div class="clearfix newsletter">
    <form action="" method="POST">
            <h2>Student Login</h2>
 <?php
      
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email  = $_POST['email'];
        $password  = md5($_POST['password']);

        if(empty($email) || empty($password)){
           echo "<span style='color:red; font-size:18px;'>fill out this field first</span>";
        }
        else{
             $query  = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'";
             $result = $db->select($query);
            if ($result == true) {
               $data = $result->fetch_assoc();
               if ($data['flag'] == '1') {
                 echo "<span style='color:red; font-size:18px;'>User id is desabled</span>";
               
               }
               else{
                Session::init();
                Session::set("login",true);
                Session::set("name", $data['name']);
                Session::set("username", $data['username']);
                Session::set("userId", $data['id']);
                echo "<script> window.location = 'exam.php'; </script>";
               }
            }
            else{
                 echo "<span style='color:red; font-size:18px;'>User email or password not matched</span>";
                 
            }
          }
       }
    ?>
            <input type="email" name="email" placeholder="Enter your email" id="mce-TEXT"/>
            <input type="password" name="password" placeholder="Enter your password" id="mce-TEXT" style="width: 250px; height: 25px" />
            <input type="submit" value="Login"  style="margin-top: 10px;" />
            <span>Not Signup? click here to sign up <a href="register.php" class="btn btn-danger">Signup</a></span>
        </form>
    </div>
    <div class="clearfix sidebar">
                        <div class="clearfix single_sidebar">
                            <div class="popular_post">
                               
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        
        
       
    
  