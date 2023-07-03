<?php

require_once "exception/class/LoginRequest.php";
require_once "exception/class/ValidationException.php";

function validateLoginRequest(LoginRequest $request){

    if(!isset($request->username)){
        throw new ValidationException("Username is Null");
    }else if(!isset($request->password)){
        throw new ValidationException("Password is Null");
    }else if(trim($request->username == "")){
        throw new Exception("Username is empty");
    }else if(trim($request->password == "")){
        throw new Exception("Password is empty");
    }
}

// cara pertama untuk menangkap multiple catch
// try {
//     $loginRequest = new LoginRequest();
//     validateLoginRequest($loginRequest);
// }catch (ValidationException $exception) {
//     echo "Validation Error: {$exception->getMessage()}".PHP_EOL;
// }catch (Exception $exception) {
//     echo "Validation Error: {$exception->getMessage()}".PHP_EOL;
// }

// cara kedua untuk menangkap multiple catch
try {
    $loginRequest = new LoginRequest();
    validateLoginRequest($loginRequest);
}catch (ValidationException | Exception $exception) {
    echo "Validation Error: {$exception->getMessage()}".PHP_EOL;

    // jika ingin melacak letak error secara detail
    var_dump($exception->getTrace());
}
