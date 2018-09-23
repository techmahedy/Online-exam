<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../library/Database.php');
 include_once ($filepath.'/../library/Helper.php');


 class User 
 {
 	private $db;
 	private $helper;
 	public function __construct()
 	{
 	   $this->db = new Database();
 	   $this->helper = new helper();

 	}
 
  public function desableUser($rejectId){
     $query = "UPDATE tbl_user
               SET
               flag = '1'
               WHERE id = '$rejectId'";

      $updateRow = $this->db->update($query);
      if ($updateRow){
        $msg = "<span style='color:red; font-size:18px;'>Examinee rejected successfully</span>;";
        return $msg;
      }else{
        $msg = "<span style='color:red; font-size:18px;'>sorry there has been error</span>;";
         return $msg;
      }
  }
   public function enableUser($approveId){
      $query = "UPDATE tbl_user
               SET
               flag = '0'
               WHERE id = '$approveId'";

      $updateRow = $this->db->update($query);
      if ($updateRow){
        $msg = "<span style='color:green; font-size:18px;'>Examinee approved successfully</span>;";
        return $msg;
      }else{
        $msg = "<span style='color:green; font-size:18px;'>sorry there has been error</span>;";
         return $msg;
      }
   }
 }
?>