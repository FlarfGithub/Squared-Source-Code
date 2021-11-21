<?php
require_once("db.php");
$db = new db();

class user
{
    function invited()
    {
        global $db;
        $user = $db->req_sql("SELECT * FROM users WHERE ticket = ?", [$_SESSION['ticket']]);
        if ($user['invited'] == '1') {
            return true;
        } else {
            return false;
        }
    }
    function verified()
    {
        global $db;
        $user = $db->req_sql("SELECT * FROM users WHERE ticket = ?", [$_SESSION['ticket']]);
        if ($user['verified'] == '1') {
            return true;
        } else {
            return false;
        }
    }

    function user()
    {
        global $db;
        return $db->req_sql("SELECT * FROM users WHERE ticket = ?", [$_SESSION['ticket']]);
    }

    function loggedin()
    {
        global $db;
        $user = $db->req_sql("SELECT * FROM users WHERE ticket = ?", [$_SESSION["ticket"]]);
        if ($user != null) {
            return true;
        } else {
            return false;
        }
    }

    function checkguild()
    {
        if ($this->user()['verifieddis'] == "1") {
            return true;
        } else {
            return false;
        }
    }

    function userid()
    {
        if ($this->loggedin()) {
            return $this->user()['id'];
        }
    }

    function admin()
    {
        if ($this->loggedin()) {
            if ($this->user()['admin'] == "1") {
                return true;
            } else {
                return false;
            }
            
        }
        return false;
    }

    function getlastonline()
    {
        if ($this->loggedin()) {
            return $this->user()['lastonline'];
        }
    }

    function getlastreceive()
    {
        if ($this->loggedin()) {
            return $this->user()['lastreceive'];
        }
    }

    function getuserbyname($name)
    {
        global $db;
        return $db->req_sql("SELECT * FROM users WHERE user = ?", [$name]);
    }

    function getuserbyticket($ticket)
    {
        global $db;
        return $db->req_sql("SELECT * FROM users WHERE ticket = ?", [$ticket]);
    }

    function getuserbyid($id)
    {
        global $db;
        return $db->req_sql("SELECT * FROM users WHERE id = ?", [$id]);
    }

    function namebux()
    {
        if ($this->loggedin()) {
            return $this->user()['namebux'];
        }
    }

    function redirifnotadmin()
    {
        if (!$this->loggedin()) {
            Header("Location: /");
            die();
        }
        if (!$this->admin()) {
            Header("Location: /");
            die();
        }
    }

    function redirifnotloggedin()
    {
        if (!$this->loggedin()) {
            Header("Location: /");
            die();
        }
    }
}

?>