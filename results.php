
<?php require_once('Connections/conn_vote.php'); ?>

<?php 
$query_rs_vote = "SELECT * FROM poll";
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

$resultbrowser1 = mysql_query("SELECT * FROM poll WHERE browser='internetexplorer'");
$num_rowsbrowser1 = mysql_num_rows($resultbrowser1);

$resultbrowser2 = mysql_query("SELECT * FROM poll WHERE browser='firefox'");
$num_rowsbrowser2 = mysql_num_rows($resultbrowser2);

$resultbrowser3 = mysql_query("SELECT * FROM poll WHERE browser='safari'");
$num_rowsbrowser3 = mysql_num_rows($resultbrowser3);

$resultbrowser4 = mysql_query("SELECT * FROM poll WHERE browser='opera'");
$num_rowsbrowser4 = mysql_num_rows($resultbrowser4);

$resultbrowser5 = mysql_query("SELECT * FROM poll WHERE browser='chrome'");
$num_rowsbrowser5 = mysql_num_rows($resultbrowser5);

$percentbrowser1 = ($num_rowsbrowser1 / $totalRows_rs_vote)*100;
$percentbrowser2 = ($num_rowsbrowser2 / $totalRows_rs_vote)*100;
$percentbrowser3 = ($num_rowsbrowser3 / $totalRows_rs_vote)*100;
$percentbrowser4 = ($num_rowsbrowser4 / $totalRows_rs_vote)*100;
$percentbrowser5 = ($num_rowsbrowser5 / $totalRows_rs_vote)*100;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Results</title>
	<link href="css/datinglab.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  	<fieldset>
	
		<legend>Results</legend>
		
		<ul>
			<li>
				<span class="total-votes"><?php echo $num_rowsbrowser1 ?></span> Internet Explorer
				<br />
				<div class="results-bar" style="width: <?php echo round($percentbrowser1,2); ?>%;">
					 <?php echo round($percentbrowser1,2); ?>%
				</div>
			</li>
			
			
			<li>
				<span class="total-votes"><?php echo $num_rowsbrowser3 ?></span> Safari
				<div class="results-bar" style="width: <?php echo round($percentbrowser3,2); ?>%;">
					 <?php echo round($percentbrowser3,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php echo $num_rowsbrowser4 ?></span> Opera
				<div class="results-bar" style="width: <?php echo round($percentbrowser4,2); ?>%;">
					 <?php echo round($percentbrowser4,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php echo $num_rowsbrowser5 ?></span> Chrome
				<div class="results-bar" style="width: <?php echo round($percentbrowser5,2); ?>%;">
					 <?php echo round($percentbrowser5,2); ?>%
				</div>
			</li>
			
		</ul>
	
		<h6>Total votes: <?php echo $totalRows_rs_vote ?></h6>
				       
				<?php
				  echo "<table class=\"users\">";
				  echo "<tr><td>";
				  echo "NAME";
				  echo "</td>";
				  echo "<td>";
				  echo "EMAIL";
				  echo "</td>";
				  echo "<td>";
				  echo "BROWSER";
				  echo "</td>";
				  echo "<td>";
				  echo "REASONS";
				  echo "</td>";
				  echo "<td>";
				  echo "TIME";
				  echo "</td>";
				  echo "</tr>";
				  echo "</table>"; 
				  $result = mysql_query("SELECT * FROM poll
								                  				 
												  ORDER BY date");//GROUP BY browser
				while($row = mysql_fetch_array($result)){

								  echo" <table class=\"users\">";                             
								  echo "<tr><td>";
                                  echo $row['name'];
                                  echo "</td>";
								  echo "<td>";
                                  echo $row['email'];
								  echo "<td>";
                                  echo $row['browser'];//browser
                                  echo "</td>";
								  echo "<td>";
                                  echo $row['reason'];
                                  echo "</td>";
								  echo "<td>";
                                  echo $row['date'];
                                  echo "</td>";
								  echo "</tr>";
                                  echo "</table>";			   }					                                                            
							?>
	<a href="insert.php">Back to voting</a>
	</fieldset>
</body>
</html>
<?php
mysql_free_result($rs_vote);
?>