<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 8:23 PM
 */
class Home_model extends CI_Model
{
    public function login($username,$password)
    {
        $sql = "SELECT * FROM applications WHERE application_id=? AND password=?";
        return $this->db->query($sql,array($username,$password));
    }
}