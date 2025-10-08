<?php
include_once('app/models/AuthModel.php'); '';

$id = $_SESSION['user_id'] ?? null;

$account = get_user_by_id($id);

include_once('app/views/account.view.php');

?>