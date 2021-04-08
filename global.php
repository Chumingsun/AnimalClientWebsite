<?
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);
ini_set('session.save_path', '/tmp');

session_start();
include_once("database.php");

if($_SESSION['email']=="admin@queensu.ca" && $_SESSION['password']=="123"){
        $logged=1;
    }else{
        $logged=0;
    }
?>