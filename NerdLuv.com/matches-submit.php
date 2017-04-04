<?php include("top.html");
find_user($name,$database) 
{ 
    $sql = $database->query("SELECT id, gender, age FROM basic_info WHERE name = '$search';");
    if($sql)
    { 
	foreach ($sql as $row) {
	    $user_id = $row['id'];
	    $user_gender = $row['gender'];
	    $user_age = $row['age']; 
	}
        $os = $database->query("SELECT system FROM fav_os WHRER id = '$user_id';");
	foreach($os as $row2) {
	    $user_os = $row2['system'];
	}
        $person = $database->query("SELECT person FROM type WHERE id = '$user_id';");
	foreach($person as $row3) {
	    $user_type = $row3['person'];
	}
        $seek = $database->query("SELECT min, max FROM seeking WHERE id = '$user_id';");
    	foreach($seek as $row4) {
	    $user_min = $row4['min'];
	    $user_max = $row4['max'];
	}
    }
    $user = array($user_gender,$user_age,$user_os,$user_type,$user_min,$user_max);
    return $user;
} 
?>
<!-- THIS PAGE RECEIVES THE USER'S NAME BY WAY OF GET, LOOKS UP THAT NAME, STORES OF THE USER'S INFOINTO AN ARRAY AND THEN CYCLES THROUGH THE FILE FOR MATCHES.
THE FIND_USER FUNCTION SIMPLY LOOKS FOR THE USER IN THE FILE TO SEE IF THIS USER IS EXISTS IN THE SYSTEM. ONCE FOUND, THAT USER'S INFOR IS SENT BACK TO THE COMPARE FUNCTION TO COMPARE THAT USER TO THE OTHER USERS IN THE FILE. THIS FUNCTION BREAKS EACH LINE DOWN TO AN ARRAY OF THE POTENTIAL MATCHES INFO. IF MATCHES BASED ON CERTAIN CRITERIA, THE ORIGINAL, BEFORE IT WAS BROKEN INTO AN ARRAY, IS RETURNED FROM THE FUNCTION TO BE DISPLAYED TO THE USER --> 
<?php
    
    $search= $_GET['name']; 
	if(empty($search))
	{
	?>
	    <p>Error: Required field left empty</p>
	<?php
	}
	else 
	{ 
	    $db = new PDO("mysql:dbname=nerdluv","root","Pherndon1234"); 
	    $info = find_user($search,$db);
	    //else
	    //{
	    //?>
	    //    <p> There are no matches </p>
	   // <?php
	    //} 
	}
	
	    ?> 
<?php include("bottom.html"); ?>
