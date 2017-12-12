<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 05.12.2017
 * Time: 08:59
 */

namespace peterbeater4168\flaggen;
require_once "Flag.php";
require_once "..\Interfaces\FlagInterface.php";
use peterbeater4168\flaggen\Interfaces as inter;

class TriangleFlag extends Flag implements inter\FlagInterface
{
    public function getArea() : float
    {
        return (($this->width*$this->width)/4)*sqrt(3);
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}