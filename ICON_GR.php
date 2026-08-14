

<html><head><title>ICON Greece</title>
<script src="https://github.com/meteogus/parognosis/Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://github.com/meteogus/parognosis/Javascripts/jquery.detect_swipe.js"></script>
<script src="https://github.com/meteogus/parognosis/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://github.com/meteogus/parognosis/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://github.com/meteogus/parognosis/meteo.png">
<style type="text/css">
*,body {
font-weight: none;
font-family: arial, sans-serif;
font-size:12pt;
}
 

a {
font-size:15px;
  text-decoration:underline;
}

a:hover {
  text-decoration: none;
}
</style>


<script>

useroptions = {};
useroptions.content = [];

         useroptions['content'].push(
        {   title: "3-hr Precip ICON",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/icon/GR/rain/ICON_3-hrPrecip_GR_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
                       useroptions['content'].push(
        {   title: "Snow cover ICON",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/icon/GR/snowcover/ICON_snowcover_GR_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
           useroptions['content'].push(
         {   title: "STEREA snow ICON",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/icon/GR/snowcover/ICON_snowcover_STEREA_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
        
                       
                     
        
</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
   LAM:&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_GR.php">GREECE</a> &nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_ATTICA.php">ATTICA</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_Thessaloniki.php">SKG</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_NORTH.php">NORTH</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_SOUTH.php">SOUTH</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_WEST.php">WEST</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_Thessaly.php">THESSALY</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/BOLAM_CRETE.php">CRETE</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/noa.php">NOA</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/dust.php">Dust</a>&nbsp;
    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>GLOBAL:&nbsp;
<a href="https://github.com/meteogus/parognosis/GFS_EM_panel.php">Synoptic</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/storms.php">Storms</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/snow.php">Snow</a>&nbsp;

<a href="http://www.simeteo.gr/forecast2/500.htm" target="_blank">z500</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/GFS_EM.php">More...</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/z500.php" style="color:red;">COMPARISON</a>&nbsp;&nbsp;&nbsp;&nbsp;


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>

