<html>
<meta name="viewport" content="width=device-width, initial-scale=0.62, maximum-scale=2, user-scalable=yes">
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
<button class="button"  onclick="location.href='https://grhost.info/parognosis/GFS_EM_panel_m.php'" type="button">Maps</button>
<button class="button"  onclick="location.href='https://grhost.info/parognosis/z500_m.php'" type="button">500</button>
<button class="button"  onclick="location.href='https://grhost.info/parognosis/t850_m.php'" type="button">850</button>
<button class="button"  onclick="ShiftPlot(-24)">t-24</button>
<button class="button"  onclick="ShiftPlot(+24)">t+24</button>
</div>

<p id="text"></p>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(1,-24)">❮</button>
<img id="plot1" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(1,+24)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(2,-24)">❮</button>
<img id="plot2" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(2,+24)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(3,-24)">❮</button>
<img id="plot3" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(3,+24)">❯</button>
</div>

<div class="imgcontainer">
<button class="arrow leftarrow" onclick="ShiftSingle(4,-24)">❮</button>
<img id="plot4" width="600" align="top" alt="Not available"></img>
<button class="arrow rightarrow" onclick="ShiftSingle(4,+24)">❯</button>
</div>

<script>

var nums = [24,24,24,24];

function ShiftPlot(shift)
{

for(let i=0;i<nums.length;i++){

nums[i] = nums[i] + shift;

if (nums[i] <24) {
nums[i]=24
}
if (nums[i] >240) {
nums[i]=240
}

}

SetFilenames();

}

function ShiftSingle(id,shift)
{

nums[id-1] = nums[id-1] + shift;

if (nums[id-1] <24) {
nums[id-1]=24
}
if (nums[id-1] >240) {
nums[id-1]=240
}

SetFilenames();

}

function SetFilenames()
{
document.getElementById("text").innerHTML = "Fcst: +" + nums[0] + "h";
document.getElementById("text").style.color = "red";
document.getElementById("text").style.fontSize = "x-large";

document.getElementById("plot1").src = "https://modeles16.meteociel.fr/modeles/gfs/run/gfs-1-"+nums[0]+".png";

document.getElementById("plot2").src = "https://www.meteociel.fr/modeles/ecmwf/run/ECM0-"+nums[1]+".GIF";

document.getElementById("plot3").src = "https://modeles3.meteociel.fr/modeles/ecmwfaifsv1/run/ecmwf-1-"+nums[2]+".png";

document.getElementById("plot4").src = "https://www.meteociel.fr/modeles/ecmwf/run/EDM0-"+nums[3]+".GIF";
}

ShiftPlot(0)

</script>