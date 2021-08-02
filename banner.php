 <script language="JavaScript1.1">
<!--

//Pixelating Image slideshow
//Copyright Dynamic Drive 2001
//Visit http://www.systemtechsolution.com for this script

//specify interval between slide (in mili seconds)
var slidespeed1=3000
//specify images
var slideimages1=new Array("images/baner/baner1.jpg","images/baner/baner2.jpg","images/baner/baner3.jpg","images/baner/baner4.jpg","images/baner/baner5.jpg","images/baner/baner6.jpg")
//specify corresponding links
var slidelinks1=new Array("","","")

var imageholder1=new Array()
var ie551=window.createPopup
for (i=0;i<slideimages1.length;i++){
imageholder1[i]=new Image()
imageholder1[i].src=slideimages1[i]
}

function gotoshow1(){
window.location=slidelinks1[whichlink1]
}

//-->
</script>
    <style type="text/css">

#marqueecontainer{
position: relative;
width: 227px; /*marquee width */
height: 350px; /*marquee height */
background-color: #C2CDA0;
overflow: hidden;
border: 1px solid orange;
padding: 2px;
padding-left: 4px;
}

    </style>
 
  
<script type="text/javascript">

/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.sherwoodindia.in)
* This notice MUST stay intact for legal use
* Visit http://www.sherwoodindia.in/ for this script and 100s more.
***********************************************/

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>
<a href="javascript:gotoshow1()"><img src="images/baner/baner1.jpg" name="slide" border=0 style="filter:progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=15,Duration=1)"></a>

<script language="JavaScript1.1">
<!--
var whichlink1=0
var whichimage1=0
var pixeldelay1=(ie551)? document.images.slide.filters[0].duration*1000 : 0
function slideit1(){
if (!document.images) return
if (ie551) document.images.slide.filters[0].apply()
document.images.slide.src=imageholder1[whichimage1].src
if (ie551) document.images.slide.filters[0].play()
whichlink1=whichimage1
whichimage1=(whichimage1<slideimages1.length-1)? whichimage1+1 : 0
setTimeout("slideit1()",slidespeed1+pixeldelay1)
}
slideit1()

//-->
</script>
