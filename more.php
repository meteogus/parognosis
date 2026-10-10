<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
<head>
<style>
.button {
  position: relative;
  background-color: grey;
  border: none;
  font-size: 24px;
  font-weight: bold;
  color: yellow;
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

.sticky-top-0 { 
  position: sticky;
  top: 0;
  z-index: 9;
}

</style>
</head>
<body>

<div class="sticky-top-0">
<button class="button"  onclick="ShiftPlot(-24)">t-24</button>
<button class="button"  onclick="ShiftPlot(-3)">t-3</button>
<button class="button"  onclick="ShiftPlot(+3)">t+3</button>
<button class="button"  onclick="ShiftPlot(+24)">t+24</button>
</div>


<p id="text"></p>
<img id="plot1" width="800" align="top" alt="Not available"></img>
<img id="plot2" width="800" align="top" alt="Not available"></img>
<img id="plot3" width="800" align="top" alt="Not available"></img>
<script>

function ShiftPlot(shift)
{

num = num + shift;

if (num <6) {
num=6
}
if (num >45) {
num=45
}

SetFilenames();

}

function SetFilenames()
{
document.getElementById("text").innerHTML=num;
document.getElementById("text").style.color = "red";
document.getElementById("text").style.fontSize = "x-large";
numstr = (num<10?"0"+num:""+num);
document.getElementById("plot1").src = "https://stratus.meteo.noa.gr/data/gfs/GFS_convergence_GR_t"+num+".png";
document.getElementById("plot2").src = "https://stratus.meteo.noa.gr/data/gfs/GFS_mixing_GR_t"+num+".png";
document.getElementById("plot3").src = "https://stratus.meteo.noa.gr/data/gfs/GFS_WetBulb0_GR_t"+num+".png";
}

var plotURL = "https://www.wetterzentrale.de/maps/";
var num = 3;
ShiftPlot(0)

</script>