

<html><head><title>BOLAM Europe</title>
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
        {   title: "3-hr Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_totpcp_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
                 useroptions['content'].push(
        {   title: "3-hr Rain-Snow",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_RR_SN_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });

                 useroptions['content'].push(
        {   title: "Total Accum Precip",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_AccumRain_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });  
                            useroptions['content'].push(
        {   title: "Clouds",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_cloud_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });   
                 useroptions['content'].push(
        {   title: "Wind 10m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_wind10_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
                 useroptions['content'].push(
        {   title: "Temp 2m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_t2m_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        }); 
            useroptions['content'].push(
        {   title: "Sea level pressure",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(12,96,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_mslp_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
 
    useroptions['content'].push(
        {   title: "Temperature 850 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_t850_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
    useroptions['content'].push(
        {   title: "GPH 500 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_g500_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
    useroptions['content'].push(
        {   title: "GPH 300 hPa",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_g300_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                   useroptions['content'].push(
        {   title: "Snow cover",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_snow_",
            extension: ".png",
            minval: 3,
            maxval: 96,
            increment:3,
        });
                            useroptions['content'].push(
        {   title: "Convective Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/c_conpcp_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        }); 
                           useroptions['content'].push(
        {   title: "Lightning prop",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/LIGHT_EU_",
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
<a href="https://meteogus.github.io/parognosis/BOLAM_GR.php">GREECE</a> &nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_ATTICA.php">ATTICA</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_Thessaloniki.php">SKG</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_NORTH.php">NORTH</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_SOUTH.php">SOUTH</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_WEST.php">WEST</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_Thessaly.php">THESSALY</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/BOLAM_CRETE.php">CRETE</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/noa.php">NOA</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/dust.php">Dust</a>&nbsp;

    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    <p>GLOBAL:&nbsp;
<a href="https://meteogus.github.io/parognosis/GFS_EM_panel.php">Synoptic</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/storms.php">Storms</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/snow.php">Snow</a>&nbsp;

<a href="http://www.simeteo.gr/forecast2/500.htm" target="_blank">z500</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/GFS_EM.php">More...</a>&nbsp;
<a href="https://meteogus.github.io/parognosis/z500.php" style="color:red;">COMPARISON</a>&nbsp;&nbsp;&nbsp;&nbsp;


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>

