<?php 
 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../library/Session.php');
 include_once ($filepath.'/../library/Database.php');
 //Session::checkUserSession(); 
 
 class Process 
 {
 	private $db;
 	public function __construct()
 	{
 	   $this->db = new Database();
 	}
 	
    public function processExam($data){

           $selectedAnswer = $data['rightAnswer'];
           $number         = $data['number'];
           $next           = $number+1;

           if (!isset($_SESSION['score'])) {
           	  $_SESSION['score'] = '0';
           }

           $total = $this->getTotal();
           $answer = $this->rightAnswer($number);

           if ($answer == $selectedAnswer) {
              	$_SESSION['score']++;
           }

           if ($number == $total) {
           	 header("Location:lastpage.php");
           	   exit();
              }else{
           	 header("Location:startexam.php?questionNo=".$next);
           }
      }
 
      public function getTotal(){
   	   $query = "select * from tbl_question";
                $result = $this->db->select($query);
                $getNumber = $result->num_rows;
                return $getNumber;
     }
   
      public function rightAnswer($number){
   	    $query = "select * from tbl_answer where questionNo='$number' AND rightAnswer = '1'";
                $result = $this->db->select($query)->fetch_assoc();
                $getNumber = $result['id'];
                return $getNumber;
      }


}
?>