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
    public function check_appstatus($id)
    {
        return $this->db
            ->select('status')
            ->where('id',$id)
            ->get('applications');
    }
}