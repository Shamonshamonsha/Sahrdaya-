<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 10:18 AM
 */
class Admin_model extends CI_Model
{
    public function login($username,$password)
    {
        $sql = "SELECT * FROM users WHERE username=? AND password=?";
        return $this->db->query($sql,array($username,$password));
    }
}