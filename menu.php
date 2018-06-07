<ul class="navbar-nav ml-auto">
<?php

if ($page == 'home') {
    print '<li class="nav-item"><a class="nav-link active">Home</a></li>';
} 
else {
    print '<li class="nav-item"><a class="nav-link">Home</a></li>';
}


if ($page == 'servizi') {
    print '<li class="nav-item"><a class="nav-link active">Servizi</a></li>';
}
else {
    print '<li class="nav-item"><a class="nav-link">Servizi</a></li>';
}


if ($page == 'sudinoi') {
    print '<li class="nav-item"><a class="nav-link active">Su di noi</a></li>';
}
else {
    print '<li class="nav-item"><a class="nav-link">Su di noi</a></li>';
}


if ($page == 'contatti') {
    print '<li class="nav-item"><a class="nav-link active">Contatti</a></li>';
}
else {
    print '<li class="nav-item"><a class="nav-link">Contatti</a></li>';
}
?>
</ul>