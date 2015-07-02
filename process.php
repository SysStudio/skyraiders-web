<?
session_start();

require_once("scripts/root.php");
require_once("scripts/database.php");

if (!isset($_GET['a'])) // not supposed to happen, n00b h4xx
    die("asdf");

switch ($_GET["a"]) {
    case "-1": //logout
        session_destroy();
        break;
    case "0": // login
        if (empty($_POST["username"]) || empty($_POST["password"]))
            die("Uh, you'll probably want to complete them fields...");
        
        //die($_POST["username"] . " " . $_POST["password"]);
            
        try {
            Database::login($_POST["username"], $_POST["password"]);
            echo("WOOT WOOT!<br/>");
            echo "Welcome to stuff, " . $_SESSION["user"]->username;
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
        break;
    case "1": // create user
        /*if (!logged_in()) {
            die("Dude, GO AWAY.");
        }*/
        try {
            Database::createUser($_POST["username"], $_POST["password"]);
            echo("SUCCESSSSSSS!");
        } catch (Exception $e) {
            die($e->getMessage());
        }
        break;
    default: die("Dude go away.");
}

?>