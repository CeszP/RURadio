<nav class="fixed-nav-bar">
	<div class="nav">
		<ul id="nv">
			<li id="name"><a href="index.php"><img src="../img/thunder2.png" alt=""></a></li>
			<li><a href="program.php">Programación</a></li>
			<li><a href="">PodCast</a></li>
			<li><a href="">Galería</a></li>
			<li><a href="">Contacto</a></li>
			<li style="float:right;">
				<audio id="player" src="../audio/volver.mp3"></audio>
				<div id="radioRep">
    				<button  class="btnRep" onclick="document.getElementById('player').play();"><img src="../img/play.png"></button>
    				<button class="btnRep"  onclick="document.getElementById('player').pause();"><img src="../img/pause.png"></button>
    				<button class="btnRep"  onclick="document.getElementById('player').volume += 0.1;"><img src="../img/up.png"></button>
    				<button class="btnRep"  onclick="document.getElementById('player').volume -= 0.1;"><img src="../img/down.png"></button>
				</div>
			</li>
			<div id="repTxt">
				Escúchanos ahora:	
			</div>
		</ul>
	</div>
</nav>		