<?php
include_once(dirname(__FILE__).'/database.php');
// Executes a database query
function query( $query )
{
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $result = $mysqli->query($query);
    //$row = $result -> fetch_array(MYSQLI_ASSOC);
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}

function execute( $query )
{
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $mysqli->query($query);
    return $mysqli -> insert_id;
}



function register($id=0){
    $data = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $uname=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $joining=$_POST['joining'];
        $passing_year=$_POST['passing_year'];
        $employablity=$_POST['employablity'];
        $usn=$_POST['usn'];
        $day=$_POST['dob'];
        $date=date_create($day);
        $dob=date_format($date,"Y-m-d");
        $status=1;

        if(!empty($uname) && !empty($pass) && !empty($day) && !empty($mobile)){
            $mobileQuery="SELECT * FROM users WHERE mobile='$mobile'";
            $mobileList = query($mobileQuery);

            $emailQuery="SELECT * FROM users WHERE email='$email'";
            $emailList = query($emailQuery);
            if(!empty($mobileList) && !empty($emailList)){
                return array('status'=>'2');
            }elseif(!empty($mobileList)){
                return array('status'=>'3');
            }elseif(!empty($emailList)){
                return array('status'=>'4');
            }

            if(empty($emailList) && empty($mobileList)){
            $sql = "INSERT 
			INTO
			   users
			   ( name, email, password, dateofbirth, mobile, joining,passing_year,employablity,usn) 
			VALUES
			   ('$uname', '$email', '$pass', '$dob', '$mobile', '$joining','$passing_year','$employablity','$usn' )";
                $data = execute($sql);

                return array('status'=>'1', 'data'=>$data);
            }
        }
    }

    return $data;
}

function isloggedin(){
    if(!isset($_SESSION['id'])){
        return false;
    }
    else{
        return true;
    }
}

function validateUser($myemail,$mypassword){
    $query="SELECT * FROM users WHERE email='$myemail' AND password='$mypassword'";
    $list = query($query);
    return $list[0];
}

function getUsers($id){
    $query="SELECT * FROM users WHERE id='$id'";
    $list = query($query);
    return $list[0];
}


function search($year){
    $query="SELECT * FROM users WHERE passing_year='$year'";
    $list = query($query);
    return $list;
}


function checkValidAdminUsers($username){
    // To protect MySQL injection (more detail about MySQL injection)
    $query="SELECT * FROM admin WHERE username='$username'";
    $list = query($query);
    return $list[0];
}
