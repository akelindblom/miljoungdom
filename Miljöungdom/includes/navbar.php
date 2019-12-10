<?php

echo
'<nav id="slideNav1" class="big-screen">
    <a href="index.html" class="logo">
        <p>Lorem Ipsum</p>
    </a>
    <ul>
        <li><a href="sida2.html">Bli medlem</a></li>
        <li><a href="sida3.html">Nyheter</a></li>
        <li><a href="sida4.html">Verksamhet</a></li>
        <li><a href="sida5.html">Föreningar</a></li>
        <li><a href="sida6.html">Stöd oss</a></li>
        <li><a href="sida7.html">Om oss</a></li>
    </ul>
</nav>

<!-- Menu small screen -->
<nav id="slideNav2" class="small-screen">
    <div class="topnav">
        <a href="index.html" class="logo">
            <p>Lorem Ipsum</p>
        </a>
        <div class="icon">
            <a href="javascript:void(0);" onclick="dropdownNavbar()">
                <div><i class="fa fa-bars"></i></div>
            </a>
        </div>
    </div>
    <div class="smallMenu">
        <div id="dropdownMenu">
            <ul id="dropdown">
                <li><a href="sida2.html">Bli medlem</a></li>
                <li><a href="sida3.html">Nyheter</a></li>
                <li><a href="sida4.html">Verksamhet</a></li>
                <li><a href="sida5.html">Föreningar</a></li>
                <li><a href="sida6.html">Stöd oss</a></li>
                <li><a href="sida7.html">Om oss</a></li>
            </ul>
        </div>
    </div>
</nav>';
    
?>
