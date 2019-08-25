
<?php 
    include_once('regi_detail.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration_Form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<?php if(isset($_SESSION['msg'])):?>
        <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
	<div class="container">
		<form  method="post" action="regi_detail.php">
			<div class="row">
				<h1> Registraion Form </h1>
			</div>
			<div class="row">
      			<div class="col-25">
        			<label for="usr_name">User Name</label>
      			</div>
      			<div class="col-75">
				  <input type="text" name="user_name" placeholder="User Name" required>
      			</div>
    		</div><!--usr_name-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_mail">Email</label>
      			</div>
      			<div class="col-75">
				  <input type="email" name="email_id" placeholder="Email" required>
      			</div>
    		</div><!--user_mail-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_pass">Password</label>
      			</div>
      			<div class="col-75">
				  <input type="Password" name="password" placeholder="Password" required>
      			</div>
    		</div><!--password-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_cnf_pass">Confirm Password</label>
      			</div>
      			<div class="col-75">
				  <input type="Password" name="cnfrm_pass" placeholder="Password" required>
      			</div>
    		</div><!--confirm password-->
			<div class="row">
				<h3>Personal Details</h3>
			</div>
			<div class="row">
      			<div class="col-25">
        			<label for="usr_first_name">First Name</label>
      			</div>
      			<div class="col-75">
				  <input type="text" name="first_name" placeholder="First Name" required>
      			</div>
			</div><!--first name-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_last_name">Last Name</label>
      			</div>
      			<div class="col-75">
				  <input type="text" name="last_name" placeholder="Last Name"required>
      			</div>
			</div><!--last name-->
			<div class="row">
      			<div class="col-25">
        			<label for="user_dob">Date of Birth</label>
      			</div>
      			<div class="col-75">
				  <input type="date" name=dob required>
	        	</div>
			</div><!--date of birth-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_gender">Gender</label>
      			</div>
      			<div class="col-75">
					<input type="radio" name="gender" value="male">male
	   				<input type="radio" name="gender" value="female">female
	   				<input type="radio" name="gender" value="other">other
      			</div>
			</div><!--gender-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_address">Address</label>
      			</div>
      			<div class="col-75">
				  <textarea name="address" placeholder="Address" required></textarea>
      			</div>
			</div><!--address-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_country">Country</label>
      			</div>
      			<div class="col-75">
					<select  name="country" required>
						<option  value="India">India</option>
						<option  value="France">France</option>
						<option  value="Other">Other</option>
					</select>
      			</div>
			</div><!--country-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_status">Status</label>
      			</div>
      			<div class="col-75">
					<input type="radio" name="status" value="married">married
					<input type="radio" name="status" value="unmarried">unmarried
					<!--<input type="radio" name="status" value="Divorced">Divorced--> 
      			</div>
			</div><!--status-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_phone_no">Phone Number</label>
      			</div>
      			<div class="col-75">
				  <input type="number" name="ph_no" size="10" placeholder="Phone_Number" required>
      			</div>
			</div><!--phone number-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_skill">Skill</label>
      			</div>
      			<div class="col-75">
					<input type="checkbox" name="skill[]" value="HTML">HTML
					<input type="checkbox" name="skill[]" value="CSS">CSS
					<input type="checkbox" name="skill[]" value="PHP">PHP 
					<input type="checkbox" name="skill[]" value="JS">JS
					<input type="checkbox" name="skill[]" value="MySql">React js
					<input type="checkbox" name="skill[]" value="Bootstrap">React Native
					<input type="checkbox" name="skill[]" value="Bootstrap">MySql
					<input type="checkbox" name="skill[]" value="Bootstrap">Bootstrap
      			</div>
			</div><!--skill-->
			<div class="row">
      			<div class="col-25">
        			<label for="one_word">One word</label>
      			</div>
      			<div class="col-75">
				  <input type="text" name="one_word" placeholder="Describe yourself in ONE word" required>
      			</div>
			</div><!--one word-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_hobby">Hobby</label>
      			</div>
      			<div class="col-75">
					<textarea name="hobby" placeholder="Hobby"></textarea>
      			</div>
			</div><!--hobby-->
			<div class="row">
      			<div class="col-25">
        			<label for="abut_u">About you</label>
      			</div>
      			<div class="col-75">
					<textarea  name="describe_self" placeholder="Tell About Your Self"></textarea>
      			</div>
			</div><!--describe_self-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_think">What?</label>
      			</div>
      			<div class="col-75">
				  <textarea  name="thinking" placeholder="What you think you can do as a programmer" required></textarea>
      			</div>
			</div><!--thinking-->
			<div class="row">
				<input type="checkbox" value="" required>terms and condition<br><br>
			</div><!--confirmation-->
			<div class="row">
				<input type="submit" value="Submit" name="save" onclick="validate()"> 
			</div><!--submit-->
		</form>
	</div><!--close container-->
	
	<!--script for cheaking passwor and confirmpassword are same-->
	<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("cnfrm_pass").value;
            if (a!=b){
               alert("Passwords do not match");
               return false;
            }
        }
	</script>
	
</body>
</html>

