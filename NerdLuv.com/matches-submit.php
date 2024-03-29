<?php include("top.html");
function find_user($name,$database) 
{ 
    $sql = $database->query("SELECT id, gender, age FROM basic_info WHERE name = '$name';");
    if($sql)
    { 
	foreach ($sql as $row) {
	    $user_id = $row['id'];
	    $user_gender = $row['gender'];
	    $user_age = $row['age']; 
	}
        $os = $database->query("SELECT system FROM fav_os WHERE id = '$user_id';");
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
    $user = array($name,$user_gender,$user_age,$user_os,$user_type,$user_min,$user_max);
    return $user;
}
function compare($user,$database)
{	
    $matches = array();
    $maybe = array();
    $index =0;
    $result = $database->query("SELECT basic_info.*, fav_os.*, seeking.*, type.*  
				FROM basic_info 
				JOIN fav_os
				    ON fav_os.id = basic_info.id
				JOIN type 
				    ON type.id = fav_os.id
				JOIN seeking
				    ON seeking.id = basic_info.id
				WHERE basic_info.name != '$user[0]';"); 
    if($result)
    {
	foreach ($result as $row) { 
	    $maybe[$index] = $row;
	    $index++;
	}
	 
	$index =0; 
	for ($temp=0; $temp<count($maybe); ++$temp)
	{
		
	    if($user[1] != $maybe[$temp]['gender'])
	    {
		if(($user[2] > $maybe[$temp]['min']) && ($user[2] < $maybe[$temp]['max']) && ($maybe[$temp]['age'] > $user[5]) && ($maybe[$temp]['age'] < $user[6]))
		{
		    if($user[3] == $maybe[$temp]['system'])
		    {
			$sim = similar_text($user[4],$maybe[$temp]['person'],$perc);
			if($sim >0)
			{
		    	    $matches[$index] = $maybe[$temp];
		    	    $index++;
			}
		    }
		}
	    }
		
	}
	return $matches;	
    } 
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
	$db = new PDO("mysql:host=localhost;dbname=nerdluv2_nerdluv2","nerdluv2_test","test"); 
        $info = find_user($search,$db);
        $match = compare ($info,$db); 
        if(count($match) > 0)
        {
	    ?><p><strong> Matches for <?= $search; ?> </strong></p><?php
   	    foreach ($match as $connect)
	    { 
		?>
		<div class ="match" >
		    <p>
		        <img src ="photos/user.jpg" alt="user image" />
		        <?= $connect[1]; ?> 
		    </p>
		    <ul>
			<li><strong>Gender:</strong><?= $connect[2]; ?></li>
			<li><strong>Age:</strong><?= $connect[3]; ?></li>
			<li><strong>Type:</strong><?= $connect[10]; ?></li>
			<li><strong>OS:</strong> <?= $connect[5]; ?></li>
		    </ul>
		</div>
		<?php
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
