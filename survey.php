<?php

require_once("Template.php");

$page = new Template("CMNT Survey");
$page->addHeadElement('<link rel="stylesheet" href="./assets/styles/normalize.css">');
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="./assets/styles/styles.css">');
$page->addHeadElement('<link href="https://fonts.googleapis.com/css?family=Krub|PT+Sans|Ubuntu" rel="stylesheet">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print '<div class="content">
<header id="header">
    <div>
        <a class="link" href="./index.html">
            <h1 class="siteTitle">
                CNMT Survey
            </h1>
        </a>
    </div>
    <span class="flexSpace"></span>
    <nav>
        <ul>
            <li><a class="link navLink" href="./privacy.html"><button class="btn btn__text">PRIVACY</button></a></li>
            <li><a class="link navLink" href="./survey.html"><button class="btn btn__text">SURVEY</button></a></li>
        </ul>
    </nav>
    </header>
<div class="paneContainer">
    <div class="pane">
        <div class="surveyContent">
            <form id="surveyForm" action="./completed.php" 
            onreset="toggleError(false, \'nullInputError\');" 
            onsubmit="return isValid();" 
            method="POST" enctype="text/plain">
                <h2>UWSP Computing and New Media Technologies Survey</h2>
                <span id="nullInputError">All fields are required.</span>
                <div class="question email">
                <p>Email:</p>                    
                    <input type="text" id="email" name="email" autofocus>
                    <label for="email">email@domain.com</label>
                    <div class="after"></div>
                </div>
                <div class="question">
                    <p>What is your major:</p>
                    <div class="options">
                        <div class="checkContainer">
                            <input type="checkbox" id="appDev" name="appDev">
                            <label for="appDev">CIS-AppDev</label>
                        </div>
                        <div class="checkContainer">
                            <input type="checkbox" id="networking" name="networking">
                            <label for="networking">CIS-Networking</label>
                        </div>
                        <div class="checkContainer">
                            <input type="checkbox" id="wdmd" name="wdmd">
                            <label for="wdmd">Web and Digital Media Development</label>
                        </div>

                        <div class="checkContainer">
                            <input type="checkbox" id="wd" name="wd">
                            <label for="wd">Web Development</label>
                        </div>
                        <div class="checkContainer">
                            <input type="checkbox" id="hti" name="hti">
                            <label for="hti">Human Technology Interaction</label>
                        </div>
                        <div class="checkContainer">
                            <input type="checkbox" id="other" name="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <p>What grade do you expect to receive in CNMT 310:</p>
                    <div class="options">
                        <div class="radioContainer">
                            <input type="radio" id="a" name="grade" value="a">
                            <label for="a">A</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="b" name="grade" value="b">
                            <label for="b">B</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="c" name="grade" value="c">
                            <label for="c">C</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="d" name="grade" value="d">
                            <label for="d">D</label>
                        </div>

                        <div class="radioContainer">
                            <input type="radio" id="f" name="grade" value="f">
                            <label for="f">F</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <p>What is your favorite pizza topping:</p>
                    <div class="options">
                        <div class="radioContainer">
                            <input type="radio" id="pepperoni" name="pizza" value="pepperoni">
                            <label for="pepperoni">Pepperoni</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="anchovies" name="pizza" value="anchovies">
                            <label for="anchovies">Anchovies</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="sausage" name="pizza" value="sausage">
                            <label for="sausage">Sausage</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="peppers" name="pizza" value="peppers">
                            <label for="peppers">Peppers</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="onion" name="pizza" value="onion">
                            <label for="onion">Onion</label>
                        </div>
                        <div class="radioContainer">
                            <input type="radio" id="mushrooms" name="pizza" value="mushrooms">
                            <label for="mushrooms">Mushrooms</label>
                        </div>
                    </div>
                </div>
                <div class="next formActions">
                    <button class="btn btn__text" type="reset">CLEAR</button>
                    <button class="btn btn__elevated" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="./assets/javascript/scripts.js"></script>
</div>';

print $page->getBottomSection();
?>