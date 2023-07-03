<?php

require_once "reflection/class/LoginRequest.php";
require_once "reflection/class/ValidationException.php";
require_once "reflection/class/ValidationUtil.php";


$loginRequest = new LoginRequest();
$loginRequest->username = null;
$loginRequest->password = null;
ValidationUtil::validateReflection($loginRequest);
