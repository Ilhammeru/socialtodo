<?php

defined('BASEPATH') OR exit('No direct script allowed');

class Main_model extends CI_Model
{

  public function getData($query, $db)
  {

    if($db == 'todo') {

      $result = $this->db->query($query);

    } else {

      $database = $this->load->database($db, true);
      $result = $database->query($query);
      $database->close();

    }

    return $result;

  }

}

 ?>
