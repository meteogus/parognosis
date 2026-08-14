<html><head><title>SLP</title>
<script src="https://meteogus.github.io/parognosis//Javascripts/jquery-2.1.1.min.js"></script>
<script src="https://meteogus.github.io/parognosis//Javascripts/jquery.detect_swipe.js"></script>
<script src="https://meteogus.github.io/parognosis//Javascripts/JsImageLoop.js"></script>
<link rel="stylesheet" type="text/css" href="https://meteogus.github.io/parognosis//Javascripts/JsImageLoop.css">
<link rel="icon" type="image/x-icon" href="https://meteogus.github.io/parognosis//meteo.png">
<style type="text/css">
*,body {
font-weight: none;
font-family: arial, sans-serif;
font-size:7pt;
}


a {
font-size:7px;
  text-decoration:underline;
}

a:hover {
  text-decoration: none;
width:90%;
height:90%;
}
</style>


<script>

useroptions = {};
useroptions.content = [];
            useroptions['content'].push(
        {   title: "SLP",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/Rain_slp_em_",
            extension: ".png",
            minval: 3,
            maxval: 144,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Precipitation",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "http://stratus.meteo.noa.gr/forecast/HAIL/LIGHTNING/BOLAM_GR_PRECIP_LIG_",
            extension: ".png",
            minval: 3,
            maxval: 144,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Snow",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/forecast/BOLAM2020/f_RR_SN_f_",
            extension: ".png",
            minval: 3,
            maxval: 144,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "Snow height",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/gfs/GFS_totrain_GR_t",
            extension: ".png",
            minval: 6,
            maxval: 144,
            increment:3,
        });
            useroptions['content'].push(
        {   title: "EFW",
            startingframe: 0,
                    label_interval: 1,
                    labels : fspan(0,156,12) ,
            prefix : "https://stratus.meteo.noa.gr/data/gfs/GFS_PW_GR_t",
            extension: ".png",
            minval: 6,
            maxval: 144,
            increment:3,
        });

       
</script>
