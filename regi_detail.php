
<?php
    
    include_once('connection.php');//inlcude file

    session_start();//start session    
    
    $db=mysqli_connect($servername,$username,$password,$dbname);//connect to dtabase

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    // else{
     //   echo "connected sucessfully";
    //}

    if(isset($_POST['save'])){   
        $user_name=$_POST['user_name'];
        $email_id=$_POST['email_id'];
        $password=$_POST['password'];
        $cnfrm_pass=$_POST['cnfrm_pass'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $country=$_POST['country'];
        $status=$_POST['status'];
        $ph_no=$_POST['ph_no'];
        $skillarray=$_POST['skill'];
        $skill=implode(",",$skillarray);
        $one_word=$_POST['one_word'];
        $hobby=$_POST['hobby'];
        $describe_self=$_POST['describe_self'];
        $thinking=$_POST['thinking'];
        $query="INSERT INTO registration(user_name,email_id,cnfrm_pass,first_name,last_name,dob,gender,address,country,status,ph_no,skill,one_word,hobby,describe_self,thinking) VALUES('$user_name','$email_id','$cnfrm_pass','$first_name','$last_name','$dob','$gender','$address','$country','$status','$ph_no','$skill','$one_word','$hobby','$describe_self','$thinking')"; 
        mysqli_query($db,$query);
        $_SESSION['msg']="Details save";
        header('location:index.php');//rediect to index page after insertion
    }
?>

