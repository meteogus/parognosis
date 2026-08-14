<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2, user-scalable=yes">

<head>
<title>Synoptic Maps</title>
<style>

body{
    margin:0;
    background:black;
    text-align:center;
}

.button{
    background-color:grey;
    border:none;
    font-size:22px;
    font-weight:bold;
    color:yellow;
    padding:10px;
    width:90px;
    cursor:pointer;
    margin:2px;
}

.sticky-top-0{
    position:sticky;
    top:0;
    z-index:999;
    background:rgba(0,0,0,0.7);
    padding:5px;
}

.image-container{
    position:relative;
    display:inline-block;
    margin-bottom:10px;
}

.plotimg{
    width:700px;
    max-width:100%;
    display:block;
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
    width:70px;
    height:100px;
    cursor:pointer;
    user-select:none;
}

.arrow:hover{
    background:rgba(0,0,0,0.5);
}

.left-arrow{
    left:0;
}

.right-arrow{
    right:0;
}

.time-label{
    color:red;
    font-size:20px;
    font-weight:bold;
    margin:5px;
}

</style>
</head>

<body>

<div class="sticky-top-0">
    <button class="button"
    onclick="location.href='https://meteogus.github.io/parognosis//BOLAM_GR.php'">
    Models
    <button class="button" onclick="ShiftAll(-3)">-3</button>
    <button class="button" onclick="ShiftAll(+3)">+3</button>
    <button class="button" onclick="ShiftAll(-24)">-24</button>
    <button class="button" onclick="ShiftAll(+24)">+24</button>

    </button>
</div>

<div id="plots"></div>

<script>

var plotURL = "http://stratus.meteo.noa.gr/data/gfs/";

var filenames = [

"GFS_totrain_GR_t",
"GFS_slp_gp500_eastmed_t",

"GFS_AV500_eastmed_t",
"GFS_RelVOR500-OMEGA_t",

"GFS_PW_GR_t",
"GFS_IVT_t",

"GFS_mlcape_shear06_GR_t",
"GFS_mucape_mucin_GR_t",

"GFS_thetae_eastmed_t",
"GFS_BT_t",

"GFS_sreh_eastmed_t",
"GFS_severe_index_GR_t",

"GFS_RH850_GR_t",
"GFS_RH700_GR_t",

"GFS_RROD_t",
"GFS_CI_t",

"GFS_PV320K_t",
"GFS_IRROT_w300_t"

];

/* κάθε εικόνα έχει δικό της χρόνο */
var times = [];

for(let i=0; i<filenames.length; i++){
    times[i] = 6;
}

function clamp(val)
{
    if(val < 6) val = 6;
    if(val > 96) val = 96;
    return val;
}

function ShiftImage(index, shift)
{
    times[index] += shift;
    times[index] = clamp(times[index]);

    UpdateImage(index);
}

function ShiftAll(shift)
{
    for(let i=0; i<filenames.length; i++)
    {
        times[i] += shift;
        times[i] = clamp(times[i]);

        UpdateImage(i);
    }
}

function UpdateImage(index)
{
    document.getElementById("img"+index).src =
    plotURL + filenames[index] + times[index] + ".png";

    document.getElementById("label"+index).innerHTML =
    "t+" + times[index];
}

function createPlots()
{
    let container = document.getElementById("plots");

    for(let i=0; i<filenames.length; i++)
    {
        let div = document.createElement("div");
        div.className = "image-container";

        div.innerHTML = `

        <div id="label${i}" class="time-label">t+6</div>

        <button class="arrow left-arrow"
        onclick="ShiftImage(${i},-3)">❮</button>

        <img id="img${i}" class="plotimg">

        <button class="arrow right-arrow"
        onclick="ShiftImage(${i},+3)">❯</button>

        `;

        container.appendChild(div);

        UpdateImage(i);
    }
}

createPlots();

</script>

</body>
</html>