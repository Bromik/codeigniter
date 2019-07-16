<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
    /**
     * valid method
     */
    public function ValidForm()
    {
        if($this->input->is_ajax_request()){
           $post = $this->input->post();
           if(!empty($post['name']) && !empty($post['email'])){
               foreach ($post as $k => $item_post) {
                   $this->CleanStr($post[$k]);
               }
               $this->SendDara($post);
               $resp = 'Very good =)';
               $error = 'no error';
           }else{
               $resp = 'Very bad =(';
               $error = 'error';
           }
        }
        echo json_encode(array('error' => $error, 'resp' => $resp));
    }

    /**
     * @param $arr
     */
    public function SendDara($arr)
    {
        $this->load->model('ajaxmodel');
        $this->ajaxmodel->WriteData($arr);
    }

    /**
     * @param $arr
     * @return mixed|string
     */
    public function CleanStr($arr)
    {
        $this->load->helper('string');
        $data = strip_slashes($arr);
        $data = quotes_to_entities($arr);
        return $data;
    }

}
