<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Donna Bernstein Fine Art</title>
<link href="donna.css" rel="stylesheet" type="text/css">
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.gaga #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.gaga #sidebar1 { padding-top: 30px; }
.gaga #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<!-- Lightwindow support files (css and javascript libraries) -->
  <link rel="stylesheet" type="text/css" href="css/lightwindow.css" />
    
	<!-- JavaScript -->
	<script type="text/javascript" src="javascript/prototype.js"></script>
	<script type="text/javascript" src="javascript/effects.js"></script>
	<script type="text/javascript" src="javascript/lightwindow.js"></script>
<!-- end of head block for lightwindow support files -->
</head>

<body class="gaga">

<div id="container">
  <img src="images/secondary_contact.jpg" alt="Donna Bernstein Fine Art" width="985" height="171" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="10,5,152,164" href="index.php" />
    <area shape="rect" coords="557,11,987,55" href="index.php" />
    <area shape="rect" coords="152,68,290,98" href="urban.php" />
    <area shape="rect" coords="598,71,729,101" href="sculptures.php" />
    <area shape="rect" coords="765,73,970,101" href="illustrative.php" />
    <area shape="rect" coords="317,70,572,99" href="abstract.php" />
    <area shape="rect" coords="764,123,873,152" href="bio.php" />
    <area shape="rect" coords="926,139,928,140" href="#" />
    <area shape="rect" coords="890,121,972,156" href="contact.php" />
  </map><br /><br /><table cellpadding="15" cellspacing="15" width="900" class="text"><tr><td align="left" valign="top">

<p>
  <SCRIPT LANGUAGE=JAVASCRIPT TYPE="TEXT/JAVASCRIPT">
	// Lida: make a 1 to 1 correspondence between the images in 'myPix' to the caption
	// information in 'myPixData', as in the example. Note that quotation marks
	// should be written as &quot;
	
	myPix = new Array(   "images_book/book9.jpg",
												
												"images_book/book2.jpg",
												"images_book/book3.jpg",
												"images_book/book4.jpg",
												"images_book/book5.jpg",
												"images_book/book6.jpg",
												"images_book/book7.jpg",
												"images_book/book8.jpg",
												"images_book/book1.jpg"
												
												
										 )
	myPixData = new Array(
												"<I>Cover</I>",
												"<I>Inside flap</I>",
												"<I>Inside page</I>",
												
												"<I>Urban Collection</I>",
												"<I>Abstract Collection</I>",
												"<I>Sculptures</I>",
												
												"<I>Illustrative Collection</I>",
												"<I>Donna B- Artist</I>",
												"<I>Back Cover</I>"
											
												
												);
	var thisPic = 0;
	var imgCt = myPix.length - 1;

	function chgSlide(direction) {
		if (document.images) {
			thisPic = thisPic + direction
			if (thisPic > imgCt) {
				thisPic = 0
			}
			if (thisPic < 0) {
				thisPic = imgCt
			}
			document.myPicture.src=myPix[thisPic]
			displaySlideCaption(myPixData[thisPic]);
		}
	}

	function returnObjById( id ) 
	{ 
	    if (document.getElementById) 
	        var returnVar = document.getElementById(id); 
	    else if (document.all) 
	        var returnVar = document.all[id]; 
	    else if (document.layers) 
	        var returnVar = document.layers[id]; 
	    return returnVar; 
	}
	
	function displaySlideCaption( caption )
	{
	    var divElement = returnObjById("picinfo");
	    if (divElement)
	    {
	        divElement.innerHTML = divElement.innerHTML = caption; 
	    }
	}
	
		function firstCaption()
	{
	    var divElement = returnObjById("picinfo");
	    if (divElement)
	    {
	        divElement.innerHTML = divElement.innerHTML = myPixData[0]; 
	    }
	}
	// End hiding script from old browsers -->
	// ******************************************************
// this section is for the second slideshow:
// *

myPix_1 = new Array(    "images_book/book2a.jpg",
												"images_book/book2b.jpg",
												"images_book/book2c.jpg",
												"images_book/book2d.jpg",
												"images_book/book2e.jpg",
												"images_book/book2f.jpg"
												
												
									  )
	myPixData_1 = new Array(
												"<I>The Horses of My Imagination</I>",
												"<I>Front Cover</I>",
												"<I>Limited Edition Artist Signature</I>",
												"<I>Inside Page - Pink Ponies</I>",
												"<I>Inside Page Sample</I>",
												"<I>Back Cover</I>"
												
												);
// end of arrays for slideshow 2

	var	thisPic_1 = 0;
	var imgCt_1 = myPix_1.length - 1;

	function chgSlide_1(direction) {
		if (document.images) {
			thisPic_1 = thisPic_1 + direction;

			if (thisPic_1 > imgCt_1) {
				thisPic_1 = 0;
			}
			if (thisPic_1 < 0) {
				thisPic_1 = imgCt_1;
			}
			document.myPicture1.src=myPix_1[thisPic_1];
			displaySlideCaption_1(myPixData_1[thisPic_1]);

		}
	}


	// ******************************************************
	</SCRIPT>
  <strong>ARTIST BOOKS</strong><br /><br />
  "<strong>Donna B Fine Art - Collections</strong>" is a beautifully photographed selection of many of Donna's works, including "Urban Equine" paintings, "Abstract & Landscape" paintings, "Sculptures", and "Illustrative Equines" works on paper.<br /><br />
  
  Comprised of 54 pages, each book is personally signed by the Artist, and can be inscribed as well at your request.<br /><br />
  
  $55.00 plus $8.95 shipping and handling.<br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<br />
  
  You can also contact me by phone or email to order.<br />
  All major credit cards accepted.<br /><br />

<div align="center">
  <img src="images_book/book9.jpg" name="myPicture" width="500" height="400" border="0" />
  <div id="picinfo" class="text">Cover</div>
<a class="linktext" href="javascript:chgSlide(-1)"><strong>&lt;</strong>&nbsp;&nbsp;</a><a class="linktext" href="javascript:chgSlide(1)"><strong>&gt;</strong></a>

<br /><br />
<hr color="#339999" width="400" /></div>

<br /><br />

<strong>"The Horses of My Imagination"</strong> is a brilliant and joyful book of Donna's "Illustrative Equines"; the horses she creates quickly and intuitively. Sketched in bold colors that reflect the emotions of each picture and each individual horse, the personalities, physiques, and stylistic movements are drawn loosely and naturally, as if the horses appeared fully formed through her fingers to the pen.<br /><br />

This is a Signed, Numbered, Limited Edition of 100 books only. Once that number is fulfilled, the book as it is will no longer be available.<br /><br />

$75.00 plus $8.95 shipping and handling.<br /><br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<br />

You can also contact me by phone or email to order.<br />
All major credit cards accepted.<br /><br />

<div align="center"><img src="images_book/book2a.jpg" name="myPicture1" width="500" height="332" border="0" />
  <div id="picinfo_1" class="text">The Horses of My Imagination</div>
<a class="linktext" href="javascript:chgSlide_1(-1)"><strong>&lt;</strong>&nbsp;&nbsp;</a><a class="linktext" href="javascript:chgSlide_1(1)"><strong>&gt;</strong></a></div>
</td></tr></table>

<br /><br /><br /><br /><br />
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
<?php include("footer.html"); ?><!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
