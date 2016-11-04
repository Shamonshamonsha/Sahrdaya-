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
    public function is_userpayed($id)
    {
        return $this->db
            ->where('application_id',$id)
            ->where('status','1')
            ->count_all_results('application_payments')>0;
    }
    public function update_resubmit($id)
    {
        $this->db->update('application_upload_status',['status'=>'1'],['application_id'=>$id]);
    }
    public function lock_edit($id)
    {
        $this->db->update('application_upload_status',['status'=>'0'],['application_id'=>$id]);
    }
    public function add_messages($data)
    {
        $this->db->insert('application_remarks', $data);
    }
    public function add_sitevisit($id)
    {
        $this->db->insert('sitevisit_request',['application_id'=>$id,'status'=>'1']);
    }
    public function update_sitevisit($id,$date)
    {
        $this->db->update('sitevisit_request',['status'=>'2','req_date'=>$date],['application_id'=>$id]);
    }
    public function add_payement($data)
    {
        $this->db->insert('application_payments',$data);
    }
    public function update_sitevisitreport($data,$id)
    {
        $this->db->update('sitevisit_request',$data,['application_id'=>$id]);
    }
    public function add_complaint($data)
    {
        $this->db->insert('complaints',$data);
    }
    public function update_appstatus($id,$status)
    {
        $this->db->update('applications',['status'=>$status],['id'=>$id]);
    }
}