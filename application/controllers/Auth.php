<?php

defined('BASEPATH') OR exit('No direct script allowed');

/**
* Copyright (c) 2021 Sosial Lab
* @author Rivan
* @version v1.04.09
* @modify Ilham
* @updated 09 April 2021
*/

class Auth extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('main_model', 'database');

  }
  // End of function __construct

  public function index()
  {

    if (isset($_SESSION['isLogin'])) {

      redirect('Homepage');

    } else {

      $this->load->view('auth/login');

    }

  }
  // End of function index

  public function login_mobile()
  {
    $this->load->view('auth/loginMobile');
  }
  // End of function login_mobile

  /**
  * @param post => username
  * @param post => password
  * @return json
  */
  public function get_login()
  {

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    //query
    $query = "SELECT password, name, data_step1, id
            FROM ac_payroll_item
            WHERE username = '$username'";
    $result = $this->database->getData($query, 'we');

    if($result->num_rows() == 0) {

      $message = "wrong username";
      $data['message'] = $message;

    } else {

      $finalResult = $result->row_array();
      $passDb = $finalResult['password'];
      $dataUser = json_decode($finalResult['data_step1'], true);
      $name = $finalResult['name'];

      //email
      $email = $dataUser['email'];

      //short name
      $exp = explode(' ', $name);
      $sName = $exp[0];
      $idUser = $finalResult['id'];

      $decrypt = $this->encryption->decrypt($passDb);

      if($password == $decrypt) {

        //check in database user
        $queryUser = $this->db->query("SELECT id
                                      FROM user
                                      WHERE userId = $idUser")->num_rows();

        if ($queryUser == 0) {

          $data['message'] = 'error';

        } else {

          //session
          $_SESSION['id'] = $idUser;
          $_SESSION['isLogin'] = true;
          $_SESSION['name'] = $sName;
          $_SESSION['fName'] = $name;
          $_SESSION['email'] = $email;

          $message = 'success';

          $data['message'] = $message;

        }

      } else {

        $data['message'] = 'wrong password';

      }

    }

    echo json_encode($data);

  }
  // End of function get_login

  public function logout()
  {
    $this->session->sess_destroy();

    $data['message'] = 'success';
    echo json_encode($data);
  }
  // End of function logout

}

 ?>
