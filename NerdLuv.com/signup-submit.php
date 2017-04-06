<?php include("top.html"); 
function insert($user)
{ 
    $database = new PDO("mysql:host=localhost;dbname=nerdluv2_nerdluv2","nerdluv2_test","test"); 
    $database->query("INSERT INTO basic_info VALUES (NULL,'$user[0]','$user[1]',$user[2]);"); 
    $database->query("INSERT INTO fav_os VALUE (NULL,'$user[3]');");
    $database->query("INSERT INTO type VALUE (NULL,'$user[4]');");
    $database->query("INSERT INTO seeking VALUE (NULL,$user[5],$user[6]);"); 	    	    
}
?>
<!-- THIS PAGE RECEIVES THE USER'S INFO BY WAY OF FORM POST AND VALIDATES THE INFORMATION GIVEN. I UNDERSTAND THAT ONE GENERAL FUNCTION THAT VALIDATES THE USER'S INPUT WOULD BE MORE EFFICIENT IN TERMS OF CODE AND TIME BUT I FIGURED IT WOULD BE BEST FOR THE USER TO KNOW WHAT KIND OF INPUT ERROR THEY HAVE. --> 
<?php
	/*HERE, THE ATTRIBUTES OF THE USER RECEIVED FROM $_POST ARE 
		PLACED INTO VARIABLES TO LIMIT USAGE OF THE GLOBL 
		VARIABLE. NEXT EACH VARIBALE IS TESTED TO ENSURE ACCURACY */
	
	$name=$_POST['name'];
	$sex=$_POST['cc'];
	$age=$_POST['age'];
	$person=$_POST['person'];
	$OS=$_POST['Favorite_OS'];
	$min=$_POST['min']; 
	$max=$_POST['max']; 
	if(!ctype_digit($age)) { 
	    ?> <p> Error: Invalid input for age </p><?php	
	}
	elseif(!ctype_digit($min)) {
	    ?><p> Error: Invalid input for minimum seeking age </p><?php
	}
	elseif(!ctype_digit($max)) {
	    ?><p> Error: Invalid input for maximum seeking age </p><?php
	} 
	elseif($max < $min) {
	    ?> <p> Error: Max age must be larger than min age </p> <?php
	}
	elseif(!preg_match("/^[IE][NS][TF][JP]$/",$person)) {
	     ?> <p> Error: Invalid put for personality type </p> <?php
	}
	elseif ((empty($name)) || (empty($sex)) || (empty($age)) || (empty($person)) || (empty($OS)) || (empty($min)) || (empty($max)))
	{
	?>
		<p>One or more of the required fields have been left empty</p>
	<?php
	}
	else
	{ 
			/*THE USER'S INPUT IS PLACE INTO AN ARRAY 
			USING THE ARRAY FUNCTION AND THEN 
			PLACED INTO THE FILE USING THE 
			FILE_PUT_CONTENTS FUNCTION*/ 
	    $info = array($name,$sex,$age,$person,$OS,$min,$max); 
	    insert($info); 
	    ?> 
	        <p><strong> Thank you! </strong><br><br>Welcome to NerdLuv, <?= $name ?><br><br>
		    Now <a href="matches.php">log in to see your matches! </a>
		</p>
	<?php 
	} 
	?>	
<?php include("bottom.html"); ?> 

