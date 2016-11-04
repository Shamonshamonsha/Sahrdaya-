<?php

/**
 * Created by PhpStorm.
 * User: shamonpc
 * Date: 02-Nov-16
 * Time: 8:26 PM
 */
class Applications extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('application_model');
    }
    public function upload_docs()
    {
        $config['upload_path']          = './uploads/docs';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['max_filename']         = 20;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        $names = array('deed','taxrecipt','possession','encumbrance','noc');
        $file_names = $this->upload_todb($names);


        $this->data = array(
            'deedcopy'=>$file_names[0],
            'tax_recipt'=>$file_names[1],
            'pes_certificate'=>$file_names[2],
            'encumb_cer'=>$file_names[3],
            'noc_cer'=>(!empty($file_names[4]))?$file_names[4]:'',
            'status'=>'1'
        );
        $this->data = array_merge($this->data,$_POST);
        $this->application_model->upload_docs($this->data,$this->session->userdata('user')->id);
        $this->application_model->update_status($this->session->userdata('user')->id);
        $this->session->set_flashdata('server_msg',
            array(
                    'class' => 'success',
                    'title' => 'Success',
                    'msg' =>'Your documents are uploaded successfully
                    Your application is forwarded to the concerned BI/Overseer
                   '
                    )
        );
        redirect('user/view');
    }
    public function upload_todb($names)
    {
        $temp=array();
        foreach ($names as $key=>$value)
        {

            $is_upload = true;
            if($key==4&&empty($_FILES['noc']['name']))
            {
                $is_upload = false;
            }
            if($is_upload)
            {
                if (!$this->upload->do_upload($value))
                {

                    $this->session->set_userdata('old',$_POST);
                    $this->session->set_flashdata('server_msg', array('class' => 'danger', 'title' => 'Error', 'msg' => $this->upload->display_errors()));
                    redirect('user/view');
                    break;
                }
                else
                {
                    $temp[] = $this->upload->data('file_name');
                }
            }
        }
        return $temp;
    }
}