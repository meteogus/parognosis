

<html><head><title>MOLOCH Greece</title>
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
        {   title: "3-hr Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_totpcp_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Total Accum. Precip",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_Accum_Precip_GR_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Wind 10m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_wind10_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Wind 10m (kt)",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_wind10_KN_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                    useroptions['content'].push(
        {   title: "Gusts 10m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_gust10_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                                    useroptions['content'].push(
        {   title: "Wind10m Attica",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/Wind10_Attica_topo_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                            useroptions['content'].push(
        {   title: "Wind10m Crete",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/Wind10_Crete_topo_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                                    useroptions['content'].push(
        {   title: "Wind10m Cyclades",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/Wind10_Cyclades_topo_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });

                    useroptions['content'].push(
        {   title: "Temp 2m",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_t2m_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                            useroptions['content'].push(
        {   title: "SWR",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_SW_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
            increment:3,
        });
                                    useroptions['content'].push(
        {   title: "LCL",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/MOLOCH/mol_LCL_f_",
            extension: ".png",
            minval: 3,
            maxval: 72,
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

