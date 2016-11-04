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
            case 'user-grivents':
                $this->data['complaints'] = $this->user_model->get_cmp($this->session->userdata('user')->id)->result();
                break;
            case 'user-payment':
                $this->data['payment'] = $this->user_model->get_payment($this->session->userdata('user')->id)->row();
                break;
        }
    }
    public function edit_doc()
    {
        $config['upload_path']          = './uploads/docs';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_filename']         = 20;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('edit-doc'))
        {
            $this->session->set_flashdata('server_msg', array('class' => 'danger', 'title' => 'Error', 'msg' => $this->upload->display_errors()));
            redirect('user/view/user-editdocs');
        }
        else
        {
            $this->data = array(
                $this->input->post('type')=>$this->upload->data('file_name')
            );
            $this->user_model->update_doc($this->data,$this->session->userdata('user')->id);
            $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Error', 'msg' =>'Document Updated'));
            redirect('user/view/user-editdocs');
        }
    }
    public function payment()
    {
        $user = $this->session->userdata('user');
        $total = $this->session->userdata('amount');
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        $salt = 'BV1QBwCv';
        $MERCHANT_KEY = 'OygoFs';
        $url = 'https://test.payu.in/_payment';
        /*$MERCHANT_KEY = "XB9Yen";
        $salt = "6y8sq3Ua";
        $url = "https://secure.payu.in/_payment";*/
        $hash='';
        //   $pinfo='[{"name":"'.$user['fname'].'","description":"","value":"'.$total.'","isRequired":"false"}]';
        $pd='sample-description';//json_encode(json_decode($pinfo));
        $hash_string = $MERCHANT_KEY."|".$txnid."|".$total."|".$pd."|".$user->applicant_name."|".$user->email."|||||||||||".$salt;
        $hash = hash('sha512', $hash_string);

        $data['form']=[$txnid,$MERCHANT_KEY,$hash,$url,$pd];
        $this->load->view('user/pages/payment',$data);
    }
    public function payment_success()
    {

        $this->data = array(
          'transaction_id'=>$_POST['txnid'],
           'status'=>'1'
        );
        $this->user_model->update_payment($this->data,$this->session->userdata('user')->id);
        redirect('user/view/user-payment');
    }
    public function payment_error()
    {
        echo '<h2>Payment Failed<h2>';
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
    public function add_complaint()
    {
        $this->data = array(
            'application_id'=>$this->session->userdata('user')->id,
            'complaints'=>$this->input->post('complaints'),
            'name'=>$this->session->userdata('user')->applicant_name,
            'time_stamp'=>time()
        );
        $this->user_model->add_complaint($this->data);
        $this->session->set_flashdata('server_msg', array('class' => 'success', 'title' => 'Success', 'msg' =>'Complaint registerd'));
        redirect('user/view/user-grivents');
    }
}