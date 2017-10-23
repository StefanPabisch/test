<?php
namespace Pabisch\Flaggenpabisch;

interface FlagInterface{
    public function getArea() : float;
    public function __toString() : string;
}