<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 8:52 PM
 */
class User_model extends CI_Model
{
    public function get_application($id)
    {
        return $this->db
            ->where('id',$id)
            ->get('applications');
    }
    public function check_status($id)
    {
        return $this->db
            ->where('application_id',$id)
            ->count_all_results('application_upload_status')>0;
    }
    public function add_messages($data)
    {
        $this->db->insert('application_remarks',$data);
    }
    public function update_doc($data,$id)
    {
        $this->db->update('applications',$data,['id'=>$id]);
    }
    public function get_payment($id)
    {
        return $this->db
            ->where('application_id',$id)
            ->get('application_payments');
    }
    public function check_appstatus($id)
    {
        /*return $this->db
            ->where('application_id',$id)
            ->order_by('id','desc')
            ->get('application_remarks');*/
        $sql = "SELECT * FROM application_remarks LEFT JOIN users ON application_remarks.sender_id=users.id WHERE application_remarks.application_id=? ORDER BY application_remarks.id DESC";
        return $this->db->query($sql,array($id));
    }
}