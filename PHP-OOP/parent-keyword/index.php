<?php

require_once "parent-keyword/class/Shape.php";

$parents = new Shape();
echo $parents -> getCorner();

$child = new Triangle();
echo $child -> getCorner();
echo $child -> getParentCorner();