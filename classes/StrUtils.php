<?php
class StrUtils {
    private $str = 'Nous sommes entrain d\'apprendre les objets';

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }


    /**
     * @param $str
     */
    public function __construct($str) {
        $this ->setStr($str);
    }

}



