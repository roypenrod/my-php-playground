<?php

class PublicSuperhero
{
    public $codeName;
    public $realName;

    public function __construct($codeName, $realName)
    {
        $this->setCodeName($codeName);
        $this->setRealName($realName);
    }

    private function setCodeName($codeName)
    {
        $this->codeName = $codeName;
    }

    public function getCodeName()
    {
        return $this->codeName;
    }

    private function setRealName($realName)
    {
        $this->realName = $realName;
    }

    public function getRealName()
    {
        return $this->realName;
    }

}
