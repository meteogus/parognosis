<html>
<meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=2, user-scalable=yes">
<head>
<style>
.button {
  position: relative;
  background-color: grey;
  border: none;
  font-size: 30px;
  font-weight: bold;
  color: yellow;
  padding: 20px;
  width: 100px;
  text-align: center;
  -webkit-transition-duration: 0.4s;
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

/* NEW */
.imgcontainer{
  position: relative;
  display: inline-block;
}

.arrow{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  background:rgba(0,0,0,0.2);
  color:white;
  border:none;
  font-size:50px;
  font-weight:bold;
  width:60px;
  height:100px;
  cursor:pointer;
  z-index:5;
}

.arrow:hover{
  background:rgba(0,0,0,0.5);
}

.leftarrow{
  left:0;
}

.rightarrow{
  right:0;
}

</style>
</head>
<body>

<div class="sticky-top-0">
<button class="button"  onclick="location.href='https://grhost.info/parognosis/z500_m.php'" type="button">MC</button>
<button class="button"  onclick="ShiftPlot(-3)">t-3</button>
<button class="button"  onclick="ShiftPlot(+3)">t+3</button>
<button class="button"  onclick="ShiftPlot(-24)">t-24</button>
<button class="button"  onclick="ShiftPlot(+24)">t+24</button>
</div>


<p id="text"></p>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(1,-3)">❮</button>
<img id="plot1" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(1,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(2,-3)">❮</button>
<img id="plot2" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(2,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(3,-3)">❮</button>
<img id="plot3" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(3,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(4,-3)">❮</button>
<img id="plot4" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(4,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(5,-3)">❮</button>
<img id="plot5" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(5,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(6,-3)">❮</button>
<img id="plot6" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(6,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(7,-3)">❮</button>
<img id="plot7" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(7,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(8,-3)">❮</button>
<img id="plot8" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(8,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(9,-3)">❮</button>
<img id="plot9" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(9,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(10,-3)">❮</button>
<img id="plot10" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(10,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(11,-3)">❮</button>
<img id="plot11" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(11,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(12,-3)">❮</button>
<img id="plot12" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(12,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(13,-3)">❮</button>
<img id="plot13" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(13,+3)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(14,-3)">❮</button>
<img id="plot14" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(14,+3)">❯</button>
</div>

<script>

var plotURL = "http://stratus.meteo.noa.gr/data/gfs/";
var num = 6;

/* NEW */
var nums = [6,6,6,6,6,6,6,6,6,6,6,6,6,6];

function ShiftPlot(shift)
{

for(let i=0;i<nums.length;i++){

nums[i] = nums[i] + shift;

if (nums[i] <6) {
nums[i]=6
}
if (nums[i] >96) {
nums[i]=96
}

}

SetFilenames();

}

/* NEW */
function ShiftSingle(id,shift)
{

nums[id-1] = nums[id-1] + shift;

if (nums[id-1] <6) {
nums[id-1]=6
}
if (nums[id-1] >96) {
nums[id-1]=96
}

SetFilenames();

}

function SetFilenames()
{
document.getElementById("text").innerHTML = "Fcst: +" + nums[0] + "h";
document.getElementById("text").style.color = "red";
document.getElementById("text").style.fontSize = "x-large";

document.getElementById("plot1").src = plotURL+"GFS_totrain_GR_t"+nums[0]+".png";
document.getElementById("plot2").src = plotURL+"GFS_slp_gp500_eastmed_t"+nums[1]+".png";

document.getElementById("plot3").src = plotURL+"GFS_AV500_eastmed_t"+nums[2]+".png";
document.getElementById("plot4").src = plotURL+"GFS_RelVOR500-OMEGA_t"+nums[3]+".png";

document.getElementById("plot5").src = plotURL+"GFS_PW_GR_t"+nums[4]+".png";
document.getElementById("plot6").src = plotURL+"GFS_IVT_t"+nums[5]+".png";

document.getElementById("plot7").src = plotURL+"GFS_mlcape_shear06_GR_t"+nums[6]+".png";
document.getElementById("plot8").src = plotURL+"GFS_mucape_mucin_GR_t"+nums[7]+".png";

document.getElementById("plot9").src = plotURL+"GFS_thetae_eastmed_t"+nums[8]+".png";
document.getElementById("plot10").src = plotURL+"GFS_BT_t"+nums[9]+".png";

document.getElementById("plot11").src = plotURL+"GFS_sreh_eastmed_t"+nums[10]+".png";
document.getElementById("plot12").src = plotURL+"GFS_severe_index_GR_t"+nums[11]+".png";

document.getElementById("plot13").src = plotURL+"GFS_RH850_GR_t"+nums[12]+".png";
document.getElementById("plot14").src = plotURL+"GFS_RH700_GR_t"+nums[13]+".png";

document.getElementById("plot15").src = plotURL+"GFS_RROD_t"+nums[14]+".png";
document.getElementById("plot16").src = plotURL+"GFS_CI_t"+nums[15]+".png";

document.getElementById("plot17").src = plotURL+"GFS_PV320K_t"+nums[16]+".png";
document.getElementById("plot18").src = plotURL+"GFS_IRROT_w300_t"+nums[17]+".png";
}

ShiftPlot(0)

</script>