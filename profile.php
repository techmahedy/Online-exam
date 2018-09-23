<?php include 'include/header.php'; 

?>
   
   <?php
   $studentID = Session::get("userId");
   ?>
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">			
				<div class="clearfix main_content floatleft">					
					<div class="clearfix content">
						<div class="content_title"><h2>Student Profile-  <?php 
                          echo Session::get("name");
                        ?></h2></div>
     <?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
        $name        = $_POST['name'];
        $username    = $_POST['username'];
        $email       = $_POST['email'];
        $password = md5($_POST['password']);
        $student_id = $_POST['student_id'];
        

    if ($name == "" || $username == "" || $email == "" || $student_id == ""){
        echo "<span style='color:red; font-size:18px;'>Please fill out those field first</span>";
        }
    else{
     
      $query = " UPDATE tbl_user
                 SET 
                 name='$name', 
                 username='$username', 
                 email='$email',
                 password = '$password', 
                 student_id='$student_id'
                 where id = '$studentID'";

               $inserted_rows = $db->update($query);
        if ($inserted_rows) {
          echo "<span style='color:green; font-size:18px;'>User Updated Successfully.</span>"; 
        }
        else {
          echo "<span style='color:red; font-size:18px;'>sorry there has been error.</span>"; 
        }
      }

   }
?>           
						
		<form action="" method="post" class="register">            
            <fieldset class="row2">
                <legend>Personal Details </legend>   
                <?php
                   
                     $query = "select * from tbl_user where id = '$studentID'";
                     $result = $db->select($query);
                     if($result){
                      while ($data = $result->fetch_assoc()) {
                ?>           
<p>
    <label>Name *
    </label>
    <input type="text" class="long" name="name" value="<?php echo $data['name'];?>" />
</p>

<p>
    <label>Username *
    </label>
    <input type="text" class="long" name="username" value="<?php echo $data['username'];?>"/>
</p>


 <p>
    <label>Email *  </label>                  
    <input type="text" class="long" name="email" value="<?php echo $data['email'];?>" />
</p> 

<p>
    <label>Password *  </label>                  
    <input type="password" class="long" name="password" value="<?php echo $data['password'];?>" />
</p>              

 <p>
    <label>Student Id</label>                   
     <input type="text" class="long" name="student_id" value="<?php echo $data['student_id'];?>"/>
</p>
              <?php } } ?>             
            </fieldset>

            <fieldset class="row3">
                <div class="infobox"><h4>Helpful Information</h4>
                    <p>Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </fieldset>
            <fieldset class="row4">
              
            </fieldset>
            <div><input type="submit" name="submit" value="Update" class="button"></div>
        </form>								
		</div>				
	</div>

        
            
            </div>
        </section>


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">       
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>



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