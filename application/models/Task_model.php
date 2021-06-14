<?php

defined('BASEPATH') OR exit ('No direct script allowed');

class Task_model extends CI_Model
{

  public function getData($query, $database)
  {

    if($database == 'todo') {

      $result = $this->db->query($query);

    } else {

      $db = $this->load->database($database, true);
      $result = $db->query($query);
      $db->close();

    }

    return $result;

  }

}

 ?>
