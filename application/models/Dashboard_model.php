<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 11:41 AM
 */
class Dashboard_model extends CI_Model
{
    public function get_header($type)
    {
        return $this->db
            ->where('user_type', $type)
            ->get('header');
    }

    public function get_townplanners($type)
    {
        return $this->db
            ->where('user_type', $type)
            ->get('users');
    }

    public function get_allplans($id)
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where('bi_id', $id)
            ->get('applications');
    }

    public function get_pendingapps()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['1', '2'])
            ->get('applications');
    }

    public function get_pendingappsae()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['1','2','4'])
            ->get('applications');
    }
    public function get_pendingappsaee()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['5','4'])
            ->get('applications');
    }
    public function get_pendingappsee()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['5','4','2'])
            ->get('applications');
    }
    public function get_pendingappsse()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['6','5','4','2','7'])
            ->get('applications');
    }
    public function get_pendingappsdt()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['1','2','4','5','6','7','8'])
            ->get('applications');
    }
    public function get_pendingappsct()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['1','2','4','5','6','7','8','9'])
            ->get('applications');
    }
    public function get_pendingappsgovt()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['1','2','4','5','6','7','8','9'])
            ->get('applications');
    }
    public function get_approvedapps()
    {
        return $this->db
            ->order_by('id', 'desc')
            ->where_in('status', ['3'])
            ->get('applications');
    }
    public function get_forwader($id)
    {
        return $this->db
            ->where('application_id',$id)
            ->get('application_forwarder');
    }
    public function check_sitevisit($id)
    {
        return $this->db
             ->select('status')
            ->where('application_id',$id)
            ->get('sitevisit_request');
    }
    public function get_remarks($id)
    {
        $sql = "SELECT * FROM application_remarks LEFT JOIN users ON application_remarks.sender_id=users.id WHERE application_remarks.application_id=? ORDER BY application_remarks.id DESC";
        return $this->db->query($sql,array($id));
    }
    public function get_localbody()
    {
        $sql= "SELECT * FROM users WHERE user_type in('5','6')";
        return $this->db->query($sql);
    }
}