

<html><head><title>HERMES Greece</title>
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
        {   title: "3-hr Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/SLPRAIN/WRF-SlpRain-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
                 useroptions['content'].push(
        {   title: "3-hr Max dBz",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/REFL/WRF-Refl-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
                    useroptions['content'].push(
        {   title: "Wind 10m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/WIND/WRF-Wind-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Lightnings",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/LTNG/WRF-Ltng-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Cloud cover",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/OLR/WRF-Olr-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
        useroptions['content'].push(
        {   title: "2-m Temperature",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(6,96,3) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/TEMP/WRF-Temp-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Temp 850 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(12,96,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/TEMP850/WRF-Temp850-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Temp 500 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/TEMP500/WRF-TempHgt500-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
    useroptions['content'].push(
        {   title: "RH & Wind 700 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/RHWIND700/WRF-RhWind700-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "MUCAPE",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/HERMES/GRE/CAPE/WRF-Cape-2km-T",
            extension: ".png",
            minval: 12,
            maxval: 84,
            increment:3,
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

