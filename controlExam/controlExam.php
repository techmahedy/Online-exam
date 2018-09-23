<?php 
 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../library/Database.php');

 class Exam 
 {
 	private $db;
 	public function __construct()
 	{
 	   $this->db = new Database();
 	}
 	
 	public function getQuestion(){
   	  $query = "select * from tbl_question";
                $result = $this->db->select($query);
                $row = $result->fetch_assoc();
                   return $row;
              }
   
    public function getQuestionNumber(){
   	  $query = "select * from tbl_question";
                $result = $this->db->select($query);
                $row = $result->num_rows;
                   return $row;
         }

    public function getDynamicQuestionNumber($questionNo){
    	  $query = "select * from tbl_question where questionNo = '$questionNo'";
                $result = $this->db->select($query);
                $getNumber = $result->fetch_assoc();
                return $getNumber;
          }
 
   

    public function getQuestionAnswer($questionNo){
   	$query = "select * from tbl_answer where questionNo = '$questionNo'";
   	           $getOption = $this->db->select($query);
   	           return $getOption;
    }
    public function getQuestionByOrder(){
        $query = "select * from tbl_question order by questionNo asc";
                $result = $this->db->select($query);
                return $result;
    }

  }
?>