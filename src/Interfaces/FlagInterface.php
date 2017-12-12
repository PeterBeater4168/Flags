<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 05.12.2017
 * Time: 09:02
 */


namespace peterbeater4168\flaggen\Interfaces;


interface FlagInterface
{
    public function getArea() : float;


    /**
     * @return string Outputs information as string
     *
     */
    public function __toString() :string ;
}