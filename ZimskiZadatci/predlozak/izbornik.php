<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
<div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Početna</a></li>
    <li>
        <a href="#">PHP</a>
        <ul class="menu vertical">
        </ul>
    </li>
    <li>
    
        <a href="#">Zadaci</a>
        <ul class="menu vertical">
            <li><a href="zadatak01.php">Zadatak 01</a></li>
            <li><a href="zadatak02.php">Zadatak 02</a></li>
            <li><a href="zadatak03.php">Zadatak 03</a></li>
            <li><a href="zadatak04.php">Zadatak 04</a></li>
        </ul>
        
    </li>
    </ul>
</div>
</div>
<!-- Kraj izbornik -->