<?php

require_once('./lib/db.php');
require_once('./lib/query.php');

if($_GET['action'] == "cadastrar")
{
  $query = Query::cadastrar();

  if ($query) {
    header('location: index.php?page=lista');
  } else {
    header('location: index.php?page=cadastrar&status=true');
  }
}

if($_GET['action'] == "deletar")
{
	$query = Query::deletar();
	header('location: index.php?page=lista');
}