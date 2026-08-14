<html><head><title>z500 (00z)</title>
<script src="https://meteogus.github.io/parognosis/Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://meteogus.github.io/parognosis/Javascripts/jquery.detect_swipe.js"></script>
<script src="https://meteogus.github.io/parognosis/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://meteogus.github.io/parognosis/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://meteogus.github.io/parognosis/meteo.png">
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
        {   title: "GFS",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSOPEU00_",
            extension: "_1.png",
            minval: 0,
            maxval: 144,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "ECMWF",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/ECMOPEU00_",
            extension: "_1.png",
            minval: 0,
            maxval: 144,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "AIFS",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/AIFSOPEU00_",
            extension: "_1.png",
            minval: 0,
            maxval: 144,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "UKMO",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/UKMHDOPEU00_",
            extension: "_1.png",
            minval: 0,
            maxval: 144,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "ICON",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/ICOOPEU00_",
            extension: "_1.png",
            minval: 0,
            maxval: 144,
            increment:6,
        });
        
</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Global models:&nbsp;
<a href="https://meteogus.github.io/parognosis/00z_z500.php">z500 (00z)</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/06z_z500.php">z500 (06z)</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/12z_z500.php">z500 (12z)</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/18z_z500.php">z500 (18z)</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/longterm.php">5-12d </a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_GR.php" style="color:red;">PARAMETERS</a>&nbsp;&nbsp;&nbsp;&nbsp;



    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Precipitation:&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs0-3.php">GFS 0-3</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs3-5.php">GFS 3-5</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/ecmwf0-5.php">ECMWF 0-5</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/icon.php">ICON</a>&nbsp;&nbsp;&nbsp;&nbsp;

    </div>
</div>

<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Spreads:&nbsp;
<a href="https://meteogus.github.io/parognosis/ecmwf00z.php">ECMWF 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/ecmwf12z.php">ECMWF 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs00z.php">GFS 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs06z.php">GFS 06z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs12z.php">GFS 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis/gfs18z.php">GFS 18z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<p>
    </div>
</div>


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>
