<?php 

$h1 = '<li class="nav-item"><a class="nav-link active" href="/"><i class="fas fa-home icona"></i>Home</a></li>';
$h0 = '<li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-home icona"></i>Home</a></li>';
$s1 = '<li class="nav-item"><a class="nav-link active" href="/servizi/"><i class="fas fa-hdd icona"></i>Servizi</a></li>';
$s0 = '<li class="nav-item"><a class="nav-link" href="/servizi/"><i class="fas fa-hdd icona"></i>Servizi</a></li>';
$a1 = '<li class="nav-item"><a class="nav-link active" href="/about/"><i class="fas fa-info-circle icona"></i>Su di noi</a></li>';
$a0 = '<li class="nav-item"><a class="nav-link" href="/about/"><i class="fas fa-info-circle icona"></i>Su di noi</a></li>';
$c1 = '<li class="nav-item"><a class="nav-link active" href="/contatti/"><i class="fas fa-envelope icona"></i>Contatti</a></li>';
$c0 = '<li class="nav-item"><a class="nav-link" href="/contatti/"><i class="fas fa-envelope icona"></i>Contatti</a></li>';

?>


<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <img src="/logowhite.png" class="logonav" draggable="false">
        <span class="navbar-text"><a class="navbar-brand">SLASHOST</a></span>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="menu">
             <ul class="navbar-nav ml-auto">
             	<?php 
             	if ($page == 'home') {
             	echo $h1;
             	} else {
             		echo $h0;
             	}

             	if ($page == 'servizi') {
             		echo $s1;
             	} else {
             		echo $s0;
             	}

             	if ($page == 'about') {
             		echo $a1;
             	} else {
             		echo $a0;
             	}

             	if ($page == 'contatti') {
             		echo $c1;
             	} else {
             		echo $c0;
             	}
             	?>
            </ul>
        </div>
    </div>
</nav>