<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/style.css">
		<link href="/blog/atom.xml" type="application/atom+xml" rel="alternate" title="Sitewide ATOM Feed" >
		<title>Erik Verlage - mailer</title>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21184326-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script type="text/javascript" src="/plugins/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<link rel="stylesheet" href="/plugins/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="/" id="logo">Home</a></li>

                </ul>
			</nav>

            <nav id="rightlist">
                <ul vertical-align="middle">
                    
                    <li><a href="/education.html">Education</a></li>
                    <li><a href="/projects.html">Portfolio</a></li>
                    <li><a href="/research.html">Research</a></li>
                    <li><a href="/publications.html">Publications</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- 2016-06-18 Got rid of search bar -ERIK
			<form method="GET" action="http://www.google.com/search" id="searchform">
				<input name="q" type="search" placeholder="Search...">
				<input name="sitesearch" type="hidden" value="hillcrestlab.com">
			</form>
            -->
		</header>
        


		<div id="container">
			<?php
$to = "info@hillcrestlab.com"; // all messages go to my inbox
$reply_to = $_POST['email']; // the person that used the form to send a message. So I can reply to the person from my mail client if need be
$message = $_POST['message'];
$subject = $_POST['subject'];
$headers = "From:$from\r\nReply-To:$reply_to\r\n\r\n";
$success = mail($to, $subject, $message, $headers);
?>

		<h1><?php if ($success) echo 'Mail Sent'; else echo 'Your Message was Not Sent'; ?></h1>
		<div>
			<?php
			if ($success) {
				echo '
				Your message was successfully sent!
				';
			} else {
				echo '
				There was a problem (on our end) sending your message. Sorry. A copy of your message has been placed on this page so your hard work doesn\'t go to waste.
				
				<p>$message</p>
				';
			}
			?>
		</div>
		
		<a href="contact.html">Back to Contact Page</a>
		</div>
		


	</body>
</html>
