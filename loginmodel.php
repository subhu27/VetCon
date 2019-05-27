<?php
class loginmodel extends CI_Model

{

public function isvalidate($uemail,$password)

{

	$pass=md5($password);

$q=$this->db->where(['email'=>$uemail, 'password'=>$password])
           
           ->get('staff');

           //select * from staff where uemail=$email and password=$password;

           if($q->num_rows())

           {

           	return true;  //true
           }

           else

           {

            return false; //false

           }



}

}
?>