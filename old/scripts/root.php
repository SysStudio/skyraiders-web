<?

require_once("database.php");

define("SITE_PATH", "/var/www/html");

/* Session stuff
 * $_SESSION["user"] = user object of dude logged in
 */

function absolute_path($site_rel) {
    return SITE_PATH . "/" . $site_rel;
}

/* Hashes password for use in database/password validation.
 * Why $username? $username is salted in password like
 * in WOW.
 */
function hash_password($username, $password) {
    return hash("sha256", $username . ":" . $password);
}

/* Basically, check to see if $_SESSION["user"] is set correctly,
 * as it should be if the user is logged in.
 */
function logged_in() {
    return (isset($_SESSION["user"]) && ($_SESSION["user"] != null));
}

class User {
    public $uid;
    public $username;
    public $password;
    public function __construct($uid, $username, $password) {
        $this->uid = $uid;
        $this->username = $username;
        $this->password = $password;
    }
}

?>