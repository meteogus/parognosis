

<html><head><title>SiWRF</title>
<script src="https://grhost.info/parognosis/Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://grhost.info/parognosis/Javascripts/jquery.detect_swipe.js"></script>
<script src="https://grhost.info/parognosis/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://grhost.info/parognosis/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://grhost.info/parognosis/meteo.png">
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
        {   title: "Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://www.marousakis.gr/mapsgr/precipitation2_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "CAPE",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/cape2_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "SI",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/show2_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "Cloud cover",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/cloud2_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "t850",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/t850_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "Snow Level",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/snow_level2_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "Wind Attica",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/sfc-windbftath_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
         useroptions['content'].push(
        {   title: "T2m Attica",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.marousakis.gr/mapsgr/sfc-tt-ath_",
            extension: ".png",
            minval: 0,
            maxval: 38,
            increment:1,
        });
</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
   LAM:&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_GR.php">GREECE</a> &nbsp;
<a href="https://grhost.info/parognosis/BOLAM_ATTICA.php">ATTICA</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_Thessaloniki.php">SKG</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_NORTH.php">NORTH</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_SOUTH.php">SOUTH</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_WEST.php">WEST</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_Thessaly.php">THESSALY</a>&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_CRETE.php">CRETE</a>&nbsp;
<a href="https://grhost.info/parognosis/noa.php">NOA</a>&nbsp;
<a href="https://grhost.info/parognosis/simeteo_wrf.php">ECMWF</a>&nbsp;
<a href="https://grhost.info/parognosis/dust.php">Dust</a>&nbsp;

    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>GLOBAL:&nbsp;
<a href="https://grhost.info/parognosis/GFS_EM_panel.php">Synoptic</a>&nbsp;
<a href="https://grhost.info/parognosis/storms.php">Storms</a>&nbsp;
<a href="https://grhost.info/parognosis/snow.php">Snow</a>&nbsp;

<a href="http://www.simeteo.gr/forecast2/500.htm" target="_blank">z500</a>&nbsp;
<a href="https://grhost.info/parognosis/GFS_EM.php">More...</a>&nbsp;
<a href="https://grhost.info/parognosis/z500.php" style="color:red;">COMPARISON</a>&nbsp;&nbsp;&nbsp;&nbsp;


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>

