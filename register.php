<?php include 'include/header.php'; 
?>
	<section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Student Registration- online examination</h2></div>
      <?php 
       error_reporting(0);
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {     
                 $name = $_POST['name'];
                 $username = $_POST['username'];
                 $email = $_POST['email'];
                 $password = md5($_POST['password']);
                 $student_id = $_POST['student_id'];
            
        if (empty($name) || empty($username) || empty($email) || empty($password) || empty($student_id)) {
            echo "<span style='color:red; font-size:18px;'>fill out this field first</span>";
           
          }
       else{
          $query = "select * from tbl_user where email = '$email'";
          $checkingSameEmail = $db->select($query);
          if ($checkingSameEmail == true) {
            echo  "<span style='color:red; font-size:18px;'>Email address already exists, try again...</span>";
           
          }
          else{
           $query = "INSERT 
                     INTO tbl_user(name,username,email,password,student_id) 
                     VALUES('$name','$username','$email','$password','$student_id')";
            $insert = $db->insert($query);
            if ($insert) {
              echo  "<span style='color:green; font-size:18px;'>Registration completed successfully</span>";
          
            }
            else{
              echo  "<span style='color:red; font-size:18px;'>Sorry, there has been error</span>";
            
             }
           }
        }       
     }
?>
		<form action="" class="register" method="POST"> 

            <fieldset class="row2">
                <legend>Personal Details </legend>              
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="name" id="name" class="long" placeholder="Enter your name" >
                </p>

                 <p>
                    <label>Username *  </label>                  
                    <input type="text" name="username" id="username" class="long" placeholder="Enter your username"/>
                </p>                
                 
                 <p>
                    <label>Email *</label>                 
                    <input type="text" name="email" id="email" class="long" placeholder="Enter your email" />
                </p>
                        
            </fieldset>

            <fieldset class="row3">
                <legend>Further Information </legend>
                <p>
                    <label>Password * </label>                
                    <input type="password" name="password" id="password" maxlength="10" placeholder="Enter your password"/>
                </p>  
                 <p>
                    <label>Student Id</label>                   
                    <input type="number" name="student_id" id="student_id" maxlength="10" placeholder="Enter your Id" style="height: 25px;" />
                </p>
                <div class="infobox"><h4>Helpful Information</h4>
                    <p>Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>
                </legend>
                <p class="agreement">
                  
                </p>
                <p class="agreement">
                  
                </p>
                <p class="agreement">
                   
                </p>
            </fieldset>
           
            <div><input type="submit" name="register" id="register" value="Register" class="btn btn-danger"></div>
            
          </form>								
		 </div>				
	  </div>
        

        
        
      
    
  
      <style type="text/css">
        */*Set's border, padding and margin to 0 for all values*/
{
    padding: 0;
    margin: 0;
    border: 0;
}
p {
    padding: 7px 0 7px 0;
    font-weight: 500;
    font-size: 10pt;
}
a {
    color: #656565;
    text-decoration:none;
}
a:hover{
    color: #abda0f;
    text-decoration: none;
}
h1 {
    font-weight:200;
    color: #888888;
    font-size:16pt;
    background: transparent url(../img/h1.png) no-repeat center left;
    padding-left:33px;
    margin:7px 5px 8px 8px;
}
h4 {
    padding:1px;
    color: #ACACAC;
    font-size:9pt;
    font-weight:100;
    text-transform:uppercase;
}
form.register{
    width:800px;
    margin: 20px auto 0px auto;
    height:530px;
    background-color:#fff;
    padding:5px;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
}
form p{
    font-size: 8pt;
    clear:both;
    margin: 0;
    color:gray;
    padding:4px;
}
form.register fieldset.row1
{
    width:770px;
    padding:5px;
    float:left;
    border-top:1px solid #F5F5F5;
    margin-bottom:15px;
}
form.register fieldset.row1 label{
    width:140px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register fieldset.row2
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    height:220px;
    padding:5px;
    float:left;
}
form.register fieldset.row3
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register fieldset.row4
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    padding:5px;
    float:left;
    clear:both;
    width:500px;
}
form.register .infobox{
    float:right;
    margin-top:20px;
    border: 1px solid #F1F1F1;
    padding:5px;
    width:380px;
    height:98px;
    font-size:9px;
    background: #FDFEFA url(../img/bg_infobox.gif) repeat-x top left;
}
form.register legend
{
    color: #abda0f;
    padding:2px;
    margin-left: 14px;
    font-weight:bold;
    font-size: 14px;
    font-weight:100;
}
form.register label{
    color:#444;
    width:98px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register label.optional{
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
    color: #A3A3A3;
}
form.register label.obinfo{
    float:right;
    padding:3px;
    font-style:italic;
}
form.register input{
    width: 140px;
    color: #505050;
    float: left;
    margin-right: 5px;
}
form.register input.long{
    width: 247px;
    color: #505050;
}
form.register input.short{
    width: 40px;
    color: #505050;
}
form.register input[type=radio]
{
    float:left;
    width:15px;
}
form.register label.gender{
    margin-top:-1px;
    margin-bottom:2px;
    width:34px;
    float:left;
    text-align:left;
    line-height:19px;
}
form.register input[type=text]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
form.register input[type=password]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
.button
{
    background: #abda0f url(../img/overlay.png) repeat-x;
    padding: 8px 10px 8px;
    color: #fff;
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    cursor: pointer;
    float:left;
    font-size:18px;
    margin:10px;
}
form.register input[type=text].year
{
    border: 1px solid #E1E1E1;
    height: 18px;
    width:30px;
}
form.register input[type=checkbox] {
    width:14px;
    margin-top:4px;
}
form.register select
{
    border: 1px solid #E1E1E1;
    width: 130px;
    float:left;
    margin-bottom:3px;
    color: #505050;
    margin-right:5px;
}
form.register select.date
{
    width: 40px;
}
input:focus, select:focus{
    background-color: #efffe0;
}
p.info{
    font-size:7pt;
    color: gray;
}
p.agreement{
    margin-left:15px;
}
p.agreement label{
    width:390px;
    text-align:left;
    margin-top:3px;
}
     </style>      