<html><head><title>GFS 00z</title>
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
        {   title: "SPR 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSSPREU00_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "OPER 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSOPEU00_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "CONTROL 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSC00EU00_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "AVG 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSAVGEU00_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });

</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Global models:&nbsp;
<a href="https://grhost.info/parognosis/z500.php">z500</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/t850.php">t850</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/BOLAM_GR.php" style="color:red;">PARAMETERS</a>&nbsp;&nbsp;&nbsp;&nbsp;



    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Precipitation:&nbsp;
<a href="https://grhost.info/parognosis/gfs0-3.php">GFS 0-3</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs3-10.php">GFS 3-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/ecmwf0-5.php">ECMWF 0-5</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/ecmwf5-10.php">ECMWF 5-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/icon.php">ICON</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</div>

<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Spreads:&nbsp;
<a href="https://grhost.info/parognosis/ecmwf00z.php">ECMWF 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/ecmwf12z.php">ECMWF 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs00z.php">GFS 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs06z.php">GFS 06z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs12z.php">GFS 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs18z.php">GFS 18z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<p>
    </div>
</div>


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>
