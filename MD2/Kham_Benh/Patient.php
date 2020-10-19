<?php


class Patient
{
    public $name;
    public $code;

    public function __construct($name,$code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCodePatient()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCodePatient($code): void
    {
        $this->code = $code;
    }
}