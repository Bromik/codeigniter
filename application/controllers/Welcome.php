<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['page_title'] = 'Your title';
        $data['js'] = [
            'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
            'js/jquery.validate.min.js',
            'js/jquery.toast.js',
            'js/common.js'
        ];
        $data['css'] = [
            'css/jquery.toast.css',
            'css/common.css'
        ];
        $this->load->view('welcome_message', $data);
    }
}
