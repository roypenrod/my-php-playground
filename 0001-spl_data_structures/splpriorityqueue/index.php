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
    <h1>SplPriorityQueue</h1>
    <p><a href="../index.html">back to data structures list</a></p>

    <pre>
<?php

echo 'create a new SplPriorityQueue as $myFavoriteSuperheroes';
echo '<br />';
echo 'add the following list of superheroes with the listed priority:';
echo '<br />';
echo '    Daredevil, Priority: 4';
echo '<br />';
echo '    Doctor Strange, Priority: 5';
echo '<br />';
echo '    Captain America, Priority: 1';
echo '<br />';
echo '    Iron Man, Priority: 2';
echo '<br />';
echo '    Iron Fist, Priority: 30';
echo '<br />';
echo '    Ms. Marvel, Priority: 40';
echo '<br />';
echo '    Luke Cage, Priority: 20';
echo '<br />';
echo '    Jessica Jones, Priority: 10';
echo '<br />';
echo '    Wolverine, Priority: 16';
echo '<br />';
echo '    Phoenix, Priority: 15';
echo '<br />';
echo '    Falcon, Priority: 25';
echo '<br />';
echo '    Elektra, Priority: 3';
echo '<br /><br />';
echo 'NOTE:';
echo '<br />';
echo 'In $myFavoriteSuperheroes, a lower priority is better.';
echo '<br />';
echo "Let's see how that works in SplPriorityQueue by default.";
echo '<br /><br />';

$myFavoriteSuperheroes = new SplPriorityQueue();

$myFavoriteSuperheroes->insert('Daredevil', 4);
$myFavoriteSuperheroes->insert('Doctor Strange', 5);
$myFavoriteSuperheroes->insert('Captain America', 1);
$myFavoriteSuperheroes->insert('Iron Man', 2);
$myFavoriteSuperheroes->insert('Iron Fist', 30);
$myFavoriteSuperheroes->insert('Ms. Marvel', 40);
$myFavoriteSuperheroes->insert('Luke Cage', 20);
$myFavoriteSuperheroes->insert('Jessica Jones', 10);
$myFavoriteSuperheroes->insert('Wolverine', 16);
$myFavoriteSuperheroes->insert('Phoenix', 15);
$myFavoriteSuperheroes->insert('Falcon', 25);
$myFavoriteSuperheroes->insert('Elektra', 3);

echo 'print_r($myFavoriteSuperheroes)';
echo '<br />';
print_r($myFavoriteSuperheroes);
echo '<br /><br />';

echo '==============================================';
echo '<br /><br />';

echo "Let's take a look at the top() of the priority queue";
echo '<br />';
echo 'to see whether a higher value has priority or';
echo '<br />';
echo 'a lower value has priority';
echo '<br /><br />';
echo 'result:';
echo '<br />';
echo '    higher value has higher priority';
echo '<br /><br />';

echo 'top:';
echo '<br />';
print_r($myFavoriteSuperheroes->top());
echo '<br /><br />';

echo '==============================================';
echo '<br /><br />';

echo "Let's re-create my favorite superheroes list by ";
echo '<br />';
echo 'giving each a priority of 100 - the value I assigned above.';
echo '<br />';
echo 'That should reverse the order in the list.';
echo '<br /><br />';

$myFavoriteSuperheroes = new SplPriorityQueue();

$myFavoriteSuperheroes->insert('Daredevil', 100-4);
$myFavoriteSuperheroes->insert('Doctor Strange', 100-5);
$myFavoriteSuperheroes->insert('Captain America', 100-1);
$myFavoriteSuperheroes->insert('Iron Man', 100-2);
$myFavoriteSuperheroes->insert('Iron Fist', 100-30);
$myFavoriteSuperheroes->insert('Ms. Marvel', 100-40);
$myFavoriteSuperheroes->insert('Luke Cage', 100-20);
$myFavoriteSuperheroes->insert('Jessica Jones', 100-10);
$myFavoriteSuperheroes->insert('Wolverine', 100-16);
$myFavoriteSuperheroes->insert('Phoenix', 100-15);
$myFavoriteSuperheroes->insert('Falcon', 100-25);
$myFavoriteSuperheroes->insert('Elektra', 100-3);

echo 'print_r($myFavoriteSuperheroes)';
echo '<br />';
print_r($myFavoriteSuperheroes);
echo '<br /><br />';

echo '==============================================';
echo '<br /><br />';

echo "Did it work?";
echo '<br /><br />';
echo 'result:';
echo '<br />';
echo '    Yep.  Captain America is at the top of my list.';
echo '<br /><br />';

echo 'top:';
echo '<br />';
print_r($myFavoriteSuperheroes->top());
echo '<br /><br />';

echo '==============================================';
echo '<br /><br />';

echo 'default extract flags is to extract the data only';
echo '<br />';
echo 'go to the top of the priority list';
echo '<br />';
echo 'iterate through $myFavoriteSuperheroes';
echo '<br />';
echo 'call out my favorite superheroes in order from';
echo '<br />';
echo 'my favorite to my least favorite';
echo '<br /><br />';

$myFavoriteSuperheroes->top();

while (!$myFavoriteSuperheroes->isEmpty()) {
    print_r($myFavoriteSuperheroes->extract());
    echo '<br />';
}

echo '<br /><br />';

echo '==============================================';
echo '<br /><br />';

echo "Let's take a final peek at " . '$myFavoriteSuperheroes';
echo '<br />';
echo 'and see what it looks like now.';
echo '<br /><br />';

echo 'print_r($myFavoriteSuperheroes)';
print_r($myFavoriteSuperheroes);
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
