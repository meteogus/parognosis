
<html><head><title>Rain</title>
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
        {   title: "HERMES/WRF 2km",
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
        {   title: "BOLAM 6km",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/f_totpcp_f_",
            extension: ".png",
            minval: 6,
            maxval: 144,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "ICON-DWD 6km",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/icon/GR/rain/ICON_3-hrPrecip_GR_",
            extension: ".png",
            minval: 6,
            maxval: 96,
            increment:3,
        });  
            useroptions['content'].push(
        {   title: "MOLOCH 2km",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_totpcp_f_",
            extension: ".png",
            minval: 6,
            maxval: 69,
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
<a href="https://github.com/meteogus/parognosis/BOLAM_EU.php">EUROPE</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/ICON_GR.php">ICON</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/DUST.php">WRF-CHEM</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/HERMES_GR.php">HERMES</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/MOLOCH_GR.php">MOLOCH</a>&nbsp;

 </p>
    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>Domains:&nbsp;
<a href="https://github.com/meteogus/parognosis/gfs0-4.php" style="color:red;">COMPARISON</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/GFS_EM_panel.php">Synoptic maps</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/storms.php">Storms</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/snow.php">Snow</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/rain.php">Rain</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/hail.php">Hail</a>&nbsp;
<a href="http://www.simeteo.gr/forecast2/500.htm" target="_blank">z500</a>&nbsp;
<a href="https://www.weatheronline.gr/cgi-bin/expertcharts?LANG=gr&MENU=0000000000&CONT=grgr&MODELL=gfs&MODELLTYP=1&BASE=-&VAR=z500pr06t850&HH=0&ARCHIV=0&ZOOM=0&PERIOD=&PANEL=0&WMO=" target="_blank">Weatheronline</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/GFS_EU.php">GFS Europe</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/GR_precipitation.php">Observations</a>&nbsp;
<a href="https://github.com/meteogus/parognosis/GFS_EM.php">More...</a>&nbsp;
    </div>
</div>


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>

