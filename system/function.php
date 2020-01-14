<?php
include './system/config.php';
function EscapeString($value)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], $value);
}
function Redirect($location)
{
  header("location:$location");
}

function base_url($url='')
{
  return $GLOBALS['base_url'] . $url;
}

function show_404()
{
  redirect(base_url('pages/404-Not-Found.php'));
}

function POST($input)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], htmlspecialchars(rtrim(ltrim($_POST[$input]))));
}

function GET($input)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], $_GET[$input]);
}

function run_query($sql)
{
  try {
    $result = mysqli_query($GLOBALS['koneksi'], $sql);
  } catch (Exception $e) {
    echo "Gagal : $e->getMessage()";
  }
  return $result;
}

function query_get_array($sql)
{
  $result = array();
  return mysqli_fetch_array($sql);
}

function query_get_row($sql)
{
  return mysqli_fetch_assoc(run_query($sql));
}

function query_get_object($sql)
{
  return mysqli_fetch_object($sql);
}

function query_num_rows($sql)
{
  return mysqli_num_rows(run_query($sql));
}

function Page($menu, $submenu, $page)
{
  return $GLOBALS['base_url'] . "admin.php?menu=" . $menu . "&submenu=" . $submenu . "&page=" . $page;
}

function db_insert($table, $data)
{
  $field = "";
  $values = "";
  foreach ($data as $key => $value) {
    $field = $field . "$key, ";
    $values = $values . "'$value', ";
  }
  $resfield = substr($field, 0, strlen($field) - 2);
  $resvalue = substr($values, 0, strlen($values) - 2);
  $sql = "INSERT INTO $table ($resfield) VALUES ($resvalue);";
  $query = run_query($sql);
}

function db_update($table, $data, $where)
{
  $setvalue = "";
  $where_ = "";
  foreach ($data as $key => $value) {
    $setvalue = $setvalue . "$key = '$value', ";
  }
  foreach ($where as $key => $value) {
    $where_ = $where_ . "$key = '$value'";
  }
  $resvalue = substr($setvalue, 0, strlen($setvalue) - 2);
  $sql = "UPDATE $table SET $resvalue WHERE $where_";
  $query = run_query($sql);
  echo "$sql";
}

?>
