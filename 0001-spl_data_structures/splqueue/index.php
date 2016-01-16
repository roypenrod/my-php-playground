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
    <h1>SplQueue</h1>
    <p><a href="../index.html">back to data structures list</a></p>
    
    <pre>
<?php 

echo 'Think of a queue like a checkout line at the grocery store.';
echo '<br />';
echo 'The first goes into the line, then another person goes into';
echo '<br />';
echo 'the line after them.  They get served in the order they entered';
echo '<br />';
echo 'the checkout line.';
echo '<br /><br />';

echo 'create a SplQueue as $myCheckoutLine';
echo '<br />';
echo 'enque the following customers into the checkout line in this order:';
echo '<br />';
echo '    Karen';
echo '<br />';
echo '    Rich';
echo '<br />';
echo '    Stacy';
echo '<br />';
echo '    Jason';
echo '<br /><br />';

$myCheckoutLine = new SplQueue();

$myCheckoutLine->enqueue('Karen');
$myCheckoutLine->enqueue('Rich');
$myCheckoutLine->enqueue('Stacy');
$myCheckoutLine->enqueue('Jason');

echo 'print_r($myCheckoutLine):';
echo '<br />';
print_r($myCheckoutLine);
echo '<br /><br />';

echo '===========================================';
echo '<br /><br />';

echo 'rewind the iterator';
echo '<br />';
echo 'iterate through the queue';
echo '<br />';
echo 'call out the name of each person as they are served by the cashier';
echo '<br /><br />';

$myCheckoutLine->rewind();

while ( $myCheckoutLine->count() > 0  ) {    
    echo $myCheckoutLine->dequeue();
    echo '<br />';    
}

echo '<br />';

echo '===========================================';
echo '<br /><br />';

echo 'print_r($myCheckoutLine):';
echo '<br />';
print_r($myCheckoutLine);
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