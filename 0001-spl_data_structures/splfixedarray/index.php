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
    <h1>SplFixedArray</h1>
    <p><a href="../index.html">back to data structures list</a></p>    
    
    <pre>
<?php 

echo 'create a new SplFixedArray as $myArray';
echo '<br /><br />';

$myArray = new SplFixedArray(3);

echo '$myArray: ';
var_dump($myArray);
echo '<br /><br />';

echo 'assign the values 1, 2, 3 to $myArray';
echo '<br /><br />';

$myArray[0] = 1;
$myArray[1] = 2;
$myArray[2] = 3;

echo '$myArray: ';
var_dump($myArray);
echo '<br /><br />';

echo 'What happens if I assign a value to $myArray[3]?';
echo '<br /><br />';

//$myArray[3] = 'Uh oh.';
echo "Fatal error:  Uncaught exception 'RuntimeException' with message 'Index invalid or out of range'";
echo '<br /><br /><br />';

echo 'use count() to get length of $myArray';
echo '<br /><br />';

echo $myArray->count();
echo '<br /><br /><br />';

echo 'reset iterator back to first element in $myArray';
echo '<br />';
echo 'loop through $myArray';
echo '<br />';
echo 'use current() and next()';
echo '<br /><br />';

$myArray->rewind();

for ($i = 0; $i < $myArray->count(); $i++) {
    echo $myArray->current();
    echo '<br />';
    $myArray->next();
}
echo '<br /><br />';

echo 'get current() without resetting iterator (should be pointing to $myArray[3])';
echo '<br /><br />';

//$myArray->current();
echo "Fatal error:  Uncaught exception 'RuntimeException' with message 'Index invalid or out of range'";
echo '<br /><br /><br />';

echo 'setSize to 6 without resetting iterator';
echo '<br />';
echo 'add "a" to $myArray[3]';
echo '<br />';
echo 'Does current() still point to $myArray[3]?';
echo '<br /><br />';

$myArray->setSize(6);
$myArray[3] = 'a';

echo $myArray->current();
echo '  // yes, it does';
echo '<br /><br /><br />';

echo 'use key() to see which index interator points to';
echo '<br /><br />';

echo $myArray->key();
echo '<br /><br /><br />';

echo 'use valid() to see if $myArray contains more elements';
echo '<br /><br />';

echo $myArray->valid();
echo '<br /><br /><br />';

echo 'setSize to 3 to drop the new elements';
echo '<br /><br />';

echo $myArray->setSize(3);
echo '$myArray: ';
var_dump($myArray);
echo '<br /><br />';

echo 'reset iterator back to first element in $myArray';
echo '<br />';
echo 'loop through $myArray';
echo '<br />';
echo 'use current() and next()';
echo '<br /><br />';

$myArray->rewind();

for ($i = 0; $i < $myArray->count(); $i++) {
    echo $myArray->current();
    echo '<br />';
    $myArray->next();
}
echo '<br /><br />';

echo 'setSize to 6 without resetting the iterator';
echo '<br />';
echo 'add a,b,c to $myArray elements [3], [4], [5]';
echo '<br />';
echo 'loop through $myArray again without resetting the iterator';
echo '<br />';
echo 'I should just get the new elements I added.';
echo '<br /><br />';

$myArray->setSize(6);
$myArray[3] = 'a';
$myArray[4] = 'b';
$myArray[5] = 'c';

for ($i = $myArray->key(); $i < $myArray->count(); $i++) {
    echo $myArray->current();
    echo '<br />';
    $myArray->next();
}
echo 'Note:  Had to change $i to start at $myArray->key() in for loop so I don\'t get an out of range fatal error.';
echo '<br /><br />';

echo 'Does a foreach loop work on SplFixedArrays?';
echo '<br />';
echo 'reset iterator back to first element in $myArray';
echo '<br />';
echo 'try foreach loop';
echo '<br /><br />';

$myArray->rewind();

foreach ($myArray as $value) {
    echo $value;
    echo '<br />';
}
echo '<br />';
echo 'Yep, foreach loops work on SplFixedArray.';
echo '<br /><br />';

?>
    </pre>
    
    <p><a href="../index.html">back to data structures list</a></p>
    <!-- END CUSTOM CONTENT -->
    
    <!-- JAVASCRIPT FILES -->
    <!-- libraries go here -->
    
    <!-- custom scripts go here -->
    
    <!-- END JAVASCRIPT FILES -->
</body>    
</html>