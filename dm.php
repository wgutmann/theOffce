<html>
	<head>
		<title>The Office Random Episode Generator v2.0</title>
		

		<?php
		$db_hostname = "localhost";
		$db_database = "OFFICE";
		$db_username = "root";
		$db_password = "bandages";
		//bullshit comment
		require_once('episodeClass.php');
		//global variable declaration
		$seasonQuery = NULL;
		$GLOBALS ["SEASONFLAG"] = FALSE;
		$filterQuery = NULL;
		$GLOBALS ["FILTERFLAG"] = FALSE;
		//$flag = FALSE; //flag for exec dynamic SQL

		if( isset($_GET['season1'])){
			$season1 = $_GET["season1"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season1, "1");
		}
		if( isset($_GET['season2'])){
			$season2 = $_GET["season2"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season2, "1");
		}
		if( isset($_GET['season3'])){
			$season3 = $_GET["season3"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season3, "1");
		}
		if( isset($_GET['season4'])){
			$season4 = $_GET["season4"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season4, "1");
		}
		if( isset($_GET['season5'])){
			$season5 = $_GET["season5"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season5, "1");
		}
		if( isset($_GET['season6'])){
			$season6 = $_GET["season6"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season6, "1");
		}
		if( isset($_GET['season7'])){
			$season7 = $_GET["season7"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season7, "1");
		}
		if( isset($_GET['season8'])){
			$season8 = $_GET["season8"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season8, "1");
		}
		if( isset($_GET['season9'])){
			$season9 = $_GET["season9"];
			$flag = TRUE;
			$seasonQuery = $seasonQuery . buildQuery($season9, "1");
		}

		//category filter
		if( isset($_GET['birthday'])){
			$birthday = $_GET["birthday"];
			$filterQuery = $filterQuery . buildQuery($birthday, "2");
		}
		if( isset($_GET['halloween'])){
			$halloween = $_GET["halloween"];
			$filterQuery = $filterQuery . buildQuery($halloween, "2");
		}
		if( isset($_GET['christmas'])){
			$christmas = $_GET["christmas"];
			$filterQuery = $filterQuery . buildQuery($christmas, "2");
		}
		if( isset($_GET['wedding'])){
			$wedding = $_GET["wedding"];
			$filterQuery = $filterQuery . buildQuery($wedding, "2");
		}
		//random filter
		if( isset($_GET['random'])){
			$random = $_GET["random"];
		}




		function buildQuery($sql, $filter)
		{	
			if($filter ==1){
				if($GLOBALS["SEASONFLAG"] == FALSE){
					$seasonQuery = " SEASON='". $sql ."'";
					$GLOBALS ["SEASONFLAG"] = TRUE;
					return $seasonQuery;
				}else{
					$seasonQuery = $seasonQuery . " OR SEASON='$sql'";
					return $seasonQuery;
				}
			}

			if($filter ==2){
				if($GLOBALS["FILTERFLAG"] == FALSE){
					$filterQuery = " DESCRIPTION LIKE '%" . $sql . "%'";
					$GLOBALS ["FILTERFLAG"] = TRUE;
					return $filterQuery;
				}else{
					$filterQuery = $filterQuery . " OR DESCRIPTION LIKE '%" . $sql ."%'";
					return $filterQuery;
				}
			}
		}

		// Create connection
		$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database); //attempting to make a connection to the database
		if (!$con) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		if($flag){
			//execute dynamic SQL
			$query = "";
			if($GLOBALS["SEASONFLAG"] == TRUE & $GLOBALS["FILTERFLAG"] == TRUE){
				$query = "SELECT * FROM EPISODES WHERE (" . $seasonQuery . ") AND (". $filterQuery .")";
			}else{
				$query = "SELECT * FROM EPISODES WHERE (" . $seasonQuery . ")";
			}

			// catch mysql rows
			$result = mysqli_query($con, $query);
			
			if($result == FALSE)
			{
				echo" MySQL query error: " . mysqli_error();
			}else{
				$rows = mysqli_num_rows($result);
				for($i=0; $i<$rows; $i++){
					$row = mysqli_fetch_row($result);
					$e = new Episode($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
					$results[] = $e;
				}
			}
		}
		if($random == '1'){
			$pick = rand(1, count($results));
		}

	?>
	</head>

	<body>

		<?php


			if($random == '1'){

			?>
				<b>Season:</b> <?= $results[$pick]->getSeason()?> <b>Episode:</b> <?= $results[$pick]->getEpisode()?> <b>Title:</b> <?= $results[$pick]->getTitle()?> <br/>
				<div style="width: 400px;">
					<b style="font-size:1.0em;">Description: </b> <br/>
					<br/>
					<div style="font-size: 0.6em; border-top: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; border-bottom: 1px solid #000; border-right: 1px solid #000; font-size:1.0em;"><?= $results[$pick]->getDescription()?></div>
				</div>
				<br/>
			<?php
			}elseif($random == '0'){
			?>
				<div>
				<table border='0' cellpadding='0' cellspacing='1'>
				<tr>
					<td>Season</td>
					<td>Episode</td>
					<td>Title</td>
			<?
				foreach($results as $epp){ ?>
					<tr>
						<td><?= $epp->getSeason() ?></td>
						<td><?= $epp->getEpisode()?></td>
						<td><?= $epp->getTitle() ?></td>
					</tr>
		<?php
				}
			} ?>
				</table>
				</div>
		<div style="float:left;" style="font-size:1.2em">
		<form action="dm.php" method="get" name="filters">

			<table border ="0" cellpadding="0" cellspacing="5" style="font-size:1.4em;">
				<th>Random Episode?</th>
				<tr>
					<td>Yes, I would like a random episode</td>
					<td><input type="radio" name="random" value="1" checked></td>
				</tr>
				<tr>
					<td>No, show me the results</td>
					<td><input type="radio" name="random" value="0"></td>
				</tr>
				<th>Select season(s)</th>
				<tr>	
					<td>Season 1: </td>
					<td><input type="checkbox" name="season1" value="1" checked></td>
				</tr>
				<tr>	
					<td>Season 2: </td>
					<td><input type="checkbox" name="season2" value="2" checked></td>
				</tr>
				<tr>
					<td>Season 3: </td>
					<td><input type="checkbox" name="season3" value="3" checked></td>
				</tr>
				<tr>
					<td>Season 4: </td>
					<td><input type="checkbox" name="season4" value="4" checked></td>
				</tr>
				<tr>
					<td>Season 5: </td>
					<td><input type="checkbox" name="season5" value="5" checked></td>
				</tr>
				<tr>
					<td>Season 6: </td>
					<td><input type="checkbox" name="season6" value="6" checked></td>
				</tr>
				<tr>
					<td>Season 7: </td>
					<td><input type="checkbox" name="season7" value="7" checked></td>
				</tr>
				<tr>
					<td>Season 8: </td>
					<td><input type="checkbox" name="season8" value="8" checked></td>
				</tr>
				<tr>
					<td>Season 9: </td>
					<td><input type="checkbox" name="season9" value="9" checked></td>
				</tr>
			</table>

			<table border ="0" cellpadding="0" cellspacing="5" style="font-size: 1.4em">
				<th>Select filter(s)***</th>
				<tr>
					<td>Christmas Episodes: </td>
					<td><input type="checkbox" name="christmas" value ="Christmas"></td>
				</tr>
				<tr>
					<td>Birthday Episodes: </td>
					<td><input type="checkbox" name="birthday" value="birthday"></td>
				</tr>
				<tr>
					<td>Halloween Episodes: </td>
					<td><input type="checkbox" name="halloween" value="Halloween"></td>
				</tr>
				<tr>
					<td>Wedding Episodes: </td>
					<td><input type="checkbox" name="wedding" value="wedding"></td>
				</tr>
				<tr>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
		<span style="font-size:.8em;"> ***Filters are based on episode descriptions

</div>
<div style="float: left; margin-top: 100px;">
	<img src="http://upload.wikimedia.org/wikipedia/en/3/32/The_Office_S9_DVD.jpg">
</div>

<br/><br/><br/><br/>
<div style="clear:both; font-size: .9em;">
<b>Version: 2.0</b><br/>
		Release notes:<br/>
		*Updated functionality<br/>
		-Users can now select what seasons they wish to generate a random episode from.<br/>
		-Additional filters have been added: Birthday, Halloween, Christmas, Wedding.<br/>
		Selecting filters will only generate a random episode based on the filter criteria<br/>
		<br/>
		Expectations for v2.1 - release TBD<br/>
		-Make it look pretty<br/>
		-Additional filters<br/>
		-Enable cookies to remember user search filters<br/>
		Possible integrations:<br/>
				-Option to display list of episodes based on filters
		<br/>

</div>
	</body>
</html>