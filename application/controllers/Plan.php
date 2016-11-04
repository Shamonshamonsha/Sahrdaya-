<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 3:22 PM
 */

class Plan extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('plan_model');
    }
    public function add_newapplication()
    {
        $this->data = $_POST;
        $id=$this->plan_model->new_appnumber();
        $this->data['application_id'] = ($id+1).substr(uniqid(),6);
        $this->data['password'] = substr(str_shuffle('abcedf123finde'),0,5);
        $this->data['bi_id'] = $this->session->userdata('user')->id;
        $this->data['time_stamp'] = time();
        $config['upload_path']          = './uploads/plans';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_filename']         = 20;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('plan'))
        {
            $this->session->set_flashdata('server_msg',array('class'=>'danger','title'=>'Error','msg'=>$this->upload->display_errors()));
            redirect('dashboard/view/arch-uploadplan');
        }
        else
        {
            $this->data['plan'] = $this->upload->data('file_name');
            $this->plan_model->add_newplan($this->data);
            $this->session->set_flashdata('server_msg',array('class'=>'success','title'=>'Success','msg'=>'Plan uploaded successfully'));
            $this->session->set_tempdata('application',[$this->data['application_id'],$this->data['password'],$this->input->post('mobile_number')], 300);
            redirect('dashboard/view/arch-plansuccess');
        }
    }
}