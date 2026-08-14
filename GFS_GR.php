
<html>
<head>
<style>
.button {
  position: relative;
  background-color: black;
  border: none;
  font-size: 18px;
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




<button class="button" onclick="ShiftPlot(-24)">t-24</button>
<button class="button" onclick="ShiftPlot(-12)">t-12</button>
<button class="button" onclick="ShiftPlot(-3)">t-3</button>
<button class="button" onclick="ShiftPlot(+3)">t+3</button>
<button class="button" onclick="ShiftPlot(+6)">t+12</button>
<button class="button" onclick="ShiftPlot(+24)">t+24</button>

<a href="https://grhost.info/parognosis/BOLAM_GR.php"style="font-size: 20px">GFS_GR</a>&nbsp;
<a href="https://meteovolos.gr/GFS_GR.php"style="font-size: 20px" target=_blank>Meteovolos</a>


<p id="text"></p>
<img id="plot1" width="600" align="top" alt="Not available"></img>
<img id="plot2" width="600" align="top" alt="Not available"></img>
<img id="plot3" width="600" align="top" alt="Not available"></img>
<img id="plot4" width="600" align="top" alt="Not available"></img>
<img id="plot5" width="600" align="top" alt="Not available"></img>
<img id="plot6" width="600" align="top" alt="Not available"></img>
<img id="plot7" width="600" align="top" alt="Not available"></img>
<script>

function ShiftPlot(shift)
{

num = num + shift;

if (num <6) {
num=6
}
if (num >96) {
num=96
}

SetFilenames();

}

function SetFilenames()
{
document.getElementById("text").innerHTML=num;
document.getElementById("text").style.color = "red";
document.getElementById("text").style.fontSize = "x-large";
numstr = (num<10?"0"+num:""+num);
document.getElementById("plot1").src = plotURL+"GFS_slp_gp500_eastmed_t"+num+".png";
document.getElementById("plot2").src = plotURL+"GFS_totrain_GR_t"+num+".png";
document.getElementById("plot3").src = plotURL+"GFS_PW_GR_t"+num+".png";
document.getElementById("plot4").src = plotURL+"GFS_temp500_eastmed_t"+num+".png";
document.getElementById("plot5").src = plotURL+"GFS_AV500_eastmed_t"+num+".png";
document.getElementById("plot6").src = plotURL+"GFS_RelVOR500-OMEGA_t"+num+".png";
document.getElementById("plot7").src = plotURL+"GFS_thetae_eastmed_t"+num+".png";

}

var plotURL = "http://stratus.meteo.noa.gr/data/gfs/";
var num = 6;
ShiftPlot(0)

</script>