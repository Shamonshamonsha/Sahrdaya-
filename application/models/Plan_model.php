<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 3:22 PM
 */
class Plan_model extends CI_Model
{
    public function new_appnumber()
    {
        return $this->db
            ->count_all_results('applications');
    }
    public function add_newplan($data)
    {
        $this->db->insert('applications',$data);
    }
}