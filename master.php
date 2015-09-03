<?php
header("Content-type: text/css; charset=utf-8");


function explode_contents ($n) {
  return explode("=", $n);
}

function replace_commas ($contents) {
  for ($x = 0; $x < count($contents); $x++) {
    if (!preg_match("/{|}|media/", $contents[$x]) && preg_match("/:|@/", $contents[$x])) {
      $contents[$x] .= ";";
    }
  }

  return $contents;
}

function SimpleCSS ($path) {
  $contents = explode("\n", file_get_contents($path));
  $vars = array();
  for ($x = 0; $x < count($contents); $x++) {
    if (preg_match("/\\$/", $contents[$x]) && preg_match("/\=/", $contents[$x])) {
      array_push($vars, $contents[$x]);
      unset($contents[$x]);
    }
  }

  $vars = array_map("explode_contents", array_filter($vars));

  for ($x = 0; $x < count($vars); $x++) {
    $replace[$x] = preg_replace("/;/", "", $vars[$x][1]);
    $vars[$x] = preg_replace("/ /", "", $vars[$x][0]);
  }

  return str_replace($vars, $replace, implode("\n", replace_commas($contents)));
}

echo SimpleCSS("main.css");
?>
