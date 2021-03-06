<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 05.12.2017
 * Time: 08:58
 */


namespace peterbeater4168\flaggen;
require_once "Flag.php";
require_once "..\Interfaces\FlagInterface.php";
use peterbeater4168\flaggen\Interfaces as inter;

class RectangleFlag extends Flag implements inter\FlagInterface
{

    public function getArea() : float
    {
        return $this->height*$this->width;
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}