<?php
$conn = mysqli_connect("localhost", "root", "88aYy`A\$P>3qXWJz", "exoro_exorodatabase");
if ($conn->connect_error || $conn == null) {//
    die("An error occured while trying to connect to database. We're sorry!");
}

class db
{
    function no_xss($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function req_sql($sql, $params = [],$newtype = false, $resulttype = MYSQLI_ASSOC)
    {
        global $conn;
        $sql_exec = mysqli_prepare($conn, $sql);
        if(strpos($sql, "?") !== false) {
            $newarr[] = [];
            for ($i = 0; $i < sizeof($params); $i++) {
                $newarr[$i] = $this->no_xss($params[$i]);
                mysqli_real_escape_string($conn, $newarr[$i]);
            }
            $sql_exec->bind_param(str_repeat("s", sizeof($newarr)), ...$newarr);
        }
        $sql_exec->execute();
        $res = $sql_exec->get_result();
        if ($res->num_rows == 0) {
            return null;
        } else {
            if(!$newtype) {
                return $res->fetch_array($resulttype);
            } else {
                return $res;
            }
        }
    }
}

?>