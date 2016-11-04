<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 8:36 PM
 */
class User extends CI_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function view($page='user-home')
    {
        $this->get_data($page);
        $this->load->view('user/header',array('page'=>$page,'status'=>$this->user_model->check_status($this->session->userdata('user')->id)));
        $this->load->view('user/pages/'.$page,$this->data);
        $this->load->view('user/footer');
    }
    public function get_data($page)
    {
        switch ($page)
        {
            case 'user-viewapplication':
                 $this->data['application'] = $this->user_model->get_application($this->session->userdata('user')->id)->row();
                break;
            case 'user-home':
                $this->data['upload_status'] = $this->user_model->check_status($this->session->userdata('user')->id);
                break;
            case 'user-appstatus':
                $this->data['app_status'] = $this->user_model->check_appstatus($this->session->userdata('user')->id)->result();
                break;
        }
    }
    public function add_userreply()
    {
        $this->data = array(
            'application_id'=>$this->input->post('id'),
            'sender_id'=>$this->session->userdata('user')->id,
            'content'=>$this->input->post('remarks'),
            'added_by'=>'Applicant',
            'time_stamp'=>time()
        );
        $this->user_model->add_messages($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Remarks added '));
        redirect('user/view/user-appstatus');
    }
}