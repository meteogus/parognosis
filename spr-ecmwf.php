<html><head><title>AVG ECMWF</title>
<script src="https://grhost.info/parognosis/Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://grhost.info/parognosis/Javascripts/jquery.detect_swipe.js"></script>
<script src="https://grhost.info/parognosis/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://grhost.info/parognosis/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://grhost.info/parognosis/meteo.png">
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
            prefix : "https://www.wetterzentrale.de/maps/ECMSPREU00_",
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
            prefix : "https://www.wetterzentrale.de/maps/ECMOPEU00_",
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
            prefix : "https://www.wetterzentrale.de/maps/ECMAVGEU00_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "SPR 12z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/ECMSPREU12_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "OPER 12z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/ECMOPEU12_",
            extension: "_1.png",
            minval: 24,
            maxval: 240,
            increment:24,
        });
            useroptions['content'].push(
        {   title: "AVG 12z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://www.wetterzentrale.de/maps/ECMAVGEU12_",
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
<a href="https://grhost.info/parognosis/z500.php">z500</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/t850.php">t850</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs0-4.php">GFS 0-4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs4-10.php">GFS 4-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gfs10-16.php">GFS 10-16</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/ecmwf0-6.php">ECMWF 0-6</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/ecmwf6-10.php">ECMWF 6-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/gem.php">GEM</a>&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/icon.php">ICON</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/spr-gfs.php">SPR GFS</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://grhost.info/parognosis/spr-ecmwf.php">SPR ECMWF</a>&nbsp;&nbsp;&nbsp;&nbsp;
 </p>

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>



