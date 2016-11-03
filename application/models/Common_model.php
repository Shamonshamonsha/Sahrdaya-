<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 11:24 PM
 */
class Common_model extends CI_Model
{
    public function add_remark($data)
    {
        $this->db->insert('application_remarks',$data);
    }
    public function update_appstatus($id)
    {
        $this->db->update('applications',['status'=>'2'],['id'=>$id]);
    }
}