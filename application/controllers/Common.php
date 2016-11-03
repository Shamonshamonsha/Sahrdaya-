<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 11:19 PM
 */
class Common extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
    }
    public function add_remark($type)
    {
        $this->data = array(
            'application_id'=>$this->input->post('id'),
            'content'=>$this->input->post('remarks'),
            'added_by'=>'Building Inspector',
            'content_type'=>$type,
            'time_stamp'=>time()
        );
        $this->common_model->add_remark($this->data);
        redirect('dashboard/view/bi-pendingapps');
    }
    public function forward_ae($id)
    {
       $this->common_model->update_appstatus($id);
        $this->data = array(
            'application_id'=>$id,
            'content'=>'Application forwarded to AE',
            'added_by'=>'Building Inspector',
            'content_type'=>'remarks',
            'time_stamp'=>time()
        );
        $this->common_model->add_remark($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to AE'));
        redirect('dashboard/view/bi-pendingapps');
    }
}