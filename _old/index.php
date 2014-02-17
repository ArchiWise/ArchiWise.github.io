<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>archiwise.com</title>

  <link rel="stylesheet" type="text/css" href="archiwise.css">
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19062784-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

   </script>
  
</head><body>

<div id="wrapper">

<div id="logodiv"><img alt="archiwise.com logo" width="40%" src="logoDark.png"/></div>
<div id="menu">
<ul>
<li><a href="index.php?page=home">Home</a></li>
<li><a href="index.php?page=services">Services</a></li>
<li><a href="index.php?page=news">News</a></li>
<li><a href="index.php?page=references">References</a></li>
<li><a href="index.php?page=about">About Us</a></li>
<li><a href="index.php?page=contact">Contact</a></li>
</ul>
</div>

<div id="maincontent"> 

<?php 

$page = $_GET['page'];

switch ($page) {
 	case "about":
        require("inc_about.php");
        break;
    case "services":
        require("inc_services.php");
        break;
	case "contact":
        require("inc_contact.php");
        break;
    case "news":
        require("inc_news.php");
        break;
    case "references":
        require("inc_references.php");
        break;
    default:
    	require("inc_home.php");
}
?>

</div>

<div id="footer">&copy; archi<b>wise</b> bvba. Contact us at <SCRIPT TYPE="text/javascript">
<!-- 
addd=('in' + 'fo@' + 'archi' + 'wise.com')
document.write('<A href="mailto:' + addd + '">' + addd + '</a>')
 //-->
</script>
<NOSCRIPT>
    <em> [email address protected, please enable JavaScript] </em>
</NOSCRIPT> or call +32 (0) 486 88 41 36.</div>

</div>


<div id="headerLineLogo"> </div>
<div id="headerLineMenu"> </div>

</body></html>