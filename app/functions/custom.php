<?php

function dd($dump){

  var_dump($dump);
  die();
}

function request(){
  $request = $_SERVER['REQUEST_METHOD'];
  $check_method = ($request == 'POST') ?  $_POST :  $_GET;

  return $check_method;
}

function redirect($target){
  return header("location:/?page={$target}");
}

function redirect2Home(){
  return header("location:/");
}