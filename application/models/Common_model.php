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
        $this->db->insert('application_remarks', $data);
    }

    public function add_messages($data)
    {
        $this->db->insert('application_remarks', $data);
    }

    public function add_sitevisit($id)
    {
        $this->db->insert('sitevisit_request',['application_id'=>$id,'status'=>'1']);
    }
    public function add_payement($data)
    {
        $this->db->insert('application_payments',$data);
    }
    public function update_appstatus($id,$status)
    {
        $this->db->update('applications',['status'=>$status],['id'=>$id]);
    }
}