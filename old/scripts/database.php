<? 
/* database.php
 * Created: 8 Jul 2014
 * Author: Allek
 */


require_once("/var/www/private/creds.php");
require_once("/var/www/html/scripts/root.php");

Database::$mysqli = new mysqli($db_url, $db_user, $db_pass, $db_name);
if (Database::$mysqli->connect_error)
    trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);

class Database {
    public static $mysqli;
    
    /* Attempt user login.
     * If user DNE, throw NonexistentUserException.
     * If bad pass, throw WrongPasswordException.
     */
    public static function login($username, $password) {
        if (!Database::usernameExists($username))
            throw new Exception("Username entered does not exist.");
    
        $hashedPassword = hash_password($username, $password);
        
        $user = Database::getUserByName($username);
        if ($hashedPassword == $user->password) {
            $_SESSION["user"] = $user;
        } else {
            $_SESSION["user"] = null;
            throw new Exception("The username/password combination entered is invalid.");
        }
    }
    
    /* Create new user dude.
     */
    public static function createUser($username, $password) {
        /*if (!logged_in())
            throw new Excpetion("Dude, go away.");*/
    
        if (Database::usernameExists($username))
            throw new Exception("The requested username already exists.");
        
        $hashedPassword = hash_password($username, $password);
        
        $query = "Insert INTO Users (Username, Password) VALUES (?, ?)";
        $stmt = Database::$mysqli->prepare($query);
        $stmt->bind_param("ss", $username, $hashedPassword);
        if (!$stmt->execute())
            throw new Exception("Failed to create user.");
    }
    
    /* Does user with name $username exist in database? */
    public static function usernameExists($username) {
        return (Database::getUserByName($username) == false) ? false : true;
    }
    
    /* Um, yeah. Lazy coding is good coding.
     * $thing           - value we're looking for
     * $thingName       - name of thing in database (this is where the column goes)
     * $stmtThingType   - this is what goes in bind_param. "s" for string, "i" for int, etc.
     */
    public static function getUserByThing($thing, $thingName, $stmtThingType) {
        $query = "SELECT * FROM Users WHERE $thingName = ?";
        $stmt = Database::$mysqli->prepare($query);
        if ($stmt == false) {
            trigger_error("Wrong SQL: " . $query . " Error: " . Database::$mysqli->error, E_USER_ERROR);
            die("dez");
            return false;
        }
        $stmt->bind_param($stmtThingType, $thing);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows < 1)
            return false;
        
        $stmt->bind_result($_uid, $_username, $_password);
        $stmt->fetch();
        $stmt->close();
        return new User($_uid, $_username, $_password);
    }
    
    /* Query database for user with $uid. */
    public static function getUserByID($uid) {
        return Database::getUserByThing($uid, "ID", "i");
    }
    
    /* Query database for user with $username */
    public static function getUserByName($username) {
        return Database::getUserByThing($username, "Username", "s");
    }
}

?>