<?php
class homepage_lib
{
    protected $CI;

    function __construct()
    {
        $this->CI = &get_instance();
        $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
    }

    public function get_template($view, $data = '')
    {
        $this->CI->load->view('layout/header', $data);
        $this->CI->load->view($view, $data);
        $this->CI->load->view('layout/footer');
    }
}
