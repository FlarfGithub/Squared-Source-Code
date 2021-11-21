<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "Vm]hpE@wP-DlIO7y";
$dbname = "squared";

try {
    $db = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $dbuser, $dbpass, array(
        PDO::ATTR_PERSISTENT => true
    ));
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Internal Error: " . $e->getMessage();
}
try {
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
} catch (Exception $e) {
    echo "Internal Error: " . $e->getMessage();
}

function no_xss($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function req_sql($sql, $params = [], $newtype = false, $resulttype = MYSQLI_ASSOC)
{
    global $conn;
    $sql_exec = mysqli_prepare($conn, $sql);
    if (strpos($sql, "?") !== false) {
        $newarr[] = [];
        for ($i = 0; $i < sizeof($params); $i++) {
            $newarr[$i] = no_xss($params[$i]);
            mysqli_real_escape_string($conn, $newarr[$i]);
        }
        $sql_exec->bind_param(str_repeat("s", sizeof($newarr)), ...$newarr);
    }
    $sql_exec->execute();
    $res = $sql_exec->get_result();
    if (!is_bool($res)) {
        if ($res->num_rows == 0) {
            return null;
        }
    }
    if (!$newtype) {
        if(!is_bool($res)) {
            return $res->fetch_array($resulttype);
        } else {
            return null;
        }
    } else {
        return $res;
    }
}
// Turn off all error reporting
error_reporting(0);
?>