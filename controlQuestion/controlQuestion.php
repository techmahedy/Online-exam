<?php 
 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../library/Database.php');

 class Question 
 {
 	private $db;
 	public function __construct()
 	{
 	   $this->db = new Database();
 	}
 	
  public function getTotalQuestionNumber(){
    $query  = "SELECT * FROM tbl_question";
    $result = $this->db->select($query);
    $total  = $result->num_rows;
    return $total;
  }

  
  public function addQuestion($data){
    $questionNo    = $data['questionNo'];
    $questionTitle = $data['questionTitle'];
    $rightAnswer   = $data['rightAnswer'];
    $answer    = array();
    $answer[1] = $data['answerOne'];
    $answer[2] = $data['answerTwo'];
    $answer[3] = $data['answerThree'];
    $answer[4] = $data['answerFour'];

    $query = "INSERT INTO tbl_question(questionNo,questionTitle) VALUES('$questionNo','$questionTitle')";
    $insertQues = $this->db->insert($query);
    if ($insertQues){
       foreach ($answer as $key => $value){

          if ($value != ''){
            if ($rightAnswer == $key) {
           $rightQuery = "INSERT INTO  tbl_answer(questionNo,rightAnswer,answer) VALUES('$questionNo','1','$value')";
            }else{
           $rightQuery = "INSERT INTO  tbl_answer(questionNo,rightAnswer,answer) VALUES('$questionNo','0','$value')";
            }
             $insert = $this->db->insert($rightQuery);
             if ($insert){
               continue ;
             }else{
              die('Error......');
             }
          }

       }
       $msg = "Question inserted successfully done!!!"; 
       return $msg;   
    }
 }





}
?>