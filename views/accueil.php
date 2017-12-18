<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>accueil.css" rel="stylesheet">
	<script>
function startTime() {
    var today = new Date();
    var d = today.getDate();
    var month = (today.getMonth()+1);
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    month = checkTime(month);
    document.getElementById('heure').innerHTML =  h + ":" + m;
    document.getElementById('ddmm').innerHTML = d + "/" + month;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head> 

<!--  Début de la page -->
<body  onload="startTime()">

<div id="content">
	<div id="cadre">
		<div id="date">
    	<h1 id="heure"></h1>
        <h2 id="ddmm"></h2>
		</div>
		<div id="users">
			<a href="?page=applications&name=Solal">
				<div class="user">
					<img src="<?=PATH_IMAGES.'solal.jpg'?>">
					<h3>Solal</h3>
				</div>
			</a>
			<a href="?page=applications&name=Jean-B">
				<div class="user">
					<img src="<?=PATH_IMAGES.'jb.jpg'?>">
					<h3>Jean-B</h3>
				</div>
			<a href="?page=applications&name=Marc">
				<div class="user">
					<img src="<?=PATH_IMAGES.'marc.jpg'?>">
					<h3>Marc</h3>
				</div>
			</a>
		</div>
	</div>
	<div id="sensehat">
		<div class="sensor">
			<p><i class="fa fa-tint" aria-hidden="true"></i>
			<?= $humidity ?>%</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-tachometer" aria-hidden="true"></i>
			<?= $pressure ?>bar</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
			<?= $temperature ?>°c</p>
		</div>
	</div>
</div>

</body>
<!--  Pied de page -->