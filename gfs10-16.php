<html><head><title>GFS 10-16 days</title>
<script src="https://meteogus.github.io/parognosis//Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://meteogus.github.io/parognosis//Javascripts/jquery.detect_swipe.js"></script>
<script src="https://meteogus.github.io/parognosis//Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://meteogus.github.io/parognosis//Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://meteogus.github.io/parognosis//meteo.png">
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
        {   title: "z500",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,16) ,
            prefix : "https://modeles16.meteociel.fr/modeles/gfs/run/gfs-0-",
            extension: ".png",
            minval: 168,
            maxval: 240,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "t850",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles16.meteociel.fr/modeles/gfs/run/gfs-1-",
            extension: ".png",
            minval: 168,
            maxval: 240,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "Precipitation_GR",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles2.meteociel.fr/modeles_gfs/run/",
            extension: "-779GR.GIF",
            minval: 168,
            maxval: 240,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "wind10m_GR",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles2.meteociel.fr/modeles_gfs/run/",
            extension: "-602GR.GIF",
            minval: 168,
            maxval: 240,
            increment:6,
        });
            useroptions['content'].push(
        {   title: "t850_GR",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles2.meteociel.fr/modeles_gfs/run/",
            extension: "-7GR.GIF",
            minval: 168,
            maxval: 240,
            increment:6,
        });

</script>

</head>
<body>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Global models:&nbsp;
<a href="https://meteogus.github.io/parognosis//z500.php">z500</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//t850.php">t850</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//BOLAM_GR.php" style="color:red;">PARAMETERS</a>&nbsp;&nbsp;&nbsp;&nbsp;



    </div>
</div>
<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Precipitation:&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs0-3.php">GFS 0-3</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs3-10.php">GFS 3-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//ecmwf0-5.php">ECMWF 0-5</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//ecmwf5-10.php">ECMWF 5-10</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//icon.php">ICON</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</div>

<div id='wrapper' style='text-align: center;'>
    <div style='display: inline-block; vertical-align: top;'>
    Spreads:&nbsp;
<a href="https://meteogus.github.io/parognosis//ecmwf00z.php">ECMWF 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//ecmwf12z.php">ECMWF 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs00z.php">GFS 00z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs06z.php">GFS 06z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs12z.php">GFS 12z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://meteogus.github.io/parognosis//gfs18z.php">GFS 18z</a>&nbsp;&nbsp;&nbsp;&nbsp;
<p>
    </div>
</div>


<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>

