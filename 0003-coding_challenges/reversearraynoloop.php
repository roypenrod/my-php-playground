<?php

// You should pass an empty array to &$reversedArray when
// you first call the function.
function reverseArrayNoLoop($forwardArray, &$reversedArray)
{
    // if $forwardArray is empty, we're done
    if (count($forwardArray) === 0) {
        return;
    } elseif (count($forwardArray) > 0) {
        // length of $forwardArray is greater than 0
        // shift the first element off the front of $forwardArray
        // unshift that element onto the front of $reversedArray
        array_unshift($reversedArray, array_shift($forwardArray));

        // call the function again recursively with the new values
        reverseArrayNoLoop($forwardArray, $reversedArray);
    }
}


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
    <h1>Reverse Array Without Using Loop</h1>

    <p>
        Challenge:  You have to reverse the array without using a loop.
    </p>

    <p>
        Before: <br />
        array = [1, 2, 3]
    </p>
    <p>
        After: <br />
        array = [3, 2, 1]
    </p>

    <pre>
<?php

echo 'The first solution is to just use the array_reverse function built into'
    . '<br />'
    . "PHP. :-)"
    . '<br /><br />'
    . "But I'm pretty sure that's not what they have in mind. lol"
    . '<br /><br />'
    . 'My solution is to do it using recursion.'
    . '<br /><br />'
    . "Personally, I think it's a little bit of a cheat because recursion"
    . '<br />'
    . "is a form of looping, but I think it's the best way to do it without"
    . '<br />'
    . 'a loop in the traditional sense.'
    . '<br /><br />'
    . "Plus, I've seen several complaints that many programming applicants"
    . '<br />'
    . "can't write a recursive function."
    . '<br /><br />'
    . 'Two birds, one stone, and all that.'
    . '<br /><br />';


echo '******************************************'
    . '<br /><br />'
    . 'TEST CASE #1'
    . '<br /><br />'
    . 'Before:'
    . '<br />'
    . 'array: [1, 2, 3]'
    . '<br /><br />'
    . 'After:'
    . '<br />'
    . 'array: [3, 2, 1]'
    . '<br /><br />'
    . '******************************************'
    . '<br /><br />';

$myArray = [1, 2, 3];
$result = [];
reverseArrayNoLoop($myArray, $result);

echo '========================================='
    . '<br /><br />'
    . 'Test Case #1 -- Actual Output'
    . '<br /><br />'
    . '$myArray: '
    . '<br />';
var_dump($myArray);
echo '<br /><br />'
    . '$result: '
    . '<br />';
var_dump($result);
echo '<br /><br />'
    . '========================================='
    . '<br /><br />';


echo '******************************************'
    . '<br /><br />'
    . 'TEST CASE #2'
    . '<br /><br />'
    . 'Before:'
    . '<br />'
    . "array: ['a', 'b', 'c', 'd', 'e', 'f']"
    . '<br /><br />'
    . 'After:'
    . '<br />'
    . "array: ['f', 'e', 'd', 'c', 'a', 'b']"
    . '<br /><br />'
    . '******************************************'
    . '<br /><br />';

$myArray = ['a', 'b', 'c', 'd', 'e', 'f'];
$result = [];
reverseArrayNoLoop($myArray, $result);

echo '========================================='
    . '<br /><br />'
    . 'Test Case #2 -- Actual Output'
    . '<br /><br />'
    . '$myArray: '
    . '<br />';
var_dump($myArray);
echo '<br /><br />'
    . '$result: '
    . '<br />';
var_dump($result);
echo '<br /><br />'
    . '========================================='
    . '<br /><br />';


echo '******************************************'
    . '<br /><br />'
    . 'TEST CASE #3'
    . '<br /><br />'
    . 'Before:'
    . '<br />'
    . 'array: [null, true, null, false]'
    . '<br /><br />'
    . 'After:'
    . '<br />'
    . 'array: [false, null, true, null]'
    . '<br /><br />'
    . '******************************************'
    . '<br /><br />';

$myArray = [null, true, null, false];
$result = [];
reverseArrayNoLoop($myArray, $result);

echo '========================================='
    . '<br /><br />'
    . 'Test Case #3 -- Actual Output'
    . '<br /><br />'
    . '$myArray: '
    . '<br />';
var_dump($myArray);
echo '<br /><br />'
    . '$result: '
    . '<br />';
var_dump($result);
echo '<br /><br />'
    . '========================================='
    . '<br /><br />';


echo '******************************************'
    . '<br /><br />'
    . 'TEST CASE #4'
    . '<br /><br />'
    . 'Before:'
    . '<br />'
    . 'array: [ [1, 2], [3, 4], [5, 6] ]'
    . '<br /><br />'
    . 'After:'
    . '<br />'
    . 'array: [ [5, 6], [3, 4], [1, 2] ]'
    . '<br /><br />'
    . '******************************************'
    . '<br /><br />';

$myArray = [ [1, 2], [3, 4], [5, 6] ];
$result = [];
reverseArrayNoLoop($myArray, $result);

echo '========================================='
    . '<br /><br />'
    . 'Test Case #4 -- Actual Output'
    . '<br /><br />'
    . '$myArray: '
    . '<br />';
var_dump($myArray);
echo '<br /><br />'
    . '$result: '
    . '<br />';
var_dump($result);
echo '<br /><br />'
    . '========================================='
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
