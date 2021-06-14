<?php

defined('BASEPATH') OR exit ('No direct script allowed');

/**
* Copyright (c) 2021 Sosial Lab
* @author Rivan
* @version v1.04.09
* @modify Ilham
* @updated 09 April 2021
*/

class User extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Task_model', 'database');

  }

  public function get_user_list()
  {

    $query = "SELECT userId, status
            FROM user
            ORDER BY status DESC";
    $result = $this->database->getData($query, 'todo');

    //user array
    $queryName = "SELECT name, id
                FROM ac_payroll_item
                WHERE is_active = 1
                AND barcode IS NOT null";
    $resultName = $this->database->getData($queryName, 'we');

    $nameArray = array();
    foreach($resultName->result() as $row) {

      $nameArray['id' . $row->id] = $row->name;

    }

    if($result->num_rows() > 0) {

      foreach($result->result() as $row) {

        $status[] = $row->status;

        if (isset($nameArray['id' . $row->userId])) {

          $name[] = $nameArray['id' . $row->userId];

        }

      }

      for($i = 0; $i < count($status); $i++) {

        if ($status[$i] == 1) {

          $statusUser = 'active';

        } else {

          $statusUser = 'inactive';

        }

      }

    } else {

      $statusUser = 0;
      $user = 0;
      $name = 0;

    }

    $data['statusUser'] = $statusUser;
    $data['user'] = $result->result();
    $data['name'] = $name;

    echo json_encode($data);


  }
  // End of function get_user_list

  /**
  * @return json
  */
  public function get_user()
  {

    $query = "SELECT id, name
            FROM ac_payroll_item
            WHERE is_active = 1
            AND barcode IS NOT null
            ORDER BY name ASC";
    $result = $this->database->getData($query, 'we')->result();

    echo json_encode($result);

  }
  // End of function get_user

  /**
  * @param post => user
  * @return json
  */
  public function save_user()
  {

    $user = $this->input->post('user');

    $dataInsert = [
      'userId'  => $user,
      'status'  => 1
    ];

    $this->db->insert('user', $dataInsert);

    $data['message'] = 'success';

    echo json_encode($data);

  }
  // End of function save_user

}
