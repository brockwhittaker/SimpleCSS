<?php
header("Content-type: text/css; charset=utf-8");
function ec ($n) {
  return explode("=", $n);
}
function rc ($c) {
  for ($x = 0; $x < count($c); $x++) {
    if (!preg_match("/{|}|media/", $c[$x]) && preg_match("/:|@/", $c[$x])) {
      $c[$x] .= ";";
    }
  }
  return $c;
}

function SimpleCSS ($p) {
  $c = explode("\n", file_get_contents($p));
  $v = array();
  for ($x = 0; $x < count($c); $x++) {
    if (preg_match("/\\$/", $c[$x]) && preg_match("/\=/", $c[$x])) {
      array_push($v, $c[$x]);
      unset($c[$x]);
    }
  }
  $v = array_map("ec", array_filter($v));
  for ($x = 0; $x < count($v); $x++) {
    $r[$x] = preg_replace("/;/", "", $v[$x][1]);
    $v[$x] = preg_replace("/ /", "", $v[$x][0]);
  }
  return str_replace($v, $r, implode("\n", rc($c)));
}

echo SimpleCSS("main.css");
?>
