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
    <h1>SplStack</h1>
    <p><a href="../index.html">back to data structures list</a></p>
    
    <pre>
<?php 

echo 'Think of a stack like a Pez dispenser.';
echo '<br />';
echo 'You put one color pez candy in, then put another on top of it,';
echo '<br />';
echo 'pushing the first candy down.  Another candy goes on top of that';
echo '<br />';
echo 'pushing both of the candies down to the bottom of the stack.';
echo '<br />';
echo 'When you want a candy, you "pop" it off the top of the stack.';
echo '<br /><br />';

echo 'create a SplStack as $myPezDispenser';
echo '<br />';
echo 'push the following colors of candy into it in this order:';
echo '<br />';
echo '    red';
echo '<br />';
echo '    yellow';
echo '<br />';
echo '    green';
echo '<br />';
echo '    blue';
echo '<br />';
echo '    orange';
echo '<br />';
echo '    purple';
echo '<br /><br />';

$myPezDispenser = new SplStack();
$myPezDispenser->push('red');
$myPezDispenser->push('yellow');
$myPezDispenser->push('green');
$myPezDispenser->push('blue');
$myPezDispenser->push('orange');
$myPezDispenser->push('purple');

echo 'print_r($myPezDispenser):';
echo '<br />';
print_r($myPezDispenser);
echo '<br /><br />';

echo '===========================================';
echo '<br /><br />';

echo 'rewind the iterator';
echo '<br />';
echo 'iterate through the stack';
echo '<br />';
echo 'echo each value as it pops off the stack';
echo '<br /><br />';

$myPezDispenser->rewind();

while ( $myPezDispenser->count() > 0  ) {    
    echo $myPezDispenser->pop();
    echo '<br />';    
}

echo '<br /><br />';


echo '===========================================';
echo '<br /><br />';

echo 'print_r($myPezDispenser):';
echo '<br />';
print_r($myPezDispenser);
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