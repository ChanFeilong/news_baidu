<?php
	header("Content-type:application/json;charset=utf-8");
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }else{
	  	mysql_select_db("news", $con);
		$sql = "select * from news";
		mysql_query("set names'utf8'");
		$result = mysql_query($sql,$con);
		// if (!$result)
		//   {
		//   die('Error: ' . mysql_error());
		//   }else{
		//   	echo "success";
		//   }
		$arr = array();
		while ($row = mysql_fetch_array($result)) {
			// echo $row['newstitle']."".$row['newscontent'];
			// echo "<br/>";
			array_push($arr,array("newstitle"=>$row['newstitle'],"newimage"=>$row['newsimage'],"newstype"=>$row['newstype'],"newsid"=>$row['newsid']));
		}
		$result = array("errcode"=>0,"result"=>$arr);
		echo json_encode($result);
		return $result;
	  }

	// some code

	mysql_close($con);
?>