  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mainTab">

    <!-- header -->

    <div class="header fixed-top">

      <ul class="nav d-flex">

        <div class="p-2 flex-grow-1">

          <button class="btn" style="background: var(--silver);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <img src="<?= site_url(); ?>/assets/images/humberger.svg" width="20" height="20" alt="">
          </button>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <!-- <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div> -->
            <div class="offcanvas-body">

              <div class="sideNav">

                <ul class="list-group">

                  <?php if ($_SESSION['id'] == '675') { ?>

                    <li class="list-group-item userTab" data-bs-toggle="collapse" href="#collapseUser" role="button" aria-expanded="false" aria-controls="collapseUser"><img src="<?= site_url(); ?>/assets/images/usermanagement.png" width="20" height="20" alt=""><span style="margin-left: 0.8em;">User</span></li>

                    <div class="collapse collapseUser" id="collapseUser">
                      <ul class="list-group">
                        <li class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="add_user()"> <img src="<?= site_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin=left: 0.9em;" alt=""> Add User</li>
                      </ul>
                    </div>

                  <?php } ?>

                  <li class="list-group-item todayTab activeItem" data-bs-toggle="collapse" href="#collapseTodayTask" role="button" aria-expanded="false" aria-controls="collapseTodayTask"><img src="<?= site_url(); ?>/assets/images/todaycalendar.png" width="20" height="20" alt=""><span style="margin-left: 0.8em;">Task List</span></li>

                  <div class="collapse collapseTask" id="collapseExample">
                    <ul class="list-group">
                      <div class="all">

                      </div>
                      <div class="self">

                      </div>
                      <div class="targetCollapseButtonUser">

                      </div>
                      <!-- <li class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="addUser()"> <img src="<?= site_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin=left: 0.9em;" alt=""> Add User</li>
                    <li class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;"> <img src="<?= site_url(); ?>/assets/images/usergroup.png" width="20" height="20" style="margin=left: 0.9em;" alt=""> Manage User</li> -->
                    </ul>
                  </div>

                  <!-- <li class="list-group-item upcomingTab"><img src="<?= site_url(); ?>/assets/images/upcomingcalendar.png" width="20" height="20" alt=""> <span style="margin-left: 0.8em;">Upcoming</span></li> -->

                </ul>

              </div>

            </div>
          </div>

        </div>

        <div class="d-flex p-2">

          <li class="nav-item" onclick="add_task_modal()">
            <a class="nav-link" href="#"><i class="fas fa-plus"></i></a>
          </li>

          <li class="nav-item bellNotification">
            <a class="nav-link" href="#"><img src="<?= site_url(); ?>/assets/images/bell.png" width="20" height="20" alt=""><span class="badge badgeNotification"></span></a>
          </li>

          <li class="nav-item" onclick="logout()">
            <a class="nav-link"><img class="userAvatar" src="<?= site_url(); ?>/assets/images/businessman.png" width="30" height="30" alt=""></a>
          </li>

        </div>

      </ul>

    </div>

    <!-- end header -->

    <!-- main -->

    <div class="main">

      <div class="todayTitle">

        <span class="spanTodayTitle">today</span><span class="spanDate">, <?= date('d F Y'); ?></span>

      </div>

      <!-- background with condition -->

      <div class="background">

        <img src="<?= site_url(); ?>/assets/images/background1.png" width="600" height="450" alt="">
        <p style="font-family: var(--sfpd-regular); color: #fff; font-size: 0.9em;">Enjoy your night palls!</p>
        <p style="font-family: var(--sfpd-light); color: var(--suva-gray); font-size: 0.8em;">Nothing task for today</p>

      </div>

      <!-- end background with condition -->

      <!-- today table -->

      <div class="table-responsive todayTable">

        <div class="normal_format">

          <table class="table">

            <thead>

              <th class="targetOwnerTask" colspan="3"></th>

            </thead>

            <tbody class="targetTodo">

            </tbody>

          </table>

        </div>

        <div class="all_format">

        </div>

      </div>

      <div class="table-responsive taskDoneTable">

        <table class="table">

          <thead>

            <th class="thTodayTable" colspan="3">Task Done (Archive)</span></th>

          </thead>

          <tbody class="targetTaskDone">

          </tbody>

        </table>

      </div>

      <!-- end today table -->

    </div>

    <!-- end main -->

    <!-- user management tab -->

    <div class="userManagement">

      <div class="table-resposive">

        <table class="table">

          <thead>
            <tr style="border-bottom: 1px solid var(--silver);">
              <th colspan="4" style="font-family: var(--sfpd-regular); font-size: 0.9em; color: #fff;">User management</th>
            </tr>
          </thead>

          <tbody class="targetUserManagement">
          </tbody>

        </table>

      </div>

    </div>

    <!-- user management tab -->

  </div>



  <!-- modal detail task -->

  <div class="modal modalDetailTask fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

      <!-- detail task -->

      <div class="modal-content contentDetail">

        <div class="modal-header headerDetail">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body targetBodyDetail">

          <div class="position-absolute top-0 start-0 w-100" style="padding: 0 1.4em;">

            <img class="" src="<?= site_url(); ?>/assets/images/radio.png" width="25" height="25" alt="" />
            <span class="targetTitleDetail"></span>

            <div class="row parentTabsDetail">

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 activeTab" id="subtaskTab">

                <span style="text-transform: capitalize; font-family: var(--sfpd-regular); font-size: 0.9em;">sub-task</span>

              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 comments" id="commentsTab">

                <span style="text-transform: capitalize; font-family: var(--sfpd-regular); font-size: 0.9em;">Comments <span class="commentRow"></span> </span>

              </div>

            </div>

          </div>

          <div class="flexibleDetail">

            <div class="targetSubtask">

              <div class="table-responsive">

                <table class="table">

                  <tbody class="targetDetailSubtask">

                  </tbody>

                </table>

              </div>

              <div class="table-responsive">

                <table class="table">

                  <tbody class="targetSubtaskDone">

                  </tbody>

                </table>

              </div>

            </div>

            <div class="targetActivity" style="display: none;">

              <div class="detailActivity">

                <div class="chatColomn">



                </div>

                <div class="typeComments">

                  <textarea type="text" class="font-control commentsValue" name="commentsvalue" placeholder="Type comments ..." rows="3"></textarea>

                  <div class="row">

                    <div class="col-12">

                      <div class="actionComments">

                        <button type="button" class="btn saveComments" name="button">
                          Add Comment
                        </button>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- end detail task -->

      <!-- detail subtask -->

      <div class="modal-content contentDetailSub">

        <div class="modal-header headerDetail">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body targetBodyDetail">

          <div class="headerDetailSubtask">

            <img class="" src="<?= site_url(); ?>/assets/images/radio.png" width="25" height="25" alt="" />
            <span class="targetTitleSubtask"></span>

            <div class="row parentTabsDetail">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 comments" id="commentsTab">

                <span style="text-transform: capitalize; font-family: var(--sfpd-regular); font-size: 0.9em;">Comments <span class="commentRowSubtask"></span> </span>

              </div>

            </div>

          </div>

          <div class="flexibleDetail">

            <div class="targetDeepSubtask">

              <div class="table-responsive">

                <table class="table">

                  <tbody class="targetDeepSubtask">

                  </tbody>

                </table>

              </div>

              <div class="table-responsive">

                <table class="table">

                  <tbody class="targetSubtaskDone">

                  </tbody>

                </table>

              </div>

            </div>

            <div class="targetActivitySubtask" style="display: none;">

              <div class="detailActivity">

                <div class="chatColomnSubtask">



                </div>

                <div class="typeComments">

                  <textarea type="text" class="font-control commentFieldSubtask" name="commentFieldSubtask" placeholder="Type comments ..." rows="3"></textarea>

                  <div class="actionComments">

                    <button type="button" class="btn doSaveComment" name="button">Add Comment</button>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- end detail subtask -->

    </div>

  </div>

  <!-- modal detail task -->

  <!-- modal add task -->

  <!-- Modal -->
  <div class="modal modalQuickTask fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background: #202020; border: none;">
        <div class="modal-header" style="border: none;">
          <span class="modal-title" id="staticBackdropLabel" style="font-family: var(--sfpd-medium); color: #fff; font-size: 0.8em; text-transform: capitalize;">quick add task</span>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="quickForm">
            <input type="text" autocomplete="off" name="fieldQuickForm" class="fieldQuickForm" id="fieldQuickForm" oninput="active_button('quick add', 'fieldQuickForm')" placeholder="e.g family lunch on sunday">
          </div>
          <div class="buttonGroupAdd" style="display: block;">
            <button type="button" class="doAddTask" id="buttonQuickForm" name="button">Add Task</button>
            <span onclick="cancel_add_task()">Cancel</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end modal add task -->


  <!-- modal add comment subtask -->

  <div class="modal modalCommentSubtask fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background: #202020; border: none;">
        <div class="modal-header" style="border: none;">
          <span class="modal-title commentSubtaskTitle" id="staticBackdropLabel" style="font-family: var(--sfpd-medium); color: #fff; font-size: 0.8em; text-transform: capitalize;"></span>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="quickForm">
            <input type="text" autocomplete="off" name="commentFieldSubtask" class="commentFieldSubtask" id="commentFieldSubtask" placeholder="e.g family lunch on sunday">
          </div>
          <div class="buttonGroupAdd" style="display: block;">
            <button type="button" class="doSaveComment" id="buttonQuickForm" name="button">Add Comment</button>
            <span onclick="cancel_add_task()">Cancel</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end modal add comment subtask -->


  <!-- popover body -->

  <div id="customdiv" style="display: none; padding: 1em;">

    <div style="display: flex; justify-content: space-around; padding: 0.5em 1em; vertical-align: middle;">

      <div class="targetClock" style="border-right: 1px solid var(--silver); vertical-align: middle;">

      </div>

      <div id="targetMessageNotificationn" style="margin-left: 0.4em;">

      </div>

    </div>

  </div>

  <!-- end popover body -->

  <!-- toast -->

  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div id="liveToast" class="toast hide bottom-0 start-50" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <span class="me-auto">Updated</span>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body targetToast">
      </div>
    </div>
  </div>

  <!-- end toast -->

  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      get_task();
      get_notification();

      $('#commentsTab').click(function(e) {
        e.preventDefault();

        $('#subtaskTab').removeClass('activeTab');

        $(this).addClass('activeTab');
        $('.targetActivity').show();
        $('.targetSubtask').hide();
      })

      $('#subtaskTab').click(function(e) {
        e.preventDefault();

        $('#commentsTab').removeClass('activeTab');

        $(this).addClass('activeTab');
        $('.targetActivity').hide();
        $('.targetSubtask').show();
      })

      //bell action
      const notifElem = document.getElementById('customdiv');
      tippy('.bellNotification', {
        content: notifElem.innerHTML,
        allowHTML: true,
        placement: 'left',
        interactive: true,
        trigger: 'click',
        onShow: function() {
          get_notification();
        },
        onHide: function() {
          clear_notification();
        }
      });

      //initialize off canvas
      (function mainScript() {
        "use strict";
        const offcanvasToggle = document.querySelector(
          '[data-bs-toggle="offcanvas"]',
        );
        const offcanvasCollapse = document.getElementById("offcanvasExample");
        offcanvasToggle.addEventListener("click", function() {
          offcanvasCollapse.classList.toggle("open");
          if ($('#offcanvasExample').hasClass('open')) {
            //mainpulate main and user management
            $('.main').css({
              "left": "25%",
              'width': "75%"
            });

            $('.userManagement').css({
              "left": "25%",
              'width': "75%"
            })
          } else {
            //mainpulate main
            $('.main').css({
              "left": "0",
              'width': "100%"
            });

            $('.userManagement').css({
              "left": "0",
              'width': "100%"
            })
          }
        });
      })();


    })

    function cancel_add_task(key = '') {

      $('.taskForm').hide();
      $('.buttonGroupAdd').hide();

      $('.buttonTaskForm').show();

      if (key != '') {

        get_all_task();

      } else {

        get_task();

      }

    }

    function active_button(condition, field) {

      var task = $('.' + field).val();

      if (task.length > 0) {

        $('.doAddTask').addClass('activeForButton');
        $('.doAddTask').attr('onclick', "save_task('" + condition + "', '" + field + "')");

      } else {

        $('.doAddTask').removeClass('activeForButton');
        $('.doAddTask').removeAttr('onclick');

      }

    }

    function button_comment_subtask(subtaskKey, taskId) {

      var comment = $('.commentFieldSubtask').val();

      if (comment.length > 0) {

        $('.doSaveComment').addClass('activeForButton');
        $('.doSaveComment').attr('onclick', 'save_comment_subtask(' + subtaskKey + ', ' + taskId + ')');

      } else {

        $('.doSaveComment').removeClass('activeForButton');
        $('.doSaveComment').removeAttr('onclick');

      }

    }

    function save_task(condition = '', field = '') {

      var task = $('.' + field).val();

      $.ajax({
        type: 'post',
        data: {
          task: task
        },
        url: '<?= site_url('task/save_task'); ?>',
        dataType: 'text',
        beforeSend: function() {

          var loading = '<div class="spinner-border" role="status" style="width: 20px; height: 20px;">' +
            '<span class="visually-hidden">Loading...</span>' +
            '</div>';

          $('.doAddTask').html(loading);

        },
        success: function(result) {

          $('.doAddTask').html('Add Task');
          get_task();

          if (condition == 'quick add') {

            $('.modalQuickTask').modal('hide');
            $('.fieldQuickForm').val('');
            active_button(`quick add`, `fieldQuickForm`);

          }

        }
      })

    }

    function get_task(userId = '') {

      var idMaster = '<?= $_SESSION['id']; ?>';

      $.ajax({
        type: 'POST',
        data: {
          userId: userId
        },
        url: '<?= site_url('task/get_task'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.todo == 0) {

            $('.todayTable').hide();
            $('.background').show();
            $('.taskDoneTable').hide();

          } else if (result.todo.length > 0) {

            $('.normal_format').show();
            $('.all_format').hide();

            $('.todayTable').show();
            $('.background').hide();

            var tr = '';
            var taskDone = '';

            var tom = "'tomorrow'";
            var next = "'week'";

            for (var i = 0; i < result.todo.length; i++) {

              // condition subtask

              if (result.todo[i].active_subtask == 0) {

                var subtask = '';

              } else {

                var subtask = '<div class="subTask">' +
                  '<img src="<?= site_url(); ?>/assets/images/subtask.png" width="18" height="18" alt="">' +
                  '<span style="font-family: var(--sfpd-ultralight); font-size: 0.8em; color: var(--suva-gray);">' + result.todo[i].inactive_subtask + '/' + (result.todo[i].active_subtask + result.todo[i].inactive_subtask) + '</span>' +
                  '</div>';

              }

              //condition comment
              if (result.comment[i].length > 0) {

                var tdComment = '<div class="taskComment" style="margin-left: 0.8em;">' +
                  '<i class="far fa-comment"></i>' +
                  '<span style="font-family: var(--sfpd-ultralight); font-size: 0.8em; color: var(--suva-gray);">' + result.comment[i].length + '</span>' +
                  '</div>';

              } else {

                var tdComment = '';

              }

              // condition status
              if (result.status[i] == 1) {

                var taskValue = "'" + result.todo[i].todo + "'";
                var paramDetail = "'task'";

                var param = "'manual', 'task'";

                if (result.userId[i] != idMaster) {

                  var action = '';
                  var buttonTime1 = '';
                  var buttonTime2 = '';
                  var buttonDelete = '';
                  var buttonEdit = '';
                  var onclickUser = "'other'";

                } else {

                  var action = '<tr class="newTask" style="border: none;">' +
                    '<td colspan="2" style="border:none; color: var(--suva-gray); font-family: var(--sfpd-light); font-size: 0.9em;">' +
                    '<div class="taskForm">' +
                    '<input type="text" autocomplete="off" name="task" class="task" value="" oninput="active_button(' + param + ')" placeholder="e.g family lunch on sunday">' +
                    '</div>' +
                    '<div class="buttonGroupAdd">' +
                    '<button type="button" class="doAddTask" name="button">Add Task</button>' +
                    '<span onclick="cancel_add_task()">Cancel</span>' +
                    '</div>' +
                    '<div class="buttonTaskForm" onclick="button_task_form()">' +
                    '<img class="" src="<?= site_url(); ?>/assets/images/plus.png" width="18" height="18" alt="" /><span> add task</span>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                  var buttonDelete = '<button onclick="confirm_delete_task(' + result.taskId[i] + ')" class="btn btnPopover tomorrowPopover" id="deletePopover"><i class="fas fa-trash"></i></button>';
                  var buttonEdit = '<button onclick="edit_task(' + result.taskId[i] + ', ' + i + ', ' + taskValue + ')" class="btn btnPopover tomorrowPopover" id="editPopover"><i class="fas fa-edit"></i></button>';
                  var buttonTime1 = '<button onclick="get_deadline(' + result.taskId[i] + ', ' + next + ')" class="btn btnPopover weekPopover" id="weekPopover"><i class="fas fa-calendar-week"></i></button>';
                  var buttonTime2 = '<button onclick="get_deadline(' + result.taskId[i] + ', ' + tom + ')" class="btn btnPopover tomorrowPopover" id="tomorrowPopover"><i class="fas fa-sun"></i></button>';
                  var onclickUser = "'self'";

                }

                tr += '<tr data-helper-task="1" class="trTodo" id="trTodo' + i + '">' +
                  '<td class="iconTodayTable" onclick="task_done(' + i + ', ' + result.taskId[i] + ', ' + onclickUser + ')"><img class="" src="<?= site_url(); ?>/assets/images/radio.png" width="25" height="25" alt="" /></td>' +
                  '<td class="descTodayTable" onclick="detail_task(' + i + ', ' + result.taskId[i] + ', ' + paramDetail + ')">' +
                  '<p style="margin-bottom: 0;">' + result.todo[i].todo + '</p>' +
                  '<div style="display: flex;">' +
                  subtask +
                  tdComment +
                  '</div>' +
                  '</td>' +
                  '<td class="tdAction coba' + i + '" data-id="1" id="testing' + i + '">' +
                  '<div class="btn-group">' +
                  // buttonTime1 +
                  // buttonTime2 +
                  buttonEdit +
                  buttonDelete +
                  '</div>' +
                  '</td>' +
                  '</tr>';

              } else {

                taskDone += '<tr onclick="redo_task(' + i + ', ' + result.taskId[i] + ')" data-helper-task-done="1" class="trTaskDone" id="trTodo' + i + '">' +
                  '<td class="iconTodayTable"><img class="" src="<?= site_url(); ?>/assets/images/radiocheck.png" width="25" height="25" alt="" /></td>' +
                  '<td class="descTodayTable">' +
                  '<p style="margin-bottom: 0; text-decoration: line-through; color: var(--dim-gray);">' + result.todo[i].todo + '</p>' +
                  subtask +
                  tdComment +
                  '</td>' +
                  '<td class="tdAction coba' + i + '" data-id="1" id="testing' + i + '">' +
                  '<i class="fas fa-plus"></i>' +
                  '</td>' +
                  '</tr>';

              }

              //add onclick
              $('.divTodayPopover').attr('onclick', 'getDeadline(' + result.taskId[i] + ')');

            }

            $('.targetTodo').html(tr);
            $('.targetTodo').append(action);

            $(".task").on('keyup', function(event) {
              if (event.keyCode === 13) {

                save_task('manual', 'task');
                get_task();

              }
            });

            $('.targetTaskDone').html(taskDone);

            //condition owner name
            $('.targetOwnerTask').html(result.name);

            //condition showing table
            var helperTaskDone = $('tr[class="trTaskDone"]').map(function() {
              return $(this).attr('data-helper-task-done');
            }).toArray();

            var helperTask = $('tr[class="trTodo"]').map(function() {
              return $(this).attr('data-helper-task');
            }).toArray();

            if (helperTaskDone.length > 0) {

              $('.taskDoneTable').show();

            } else {

              $('.taskDoneTable').hide();

            }

            if (helperTask.length > 0) {

              $('.todayTable').show();

            } else {

              $('.todayTable').hide();

            }

            // initialize popover
            tippy('#editPopover', {
              content: 'Edit',
            });

            tippy('#deletePopover', {
              content: 'Edit',
            });

            tippy('#tomorrowPopover', {
              content: 'Tomorrow',
            });

            tippy('#weekPopover', {
              content: 'Next week',
            });

          }

        }
      })

    }

    function button_task_form() {

      $('.taskForm').show();
      $('.buttonGroupAdd').show();

      $('.buttonTaskForm').hide();

      $('.task').focus();

    }

    function enter_function(condition = '', field) {

      $('.' + field).on('keyup', function(event) {
        if (event.keyCode === 13) {

          save_task(condition, field);
          get_task();

        }
      });

    }

    function enter_function_subtask() {

      $(".subtaskField").on('keyup', function(event) {
        if (event.keyCode === 13) {

          save_subtask();
          // getSubtask();

        }
      });

    }

    function detail_task(idForm, taskId, paramDetail) {

      $('.modalDetailTask').modal('show');
      $('.contentDetail').show();
      $('.contentDetailSub').hide();

      $.ajax({
        type: 'post',
        data: {
          id: taskId,
          paramDetail: paramDetail
        },
        url: '<?= site_url('task/detail_task'); ?>',
        dataType: 'json',
        success: function(result) {
          if (result.title != '') {

            var key = 'subtask';

            $('.targetTitleDetail').text(result.title);

            get_subtask(taskId, result.statusUser);
            get_comment(taskId, key);
            $('.saveComments').attr('onclick', 'save_comment(' + taskId + ')');

          }

        }
      })

    }

    function show_subtask_form() {

      $('.subtaskForm').show();
      $('.buttonGroupAddSubtask').show();

      $('.buttonSubtask').hide();

    }

    function cancel_add_subtask(taskId = '') {

      $('.subtaskForm').hide();
      $('.buttonGroupAddSubtask').hide();

      $('.buttonSubtask').show();
      get_subtask(taskId);

    }

    function check_subtask() {

      var subtask = $('.subtaskField').val();

      if (subtask.length > 0) {

        $('.doAddSubtask').addClass('activeForButton');
        $('.doAddSubtask').attr('onclick', 'save_subtask()');

      } else {

        $('.doAddSubtask').removeClass('activeForButton');
        $('.doAddSubtask').removeAttr('onclick');

      }

    }

    function save_subtask() {

      var subtask = $('.subtaskField').val();
      var taskId = $('.taskId').val();

      $.ajax({
        type: 'post',
        data: {
          subtask: subtask,
          taskId: taskId
        },
        url: '<?= site_url('task/save_subtask'); ?>',
        dataType: 'text',
        success: function(result) {
          get_task();
          get_subtask(taskId);
        }
      })

    }

    function add_task_modal() {

      $('.modalQuickTask').modal('show');

      $(".fieldQuickForm").on('keydown', function(event) {
        if (event.keyCode === 13) {

          validate(event, `quick add`);

        }
      });

      get_task();

    }

    function validate(e, condition) {

      var task = e.target.value;

      $.ajax({
        type: 'post',
        data: {
          task: task
        },
        url: '<?= site_url('task/save_task'); ?>',
        dataType: 'text',
        success: function(result) {
          get_task();

          if (condition == 'quick add') {

            $('.modalQuickTask').modal('hide');
            $('.fieldQuickForm').val('');
            active_button(`quick add`, `fieldQuickForm`);

            setTimeout(function() {
              location.reload();
            }, 1);

          }
        }
      })

    }

    function get_subtask(taskId, param) {

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId,
          param: param
        },
        url: '<?= site_url('task/get_subtask'); ?>',
        dataType: 'json',
        success: function(result) {

          //condition role user
          if (result.params == 'other') {

            var buttonAction = '';

          } else {

            var buttonAction = '<tr class="newSubtask" style="border: none;">' +
              '<td colspan="2" style="border:none; color: var(--suva-gray); font-family: var(--sfpd-light); font-size: 0.9em;">' +
              '<div class="subtaskForm">' +
              '<input type="text" autocomplete="off" name="subtaskField" class="subtaskField" oninput="check_subtask()" placeholder="e.g family lunch on sunday">' +
              '<input type="hidden" name="taskId" class="taskId">' +
              '</div>' +
              '<div class="buttonGroupAddSubtask">' +
              '<button type="button" class="doAddSubtask" name="button">Add Task</button>' +
              '<span onclick="cancel_add_subtask()" style="cursor: pointer;">Cancel</span>' +
              '</div>' +
              '<div class="buttonSubtask" onclick="show_subtask_form()">' +
              '<img class="" src="<?= site_url(); ?>/assets/images/plus.png" width="18" height="18" alt="" /><span> Add Sub-task</span>' +
              '</div>' +
              '</td>' +
              '</tr>';

          }

          var tr = '';
          var subtaskDone = '';
          for (var i = 0; i < result.allSubtask; i++) {

            var undo = "'undo'";
            var redo = "'redo'";
            var tom = "'tomorrow'";
            var next = "'week'";
            var tod = "'today'";
            var key = "'subtask'";

            // condition deadline
            var today1 = '<?= date('l'); ?>';
            var tom1 = '<?= date('l', strtotime('+1 days')); ?>';
            var next1 = '<?= date('l', strtotime('+7 days')); ?>';

            var t = '<?= date('Y-m-d'); ?>';
            var tm = '<?= date('Y-m-d', strtotime('+1 days')); ?>';
            var w = '<?= date('Y-m-d', strtotime('+7 days')); ?>';

            if (result.subtask[i]['deadlineSub'] != 0) {

              var todayTime = new Date();
              var y = todayTime.getFullYear();
              var m = add_zero((todayTime.getMonth() + 1));
              var d = add_zero(todayTime.getDate());
              var newTodayTime = y + '-' + m + '-' + d;
              var x = new Date(newTodayTime).getTime();
              var deadlineDb = new Date(result.subtask[i]['deadlineSub']).getTime();

            }


            if (result.subtask[i]['deadlineSub'] == tm) {

              var spanDeadline = '<i id="calendarSubtask' + i + '" class="far fa-calendar tomorrow"></i><span class="tomorrowSubtask" id="deadlineSubtaskIndicator' + i + '">' + tom1 + '</span>';

            } else if (result.subtask[i]['deadlineSub'] == t) {

              var spanDeadline = '<i id="calendarSubtask' + i + '" class="far fa-calendar today"></i><span class="todaySubtask" id="deadlineSubtaskIndicator' + i + '">Today</span>';

            } else if (result.subtask[i]['deadlineSub'] == w) {

              var spanDeadline = '<i id="calendarSubtask' + i + '" class="far fa-calendar week"></i><span class="weekSubtask" id="deadlineSubtaskIndicator' + i + '">' + next1 + '</span>';

            } else if (x > deadlineDb) {

              var spanDeadline = '<i id="calendarSubtask' + i + '" class="far fa-calendar overdue"></i><span class="overdueSubtask" id="deadlineSubtaskIndicator' + i + '">Ovedue</span>';

            } else {

              var spanDeadline = '';

            }

            //value subtask
            var value = "'" + result.subtask[i]['sub'] + "'";

            //condition button
            if (result.params == 'other') {

              var buttonTime1 = '';
              var buttonTime2 = '';
              var buttonTime3 = '';
              var buttonTime4 = '';
              var buttonEdit = '';
              var buttonDelete = '';
              var onclickDone = '';
              var onclickdone1 = '';
              var commentSubtask = 'commentSubtask(' + i + ', ' + taskId + ')';

            } else {

              var key = "'" + result.params + "'";

              var buttonTime1 = '<button onclick="add_deadline(' + taskId + ', ' + next + ', ' + key + ', ' + i + ', ' + key + ')" class="btn btnPopover weekPopover" id="weekPopover"><i class="fas fa-calendar-week"></i></button>';
              var buttonTime2 = '<button onclick="add_deadline(' + taskId + ', ' + tom + ', ' + key + ', ' + i + ', ' + key + ')" class="btn btnPopover tomorrowPopover" id="tomorrowPopover"><i class="fas fa-sun"></i></button>';
              var buttonTime3 = '<button onclick="add_deadline(' + taskId + ', ' + tod + ', ' + key + ', ' + i + ', ' + key + ')" class="btn btnPopover todayPopoverr" id="todayPopoverr"><i class="fas fa-calendar-day"></i></button>';
              var buttonTime4 = '<button onclick="delete_deadline_subtask(' + taskId + ', ' + tod + ', ' + key + ', ' + i + ', ' + key + ')" class="btn btnPopover todayPopoverr" id="todayPopoverr"><i class="far fa-calendar-times"></i></button>';
              var buttonEdit = '<button onclick="edit_subtask(' + taskId + ', ' + i + ', ' + value + ', ' + key + ')" class="btn btnPopover tomorrowPopover" id="editPopover"><i class="fas fa-edit"></i></button>';
              var buttonDelete = '<button onclick="confirm_delete_subtask(' + taskId + ', ' + i + ', ' + key + ')" class="btn btnPopover tomorrowPopover" id="editPopover"><i class="fas fa-trash"></i></button>';
              var onclickDone = 'subtask_done(' + i + ', ' + taskId + ', ' + undo + ', ' + key + ')';
              var onclickDone1 = 'subtask_done(' + i + ', ' + taskId + ', ' + redo + ', ' + key + ')';
              var commentSubtask = 'comment_subtask(' + i + ', ' + taskId + ')';

            }

            if (result.subtask[i]['comment'] == 0) {

              var tdComment = '';

            } else {

              var tdComment = '<div class="taskComment" style="margin-left: 0.8em;">' +
                '<i class="far fa-comment"></i>' +
                '<span style="font-family: var(--sfpd-ultralight); font-size: 0.8em; color: var(--suva-gray);">' + result.subtask[i]['comment'].length + '</span>' +
                '</div>';

            }

            if (result.subtask[i]['status'] == 0) {

              tr += '';
              subtaskDone += '<tr id="trSubtask' + i + '">' +
                '<td onclick="' + onclickDone + '" style="width: 2em; border-color: #4d4c4c;"><img class="" src="<?= site_url(); ?>/assets/images/radiocheck.png" width="25" height="25" alt="" /></td>' +
                '<td onclick="' + onclickdone1 + '" class="descSubtask">' +
                '<p style="margin-bottom: 0; text-decoration: line-through; color: var(--dim-gray);">' + result.subtask[i]['sub'] + '</p>' +
                '</td>' +
                '</tr>';

            } else {

              tr += '<tr id="trSubtask' + i + '">' +
                '<td onclick="' + onclickDone1 + '" style="width: 2em; border-color: #4d4c4c;"><img class="" src="<?= site_url(); ?>/assets/images/radio.png" width="25" height="25" alt="" /></td>' +
                '<td onclick="' + commentSubtask + '" class="descSubtask">' +
                '<p style="margin-bottom: 0;">' + result.subtask[i]['sub'] + '</p>' +
                '<div style="display: flex;">' +
                spanDeadline +
                tdComment +
                '</div>' +
                '</td>' +
                '<td style="width: 1em; border-bottom: 1px solid #4d4c4c; vertical-align: middle;">' +
                '<div class="btn-group">' +
                buttonTime1 +
                buttonTime2 +
                buttonTime3 +
                buttonTime4 +
                buttonEdit +
                buttonDelete +
                '</div>' +
                '</td>' +
                '</tr>';

            }

          }

          $('.targetDetailSubtask').html(tr);
          $('.targetDetailSubtask').append(buttonAction);
          $('.taskId').val(taskId);
          $(".subtaskField").on('keyup', function(event) {
            if (event.keyCode === 13) {

              save_subtask();

            }
          });

          // subtask done
          $('.targetSubtaskDone').html(subtaskDone);

          //popover intialize
          var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
          var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl, {
              container: 'body',
              trigger: 'click',
              placement: 'right',
              html: true,
              content: function() {
                return $('#customdiv').html();
              }
            })
          });

        }
      })

    }

    function task_done(taskKey, taskId, key, userId = '') {

      var idMaster = '<?= $_SESSION['id']; ?>';

      if (key == 'self') {

        $.ajax({
          type: 'post',
          data: {
            taskId: taskId
          },
          url: '<?= site_url('task/task_done'); ?>',
          dataType: 'json',
          success: function(result) {
            console.log(result);

            if (result.message == 'success') {

              if (userId == '') {

                get_task();

              } else {

                get_all_task();

              }

            } else if (result.message == 'error') {

              //initialize toast
              $('.targetToast').html('Update can only be made at 08.00 - 17.00');
              $('.toast').toast('show');
              var toastElList = [].slice.call(document.querySelectorAll('.toast'))
              var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl, {
                  autohide: true,
                  delay: 1500
                })
              })

            }

          }
        })

      }

    }

    function redo_task(taskKey, taskId, userId = '') {

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId
        },
        url: '<?= site_url('task/redo_task'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            if (userId == '') {

              get_task();

            } else {

              get_all_task();

            }

          }

        }
      })

    }

    function subtask_done(subtaskKey, taskId, param, key) {

      $.ajax({
        type: 'post',
        data: {
          subtaskKey: subtaskKey,
          taskId: taskId,
          param: param
        },
        url: '<?= site_url('task/subtask_done'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            get_subtask(taskId, key);
            get_task();

          } else if (result.message == 'error') {

            //initialize toast
            $('.targetToast').html('Update can only be made at 08.00 - 17.00');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

          }

        }
      })

    }

    function get_deadline(taskId, param) {

      $.ajax({
        type: 'post',
        data: {
          param: param,
          taskId: taskId
        },
        url: '<?= site_url('task/get_deadline'); ?>',
        dataType: 'text',
        success: function(result) {

          if (result == 'success') {

            get_task();

            //initialize toast
            $('.targetToast').html('Task has been updated');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

          }

        }
      })

    }

    function add_deadline(taskId, param, key, idForm, key) {

      var today = '<?= date('l'); ?>';
      var tom = '<?= date('l', strtotime('+1 days')); ?>';
      var next = '<?= date('l', strtotime('+7 days')); ?>';


      if (param == 'tomorrow') {

        var paramDate = '<?= date('Y-m-d', strtotime('+1 days')); ?>';

      } else if (param == 'today') {

        var paramDate = '<?= date('Y-m-d'); ?>';

      } else if (param == 'week') {

        var paramDate = '<?= date('Y-m-d', strtotime('+7 days')); ?>';

      }

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId,
          date: paramDate,
          idForm: idForm
        },
        url: '<?= site_url('task/add_subtask_deadline'); ?>',
        dataType: 'text',
        success: function(result) {

          get_task();
          get_subtask(taskId, key);

        }
      })

    }

    function delete_deadline_subtask(taskId, param, key, idForm) {

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId,
          subtaskKey: idForm
        },
        url: '<?= site_url('task/delete_deadline_subtask'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            get_subtask(taskId);
            get_task();

          }

        }
      })

    }

    function add_zero(data) {

      if (data < 10) {

        var result = '0' + data;

      } else if (data >= 10) {

        var result = data;

      }

      return result;

    }

    function edit_task(taskId, idForm, taskValue) {

      var param = "'manual', 'task'";
      var action = '<td colspan="2" style="border:none; color: var(--suva-gray); font-family: var(--sfpd-light); font-size: 0.9em;">' +
        '<div class="taskForm" style="display: block;">' +
        '<input type="text" autocomplete="off" name="task" class="task" oninput="active_button(' + param + ')" value="' + taskValue + '">' +
        '</div>' +
        '<div class="buttonGroupAdd" style="display: block;">' +
        '<button type="button" onclick="do_edit_task(' + param + ', ' + taskId + ')" class="editTaskButton activeForButton" name="button">Add Task</button>' +
        '<span onclick="cancel_add_task()">Cancel</span>' +
        '</div>' +
        '</td>';
      $('#trTodo' + idForm).html(action);

      $('.task').focus();

      $(".task").on('keyup', function(event) {
        if (event.keyCode === 13) {

          do_edit_task('manual', 'task', taskId);
          get_task();

        }
      });

    }

    function edit_task_all(taskId, formId, userId, taskValue) {

      var param = "'manual', 'task-all'";
      var action = '<td colspan="2" style="border:none; color: var(--suva-gray); font-family: var(--sfpd-light); font-size: 0.9em;">' +
        '<div class="taskForm" style="display: block;">' +
        '<input type="text" autocomplete="off" name="task" class="task-all" oninput="active_button(' + param + ')" value="' + taskValue + '">' +
        '</div>' +
        '<div class="buttonGroupAdd" style="display: block;">' +
        '<button type="button" onclick="do_edit_task(' + param + ', ' + taskId + ', ' + userId + ')" class="editTaskButton activeForButton" name="button">Add Task</button>' +
        '<span onclick="cancel_add_task(' + userId + ')">Cancel</span>' +
        '</div>' +
        '</td>';
      $('#trTodo' + formId + userId).html(action);

      $('.task-all').focus();

      $(".task-all").on('keyup', function(event) {
        if (event.keyCode === 13) {

          do_edit_task('manual', 'task-all', taskId, userId);
          get_all_task();

        }
      });

    }

    function edit_subtask(taskId, idForm, subtaskValue) {

      var param = "'manual', 'task'";
      var action = '<td colspan="2" style="border:none; color: var(--suva-gray); font-family: var(--sfpd-light); font-size: 0.9em;">' +
        '<div class="subtaskForm" style="display: block">' +
        '<input type="text" autocomplete="off" name="subtaskField" class="subtaskField" oninput="check_subtask()" value="' + subtaskValue + '">' +
        '<input type="hidden" name="taskId" class="taskId" value="' + taskId + '">' +
        '</div>' +
        '<div class="buttonGroupAddSubtask" style="display: block;">' +
        '<button type="button" onclick="do_edit_subtask(' + taskId + ', ' + idForm + ')" class="doAddSubtaskk activeForButton" name="button">Add Task</button>' +
        '<span onclick="cancel_add_subtask(' + taskId + ')" style="cursor: pointer;">Cancel</span>' +
        '</div>' +
        '</td>';
      $('#trSubtask' + idForm).html(action);

      $(".subtaskField").on('keyup', function(event) {
        if (event.keyCode === 13) {

          do_edit_subtask(taskId, idForm);

        }
      });

    }

    function do_edit_task(param, field, taskId, key = '') {

      var value = $('.' + field).val();

      $.ajax({
        type: 'post',
        data: {
          param: param,
          task: value,
          taskId: taskId
        },
        url: '<?= site_url('task/do_edit_task'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            if (key == '') {

              get_task();

            } else {

              get_all_task();

            }

            //initialize toast
            $('.targetToast').html('Task has been updated');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

          }

        }
      })

    }

    function do_edit_subtask(taskId, idForm) {

      var value = $('.subtaskField').val();

      $.ajax({
        type: 'post',
        data: {
          subtask: value,
          taskId: taskId,
          idForm: idForm
        },
        url: '<?= site_url('task/do_edit_subtask'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            get_subtask(taskId);

            //initialize toast
            $('.targetToast').html('Subtask has been updated');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

          }

        }
      })

    }

    function confirm_delete_task(taskId, key = '') {

      var param = [];
      param[0] = taskId;

      if (key != '') {
        param[1] = key;
      }

      slModal('Delete Task', 'Are you sure to delete this Task?', 'question', {
        buttons: {
          confirmation: true,
          value: 'confirm',
          onclick: 'delete',
          params: param,
          function: 'delete_task'
        }
      })

    }

    function delete_task(taskId, key = '') {

      $('#modalNotification').modal('hide');

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId
        },
        url: '<?= site_url('task/delete_task'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            if (key == '') {

              get_task();

            } else {

              get_all_task();

            }

            //initialize toast
            $('.targetToast').html('Task has been deleted');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

          }

        }
      })

    }

    function confirm_delete_subtask(taskId, subtaskKey) {

      var param = [];
      param[0] = taskId;
      param[1] = subtaskKey;

      slModal('Delete Task', 'Are you sure to delete this Subtask?', 'question', {
        buttons: {
          confirmation: true,
          value: 'confirm',
          onclick: 'delete',
          params: param,
          function: 'delete_subtask'
        }
      })

    }

    function delete_subtask(taskId, subtaskKey) {

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId,
          subtaskKey: subtaskKey
        },
        url: '<?= site_url('task/delete_subtask'); ?>',
        dataType: 'text',
        success: function(result) {

          $('#modalNotification').modal('hide');

          get_task();
          get_subtask(taskId);

          //initialize toast
          $('.targetToast').html('Subtask has been deleted');
          $('.toast').toast('show');
          var toastElList = [].slice.call(document.querySelectorAll('.toast'))
          var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
              autohide: true,
              delay: 1500
            })
          })

        }
      })

    }

    function get_comment(taskId, key) {

      $.ajax({
        type: 'post',
        data: {
          taskId: taskId,
          key: key
        },
        url: '<?= site_url('task/get_comment'); ?>',
        dataType: 'json',
        success: function(result) {

          var com = '';

          if (result.comment != 0) {

            for (var i = 0; i < result.comment.length; i++) {

              if (result.comment[i] != 0) {

                for (var x = 0; x < result.comment[i].length; x++) {

                  com += '<div style="display: flex; margin-bottom: 2.5em;">' +
                    '<div class="tdIcon" style="background: ' + result.comment[i][x].color + '">' +
                    '<span style="text-transform: uppercase;">' + result.comment[i][x].senderEmail.substring(0, 1) + '</span>' +
                    '</div>' +
                    '<div class="">' +
                    '<p class="senderComment">' + result.comment[i][x].senderEmail + '<span class="timeComment"> ' + result.timePost + '</span> </p>' +
                    '<p class="messageComment">' + result.comment[i][x].message + '</p>' +
                    '</div>' +
                    '<div class="optionComment" style="margin-left: 3em; display: none;">' +
                    '<i class="fas fa-edit"></i>' +
                    '</div>' +
                    '</div>';

                }

              }

            }

            if (key == 'subtask') {

              $('.chatColomn').html(com);
              $('.commentRow').html(result.comment.length);

              $('.senderComment').on('hover', function() {

                $('.optionComment').show();

              })

            } else {

              $('.chatColomnSubtask').html(com);
              $('.commentRowSubtask').html(result.comment.length);

              //show table chat
              $('.targetActivitySubtask').show();

              //hide table
              $('.targetDeepSubtask').hide();

            }

          } else {

            $('.chatColomn').html('');
            $('.commentRow').html('');

            if (key != 'subtask') {

              //show table chat
              $('.targetActivitySubtask').show();

              //hide table
              $('.targetDeepSubtask').hide();

            }

          }

        }
      })

    }

    function save_comment(taskId) {

      var comment = $('.commentsValue').val();

      if (comment == '') {

        slModal('Failed', 'Cannot posting zero comment', 'warning', {
          buttons: false,
          timer: 1500
        })

      } else {

        $.ajax({
          type: 'post',
          data: {
            taskId: taskId,
            comment: comment
          },
          url: '<?= site_url('task/save_comment'); ?>',
          dataType: 'json',
          beforeSend: function() {
            var loader = '<div class="spinner-border" role="status" style="width: 15px; height: 15px;">' +
              '<span class="visually-hidden">Loading...</span>' +
              '</div>';
            $('.saveComments').html(loader);
          },
          success: function(result) {

            $('.saveComments').html('Add Comment');

            if (result.message == 'success') {

              var key = 'subtask';

              get_task();
              get_subtask(taskId);
              get_comment(taskId, key);

              $('.commentsValue').val('');

            }

          }
        })

      }

    }

    function get_user_list() {
      $.ajax({
        type: 'post',
        url: '<?= site_url('user/get_user_list'); ?>',
        dataType: 'json',
        success: function(result) {

          var tr = '';

          for (var i = 0; i < result.user.length; i++) {

            tr += '<tr sytle="border-bottom: 1px solid var(--suva-gray)">' +
              '<td style="width: 1em; vertical-align: middle;">' +
              '<i class="fas fa-dot-circle"></i>' +
              '</td>' +
              '<td style="width: auto; vertical-align: middle;">' +
              '<p class="userName">' + result.name[i] + '</p>' +
              '<p class="userActivity">3 Task on going now</p>' +
              '</td>' +
              '<td style="width: auto; vertical-align: middle;">' +
              '<p class="statusUser">active</p>' +
              '</td>' +
              '<td style="width: 5em; vertical-align: middle;">' +
              '<div class="btn-group">' +
              '<button type="button" class="btn" name="button"> <i class="fas fa-power-off"></i> </button>' +
              '<button type="button" class="btn" name="button"> <i class="fas fa-trash userTrash"></i> </button>' +
              '</div>' +
              '</td>' +
              '</tr>';

          }

          $('.targetUserManagement').html(tr);
          $('.userManagement').show();

        }
      })
    }

    function comment_subtask(subtaskKey, taskId) {

      $('.commentFieldSubtask').removeAttr('oninput');
      $('.commentFieldSubtask').attr('oninput', 'button_comment_subtask(' + subtaskKey + ', ' + taskId + ')');
      $('.commentFieldSubtask').attr('id', 'commentFieldSubtask' + subtaskKey);

      $.ajax({
        type: 'post',
        data: {
          subtaskKey: subtaskKey,
          taskId: taskId
        },
        url: '<?= site_url('task/comment_subtask'); ?>',
        dataType: 'json',
        success: function(result) {

          $('.contentDetail').hide();
          $('.contentDetailSub').show();
          $('.targetTitleSubtask').text(result.title);
          $('.targetActivitySubtask').show();

          var key = 'deep'

          get_comment(taskId, key);

        }
      })

    }

    function save_comment_subtask(subtaskKey, taskId) {

      var comment = $('.commentFieldSubtask').val();

      $.ajax({
        type: 'post',
        data: {
          comment: comment,
          taskId: taskId,
          subtaskKey: subtaskKey
        },
        url: '<?= site_url('task/save_comment_subtask'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            var key = 'deep';

            get_subtask(taskId, result.param);
            get_comment(taskId, key);

            $('.commentFieldSubtask').val('');

            //initialize toast
            $('.targetToast').html('Comment on subtask has been added');
            $('.toast').toast('show');
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
              return new bootstrap.Toast(toastEl, {
                autohide: true,
                delay: 1500
              })
            })

            $('.modalCommentSubtask').modal('hide');

          }

        }
      })

    }

    function logout() {

      $.ajax({
        type: 'post',
        url: '<?= site_url('auth/logout'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.message == 'success') {

            slModal('Logout success', 'See you again', 'success', {
              buttons: false,
              timer: 1500
            });

            setTimeout(function() {

              var url = '<?= site_url('auth'); ?>';
              location.href = url;

            }, 1500);

          }

        }
      })

    }

    function get_notification() {

      $.ajax({
        type: 'post',
        url: '<?= site_url('task/get_notification'); ?>',
        dataType: 'json',
        success: function(result) {

          if (result.warn == 'success') {

            var span = '';
            var clock = '';

            for (var i = 0; i < result.message.length; i++) {

              span += '<p class="" style="margin-bottom: 0.5em; border-bottom: 1px solid var(--suva-gray); font-family: var(--sfpd-light); color: #fff; font-size: 0.8em;">' + result.message[i] + '</p>';
              clock += '<p class=""> <i class="far fa-clock"></i></p>';

            }

            $('#targetMessageNotificationn').html(span);
            $('.targetClock').html(clock);

          } else {

            var span = '';
            var clock = '';

            $('#targetMessageNotificationn').html('No notification');
            $('.targetClock').html('');

          }

        }
      })

    }

    function clear_notification() {
      $.ajax({
        type: 'post',
        url: '<?= site_url('task/clear_notification'); ?>',
        dataType: 'text',
        success: function(result) {

        }
      })
    }

    function get_all_task() {

      $.ajax({
        type: 'post',
        url: '<?= site_url('task/get_all_task'); ?>',
        dataType: 'json',
        success: function(result) {
          console.log(result);

          $('body').css({
            "overflow": "auto"
          });

          let idMaster = '<?= $_SESSION['id']; ?>';

          $('.all_format').show();
          $('.normal_format').hide();
          $('.taskDoneTable').hide();

          var today = new Date();
          var y = today.getFullYear();
          var m = add_zero((today.getMonth() + 1));
          var d = add_zero(today.getDate());

          var newYear = y + '-' + m + '-' + d + ' 00:01:00';
          var time = new Date(newYear).getTime();

          let table = '';

          for (let i = 0; i < result.data.task.length; i++) {

            var paramDetail = "'task'";
            var next = "'next'";
            var tom = "'tomorrow'";

            let tr = '';
            for (var x = 0; x < result.data.timeDone[i].length; x++) {

              // condition time done -> showing when time done < today at 6 pm or 0
              var taskValue = "'" + result.data.task[i][x] + "'";

              if (result.data.userId[i] != idMaster) {

                var buttonTime1 = '';
                var buttonTime2 = '';
                var onclickUser = "'other'";

              } else {

                var buttonTime1 = '<button onclick="get_deadline(' + result.data.taskId[i][x] + ', ' + next + ')" class="btn btnPopover weekPopover" id="weekPopover"><i class="fas fa-calendar-week"></i></button>';
                var buttonTime2 = '<button onclick="get_deadline(' + result.data.taskId[i][x] + ', ' + tom + ')" class="btn btnPopover tomorrowPopover" id="tomorrowPopover"><i class="fas fa-sun"></i></button>';
                var onclickUser = "'self'";

              }

              //condition subtask 
              let subtask = '';

              if (result.data.subtask[i][x] != 0) {

                for (let a = 0; a < result.data.subtask[i][x].length; a++) {

                  if (result.data.subtask[i][x][a].status == 1) {

                    var p_subtask = '<p style="color: var(--suva-gray); font-size: 0.8em; margin-bottom: 0; padding: .15em 0;"> - ' + result.data.subtask[i][x][a].sub + '</p>';

                  } else {

                    var p_subtask = '<p style="color: var(--dim-gray); text-decoration: line-through; font-size: 0.8em; margin-bottom: 0; padding: .15em 0;"> - ' + result.data.subtask[i][x][a].sub + '</p>';

                  }

                  if (new Date(result.data.subtask[i][x][a].time_done).getTime() == 0) {
                    subtask += '<tr>' +
                      '<td style="border-bottom:none; padding: 0;">' + '</td>' +
                      '<td style="border-bottom:none; padding: 0;" colspan="2">' +
                      '<table>' +
                      '<tbody>' +
                      '<tr>' +
                      '<td>' +
                      p_subtask +
                      '</td>' +
                      '</tr>' +
                      '</tbody>' +
                      '</table>' +
                      '</td>' +
                      '</tr>';
                  } else if (new Date(result.data.subtask[i][x][a].time_done).getTime() > time) {
                    subtask += '<tr>' +
                      '<td style="border-bottom:none; padding: 0;">' + '</td>' +
                      '<td style="border-bottom:none; padding: 0;" colspan="2">' +
                      '<table>' +
                      '<tbody>' +
                      '<tr>' +
                      '<td>' +
                      p_subtask +
                      '</td>' +
                      '</tr>' +
                      '</tbody>' +
                      '</table>' +
                      '</td>' +
                      '</tr>';
                  }

                }


              }

              // condition status 
              let p = '';
              if (result.data.status[i][x] == 0) {

                p += '<p style="margin-bottom: 0; text-decoration: line-through; text-decoration-color: var(--dim-gray); color: var(--silver);">' + result.data.task[i][x] + '</p>';
                var buttonDelete = '';
                var buttonEdit = '';
                var radio = '<img class="" src="<?= site_url(); ?>/assets/images/radiocheck.png" width="25" height="25" alt="" />'

                if (result.data.userId[i] == idMaster) {

                  var taskAction = 'onclick="redo_task(' + x + ', ' + result.data.taskId[i][x] + ', ' + result.data.userId[i] + ')"';

                } else {

                  var taskAction = '';

                }

              } else {

                p += '<p style="margin-bottom: 0;">' + result.data.task[i][x] + '</p>';
                var radio = '<img class="" src="<?= site_url(); ?>/assets/images/radio.png" width="25" height="25" alt="" />';

                if (result.data.userId[i] == idMaster) {

                  var buttonDelete = '<button onclick="confirm_delete_task(' + result.data.taskId[i][x] + ', ' + result.data.userId[i] + ')" class="btn btnPopover tomorrowPopover" id="deletePopover"><i class="fas fa-trash"></i></button>';
                  var buttonEdit = '<button onclick="edit_task_all(' + result.data.taskId[i][x] + ', ' + x + ', ' + result.data.userId[i] + ', ' + taskValue + ')" class="btn btnPopover tomorrowPopover" id="editPopover"><i class="fas fa-edit"></i></button>';
                  var taskAction = 'onclick="task_done(' + x + ', ' + result.data.taskId[i][x] + ', ' + onclickUser + ', ' + result.data.userId[i] + ')"';

                } else {

                  var buttonDelete = '';
                  var buttonEdit = '';
                  var taskAction = '';

                }

              }

              // condition table body 
              if (new Date(result.data.timeDone[i][x]).getTime() == 0) {

                tr += '<tr data-helper-task="1" class="trTodo" id="trTodo' + x + result.data.userId[i] + '">' +
                  '<td class="iconTodayTable" id="iconTodayTable">' + radio + '</td>' +
                  '<td class="descTodayTable" id="descTodayTable">' +
                  p +
                  '</td>' +
                  '<td class="tdAction coba' + x + '" data-id="1" id="tdAction">' +
                  '<div class="btn-group">' +
                  // buttonTime1 +
                  // buttonTime2 +
                  // buttonEdit +
                  // buttonDelete +
                  '</div>' +
                  '</td>' +
                  '</tr>' +
                  subtask;

              } else if (new Date(result.data.timeDone[i][x]).getTime() > time) {

                tr += '<tr data-helper-task="1" class="trTodo" id="trTodo' + x + result.data.userId[i] + '">' +
                  '<td class="iconTodayTable" id="iconTodayTable">' + radio + '</td>' +
                  '<td class="descTodayTable" id="descTodayTable">' +
                  p +
                  '</td>' +
                  '<td class="tdAction coba' + x + '" data-id="1" id="tdAction">' +
                  '<div class="btn-group">' +
                  // buttonTime1 +
                  // buttonTime2 +
                  // buttonEdit +
                  // buttonDelete +
                  '</div>' +
                  '</td>' +
                  '</tr>' +
                  subtask;

              }

            }

            table += '<table class="table table-user">' +
              '<thead>' +
              '<tr>' +
              '<th colspan="3">' +
              result.data.name[i] +
              '</th>' +
              '</tr>' +
              '</thead>' +
              '<tbody class="target-body-user">' +
              tr +
              '</tbody>' +
              '</table>';

          }

          $('.all_format').html(table);

        }
      })

    }
  </script>

  <!-- end modal notification -->

  <!-- real time notification -->

  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('cbf86cc55935b2f14a34', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      $('.badgeNotification').html(1);

      get_notification();

    });
  </script>

  <!-- end real time notification -->