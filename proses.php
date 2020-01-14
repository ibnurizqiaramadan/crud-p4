<?php

include './system/function.php';

error_reporting(0);

$action = $_GET['a'];

if (isset($action)) {
  if ($action == "tambah") {
    $data = array(
      'username' => POST('username'), 
      'password' => md5(POST('password')),
      'email' => POST('email'),
      'nama' => POST('name')
    );
    db_insert('t_user', $data);
    Redirect(base_url());
  }

  if ($action == "edit") {
    $data = array(
      'username' => POST('username'),
      'email' => POST('email'),
      'nama' => POST('name')
    );
    $where = array('md5(id)' => POST('id'));
    db_update('t_user', $data, $where);
    Redirect(base_url());
  }

  if ($action == "hapus") {
    $sql = "DELETE FROM t_user WHERE md5(id) = '" . GET('id') . "'"; 
    run_query($sql);
    Redirect(base_url());
  }

} else {
  show_404();
}
 ?>
