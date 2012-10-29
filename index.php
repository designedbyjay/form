<?php 

/*	//what we did in class check if $_POST Variable we want is present
	if( isset($_POST['fname']) == true ){ //check to see if we have post['fname']
		
		$post = true;	
	
	}elseif( isset( $_GET['fname'] ) == true ){
	
		$get = true;
	
	}
*/

	//What we do to check // $_POST & $_GET 
	//they are arrays so we check the size of the array

	//Test get and posts yourself by uncommenting echos
	//echo 'Post size: '.sizeof($_POST).'<br>';
	//echo 'Get size: '.sizeof($_GET).'<br>';

	if( sizeof($_POST)> 0){
		//echo 'post data';
		$post = true; //create a variable named $post - different from $_POST
	}elseif( sizeof($_GET)>0){
		//echo 'get data';
		$get = true;
	}
		

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		
		<title>Get in touch form.</title>
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/main.js"></script>

	</head>
	<body>
	<!-- after submission-->
	<?php if($post == true){  ?>
		<h1>Thanks <?php echo $_POST['fname']; ?> !</h1>
		<h2> We're one step closer in connecting and discussing <span>great ideas</span> that can <em>make a difference</em>.</h2>
		<h3>Return to my portfolio at <a href="http://www.designedbyjay.com">designedbyjay.com</a> or see what's the latest and greatest by visiting my <a href="http://www.designedbyjay.tumblr.com">tumblr.</h3>
		<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e56a8b8090e6aa6"></script><!-- AddThis Button END -->
		
				
	<?php }else{ ?>
		<h1>Get in touch</h1>
		
		<section id="container">
			<p id="intro">Getting in touch with me easy. Keeping the conversation going is questionable. Let's start by connecting below:  
			</p>
			
			<!--Sign up for mailing list-->
			<p id='extraBlurb'>
			<label for="stuff"> Sign up to hear about new projects?</label>
			<label for="stuff">   Yes</label>
			<input id="stuff" name="stuff" type="checkbox" value="yes"/>
			<label for="stuff"> No</label>
			<input id ="stuff" name="stuff" type="checkbox" value="no"/>
			</p>


			<!-- form begins here -->
			<form id="information" method="post" action="">
		
				<p>
			<label class="labelforQuestion" for="fname"> Your Name</label>
			<input id="fname" name="fname" value="" placeholder="John Smith" type="text"/>
			</p>
			<p>
			<label class="labelforQuestion" for="email"> E-mail</label>
			<input id="email" name="email" value="" placeholder="jsmith@gmail.com" type="email"/>
			</p>
			<p>
			<label class="labelforQuestion" for="site"> Website</label>
			<input id="site" name="site" value="http://" placeholder="www.jsmithallday.com" type="url"/>
			</p>
			
			<p>
			<label class="labelforQuestion" for="twitter"> Twitter</label>
			<input id="twitter" name="twitter" value="@" placeholder="@jsmithswag" type="text"/>
			</p>


			
			<label id="message" for="message"> Message: </label>
			<textarea id="message" name="message"  placeholder="Let's ..." /></textarea>
		

			<p id="submit_button">
				<input id="submit" name="submit" type="submit" value="Submit"/>
			</p>
			</form>
			
	<?php } ?>
		
	</body>
</html>