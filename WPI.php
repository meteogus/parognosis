

<html><head><title>WPI EXP meteo maps</title>
<script src="http://www.meteovolos.gr/Javascripts/jquery-2.1.1.min.js"></script>
<script src="http://www.meteovolos.gr/Javascripts/jquery.detect_swipe.js"></script>
<script src="http://www.meteovolos.gr/Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.meteovolos.gr/Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="http://meteovolos.gr/meteo.png">
<style type="text/css">
*,body style="background-color:powderblue;"> {
font-weight: none;
font-family: arial, sans-serif;
font-size:12pt;
}
 

a {
font-size:19px;
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
        {   title: "EastMed WPI",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/forecast/HERMES/GRE/WPI/WPI_GR-2km-T",
            extension: ".png",
            minval: 3,
            maxval: 84,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "EU WPI",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/forecast/HERMES/GRE/WPI/WPI_MED-6km-T",
            extension: ".png",
            minval: 3,
            maxval: 84,
            increment:3,
        });
</script>



</head>
<body>
<div style="text-align:center; font-size:18px"><a href="http://www.meteo.gr">Meteo Gr homepage</a></div>
<br />
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>Domains:&nbsp;
<a href="http://meteovolos.gr/BOLAM_GR.php">GREECE</a> &nbsp;
<a href="http://meteovolos.gr/BOLAM_ATTICA.php">	ATTICA</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_Thessaloniki.php">	Thessaloniki</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_Thessaly.php">	Thessaly</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_CRETE.php">	CRETE</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_SOUTH.php">	SOUTH</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_NORTH.php">	NORTH</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_WEST.php">	WEST</a>&nbsp;
<a href="http://meteovolos.gr/BOLAM_EU.php">	EUROPE</a>&nbsp;
<a href="http://meteovolos.gr/ICON_GR.php">	ICON GR</a>&nbsp;
<a href="http://meteovolos.gr/DUST.php">WRF-CHEM</a>&nbsp;
<a href="http://meteovolos.gr/HERMES_GR.php">HERMES GR</a>&nbsp;
 </p>
    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>Global models:&nbsp;
<a href="http://meteovolos.gr/GFS_EM.php">GFS EM</a>&nbsp;
<a href="http://meteovolos.gr/GFS_GR.php">GFS GR</a>&nbsp;
<a href="http://meteovolos.gr/GFS_EU.php">GFS EU</a>&nbsp;
<a href="http://meteovolos.gr/Obs_GR.php">Observations</a>&nbsp;
    </div>
</div>

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>
