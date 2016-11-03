<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 10:14 AM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login_action()
    {
        $result=$this->admin_model->login($this->input->post('username'),$this->input->post('password'));

        if($result->num_rows()!==0)
        {
            if($result->row()->user_type=='1')
            {
                //super admin
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/super-home');
            }
            else if($result->row()->user_type=='2')
            {
                //super admin
                $this->session->set_userdata('designation','Chief TownPlan Officer');
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/townplanner-home');
            }
            else if($result->row()->user_type=='3')
            {
                //super admin
                $this->session->set_userdata('designation','District TownPlan Officer');
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/distplanner-home');
            }
            else if($result->row()->user_type=='4')
            {
                //super admin
                $this->session->set_userdata('designation',$result->row()->local_bodyname.' '.$result->row()->local_bodytype);
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/localbody-home');
            }
            else if($result->row()->user_type=='5')
            {
                //BI AE
                $this->session->set_userdata('designation','Building Inspector');
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/localbody-home');
            }
            else if($result->row()->user_type=='6')
            {
                //super admin
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/arch-home');
            }
            else if($result->row()->user_type=='7')
            {
                //super admin
                $this->session->set_userdata('designation','AE:'.$result->row()->localbody_name.' '.$result->row()->localbody_type);
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/ae-home');
            }
            else if($result->row()->user_type=='8')
            {
                //super admin
                $this->session->set_userdata('user',$result->row());
                redirect('dashboard/view/aee-home');
            }
        }
        else
        {
            $this->session->set_flashdata('login_error','Invalid Login data');
            redirect('backend');
        }
    }
}