<html>
<head>
<meta content='text/html; charset=iso-8859-7' http-equiv='Content-Type'>
<title>GR Observations</title>
<link href='favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
<div style="text-align: center; font-size: 20px; margin-top: 5px;">
    <select onchange="document.getElementById('contentFrame').src=this.value" 
            style="font-size: 22px; padding: 5px;">
        <option value="">Select...</option>
        <option value="https://meteogus.github.io/parognosis//GR_precipitation.php">Precipitation</option>
        <option value="https://meteogus.github.io/parognosis//GR_wind.php">Wind</option>
        <option value="https://meteogus.github.io/parognosis//GR_temp.php">Temperature</option>
        <option value="https://meteogus.github.io/parognosis//strikes.php">Strikes</option>
        <option value="https://meteogus.github.io/parognosis//sst.php">SST</option>
        <option value="https://meteogus.github.io/parognosis//snowcover.php">Snow cover</option>
        <option value="https://meteogus.github.io/parognosis//msg.php">MSG</option>
        <option value="https://meteogus.github.io/parognosis//sat_gr.php">Sat-GR</option>
        <option value="https://meteogus.github.io/parognosis//SAF_anim.php">SAF-Anim</option>
        <option value="https://meteogus.github.io/parognosis//dust_obs.php">Dust</option>
        <option value="https://www.meteo.gr/attica/">Attica</option>
        <option value="https://www.meteo.gr/crete/">Crete</option>
        <option value="https://www.meteo.gr/thessaloniki/">Salonica</option>
    </select>
</div>

<iframe id="contentFrame" src="https://meteogus.github.io/parognosis//sat_gr.php" 
        name="kostas" style="position:absolute; top:50px; left:0; width:100%; height:95%; border:0;">
</iframe>
</body>
</html>
