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
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to AE'));
        redirect('dashboard/view/bi-pendingapps');
    }
    public function approve_app($id)
    {
        $this->common_model->update_appstatus($id,'3');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
        redirect('dashboard/view/ae-pendingapps');
    }
    public function approve_appaee($id)
    {
        $this->common_model->update_appstatus($id,'3');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
        redirect('dashboard/view/aee-pendingapps');
    }
    public function approve_appee($id)
    {
        $this->common_model->update_appstatus($id,'3');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
        redirect('dashboard/view/ee-pendingapps');
    }
     public function approve_appse($id)
     {

         $this->common_model->update_appstatus($id,'3');
         $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
         redirect('dashboard/view/se-pendingapps');
     }
    public function approve_appdt($id)
    {
        $this->common_model->update_appstatus($id,'3');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
        redirect('dashboard/view/dt-pendingapps');
    }
    public function approve_ct($id)
    {
        $this->common_model->update_appstatus($id,'3');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application approved'));
        redirect('dashboard/view/ct-pendingapps');
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
    public function app_communications($rdr_type)
    {

        if($this->session->userdata('user')->user_type=='5')
        {
            $added_by = 'Building Inspector';

            $page = ($rdr_type=='0')?'bi-pendingapps':'bi-approvedapps';
        }
        else if($this->session->userdata('user')->user_type=='7')
        {
            $added_by = 'AE';
            $page = ($rdr_type=='0')?'ae-pendingapps':'ae-approvedapps';
        }
        else if($this->session->userdata('user')->user_type=='8')
        {
            $added_by = 'AEE';
            $page = ($rdr_type=='0')?'aee-pendingapps':'aee-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='9')
        {
            $added_by = 'EE';
            $page = ($rdr_type=='0')?'ee-pendingapps':'ee-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='4')
        {
            $added_by = 'Secretary';
            $page = ($rdr_type=='0')?'se-pendingapps':'se-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='3')
        {
            $added_by = 'DTO';
            $page = ($rdr_type=='0')?'dt-pendingapps':'dt-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='2')
        {
            $added_by = 'CTO';
            $page = ($rdr_type=='0')?'ct-pendingapps':'ct-approvedapps';

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
    public function forward_aee($id)
    {
        $this->common_model->update_appstatus($id,'4');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to AEE'));
        redirect('dashboard/view/ae-pendingapps');
    }
    public function forward_ee($id)
    {
        $this->common_model->update_appstatus($id,'6');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to EE'));
        redirect('dashboard/view/aee-pendingapps');
    }
    public function forward_dt($id)
    {
        $this->common_model->update_appstatus($id,'7');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to District town plan officer'));
        redirect('dashboard/view/ee-pendingapps');
    }
    public function forward_ct($id)
    {
        $this->common_model->update_appstatus($id,'8');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to CTO'));
        redirect('dashboard/view/dt-pendingapps');
    }
    public function forward_govt($id)
    {
        $this->common_model->update_appstatus($id,'9');
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application forwaded to GOVT'));
        redirect('dashboard/view/ct-pendingapps');
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
    public function sitevisit_request($id)
    {
        $this->common_model->add_sitevisit($id);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Site visit requested'));
        redirect('dashboard/view/bi-pendingapps');
    }
    public function add_sitevisitreport()
    {
        $this->data = array(
          'site_report'=>$this->input->post('report'),
           'status'=>'4'
        );
        $this->common_model->update_sitevisitreport($this->data,$this->input->post('id'));
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Report added'));
        redirect('dashboard/view/bi-pendingapps');
    }
    public function approve_sitevisit($id)
    {
        $date = date('d-M-y', strtotime('+2 days'));
        $this->common_model->update_sitevisit($id,$date);
        if($this->session->userdata('user')->user_type=='5')
        {
            $added_by = 'Building Inspector';

            $page = ($rdr_type=='0')?'bi-pendingapps':'bi-approvedapps';
        }
        else if($this->session->userdata('user')->user_type=='7')
        {
            $added_by = 'AE';
            $page = ($rdr_type=='0')?'ae-pendingapps':'ae-approvedapps';
        }
        else if($this->session->userdata('user')->user_type=='8')
        {
            $added_by = 'AEE';
            $page = ($rdr_type=='0')?'aee-pendingapps':'aee-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='9')
        {
            $added_by = 'EE';
            $page = ($rdr_type=='0')?'ee-pendingapps':'ee-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='4')
        {
            $added_by = 'Secretary';
            $page = ($rdr_type=='0')?'se-pendingapps':'se-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='3')
        {
            $added_by = 'DTO';
            $page = ($rdr_type=='0')?'dt-pendingapps':'dt-approvedapps';

        }
        else if($this->session->userdata('user')->user_type=='2')
        {
            $added_by = 'CTO';
            $page = ($rdr_type=='0')?'ct-pendingapps':'ct-approvedapps';

        }

        $this->data = array(
            'application_id'=>$id,
            'sender_id'=>$this->session->userdata('user')->id,
            'content'=>"Site visit is approved on".$date,
            'added_by'=>$added_by,
            'time_stamp'=>time()
        );
        $this->common_model->add_messages($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Site visit approved'));
        redirect('dashboard/view/ae-pendingapps');
    }
    public function govt_action($id,$update_val='1')
    {
        $status = ($update_val=='1')?'3':'10';
        $this->common_model->update_appstatus($id,$status);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Application Updated'));
        redirect('dashboard/view/aee-pendingapps');
    }
    public function add_complaint()
    {
        $this->data = array(
            'application_id'=>$this->input->post('id'),
            'complaint'=>$this->input->post('complaints'),
            'name'=>$this->session->userdata('user')->local_bodyname.$this->session->userdata('user')->local_bodytype,
            'time_stamp'=>time()
        );
        //print_r($this->session->userdata('user'));
        $this->common_model->add_complaint($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Complaint registerd'));
        redirect('dashboard/view/se-complaints');
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('designation');
        redirect('backend');
    }
}