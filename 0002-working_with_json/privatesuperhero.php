<?php

class PrivateSuperhero
{
    private $codeName;
    private $realName;

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

    private function getRealName()
    {
        return $this->realName;
    }

    public function encodeJSON()
    {
        $jsonData = '{"codeName":"'
            . $this->getCodeName()
            . '","realName":"'
            . $this->getRealName()
            . '"}';

        return $jsonData;
    }
}
