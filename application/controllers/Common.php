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
        $this->logged_in();
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
       $this->common_model->update_appstatus($id,'2');
        /*$this->data = array(
            'application_id'=>$id,
             'sender_id'=>$this->session->userdata('user')->id,
            'content'=>'Application forwarded to AE',
            'added_by'=>$added_by,
            'content_type'=>'remarks',
            'time_stamp'=>time()
        );
        $this->common_model->add_remark($this->data);*/
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to AE'));
        redirect('dashboard/view/bi-pendingapps');
    }
    public function approve_app($id)
    {
        $this->common_model->update_appstatus($id,'3');
        /*$this->data = array(
            'application_id'=>$this->input->post('id'),
            'sender_id'=>$this->session->userdata('user')->id,
            'content'=>'Your Application is approved please pay the amount to download the permit',
            'added_by'=>'AE',
            'amount_pay'=>$this->input->post('amount'),
            'content_type'=>'approved',
            'time_stamp'=>time()
        );
       /// $this->common_model->add_remark($this->data);*/
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to AE'));
        redirect('dashboard/view/ae-pendingapps');
    }
    public function add_remarkae()
    {
        $this->data = array(
            'receiver_id'=>$this->input->post('fwd_id'),
            'sender_id'=>$this->session->userdata('user')->id,
            'message'=>$this->input->post('remarks'),
            'added_by'=>'AE',
            'time_stamp'=>time()
        );
        $this->common_model->add_messages($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Remarks added '));
        redirect('dashboard/view/ae-pendingapps');
    }
    public function logged_in()
    {
        if($this->session->userdata('user')==NULL)
        {
            $this->session->set_flashdata('login_error','Session Expired');
            redirect('backend');
        }
        return TRUE;
    }
    public function app_communications()
    {

        if($this->session->userdata('user')->user_type=='5')
        {
            $added_by = 'Building Inspector';
            $page = 'bi-pendingapps';
        }else if($this->session->userdata('user')->user_type=='7')
        {
            $added_by = 'AE';
            $page = 'ae-pendingapps';
        }
        $this->data = array(
            'application_id'=>$this->input->post('id'),
            'sender_id'=>$this->session->userdata('user')->id,
            'content'=>$this->input->post('remarks'),
            'added_by'=>$added_by,
            'time_stamp'=>time()
        );
        $this->common_model->add_messages($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Remarks added '));
        redirect('dashboard/view/'.$page);
    }
    public function add_applicationamount()
    {
        $this->data = array(
            'application_id'=>$this->input->post('id'),
            'amount_topay'=>$this->input->post('amount'),
        );
        $this->common_model->add_payement($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Payment added'));
        redirect('dashboard/view/ae-pendingapps');

    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('designation');
        redirect('backend');
    }
}