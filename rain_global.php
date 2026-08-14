<html><head><title>ICON</title>
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
        {   title: "GFS z500-SLP",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles16.meteociel.fr/modeles/gfs/run/gfs-0-",
            extension: "-3h.png",
            minval: 3,
            maxval: 120,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "GFS Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles2.meteociel.fr/modeles_gfs/run/",
            extension: "-779GR.GIF",
            minval: 3,
            maxval: 120,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "ECMWF z500-SLP",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,16) ,
            prefix : "https://modeles3.meteociel.fr/modeles/ecmwf/run/ecmwf-0-",
            extension: ".png",
            minval: 3,
            maxval: 120,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "ECMWF Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles3.meteociel.fr/modeles/ecmwf/run/ecmwfgr-2-",
            extension: ".png",
            minval: 3,
            maxval: 120,
            increment:3,
        });

        
</script>

</head>
<body>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100786126); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100786126ns.gif" /></p></noscript>
</body>
</html>
