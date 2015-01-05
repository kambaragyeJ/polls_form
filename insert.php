<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Dating Lab</title>
		<script type="text/javascript">
function validate_form ( )
{        
		 valid = true;
        if ( document.contact_form.name.value == "" ){
                alert ( "Please fill in the 'Your Name' box." );
                valid = false;
        }else if ( document.contact_form.email.value == "" ){
                alert ( "Please fill in the 'Your Email' box." );
                valid = false;
		}
		else if ( (document.contact_form.browser[0].checked == false) && (document.contact_form.browser[1].checked == false) && (document.contact_form.browser[2].checked == false) && (document.contact_form.browser[3].checked == false) && (document.contact_form.browser[4].checked == false)){
                alert ( "Please fill in the 'Your Browser' box." );
                valid = false;
		}
	
}
</script>
        <link rel="stylesheet" href="css/insert.css" />
	</head>
    <body>
		<div class="maindiv">
		<!--HTML form -->
			<div class="form_div">
				<div class="title"><h2>TheDatingLab Assessment.</h2></div>
   
				<form name="contact_form" method="post" action="insert.php" onsubmit="return validate_form()">
					<h2>POLL</h2>
					<label>Name:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					<legend>What is your favourite Webrowser?</legend>  
					<label>
					<input type="radio" name="browser" value="internetexplorer" id="browser_0" />
						Internet Explorer
				    </label><br />
					<label>
					<input type="radio" name="browser" value="firefox" id="browser_1" />
						Firefox
					</label> <br />   
					<label>
					<input type="radio" name="browser" value="safari" id="browser_2" />
						Safari
					</label><br />	
					<label>
					<input type="radio" name="browser" value="opera" id="browser_3" />
						Opera
					</label><br />
					<label>
					<input type="radio" name="browser" value="chrome" id="browser_4" />
						Chrome
					</label><br />	
					<label>Reasons:</label><br />
					<textarea rows="5" cols="25" name="reason"></textarea>
					<br />
					<input class="submit" type="submit" name="submit" value="Submit" />	

					<?php
					//Establishing Connection with Server
					require_once('Connections/conn_vote.php');

					if(isset($_POST['submit'])){
					//Fetching variables of the form which travels in URL
					$name = $_POST['name'];
					$email = $_POST['email'];
					$browser="";
					if(isset($_POST['browser'])){  //eleminate warnings
					$browser = $_POST['browser'];
					}
					$reason = $_POST['reason'];
					if($name !='' || $email !=''){
					//Insert Query of SQL
					$query = mysql_query("insert into poll(name,email,browser,reason) values ('$name', '$email', '$browser', '$reason')");
					
					}
					
					}
					if (isset($_POST['submit']) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["browser"]) && !empty($_POST["reason"]))
					{   
					?>
				   <script type="text/javascript">
				   window.location = "results.php";
				   </script>      
					<?php
					}
					if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["browser"]) && !empty($_POST["reason"])){ 
					 require_once('mail.php');
					}	
					//Closing Connection with Server
					mysql_close();
					?>					
				</form>
			</div>
			<div class="formget"><a href=http://www.thedatinglab.com><img src="tll_promo.gif" alt="datinglab"/></a>
			</div>
		</div>
    </body>
</html>