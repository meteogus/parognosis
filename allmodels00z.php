<html><head><title>GLOBAL MODELS</title>
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
        {   title: "ECMWF 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles3.meteociel.fr/modeles/ecmwf/run/ecmwf-0-",
            extension: ".png",
            minval: 6,
            maxval: 240,
            increment:6,
        });

            useroptions['content'].push(
        {   title: "GFS 00z",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://modeles16.meteociel.fr/modeles/gfs/run/gfs-0-",
            extension: ".png",
            minval: 0,
            maxval: 240,
            increment:6,
        });
        
        
</script>
