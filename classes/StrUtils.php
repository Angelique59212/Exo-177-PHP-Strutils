<?php
class StrUtils {
    private string $str ;

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
    public function __construct(string $str) {
        $this ->setStr($str);
    }

    /**
     * @return string
     */
    public function bold():string {
        return "<p style='font-weight: bold'>" . $this ->getStr() . "</p>";
    }

    /**
     * @return string
     */
    public function italic():string {
        return "<p style='font-style: italic'>" . $this ->getStr() . "</p>";
    }

    /**
     * @return string
     */
    public function underline():string {
        return "<p style='text-decoration: underline'>" . $this ->getStr() . "</p>";
    }

    /**
     * @return string
     */
    public function capitalize():string {
        return "<p style='text-transform: capitalize'>" . $this ->getStr() . "</p>";
    }

    /**
     * @return string
     */
    public function uglify() :string {
        return $this ->bold() . $this ->capitalize() . $this ->underline() . $this ->italic();
    }
}



