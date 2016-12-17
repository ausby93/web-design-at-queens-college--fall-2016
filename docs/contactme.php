<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Me</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	</head>
	<body>
		<!-- Page -->
		<div id="page">
			<!-- Header -->
			<div id="header">
				<!-- Navigation -->
					<div id="navigation">
					<ul>
					    <li class="active"><a href="../index.html">home</a></li>
					    <li><a href="aboutme.html">about</a></li>
					    <li><a href="portfolio.html">portfolio</a></li>
					    <li class="last"><a href="contactme.html">contact</a></li> </ul>
				</div>
				<!-- / Navigation -->
				<h1><a href="#">Corey Ausby</a></h1>
				<div class="description">
				  <p>Life where it stands</p>
				</div>
			</div>
			<!-- / Header -->
			
    <style>
body{width:414px;font-family:Arial;font-size:14px;}

label{color:#6c6c6c;}

input{line-height:31px;}

input,textarea{width:288px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:rgba(255,255,255,.6);border:solid 1px #b6c7cb;}

#contact_form{height:317px;background-color:#e1e9eb;border:solid 1px #e5e5e5;padding:10px 20px 50px 20px;  -webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}

#submit_button{width:109px;height:34px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:#86c5fa;-webkit-box-shadow:inset 0 2px rgba(255,255,255,.29);-moz-box-shadow:inset 0 2px rgba(255,255,255,.29);box-shadow:inset 0 2px rgba(255,255,255,.29);border:solid 1px #77a4cb;font-weight:bold;color:#fff;margin-left:7px;}

label.required:after{content:'*';color:red;}

.row{margin:5px;}
</style>

<?php
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 

    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Your name:</label><br />
			<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
		</div>
		<div class="row">
			<label for="email">Your email:</label><br />
			<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
		</div>
		<div class="row">
			<label for="message">Your message:</label><br />
			<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
		</div>
		<input type="hidden" name="action" value="submit"/>
		<input id="submit_button" type="submit" value="Send email" />
	</form>
    
<?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("ausby93@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>

        
            
			<!-- Content -->
			<div id="content">
				<div class="cl">&nbsp;</div>
				<div class="left-col separator">
					<h2>Welcome</h2>
					<p>Please look around and enjoy my site displaying some of work. This is a work in progress. Check out the about and portfilio tabs to see my work. Everything I do is for the sake my hobbies, cosplay and having a great time.</p>
					
				</div>
				<div class="right-col">
					<h2>Services</h2>
					<p>Those include the Adobe Suite, more on what I can in the about me page.</p>
					<h2>Social Media</h2>
					<ul class="linklist">
					    <li>FaceBook: <a href="#">Corey Ausby</a></li>
					    <li>Cosplay Page:<a href="#">Royal Heart Syndicate</a></li>
					    <li>Instagram: <a href="#">@aoisenko.</a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- / Content -->
			
		</div>
		<!-- / Page -->
	</body>
</html>