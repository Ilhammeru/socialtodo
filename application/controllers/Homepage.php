<?php

defined('BASEPATH') or exit('No direct script allowed');

/**
 * Copyright (c) 2021 Sosial Lab
 * @author Rivan
 * @version v1.04.09
 * @modify Ilham
 * @updated 09 April 2021
 */

class Homepage extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->mobile = $this->agent->mobile();
  }
  // End of function __construct

  public function index()
  {
    if (!isset($_SESSION['isLogin'])) {
      redirect('Auth');
    } else {

      if ($this->mobile == 'Android' || $this->mobile == "Apple iPhone") {
        $attr['title'] = "Homepage";
        $this->homepage_lib->get_template('home/mobile/homepage', $attr);
      } else {
        $attr['title'] = "Homepage";
        $this->homepage_lib->get_template('home/homepage', $attr);
      }
    }
  }
  // End of function index

  public function task_list()
  {

    $data['title'] = 'Task list';
    $this->homepage_lib->getTemplate('home/taskList', $data);
  }
  // End of function task_list

}
