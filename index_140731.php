<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Low Tide - Archive | Book</title>
<link rel="icon" type="image/png" href="favi.png" />
<!--<base href="lowtide.org" />-->
<meta name="Generator" content="General Websites Berlin" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
<!-- 

if (screen.width <= 780) {
document.location = "mobile/index.html";
}

//-->
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> </script>
<script type="text/javascript"src="js/queryloader2.js" ></script>
<script type="text/javascript"src="js/script.js" ></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/softscroll.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>

<link rel="stylesheet" type="text/css" href="css/lowtide_style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/gallery.css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'/>

<!--<script type='text/javascript'> SoftScroll.scrollTo(1650, 5250); // NOTE: This is overridden by #anchor in the URL </script>-->
</head>

<body class="index">
<div id="background">
    <div id="menu">
      <ul id="tabs">
        <li class="accordionButton">
          <a href="#home" rel="xhome" class="selected" title="home">
          <span class="lowtide">Low Tide</span>
          <span class="hbwaters">Humboldt Bay Waters</span>
          </a>
        </li>
        <li><span class="maps">published maps</span>
            <span class="graphs">graphs and photos</span>
            <span class="years">1800s-2010s</span></li>

        <li>&nbsp;</li>
        <li class="accordionButton main_item"><a title="overview">Overview</a></li>
        <li class="accordionContent">
          <ul>
        <li class="main_item accordionButton"><a href="#about" rel="xabout" title="about">About</a></li>
        <li class="main_item accordionButton"><a href="#producers" rel="xproducers" title="producers">Producers</a></li>
        <li class="main_item accordionButton"><a href="#support"  rel="xsupport" title="support">Support</a></li>
        <li class="accordionButton main_item"><a title="samples">Samples</a></li>
        <li class="accordionContent">
          <ul>
            <li><a href="#engineering" rel="engineering" title="engineering">engineering</a></li>
            <li><a href="#view" rel="view" title="view">views</a> </li>
            <li><a href="#history" rel="history" title="history">histories</a></li>
            <li><a href="#life" rel="life" title="life">life</a></li>
          </ul>
        </li>
          </ul>
        </li>
        <li class="main_item accordionButton"><a href="/exhibits.php" title="exhibits">Exhibits</a></li>

        <li class="main_item accordionButton"><a href="#contact" rel="xcontact" title="contact">Contact</a></li>
        <li class="main_item accordionButton"><a href="https://www.facebook.com/LowTideBook" rel="me" title="FACEBOOK &ndash; Low Tide" target="_blank" ><span class="social-media">Facebook</span><img src="images/facebook-icon.png" /></a></li>
      </ul>
    </div> 
        <div id="home" >
        <div class="home center"><p></p></div>
        <div id="xhome" class="tabcontent">&nbsp;</div></div>
        
        <div id="about">
        <div class="about center">
        <?php include "PAGES/about.php";?>
        </div>
        <div id="xabout" class="tabcontent">&nbsp;</div></div>



        <div id="support">
        <div class="support center">
		<?php include "PAGES/support.php";?>
        </div><div id="xsupport" class="tabcontent">&nbsp;</div></div>

 

        <div id="producers">
        <div class="producers center">
		<?php include "PAGES/producers.php";?>
        </div><div id="xproducers" class="tabcontent">&nbsp;</div></div>

 

        <div id="contact">
        <div class="contact center">
        <?php include "PAGES/contact.php";?>
		</div> 
        </div><div id="xcontact" class="tabcontent" >&nbsp;</div></div>
        
        <div id="exhibits" >
        <div class="exhibits"><?php include "/exhibits.php";?></div>
        <div id="xhibits" class="tabcontent">&nbsp;</div></div>

        

    <div id="engineering" class="tabcontent">
        <div class="engineering">
            <div class="documents_gallery">
               <div class="gallery_background">
	        	<?php include "GALLERIES/engineering.php";?>
	           </div>
	<div class="galleryclear">&nbsp;</div>

        	   <div class="gallery_background">
        		<?php include "GALLERIES/harbor_marina.php";?>
			   </div>

   <div class="galleryclear">&nbsp;</div>

        </div></div></div>
        <!--End Engineering-->



<div id="view" class="tabcontent">
    	<div class="view">
			<div class="documents_gallery">
				<div class="gallery_background">
					<?php include "GALLERIES/view.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div> 

         </div></div></div>
         <!--End View-->

       
	<div id="history" class="tabcontent">
		<div class="history">
			<div class="documents_gallery">
				<div class="gallery_background">
					<?php include "GALLERIES/coy.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div>

        		<div class="gallery_background">
					<?php include "GALLERIES/atlas.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div>

        		<div class="gallery_background">
					<?php include "GALLERIES/madaket.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div>

        </div></div></div>
        <!--End History-->

        

	<div id="life" class="tabcontent">
    	<div class="life">
        	<div class="documents_gallery">
				<div class="gallery_background">
					<?php include "GALLERIES/natural_resources.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div> 

        		<div class="gallery_background">
					<?php include "GALLERIES/fishes.php";?>
				</div>
	<div class="galleryclear">&nbsp;</div> 

        </div></div></div>
         <!--End Life-->
         
         

</div>
 <!--End Background-->





<script type="text/javascript">// <![CDATA[
var countries=new ddtabcontent("tabs")
countries.setpersist(false)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
// ]]></script>




</body>
</html>