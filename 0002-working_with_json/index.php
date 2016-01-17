<?php
require('publicsuperhero.php');
require('privatesuperhero.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EXTERNAL STYLESHEETS -->
    <!-- stylesheets from other sources go here -->

    <!-- custom stylesheets go here -->
    <style>
        pre {
            font-size: 12pt;
        }
    </style>

    <!-- END EXTERNAL STYLESHEETS -->
</head>
<body>
    <!-- CUSTOM CONTENT -->
    <h1>Playing With JSON and Superheroes</h1>

    <pre>
<?php

echo 'create a new PublicSuperhero instance for'
    . '<br />'
    . 'Captain America.'
    . '<br /><br />';

$captainAmerica = new PublicSuperhero('Captain America', 'Steve Rogers');

echo "Let's take a look at the new "
    . '<br />'
    . '$captainAmerica object.'
    . '<br /><br />';

echo 'print_r($captainAmerica): '
    . '<br />';
print_r($captainAmerica);
echo '<br /><br />';

echo 'make sure the getCodeName() function works'
    . '<br /><br />';

echo 'echo $captainAmerica->getCodeName(): '
    . '<br />';
echo $captainAmerica->getCodeName();
echo '<br /><br />';

echo 'make sure the getRealName() function works'
    . '<br /><br />';

echo 'echo $captainAmerica->getRealName(): '
    . '<br />';
echo $captainAmerica->getRealName();
echo '<br /><br />';

echo 'Good.  Everything is working so far.'
    . '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo 'encode $captainAmerica to JSON format'
    . '<br />'
    . 'store it in $jsonData'
    . '<br /><br />';

$jsonData = json_encode($captainAmerica);

echo 'print_r($jsonData): '
    . '<br />';

print_r($jsonData);
echo '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo 'decode $jsonData'
    . '<br />'
    . 'store it in $daMan'
    . '<br /><br />';

$daMan = json_decode($jsonData);

echo 'print_r($daMan): '
    . '<br />';

print_r($daMan);
echo '<br /><br />';

echo '$daMan is a StdClass object, '
    . '<br />'
    . 'not a PublicSuperhero object.'
    . '<br />'
    . 'Trying to call $daMan->getCodeName()'
    . '<br />'
    . "won't work."
    . '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo 'What would the JSON look like for the '
    . '<br />'
    . 'movie version of the original Avengers?'
    . '<br /><br />';

echo "We've already got Captain America, so let's"
    . '<br />'
    . 'add the following superheroes to the team:'
    . '<br />'
    . '    Tony Stark = Iron Man'
    . '<br />'
    . '    Natasha Romanoff = Black Widow'
    . '<br />'
    . '    Thor Odinson = Thor'
    . '<br />'
    . '    Bruce Banner = The Hulk'
    . '<br /><br />';

$avengers = array(
    new PublicSuperhero('Iron Man', 'Tony Stark'),
    new PublicSuperhero('Black Widow', 'Natasha Romanoff'),
    new PublicSuperhero('Thor', 'Thor Odinson'),
    new PublicSuperhero('The Hulk', 'Bruce Banner')
);

echo 'print_r($avengers): '
    . '<br /><br />';

print_r($avengers);
echo '<br /><br />';

echo "And here's the JSON data for them: "
    . '<br /><br />';

$jsonData = json_encode($avengers);

print_r($jsonData);
echo '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo 'This all breaks when you change the scope'
    . '<br />'
    . 'of the Superhero class properties to private.'
    . '<br />'
    . "There's nothing public to encode to JSON."
    . '<br /><br />';

    echo "Here's what happens when you create Spider-Man"
        . '<br />'
        . 'and encode the JSON data for him.'
        . '<br /><br />';

$spiderMan = new PrivateSuperhero('Spider-Man', 'Peter Parker');

echo 'print_r($spiderMan): '
    . '<br /><br />';

print_r($spiderMan);
echo '<br /><br />';

$jsonData = json_encode($spiderMan);

echo 'print_r($jsonData): '
    . '<br /><br />';

print_r($jsonData);
echo '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo "Let's try creating our own method in"
    . '<br />'
    . 'PrivateSuperhero to return the data'
    . '<br />'
    . 'in JSON format.'
    . '<br /><br />';

echo "Let's test it on Spider-Man and compare it"
    . '<br />'
    . "Captain America's JSON data."
    . '<br /><br />';

$spiderManJsonData = $spiderMan->encodeJSON();

$captainAmericaJsonData = json_encode($captainAmerica);

echo 'print_r($spiderManJsonData): '
    . '<br /><br />';

print_r($spiderManJsonData);
echo '<br /><br />';

echo 'print_r($captainAmericaJsonData): '
    . '<br /><br />';

print_r($captainAmericaJsonData);
echo '<br /><br />';

echo '======================================'
    . '<br /><br />';

echo 'Going great so far.  Now for the real test . . . '
    . '<br /><br />'
    . "Let's try decoding Spider-Man's JSON"
    . '<br />'
    . 'data and outing his secret identity'
    . '<br />'
    . 'by creating him as a PublicSuperhero.'
    . '<br /><br />';

$newSuperhero = json_decode($spiderManJsonData);

$spiderMan = new PublicSuperhero($newSuperhero->codeName, $newSuperhero->realName);

echo 'print_r($spiderMan): '
    . '<br /><br />';

print_r($spiderMan);
echo '<br /><br />';

echo "And just to make sure it's a real"
    . '<br />'
    . "PublicSuperhero object, let's call "
    . '<br />'
    . 'getCodeName() and getRealName().'
    . '<br /><br />';

echo '$spiderMan->getCodeName(): ';
echo $spiderMan->getCodeName()
    . '<br /><br />';

echo '$spiderMan->getRealName(): ';
echo $spiderMan->getRealName()
    . '<br /><br />';

?>
    </pre>

    <!-- END CUSTOM CONTENT -->

    <!-- JAVASCRIPT FILES -->
    <!-- libraries go here -->

    <!-- custom scripts go here -->

    <!-- END JAVASCRIPT FILES -->
</body>
</html>
