<?PHP
if (isset($_REQUEST['contacttype'])) {
  mail("dr.mark.sales@gmail.com", "Stormweaver Contact-form submission",
      "Contact Type: ".$_REQUEST['contacttype']."\n".
      "Person: ".$_REQUEST['person_name']."\n".
      "Business: ".$_REQUEST['business_name']."\n".
      "Phone: ".$_REQUEST['phone']."\n".
      "Email: ".$_REQUEST['email']."\n".
      "Desc1: ".$_REQUEST['business_desc']."\n".
      "Desc2: ".$_REQUEST['objectives']."\n".
      "Pref:".$_REQUEST['compref']."\n",
      "From: info@stormweaver.com");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<script src="javascript/main.js" type="text/javascript" ></script>
<title>Stormweaver Programming &amp; Consulting - Contact</title>
</head>

<body>
<div id="page">

<div id="navigation">

<div id="topbar_left"></div>
 <div id="topbar_search">
 <!--
  <form action="#">
   <fieldset><input type="text" name="search" />Search</fieldset>
  </form>
  -->
  <span></span><!-- elastic -->
 </div><!-- search -->

 <ul id="menu">
  <li >
   <a href="index.html">Home</a>
  </li>
  <li >
   <a href="services.html">Services</a>
  </li>
  <li >
   <a href="clients.html">Clients</a>
  </li>
  <li >
   <a href="about.html">About</a>
  </li>
  <li class="on">
   <a href="contact.html">Contact</a>
  </li>
  <li class="extend"></li><!-- elastic -->
 </ul><!-- menu -->

 <div id="breadcrumb"> </div><!-- breadcrumb -->

</div><!-- navigation -->


<div id="main">

 <div id="content">
<p class="title">Contact Us</p>
  <p class="subtitle indent20">Thank you: your information has been received.  <br />We will get back to you shortly.</p><br />
<!-- whisper -->
</div><!-- content -->

 <div id="contact">
  <div id="contactname" >
   <p>Mark A. Sales, Ph.D.</p>
   <p class="sub">Owner, Stormweaver</p>
  </div><!-- nametile -->
  <h2><a href="contact.html">Setup a Free Consultation</a></h2>
  <p class="subtitle">(510) 932-9724</p>
 </div><!-- contact -->

 <div id="footer">
  <div>&copy; 2009 Stormweaver Programming
 <a href="http://www.bbb.org/greater-san-francisco/business-reviews/computer-consultant/stormweaver-programming-in-berkeley-ca-315287">BBB Accredited Business</a> | 
  <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fstormweaver.com/contact.html&amp;charset=(detect+automatically)&amp;doctype=Inline&amp;group=0">W3C Validated</a>
</div>

 </div><!-- footer -->

 <div class="clear"></div>
</div><!-- main_section -->


<div id="logo">
 <a href="index.html" title="Stormweaver Programming and Consulting"><img src="images/stormweaver_logo.png" width="154" height="109" alt="Stormweaver Programming and Consulting Logo" /></a>
</div><!-- logo -->

</div><!-- wrapper -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
  var pageTracker = _gat._getTracker("UA-12403357-1");
  pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
