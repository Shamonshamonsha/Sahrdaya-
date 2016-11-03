<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 8:27 PM
 */
class Application_model extends CI_Model
{
    public function upload_docs($data,$id)
    {
        $this->db->update('applications',$data,array('id'=>$id));
    }
    public function update_status($id)
    {
        $data = array(
            'application_id'=>$id
        );
        $this->db->insert('application_upload_status',$data);
    }
}