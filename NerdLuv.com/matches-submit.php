<?php include("top.html"); 
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
	   
	    $sql = $db->query("SELECT id, gender, age FROM basic_info WHERE name = '$search';");
	    var_dump($sql);
	    
	    if($sql)
	    {
		
		echo "Hello";
		foreach ($sql as $row) {
			print $row['id'];
			print $row['gender'];
		
		    


		}
		 
	    }
	    else
	    {
	    ?>
	        <p> There are no matches </p>
	    <?php
	    } 
	}
	
	    ?> 
<?php include("bottom.html"); ?>
