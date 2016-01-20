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
    <h1>Switch Values Between Two Variables Without Using Temporary Variable</h1>

    <p>
        Challenge:  You have to switch the values of two variables with each other,
        but you can't use a temporary variable to do it.
    </p>

    <p>
        Before: <br />
        a = 1<br />
        b = 6<br />
    </p>
    <p>
        After: <br />
        a = 6<br />
        b = 1
    </p>

    <pre>
<?php
echo 'Traditional Method:'
    . '<br />'
    . '$a = 1'
    . '<br />'
    . '$b = 6'
    . '<br /><br />'
    . '$a = $a + $b'
    . '<br />'
    . '$b = $a - $b'
    . '<br />'
    . '$a = $a - $b'
    . '<br /><br />';

$a = 1;
$b = 6;
echo '=== Actual Output from Traditional Method ==='
    . '<br /><br />';

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

echo "NOTE:  The traditional method is fine with numbers, but it doesn't work"
    . '<br />'
    . 'with all data types.'
    . '<br /><br />';

$a = 'cat';
$b = 'dog';
echo '=== Actual Output from Traditional Method ==='
    . '<br /><br />';

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

echo '====== MY ALTERNATE METHOD ======'
    . '<br /><br />';

echo 'My solution to the problem is to use an array to switch the values'
    . '<br />'
    . 'between the variables without worrying about the data type.'
    . '<br /><br />';

echo '=== Actual Output from My Alternate Method ==='
    . '<br /><br />';

echo 'TEST CASE #1:'
    . '<br /><br />';

$a = 1;
$b = 6;

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

$a = [$a, $b];
$b = $a[0];
$a = $a[1];

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';


echo 'TEST CASE #2:'
    . '<br /><br />';

$a = 'cat';
$b = 'dog';

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

$a = [$a, $b];
$b = $a[0];
$a = $a[1];

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';


echo 'TEST CASE #3:'
    . '<br /><br />';

$a = [1, 2];
$b = [3, 4];

echo 'Before:'
    . '<br />'
    . '$a = [' . $a[0] . ', ' . $a[1] . ']'
    . '<br />'
    . '$b = [' . $b[0] . ', ' . $b[1] . ']'
    . '<br /><br />';

$a = [$a, $b];
$b = $a[0];
$a = $a[1];

echo 'After:'
    . '<br />'
    . '$a = [' . $a[0] . ', ' . $a[1] . ']'
    . '<br />'
    . '$b = [' . $b[0] . ', ' . $b[1] . ']'
    . '<br /><br />';

echo 'Solution: '
    . '<br />'
    . '$a = [$a, $b]'
    . '<br />'
    . '$b = $a[0]'
    . '<br />'
    . '$a = $a[1]'
    . '<br /><br />';

echo '====== ANOTHER ALTERNATE METHOD ======'
    . '<br /><br />';

echo "Here's another alternate method I found to solve the problem"
    . '<br />'
    . 'using list() and array().'
    . '<br /><br />';

echo '=== Actual Output from The Alternate Method ==='
    . '<br /><br />';

echo 'TEST CASE #1:'
    . '<br /><br />';

$a = 1;
$b = 6;

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

list($a, $b) = array($b, $a);

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';


echo 'TEST CASE #2:'
    . '<br /><br />';

$a = 'cat';
$b = 'dog';

echo 'Before:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';

list($a, $b) = array($b, $a);

echo 'After:'
    . '<br />'
    . '$a = ' . $a
    . '<br />'
    . '$b = ' . $b
    . '<br /><br />';


echo 'TEST CASE #3:'
    . '<br /><br />';

$a = [1, 2];
$b = [3, 4];

echo 'Before:'
    . '<br />'
    . '$a = [' . $a[0] . ', ' . $a[1] . ']'
    . '<br />'
    . '$b = [' . $b[0] . ', ' . $b[1] . ']'
    . '<br /><br />';

list($a, $b) = array($b, $a);

echo 'After:'
    . '<br />'
    . '$a = [' . $a[0] . ', ' . $a[1] . ']'
    . '<br />'
    . '$b = [' . $b[0] . ', ' . $b[1] . ']'
    . '<br /><br />';

echo 'Solution: '
    . '<br />'
    . 'list($a, $b) = array($b, $a)'
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
