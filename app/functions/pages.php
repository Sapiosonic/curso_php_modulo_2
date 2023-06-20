<?php

function load()
{

  $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
  $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

  if(!file_exists($page)){
    throw new \Exception("Error, the requested page doesn't exist!");
  }

  return $page;
}

?>