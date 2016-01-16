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
    <h1>SplObjectStorage</h1>
    <p><a href="../index.html">back to data structures list</a></p>
    
    <pre>
<?php 

class Animal
{
    private $type;
    private $name;
    
    public function __construct($typeOfAnimal)
    {
        $this->type = $typeOfAnimal;
    }
    
    public function setType($typeOfAnimal)
    {
        $this->type = $typeOfAnimal;
    }
    
    public function getType() 
    {
        return $this->type;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName($name)
    {
        return $this->name;
    }
}

echo 'create three new Animal objects: dog, cat, horse';
echo '<br /><br />';

$myDog = new Animal('dog');
$myCat = new Animal('cat');
$myHorse = new Animal('horse');

echo '$myDog: ';
echo '<br />';
var_dump($myDog);
echo '<br />';

echo '$myCat: ';
echo '<br />';
var_dump($myCat);
echo '<br />';

echo '$myHorse: ';
echo '<br />';
var_dump($myHorse);
echo '<br />';

echo '===================================';
echo '<br /><br />';

echo 'create a new SplObjectStorage as $myStorage';
echo '<br />';
echo 'attach $myDog to it';
echo '<br /><br />';

$myStorage = new SplObjectStorage();
$myStorage->attach($myDog);

echo '$myStorage: ';
echo '<br />';
var_dump($myStorage);
echo '<br />';

echo '===================================';
echo '<br /><br />';

echo 'get some info about $myStorage';
echo '<br /><br />';

echo '$myStorage->count(): ';
echo '<br />';
echo $myStorage->count();
echo '<br /><br />';

echo '$myStorage->current(): ';
echo '<br />';
var_dump($myStorage->current());
echo '<br />';

echo '$myStorage->getInfo(): ';
echo '<br />';
var_dump($myStorage->getInfo());
echo '<br />';

echo '$myStorage->key(): ';
echo '<br />';
echo $myStorage->key();
echo '<br /><br />';

echo '$myStorage->valid(): ';
echo '<br />';
var_dump($myStorage->valid());
echo '<br />';

echo '===================================';
echo '<br /><br />';

echo 'try to call getType() directly from current()';
echo '<br />';
echo 'code:';
echo '<br />';
echo '    $myStorage->current()->getType();';
echo '<br />';
echo 'result: ';
echo '<br />';
echo "    Fatal error:  Call to a member function getType() on a non-object";
echo '<br /><br />';

# echo $myStorage->current()->getType();

echo '===================================';
echo '<br /><br />';

echo 'assign the current object to $currentObject';
echo '<br />';
echo 'call getType() from $currentObject';
echo 'code:';
echo '<br />';
echo '    $currentObject = $myStorage->current();';
echo '    echo $currentObject->getType();';
echo '<br />';
echo 'result: ';
echo '<br />';
echo "    Fatal error:  Call to a member function getType() on a non-object";
echo '<br /><br />';

# $currentObject = $myStorage->current();
# echo $currentObject->getType();
# echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'assign the current object to $object';
echo '<br />';
echo 'var_dump($object)';
echo '<br /><br />';

$object = $myStorage->current();
var_dump($object);
echo '<br />';

echo '===================================';
echo '<br /><br />';

echo 'rewind $myStorage';
echo '<br />';
echo 'assign the current object to $object';
echo '<br />';
echo 'var_dump($object)';
echo '<br /><br />';

$myStorage->rewind();
$object = $myStorage->current();
var_dump($object);
echo '<br />';

echo '===================================';
echo '<br /><br />';

echo 'rewind $myStorage';
echo 'assign the current object to $currentObject';
echo '<br />';
echo 'call getType() from $currentObject';
echo 'code:';
echo '<br />';
echo '    $myStorage->rewind();';
echo '    $currentObject = $myStorage->current();';
echo '    echo $currentObject->getType();';
echo '<br />';
echo 'result: ';
echo '<br />';
echo "    Fatal error:  Call to a member function getType() on a non-object";
echo '<br /><br />';

$myStorage->rewind();
$currentObject = $myStorage->current();
echo $currentObject->getType();
echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'Can I call getType() directly from current() if I rewind first?';
echo '<br />';
echo 'code:';
echo '<br />';
echo '    $myStorage->rewind();';
echo '    echo $myStorage->current()->getType();';
echo '<br />';
echo 'result: ';
echo '<br />';
echo "    Fatal error:  Call to a member function getType() on a non-object";
echo '<br /><br />';

$myStorage->rewind();
echo $myStorage->current()->getType();
echo '<br />';
echo 'Awesome.  It worked.';
echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'try attaching $myDog again, along with $myCat and $myHorse';
echo '<br /><br />';

$myStorage->attach($myDog);
$myStorage->attach($myCat);
$myStorage->attach($myHorse);

var_dump($myStorage);
echo 'NOTE:  Only one $myDog.  That means it attaches the same object only once.';
echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'rewind the iterator';
echo '<br />';
echo 'iterate through $myStorage';
echo '<br />';
echo 'echo the getType() of each object';
echo '<br />';
echo 'echo the string returned from serialize() for each object';
echo '<br /><br />';

$myStorage->rewind();

while ($myStorage->valid()) {
    echo 'getType():';
    echo $myStorage->current()->getType();
    echo '<br />';
    echo 'serialize(): ';
    echo $myStorage->serialize();
    echo '<br /><br />';
    $myStorage->next();
}
echo 'NOTE:  serialize() works on the entire $myStorage object, not the current object';
echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'store serialized string for $myStorage as $ourStorageString';
echo '<br /><br />';

$ourStorageString = 'x:i:3;O:6:"Animal":2:{s:12:"Animaltype";s:3:"dog";s:12:"Animalname";N;},N;;O:6:"Animal":2:{s:12:"Animaltype";s:3:"cat";s:12:"Animalname";N;},N;;O:6:"Animal":2:{s:12:"Animaltype";s:5:"horse";s:12:"Animalname";N;},N;;m:a:0:{}';
//$ourStorageString = $myStorage->serialize();
echo '$ourStorageString: ';
echo '<br />';
echo $ourStorageString;
echo '<br /><br />';

echo '===================================';
echo '<br /><br />';

echo 'create new SplObjectStorage as $ourStorageObject';
echo '<br />';
echo 'unserialize $ourStorageString into $ourStorageObject';
echo '<br />';
echo 'var_dump $ourStorageObject';
echo '<br /><br />';
echo 'code: ';
echo '<br />';
echo '    $ourStorageObject = new SplObjectStorage();';
echo '<br />';
echo '    $ourStorageObject.unserialize($ourStorageString);';
echo '<br />';
echo '    var_dump($ourStorageObject);';
echo '<br /><br />';
echo 'results: ';
echo '<br />';
echo '    Notice:  unserialize(): Error at offset 0 of 223 bytes in F:\My Documents\0 Playgrounds (Web Dev)\my-php-playground\0001-spl_data_structures\splobjectstorage\index.php on line 263';
echo '<br />';
echo '    Catchable fatal error:  Object of class SplObjectStorage could not be converted to string in F:\My Documents\0 Playgrounds (Web Dev)\my-php-playground\0001-spl_data_structures\splobjectstorage\index.php on line 263';
echo '<br /><br />';

//$ourStorageObject = new SplObjectStorage();
//$ourStorageObject.unserialize($ourStorageString);
//var_dump($ourStorageObject);

//$ourStorageObject->rewind();

//while ($ourStorageObject->valid()) {
//    echo 'getType():';
//    echo $ourStorageObject->current()->getType();
//    echo '<br /><br />';
//    $myStorage->next();
//}

echo "<h2>What mistake did I make serializing and unserializing the object?</h2>";

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