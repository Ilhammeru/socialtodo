<?php defined('BASEPATH') or exit('No direct script allowed');

/**
 * Copyright (c) 2021 Sosial Lab
 * @author Ilham
 * @version v2.04.14
 * @modify Ilham
 * @updated 14 April 2021
 */

class Task extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Task_model', 'database');
  }
  // End of function __construct

  /**
   * @param post => task
   * @return string
   */
  public function save_task()
  {

    $task = $this->input->post('task');
    $today = date('Y-m-d');

    $data = [
      'todo' => $task,
      'active_subtask' => 0,
      'inactive_subtask' => 0,
      'deadline' => $today,
      'subtask' => 0
    ];

    $dataInsert = [
      'ac_payroll_item_id' => $_SESSION['id'],
      'comments' => 0,
      'time_done' => null,
      'detail_todo' => json_encode($data),
      'status'  => 1,
      'created_time'  => date('Y-m-d H:i')
    ];

    $this->db->insert('todo', $dataInsert);

    echo 'success';
  }
  // End of function save_task

  /**
   * @return json
   */
  public function get_home()
  {
    $userId = $_SESSION['id'];

    $query = $this->db->query("SELECT detail_todo, ac_payroll_item_id, id
                                        FROM todo
                                        WHERE status > 0
                                        AND ac_payroll_item_id = $userId");

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $detail[] = json_decode($row->detail_todo, true);
        $userIdDb[] = $row->ac_payroll_item_id;
        $taskId[] = $row->id;
      }

      $data['detail'] = $detail;
      $data['userId'] = $userIdDb;
      $data['taskId'] = $taskId;
      echo json_encode($data);
    } else {
      echo json_encode($query->num_rows());
    }
  }
  // end of function get_home

  /**
   * @return json
   */
  public function get_inactive_task()
  {
    $userId = $_SESSION['id'];

    $query = $this->db->query("SELECT detail_todo, ac_payroll_item_id, id
                                        FROM todo
                                        WHERE status = 0
                                        AND ac_payroll_item_id = $userId");

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $detail[] = json_decode($row->detail_todo, true);
        $userIdDb[] = $row->ac_payroll_item_id;
        $taskId[] = $row->id;
      }

      $data['detail'] = $detail;
      $data['userId'] = $userIdDb;
      $data['taskId'] = $taskId;
      echo json_encode($data);
    } else {
      echo json_encode($query->num_rows());
    }
  }
  // end of function get_inactive_task

  /**
   * @param post => userId
   * @return json
   */
  public function get_task()
  {

    $idMaster = $_SESSION['id'];
    $today = date('Y-m-d');
    $selectUser = $this->input->post('userId');

    if ($selectUser == '') {

      $query = "SELECT detail_todo, created_time, id, JSON_EXTRACT(detail_todo, '$.subtask') AS todo, status, comments, ac_payroll_item_id
              FROM todo
              WHERE ac_payroll_item_id = '$idMaster'";
    } else {

      $query = "SELECT detail_todo, created_time, id, JSON_EXTRACT(detail_todo, '$.subtask') AS todo, status, comments, ac_payroll_item_id
              FROM todo
              WHERE status >= 0
              AND ac_payroll_item_id = '$selectUser'";
    }

    $result = $this->database->getData($query, 'todo');

    //query name
    $queryName = "SELECT name, id
              FROM  ac_payroll_item
              WHERE is_active = 1
              AND barcode IS NOT null";
    $resultName = $this->database->getData($queryName, 'we')->result();

    $nameArray = array();
    foreach ($resultName as $row) {

      $nameArray['id' . $row->id] = $row->name;
    }

    if ($result->num_rows() > 0) {

      foreach ($result->result() as $row) {
        $todo[] = json_decode($row->detail_todo, true);
        $time[] = $row->created_time;
        $taskId[] = $row->id;
        $subtask[] = json_decode($row->todo, true);
        $status[] = $row->status;
        $comment[] = json_decode($row->comments, true);
        $userId[] = $row->ac_payroll_item_id;

        if (isset($nameArray['id' . $row->ac_payroll_item_id])) {

          $name = $nameArray['id' . $row->ac_payroll_item_id];
        }
      }
    } else {

      $todo = 0;
      $time = 0;
      $subtask = 0;
      $taskId = 0;
      $status = 0;
      $comment = 0;
      $name = 0;
      $userId = 0;
    }

    $data['todo'] = $todo;
    $data['time'] = $time;
    $data['subtask'] = $subtask;
    $data['taskId'] = $taskId;
    $data['status'] = $status;
    $data['comment'] = $comment;
    $data['userId'] = $userId;
    $data['name'] = $name;

    echo json_encode($data);
  }
  // End of funtion get_task

  /**
   * @param post => id
   * @return json
   */
  public function detail_task()
  {

    $id = $this->input->post('id');
    $idMaster = $_SESSION['id'];

    $query = "SELECT detail_todo, ac_payroll_item_id
            FROM todo
            WHERE id = $id";
    $result = $this->database->getData($query, 'todo')->row_array();

    $detailTodo = json_decode($result['detail_todo'], true);
    $userId = $result['ac_payroll_item_id'];

    //condition user role
    if ($idMaster != $userId) {

      $statusUser = 'other';
    } else {

      $statusUser = 'self';
    }

    $titleTodo = $detailTodo['todo'];

    //subtask
    $subtask = $detailTodo['subtask'];
    $activeSubtask = $detailTodo['active_subtask'];
    $inactiveSubtask = $detailTodo['inactive_subtask'];
    $allSubtask = $activeSubtask + $inactiveSubtask;

    $data['title'] = $titleTodo;
    $data['subtask'] = $subtask;
    $data['activeSubtask'] = $activeSubtask;
    $data['inactiveSubtask'] = $inactiveSubtask;
    $data['allSubtask'] = $allSubtask;
    $data['statusUser'] = $statusUser;

    echo json_encode($data);
  }
  // End of function detail_task

  /**
   * @param post => subtask
   * @param post => taskId
   * @return string
   */
  public function save_subtask()
  {

    $subtask = $this->input->post('subtask');
    $taskId = $this->input->post('taskId');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $latestTodo = json_decode($result['detail_todo'], true);

    $activeSubtask = $latestTodo['active_subtask'];
    $inactiveSubtask = $latestTodo['inactive_subtask'];

    //new number
    $newNumberActive = $activeSubtask + 1;

    //format subtask
    if ($latestTodo['subtask'] == 0) {

      $merge['0'] = [
        'sub' => $subtask,
        'status'  => 1,
        'deadlineSub' => 0,
        'comment' => 0,
        'time_done' => null
      ];
    } else {

      $defFormat[count($latestTodo['subtask'])] = [
        'sub' => $subtask,
        'status'  => 1,
        'deadlineSub' => 0,
        'comment' => 0,
        'time_done' => null
      ];

      $merge = array_merge($latestTodo['subtask'], $defFormat);
    }


    $newFormat = [
      'todo' => $latestTodo['todo'],
      'active_subtask' => $newNumberActive,
      'inactive_subtask' => $inactiveSubtask,
      'deadline'  => $latestTodo['deadline'],
      'subtask' => $merge
    ];

    $data = [
      'detail_todo' => json_encode($newFormat)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $data);

    echo 'success';
  }
  // End of function save_subtasks

  /**
   * @param post => taskId
   * @param post => param
   * @return json
   */
  public function get_subtask()
  {
    $id = $this->input->post('taskId');
    $param = $this->input->post('param');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $id";
    $result = $this->database->getData($query, 'todo')->row_array();

    $detailTodo = json_decode($result['detail_todo'], true);

    $titleTodo = $detailTodo['todo'];

    //subtask
    $subtask = $detailTodo['subtask'];
    $activeSubtask = $detailTodo['active_subtask'];
    $inactiveSubtask = $detailTodo['inactive_subtask'];
    $allSubtask = $activeSubtask + $inactiveSubtask;

    $data['title'] = $titleTodo;
    $data['subtask'] = $subtask;
    $data['activeSubtask'] = $activeSubtask;
    $data['inactiveSubtask'] = $inactiveSubtask;
    $data['allSubtask'] = $allSubtask;
    $data['params']  = $param;

    echo json_encode($data);
  }
  // End of function get_subtask

  /**
   * @param post => taskId
   * @return json
   */
  public function task_done()
  {
    $taskId = $this->input->post('taskId');
    $hour = date('H');

    if ($hour >= 18 && $hour <= 23) {
      $data['message'] = 'error';
      echo json_encode($data);
    } else {
      //change status of subtask
      $querySubtask = $this->db->query("SELECT detail_todo
                                                      FROM todo
                                                      WHERE id = $taskId")->row_array();
      $detail = json_decode($querySubtask['detail_todo'], true);

      $subtask = $detail['subtask'];
      $todo = $detail['todo'];
      $activeSubtask = $detail['active_subtask'];
      $inactiveSubtask = $detail['inactive_subtask'];
      $deadline = $detail['deadline'];

      if ($subtask != 0) {

        for ($i = 0; $i < count($subtask); $i++) {

          $subtask[$i]['status'] = 0;
        }
      }

      $dataSubtask = [
        'todo'  => $todo,
        'active_subtask'  => 0,
        'inactive_subtask'  => $inactiveSubtask,
        'deadline' => $deadline,
        'subtask' => $subtask
      ];

      $dataUpdate = [
        'status'  => 0,
        'time_done' => date('Y-m-d H:i')
      ];

      $this->db->where('id', $taskId);
      $this->db->update('todo', $dataUpdate);

      $data['message'] = 'success';

      echo json_encode($data);
    }
  }
  // End of function task_done

  /**
   * @param post => taskId
   * @return json
   */
  public function redo_task()
  {

    $taskId = $this->input->post('taskId');

    $dataUpdate = [
      'status'  => 1,
      'time_done' => null
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    $data['message'] = 'success';
    echo json_encode($data);
  }
  // End of function redo_task

  /**
   * @param post => subtaskKey
   * @param post => taskId
   * @param post => param
   * @return json
   */
  public function subtask_done()
  {

    $subtaskKey = $this->input->post('subtaskKey');
    $taskId = $this->input->post('taskId');
    $param = $this->input->post('param');
    $hour = date('H');

    if ($hour >= 18 && $hour <= 23) {
      $data['message'] = 'error';
      echo json_encode($data);
    } else {
      $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
      $result = $this->database->getData($query, 'todo')->row_array();

      //subtask detail
      $subtask = json_decode($result['detail_todo'], true);

      $detailSub = $subtask['subtask'];

      if ($param == 'redo') {
        $detailSub[$subtaskKey]['status'] = 0;
        $newActive = $subtask['active_subtask'] - 1;
        $newInactive = $subtask['inactive_subtask'] + 1;

        //change time_done 
        $detailSub[$subtaskKey]['time_done'] = date('Y-m-d H:i');
      } else {
        $detailSub[$subtaskKey]['status'] = 1;
        $newActive = $subtask['active_subtask'] + 1;
        $newInactive = $subtask['inactive_subtask'] - 1;

        //change time_done 
        $detailSub[$subtaskKey]['time_done'] = null;
      }

      $data = [
        'todo'  => $subtask['todo'],
        'active_subtask'  => $newActive,
        'inactive_subtask'  => $newInactive,
        'deadline'  => $subtask['deadline'],
        'subtask' => $detailSub
      ];

      $dataUpdate = [
        'detail_todo' => json_encode($data)
      ];

      $this->db->where('id', $taskId);
      $this->db->update('todo', $dataUpdate);

      $data['message'] = 'success';
      echo json_encode($data);
    }
  }
  // End of function subtask_done

  /**
   * @param post => param
   * @param post => taskId
   * @return string
   */
  public function get_deadline()
  {

    $param = $this->input->post('param');
    $taskId = $this->input->post('taskId');

    //date
    $today = date('Y-m-d');
    $tomorrow = date('Y-m-d', strtotime('+1 days'));
    $week = date('Y-m-d', strtotime('+7 days'));

    // condition
    if ($param == 'tomorrow') {

      $deadline = $tomorrow;
    } else if ($param == 'week') {

      $deadline = $week;
    }

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);

    $todo['deadline'] = $deadline;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    echo 'success';
  }

  // End of function get_deadline

  /**
   * @param post => param
   * @param post => task
   * @param post => taskId
   * @return json
   */
  public function do_edit_task()
  {

    $param = $this->input->post('param');
    $task = $this->input->post('task');
    $taskId = $this->input->post('taskId');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);

    $todo['todo'] = $task;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    $data['message'] = 'success';
    echo json_encode($data);
  }
  // End of function do_edit_task

  /**
   * @param post => subtask
   * @param post => taskId
   * @param post => idForm
   * @return json
   */
  public function do_edit_subtask()
  {

    $subtask = $this->input->post('subtask');
    $taskId = $this->input->post('taskId');
    $idForm = $this->input->post('idForm');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);

    $todo['subtask'][$idForm]['sub'] = $subtask;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    $data['message'] = 'success';
    echo json_encode($data);
  }
  // End of function do_edit_subtask

  /**
   * @param post => taskId
   * @return json
   */
  public function delete_task()
  {

    $taskId = $this->input->post('taskId');

    $this->db->where('id', $taskId);
    $this->db->delete('todo');

    $data['message'] = 'success';

    echo json_encode($data);
  }
  // End of function delete_task

  /**
   * @param post => taskId
   * @param post => date
   * @param post => idForm
   * @return string
   */
  public function add_subtask_deadline()
  {

    $taskId = $this->input->post('taskId');
    $date = $this->input->post('date');
    $idForm = $this->input->post('idForm');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);

    $todo['subtask'][$idForm]['deadlineSub'] = $date;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    echo 'success';
  }
  // End of function add_subtask_deadline

  /**
   * @param post => taskId
   * @param post => subtaskKey
   * @return string
   */
  public function delete_subtask()
  {

    $taskId = $this->input->post('taskId');
    $subtaskKey = $this->input->post('subtaskKey');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);
    $activeSubtask = $todo['active_subtask'];
    $inactiveSubtask = $todo['inactive_subtask'];

    //get status of selected subtask
    $statusSubtask = $todo['subtask'][$subtaskKey]['status'];

    //condition status subtask
    if ($statusSubtask == 1) {

      $newActive = $activeSubtask - 1;
      $newInactive = $inactiveSubtask;
    } else {

      $newActive = $activeSubtask;
      $newInactive = $inactiveSubtask - 1;
    }

    unset($todo['subtask'][$subtaskKey]);

    $newSubtask = array_values($todo['subtask']);

    $todo['subtask'] = $newSubtask;
    $todo['active_subtask'] = $newActive;
    $todo['inactive_subtask'] = $newInactive;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    echo 'success';
  }
  // End of function delete_subtask

  /**
   * @param post => taskId
   * @param post => subtaskKey
   * @return json
   */
  public function delete_deadline_subtask()
  {

    $taskId = $this->input->post('taskId');
    $subtaskKey = $this->input->post('subtaskKey');

    $query = "SELECT detail_todo
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $todo = json_decode($result['detail_todo'], true);

    // reset deadline
    $todo['subtask'][$subtaskKey]['deadlineSub'] = 0;

    $dataUpdate = [
      'detail_todo' => json_encode($todo)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    $data['message'] = 'success';

    echo json_encode($data);
  }
  // End of function delete_deadline_subtask

  /**
   * @param post => taskId
   * @param post => comment
   * @return json
   */
  public function save_comment()
  {

    $taskId = $this->input->post('taskId');
    $comment = $this->input->post('comment');
    $timeStamp = date('Y-m-d H:i');
    $userId = $_SESSION['id'];

    //get email user
    $queryEmail = "SELECT data_step1, name
                FROM ac_payroll_item
                WHERE id = $userId";
    $resultEmail = $this->database->getData($queryEmail, 'we')->row_array();

    $email = json_decode($resultEmail['data_step1'], true);
    $fullName = $resultEmail['name'];
    $userEmail = $email['email'];

    //get color for icon
    $queryColor = $this->db->query("SELECT color
                                  FROM user
                                  WHERE userId = $userId")->row_array();
    $color = $queryColor['color'];

    // main query
    $query = "SELECT comments, ac_payroll_item_id
            FROM todo
            WHERE id = $taskId";
    $result = $this->database->getData($query, 'todo')->row_array();

    $commentDb = json_decode($result['comments'], true);
    $userTask = $result['ac_payroll_item_id'];

    if ($commentDb == 0) {

      //insert new
      $merge['0'] = [
        'message' => $comment,
        'timePost'  => $timeStamp,
        'senderEmail'  => $userEmail,
        'senderId'  => $userId,
        'color' => $color
      ];
    } else {

      $format[count($commentDb)] = [
        'message' => $comment,
        'timePost'  => $timeStamp,
        'senderEmail'  => $userEmail,
        'senderId'  => $userId,
        'color' => $color
      ];

      $merge = array_merge($commentDb, $format);
    }

    $dataUpdate = [
      'comments'  => json_encode($merge)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    //update table notification
    //get all user id in table user
    $queryAllUser = $this->db->query("SELECT userId
                                    FROM user")->result();

    foreach ($queryAllUser as $u) {

      $targetUser[] = $u->userId;
    }

    $queryNameUser = "SELECT name
                    FROM ac_payroll_item
                    WHERE id = $userTask";
    $resultNameUser = $this->database->getData($queryNameUser, 'we')->row_array();

    $name = $resultNameUser['name'];

    $messageNotif = 'just comment in';

    $dataNotif = [
      'message' => $messageNotif,
      'senderNotif' => $userEmail,
      'target_user' => json_encode($targetUser),
      'taskOwner' => $name
    ];

    $this->db->insert('notification', $dataNotif);

    $idNotification = $this->db->insert_id();

    require APPPATH . 'views/vendor/autoload.php';

    $options = array(
      'cluster' => 'ap1',
      'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      'cbf86cc55935b2f14a34',
      '9a702078d451b20b5cb1',
      '1183544',
      $options
    );

    $notif['message'] = 'just comment in Task';
    $notif['user'] = $fullName;
    $notif['idNotification'] = $idNotification;
    $pusher->trigger('my-channel', 'my-event', $notif);

    $data['message'] = 'success';

    echo json_encode($data);
  }
  // End of function save_comment

  /**
   * @param post => taskId
   * @param post => key
   * @return json
   */
  public function get_comment()
  {

    $taskId = $this->input->post('taskId');
    $key = $this->input->post('key');

    if ($key == 'subtask') {

      $query = "SELECT comments
              FROM todo
              WHERE id = $taskId";
    } else {

      $query = "SELECT detail_todo
              FROM todo
              WHERE id = $taskId";
    }

    $result = $this->database->getData($query, 'todo')->row_array();

    if ($key == 'subtask') {

      $comment = json_decode($result['comments'], true);
    } else {

      $detail = json_decode($result['detail_todo'], true);

      $subtask = $detail['subtask'];

      for ($x = 0; $x < count($subtask); $x++) {

        $comment[] = $detail['subtask'][$x]['comment'];
      }
    }


    if ($comment != '') {

      for ($i = 0; $i < count($comment); $i++) {

        if ($comment[$i] != 0) {

          for ($x = 0; $x < count($comment[$i]); $x++) {

            $timePost = date('d M H:i', strtotime($comment[$i][$x]['timePost']));
            $color[] = $comment[$i][$x]['color'];
          }
        } else {

          $timePost = 0;
          $color = 0;
        }
      }
    } else {

      $timePost = 0;
      $color = 0;
    }

    $data['comment'] = $comment;
    $data['timePost'] = $timePost;
    $data['color'] = $color;

    echo json_encode($data);
  }
  // End of function get_comment

  /**
   * @return json
   */
  public function get_user_task()
  {

    $idMaster = $_SESSION['id'];

    $query = "SELECT ac_payroll_item_id
            FROM todo
            WHERE status > 0";
    $result = $this->database->getData($query, 'todo');

    $queryName = "SELECT id, name
                FROM ac_payroll_item
                WHERE is_active = 1
                AND barcode IS NOT null";
    $resultName = $this->database->getData($queryName, 'we')->result();

    $nameArray = array();
    foreach ($resultName as $r) {

      $nameArray['id' . $r->id] = $r->name;
    }

    if ($result->num_rows() > 0) {

      foreach ($result->result() as $row) {

        $userId[] = $row->ac_payroll_item_id;

        if (isset($nameArray['id' . $row->ac_payroll_item_id])) {

          $name[] = $nameArray['id' . $row->ac_payroll_item_id];

          $fixName = array_values(array_unique($name));
          $fixUserId = array_values(array_unique($userId));
        }
      }
    } else {

      $fixName = 0;
      $fixUserId = 0;
    }


    $data['name'] = $fixName;
    $data['userId'] = $fixUserId;
    $data['selfId'] = $idMaster;

    echo json_encode($data);
  }
  // End of function get_user_task

  /**
   * @param post => subtaskKey
   * @param post => taskId
   * @return json
   */
  public function comment_subtask()
  {

    $subtaskKey = $this->input->post('subtaskKey');
    $taskId = $this->input->post('taskId');

    $query = $this->db->query("SELECT detail_todo
                              FROM todo
                              WHERE id = $taskId")->row_array();

    $detail = json_decode($query['detail_todo'], true);

    if (isset($detail['subtask'][$subtaskKey])) {

      $title = $detail['subtask'][$subtaskKey]['sub'];
      $comment = $detail['subtask'][$subtaskKey]['comment'];
    }

    $data['title']  = $title;
    $data['comment'] = $comment;
    echo json_encode($data);
  }
  // End of function comment_subtask

  /**
   * @param post => taskId
   * @param post => subtaskKey
   * @param post => comment
   * @return json
   */
  public function save_comment_subtask()
  {

    $taskId = $this->input->post('taskId');
    $subtaskKey = $this->input->post('subtaskKey');
    $comment = $this->input->post('comment');
    $idMaster = $_SESSION['id'];

    $query = $this->db->query("SELECT detail_todo, ac_payroll_item_id
                              FROM todo
                              WHERE id = $taskId")->row_array();

    $detail = json_decode($query['detail_todo'], true);
    $latestComment = $detail['subtask'][$subtaskKey]['comment'];
    $userTask = $query['ac_payroll_item_id'];

    //get color for icon
    $queryColor = $this->db->query("SELECT color
                                  FROM user
                                  WHERE userId = $idMaster")->row_array();
    $color = $queryColor['color'];

    // condition param
    if ($idMaster == $userTask) {

      $param = "self";
    } else {

      $param = "other";
    }

    //query user
    $queryUser = "SELECT data_step1
                FROM ac_payroll_item
                WHERE id = $idMaster";
    $resultUser = $this->database->getData($queryUser, 'we')->row_array();

    $dataStep = json_decode($resultUser['data_step1'], true);

    $emailUser = $dataStep['email'];

    //condition
    if ($latestComment == 0) {

      $formatComment[0] = [
        'message' => $comment,
        'timePost'  => date('Y-m-d H:i'),
        'senderEmail' => $emailUser,
        'senderId'  => $idMaster,
        'color' => $color
      ];
    } else {

      $format[count($latestComment)] = [
        'message' => $comment,
        'timePost'  => date('Y-m-d H:i'),
        'senderEmail' => $emailUser,
        'senderId'  => $idMaster,
        'color' => $color
      ];

      $formatComment = array_merge($latestComment, $format);
    }

    $detail['subtask'][$subtaskKey]['comment'] = $formatComment;

    //update
    $dataUpdate = [
      'detail_todo' => json_encode($detail)
    ];

    $this->db->where('id', $taskId);
    $this->db->update('todo', $dataUpdate);

    $data['message'] = 'success';
    $data['param'] = $param;

    echo json_encode($data);
  }
  // End of function save_comment_subtask

  /**
   * @return json
   */
  public function get_all_task()
  {

    $queryId = $this->db->query("SELECT ac_payroll_item_id
            FROM todo");

    if ($queryId->num_rows() > 0) {

      foreach ($queryId->result() as $row) {

        $userId[] = $row->ac_payroll_item_id;
        $uniqueId = array_values(array_unique($userId));
      }

      // query name 
      $queryName = "SELECT name, id 
                  FROM ac_payroll_item
                  WHERE is_active = 1
                  AND barcode IS NOT null";
      $resultName = $this->database->getData($queryName, 'we')->result();

      $nameArray = array();
      foreach ($resultName as $n) {

        $nameArray['id' . $n->id] = $n->name;
      }

      // query data detail
      for ($i = 0; $i < count($uniqueId); $i++) {

        // query color 
        $queryColor[] = $this->db->query("SELECT color 
                                                  FROM user 
                                                  WHERE userId = $uniqueId[$i]")->result();

        // name 
        if (isset($nameArray['id' . $uniqueId[$i]])) {

          $nameList[] = $nameArray['id' . $uniqueId[$i]];
        }

        // query master
        $query[] = "SELECT DISTINCT detail_todo, created_time, id, 
                            JSON_EXTRACT(detail_todo, '$.subtask') AS subtask, 
                            JSON_EXTRACT(detail_todo, '$.todo') AS task,
                            JSON_EXTRACT(detail_todo, '$.active_subtask') AS active_subtask, 
                            JSON_EXTRACT(detail_todo, '$.inactive_subtask') AS inactive_subtask, 
                            status, comments, ac_payroll_item_id, time_done
                                          FROM todo 
                                          WHERE ac_payroll_item_id = $uniqueId[$i]
                                          ORDER BY status DESC";
      }

      $z = 0;
      for ($x = 0; $x < count($query); $x++) {

        $result = $this->db->query($query[$x])->result();

        $y = 0;
        foreach ($result as $r) {

          $subtask[$z][$y] = json_decode($r->subtask, true);
          $task[$z][$y] = json_decode($r->task, true);
          $comment[$x][$y] = json_decode($r->comments, true);
          $taskId[$x][$y] = $r->id;
          $active[$x][$y] = json_decode($r->active_subtask, true);
          $inactive[$x][$y] = json_decode($r->inactive_subtask, true);
          $status[$x][$y] = $r->status;
          $userId[$x][$y] = $r->id;
          $timeDone[$x][$y] = $r->time_done;

          $y++;
        }

        $z++;
      }

      $format['data'] = [
        'task' => $task,
        'timeDone'  => $timeDone,
        'subtask' => $subtask,
        'name'  => $nameList,
        'comment' => $comment,
        'taskId'  => $taskId,
        'active'  => $active,
        'inactive'  => $inactive,
        'status'  => $status,
        'userId'  => $uniqueId,
        'color' => $queryColor
      ];

      echo json_encode($format);
    }
  }
  // end of function get_all_task

  public function get_notification()
  {
    $idMaster = $_SESSION['id'];

    $query = $this->db->query("SELECT message, target_user, senderNotif, taskOwner
                            FROM notification
                            WHERE JSON_CONTAINS(target_user, JSON_QUOTE('$idMaster'), '$') = 1");

    if ($query->num_rows() == 0) {

      $data['warn'] = 'error';
    } else {

      foreach ($query->result() as $row) {

        $message[] = $row->senderNotif . ' ' . $row->message .  ' ' . $row->taskOwner;
      }

      $data['message'] = $message;
      $data['warn'] = 'success';
    }

    echo json_encode($data);
  }
  // End of function get_notification

  public function clear_notification()
  {

    $idMaster = $_SESSION['id'];

    $query = $this->db->query("SELECT target_user, id
                            FROM notification")->result();

    foreach ($query as $row) {

      $targetUser[] = json_decode($row->target_user, true);
      $id[] = $row->id;
    }

    for ($i = 0; $i < count($targetUser); $i++) {

      //unset
      if (($key = array_search($idMaster, $targetUser[$i])) !== false) {
        unset($targetUser[$i][$key]);
        $check[] = array_values($targetUser[$i]);
      }
    }

    foreach ($query as $key => $value) {

      $dataUpdate[] = [
        'target_user' => json_encode($check[$key]),
        'id'  => $id[$key]
      ];
    }

    $this->db->update_batch('notification', $dataUpdate, 'id');
  }
  // End of function clear_notification

  public function show_data($field)
  {

    $query = $this->db->query("SELECT $field FROM todo WHERE status > 0")->result();

    echo json_encode($query);
  }
}
