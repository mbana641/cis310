<?php

require_once("Template.php");

$page = new Template("CMNT Survey");
$page->addHeadElement('<link rel="stylesheet" href="./assets/styles/normalize.css">');
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="./assets/styles/styles.css">');
$page->addHeadElement('<link href="https://fonts.googleapis.com/css?family=Krub|PT+Sans|Ubuntu" rel="stylesheet">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print '<header id="header">
<div>
    <a class="link" href="./index.php">
        <h1 class="siteTitle">
            CNMT Survey
        </h1>
    </a>
</div>
<span class="flexSpace"></span>
<nav>
    <ul>
        <li><a class="link navLink" href="./privacy.php"><button class="btn btn__text">PRIVACY</button></a>
        </li>
        <li><a class="link navLink" href="./survey.php"><button class="btn btn__text">SURVEY</button></a></li>
    </ul>
</nav>
</header>
<div class="paneContainer">
<div class="pane">
    <div class="homeContent">
        <h2 class="homeContent__title">UWSP CNMT Survey</h2>
        <h2 class="homeContent__statement">Let your data ring out.</h2>
        <span class="homeContent__extra">Claim your major. Name your grade. Assert your pizza topping.
        </span>
        <hr>
    </div>
    <div class="next">
        <a class="link" href="./privacy.php">
            <button class="btn btn__elevated forward">BEGIN</button>
        </a>
        <img alt="Next page arrow" class="next__icon" src="./assets/icons/baseline-navigate_next-24px.svg">
    </div>
</div>
</div>';

print $page->getBottomSection();
?>