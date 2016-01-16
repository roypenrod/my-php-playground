class Animal 
{
    private $type;
    private $legs;
    private $tail;
    
    public function setType($animalType) 
    {
        $this->type = $animalType;
    }
    
    public function getType() 
    {
        return $this->type;
    }
    
    public function setNumberOfLegs($number)
    {
        $this->legs = $number;
    }
    
    public function getNumberOfLegs() 
    {
        return $this->legs;
    }
    
    # $tail expects a boolean
    public function setTail($tail) 
    {
        $this->tail = $tail;
    }
    
    public function getTail()
    {
        return $this->tail;
    }

}