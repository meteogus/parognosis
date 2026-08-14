
<html>
<html><head><title>GR Observations</title>
<link rel="icon" type="image/x-icon" href="https://github.com/meteogus/parognosis/meteo.png">
<style>
.button {
  position: relative;
  background-color: black;
  border: none;
  font-size: 15px;
  color: white;
  padding: 10px;
  width: 80px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}



</style>
</head>
<body>

<div id='wrapper' style='text-align: left;'>
    <div style='display: inline-block; vertical-align: top; font-size: 15px;'>
    <p>Domains - Observatories:
<a href="https://github.com/meteogus/parognosis/Obs_GR.php">Greece</a> 
<a href="https://www.meteo.gr/attica/"target="_blank">Attica</a>
<a href="https://www.meteo.gr/crete/"target="_blank">Crete</a>
<a href="https://www.meteo.gr/thessaloniki/"target="_blank">Thessaloniki</a>
<a href="https://www.meteo.gr/observations_Europe.cfm"target="_blank">Europe</a>
<a href="https://github.com/meteogus/parognosis/sst.php">SST</a>
<a href="https://github.com/meteogus/parognosis/strikes.php">Strikes</a>
<a href="https://github.com/meteogus/parognosis/snowcover.php">Snow cover</a>
<a href="http://map.disarmfire.eu/Greece"target="_blank">Fire</a>
<a href="https://github.com/meteogus/parognosis/BOLAM_GR.php">Forecast maps</a>


    </div>
</div>

<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_Attica_temp_sst.png" target="_blank">
<img id="plot1" style="margin:15px 10px" width="460" height="380" align="top" alt="Temperature now"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_Attica_dailyMinTemp.png" target="_blank">
<img id="plot2" style="margin:15px 10px" width="460" height="380" align="top" alt="Temperature now"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_Attica_dailyMaxTemp.png" target="_blank">
<img id="plot3" style="margin:15px 10px" width="460" height="380" align="top" alt="Temperature now"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_dayrain_zeus.png" target="_blank">
<img id="plot4" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_2daysrain.png" target="_blank">
<img id="plot5" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_3daysrain.png" target="_blank">
<img id="plot6" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_monrain_blues.png" target="_blank">
<img id="plot7" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_yearrain_blues.png" target="_blank">
<img id="plot8" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_temp.png" target="_blank">
<img id="plot9" style="margin:15px 10px" width="460" height="380" align="top" alt="Temperature now"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_temp_tsav.png" target="_blank">
<img id="plot10" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_dailyMaxTemp_GR.png" target="_blank">
<img id="plot11" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_dailyMinTemp_GR.png" target="_blank">
<img id="plot12" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_diurnalTemp_GR.png" target="_blank">
<img id="plot13" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_minT_change_GR.png" target="_blank">
<img id="plot14" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_maxT_change_GR.png" target="_blank">
<img id="plot15" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_HeatIndex.png" target="_blank">
<img id="plot16" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_WindChill.png" target="_blank">
<img id="plot17" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_hum.png" target="_blank">
<img id="plot18" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img><br>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_MaxDayGusts_labels.png" target="_blank">
<img id="plot19" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_windspeed.png" target="_blank">
<img id="plot20" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img>
</a>
<a href="https://stratus.meteo.noa.gr/data/metarmaps/noa_beaufort.png" target="_blank">
<img id="plot21" style="margin:15px 10px" width="460" height="380" align="top" alt="Not available"></img><br>
</a>
<p id="text"></p> 

<script>

function ShiftPlot(shift)
{

num = num + shift;

if (num <6) {
num=0
}
if (num >1) {
num=0
}

SetFilenames();

}

function SetFilenames()
{
document.getElementById("text").innerHTML=num;
document.getElementById("text").style.color = "red";
document.getElementById("text").style.fontSize = "large";
numstr = (num<10?"0"+num:""+num);
document.getElementById("plot1").src = plotURL+"noa_Attica_temp_sst.png";
document.getElementById("plot2").src = plotURL+"noa_Attica_dailyMinTemp.png";
document.getElementById("plot3").src = plotURL+"noa_Attica_dailyMaxTemp.png";
document.getElementById("plot4").src = plotURL+"noa_dayrain_zeus.png";
document.getElementById("plot5").src = plotURL+"noa_2daysrain.png";
document.getElementById("plot6").src = plotURL+"noa_3daysrain.png";
document.getElementById("plot7").src = plotURL+"noa_monrain_blues.png";
document.getElementById("plot8").src = plotURL+"noa_yearrain_blues.png";
document.getElementById("plot9").src = plotURL+"noa_temp.png";
document.getElementById("plot10").src = plotURL+"noa_temp_tsav.png";
document.getElementById("plot11").src = plotURL+"noa_dailyMaxTemp_GR.png";
document.getElementById("plot12").src = plotURL+"noa_dailyMinTemp_GR.png";
document.getElementById("plot13").src = plotURL+"noa_diurnalTemp_GR.png";
document.getElementById("plot14").src = plotURL+"noa_minT_change_GR.png"; 
document.getElementById("plot15").src = plotURL+"noa_maxT_change_GR.png"; 
document.getElementById("plot16").src = plotURL+"noa_HeatIndex.png";
document.getElementById("plot17").src = plotURL+"noa_WindChill.png";
document.getElementById("plot18").src = plotURL+"noa_hum.png";
document.getElementById("plot19").src = plotURL+"noa_MaxDayGusts_labels.png";
document.getElementById("plot20").src = plotURL+"noa_windspeed.png";
document.getElementById("plot21").src = plotURL+"noa_beaufort.png";
}

var plotURL = "https://stratus.meteo.noa.gr/data/metarmaps/";
var num = 0;
ShiftPlot(0)

</script>

