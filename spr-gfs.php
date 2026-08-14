<html><head><title>AVG GFS</title>
<script src="https://github.com/meteogus/parognosis/Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://github.com/meteogus/parognosis/Javascripts/jquery.detect_swipe.js"></script>
<script src="https://github.com/meteogus/parognosis/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://github.com/meteogus/parognosis/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://github.com/meteogus/parognosis/meteo.png">
<style type="text/css">
*,body {
font-weight: none;
font-family: arial, sans-serif;
font-size:6pt;
}


a {
font-size:16px;
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
            maxval: 384,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "SPR 06z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSSPREU06_",
            extension: "_1.png",
            minval: 24,
            maxval: 384,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "SPR 12z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSSPREU12_",
            extension: "_1.png",
            minval: 24,
            maxval: 384,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "SPR 18z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/GFSSPREU18_",
            extension: "_1.png",
            minval: 24,
            maxval: 384,
            increment:24,
        });

</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
<a href="https://github.com/meteogus/parognosis/z500.php">z500</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/t850.php">t850</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/gfs0-4.php">GFS 0-4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/gfs4-10.php">GFS 4-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/gfs10-16.php">GFS 10-16</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/ecmwf0-6.php">ECMWF 0-6</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/ecmwf6-10.php">ECMWF 6-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/ecmwf00z.php">ECMWF 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/ecmwf12z.php">ECMWF 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/spr-gfs.php">SPR GFS</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/gem.php">GEM</a>&nbsp;&nbsp;&nbsp;
<a href="https://github.com/meteogus/parognosis/icon.php">ICON</a>&nbsp;&nbsp;&nbsp;&nbsp;
 </p>

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>



