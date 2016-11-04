<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 11:26 AM
 */
class Dashboard extends CI_Controller
{
    protected  $data;
    public function __construct()
    {
        parent::__construct();
        $this->logged_in();
        $this->load->model('dashboard_model');
    }
    public function view($page)
    {
        $this->get_data($page);
        $data = $this->dashboard_model->get_header($this->session->userdata('user')->user_type)->result();
        $this->load->view('admin/header',array('page'=>$page,'header'=>$data));
        $this->load->view('admin/pages/'.$page,$this->data);
        $this->load->view('admin/footer');
    }
    public function get_data($page)
    {
        switch ($page)
        {
            case 'super-14create':
                $this->data['sp_townplanners'] = $this->dashboard_model->get_townplanners('2')->result();
                break;
            case 'townplan-viewlogins':
                $this->data['tp_distplanners'] = $this->dashboard_model->get_townplanners('3')->result();
                break;
            case 'distplanner-viewlogin':
                $this->data['distplanner_users'] = $this->dashboard_model->get_townplanners('4')->result();
                break;
            case 'localbody-viewlogin':
                $this->data['localbody_users'] = $this->dashboard_model->get_localbody()->result();
                break;
            case 'arch-viewallplans':
                $this->data['allplans'] = $this->dashboard_model->get_allplans($this->session->userdata('user')->id)->result();
                break;
            case 'bi-pendingapps':
                $this->data['bi_pendingapps'] = $this->dashboard_model->get_pendingapps()->result();
                break;
            case 'ae-pendingapps':
                $this->data['ae_pendingapps'] = $this->dashboard_model->get_pendingappsae()->result();
                break;
            case 'aee-pendingapps':
                $this->data['aee_pendingapps'] = $this->dashboard_model->get_pendingappsaee()->result();
                break;
            case 'aee-approvedapps':
                $this->data['aee_approveapps'] = $this->dashboard_model->get_approvedapps()->result();
                break;
            case 'ee-pendingapps':
                $this->data['ee_pendingapps'] = $this->dashboard_model->get_pendingappsee()->result();
                break;
            case 'ee-approvedapps':
                $this->data['ee_approvedapps'] = $this->dashboard_model->get_approvedapps()->result();
                break;
            case 'se-approvedapps':
                $this->data['se_approvedapps'] = $this->dashboard_model->get_approvedapps()->result();
                break;
            case 'se-pendingapps':
                $this->data['se_pendingapps'] = $this->dashboard_model->get_pendingappsse()->result();
                break;
            case 'dt-pendingapps':
                $this->data['dt_pendingapps'] = $this->dashboard_model->get_pendingappsdt()->result();
                break;
            case 'ct-pendingapps':
                $this->data['ct_pendingapps'] = $this->dashboard_model->get_pendingappsct()->result();
                break;
            case 'dt-approvedapps':
                $this->data['dt_approvedapps'] = $this->dashboard_model->get_approvedapps()->result();
                break;
        }
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
    public function test()
    {
        echo 'ok';
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('designation');
        redirect('backend');
    }
}