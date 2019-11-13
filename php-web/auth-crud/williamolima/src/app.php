<?
require_once('database.php');

$banco = new Banco();

if (isset($_POST['form-login-email'])){
 var_dump($banco->read($_POST['form-login-email'], $_POST['form-login-senha']));
}