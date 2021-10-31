
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE]> 
  <xml:namespace ns="urn:schemas-microsoft-com:vml" prefix="v"/> 
<![endif]-->
<head>
<title></title>
<meta http-equiv="Content-Language" content="en"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<style type="text/css">
    html {overflow:hidden; height: 100%;}
    body {height:100%; width:98%;}
    v\:* {
      behavior:url(#default#VML);
    }
</style>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="google-maps-utility/markerclusterer_packed.js" type="text/javascript"></script>
<script src="google-maps-utility/keydragzoom_packed.js" type="text/javascript"></script>
<script src="scripts/script.js" type="text/javascript"></script>
<script src="scripts/gmap_data.js" type="text/javascript"></script>
<script type='text/javascript' src="scripts/jquery.min.js"></script>
<script type='text/javascript'>
var heading={Individual:'Places in the life of {}',
              Family:'Places associated with the family of {}'};
var loaded=false
var param=getArgs();
// get Google Map marker info
$.ajaxSetup({async: false});
$.getScript('scripts/'+param.classId.toLowerCase()+'_map-'+param.id+'.js');
$.ajaxSetup({async: true});
$(function () {
           $('#subtitle').text(heading[param.classId].replace('{}', param.name));
           PageInit(true);
           loaded=true;
           showPopUpFrame();
           initGoogleMap();
           makeGoogleMap();
           window.onresize=initGoogleMap;
        }
);
</script>
</head>
<body class='gno-popup'>
<div class='curvyboxbackground'>
 <div class='curvycorners_box'>
  <div class='curvycorners_top'><div></div></div>
   <div class='curvycorners_content'>

<div class='floatright'>
	<img src="images/maximize.gif" class="control24" name="togglePopUp" onclick="javascript:togglePopUpFrame(this.name);" alt="Click to enlarge/reduce the size of this popup frame" title="Click to enlarge/reduce the size of this popup frame"/>
	<img src="images/close.gif" class="control24" onclick="hidePopUpFrame(event);" alt="Hide this popup frame" title="Hide this popup frame"/>
</div>
<h3 id='subtitle'></h3>
<div style='text-align: center;'><div class='googlemap' id='GoogleMap'></div></div>
   </div>
  <div class='curvycorners_bottom'><div></div></div>
 </div>
</div>

<div id='divFrameset' class='hide'> <hr /><p><br />
This page is within a frameset. <b><a target='_top' href='default.htm'>View the entire genealogy report of </a></b>, or <a href='toc_individuals.htm'>surname index</a> or <a href='home.htm'>report summary</a>.<br /><a href="http://www.genopro.com/genogram/templates/" title="Sample genogram templates you can use" target="_Blank">Genogram Templates</a>.</p><hr /><br /><p class='aligncenter'><small>Copyright © 2011 GenoPro Inc. All rights reserved.</small></p></div>
</body>
</html>