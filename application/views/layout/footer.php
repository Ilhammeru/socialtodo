</div>

<!-- modal notification -->

<div class="modal fade" id="modalNotification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog  modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-body">

        <div class="iconInfo swirl-in-fwd">

          <img src="<?= base_url(); ?>/assets/images/questionNotif.svg" width="30" height="30" alt="">

        </div>

        <div id="targetDescNotif">

          <span class="targetDescNotif"></span>

        </div>

        <div class="footerNotif">

          <div class="cancelNotif">

            <button type="button" class="cancelButtonSlModal" name="button">cancel</button>

          </div>

          <div class="confirmNotif">

            <button type="button" class="confrimButtonSlModal" name="button">ok</button>

          </div>

        </div>

        <div class="footerNotif1">

          <div class="confirmFull">

            <button type="button" class="confrimButtonSlModal" name="button">ok</button>

          </div>

          <div class="cancelFull">

            <button type="button" class="cancelButtonSlModal" name="button">cancel</button>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>



<script type="text/javascript">


  $('.userTab').click(function(e) {
    e.preventDefault();

    var collapseElementList = [].slice.call(document.querySelectorAll('.collapseUser'))
    var collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl)
    })

    $('.todayTab').removeClass('activeItem');
    $('.upcomingTab').removeClass('activeItem');

    $(this).addClass('activeItem');

    get_template_user();
    get_user_list();

    $('.modal').modal('hide');
  })

  $('.todayTab').click(function(e) {
    e.preventDefault();

    var collapseElementList = [].slice.call(document.querySelectorAll('.collapseTask'))
    var collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl)
    })

    $('.collapseUser').collapse('hide');

    $('.userTab').removeClass('activeItem');
    $('.upcomingTab').removeClass('activeItem');

    $(this).addClass('activeItem');

    get_user_task();

    $('.main').show();
    $('.userManagement').hide();
  })

  function get_template_user() {

    $('.main').hide();
    $('.userManagement').show();

  }

  function add_user() {

    $('.modalAddUser').modal('show');

    get_user();

  }

  function get_user() {

    $.ajax({
      type: 'post',
      url: '<?= base_url('user/get_user'); ?>',
      dataType: 'json',
      success: function(result) {

        var option = '';

        for(var i = 0; i < result.length; i++) {

          option += '<option value="'+ result[i].id +'">' + result[i].name + '</option>';

        }

        $('.addUserList').html(option);

      }
    })

  }

  function save_user() {

    var user = $('.addUserList').val();

    $.ajax({
      type: 'post',
      data: {
        user: user
      },
      url: '<?= base_url('user/save_user'); ?>',
      dataType: 'json',
      success: function(result) {

        if (result.message == 'success') {

          $('.modalAddUser').modal('hide');
          get_user_list();

        }

      }
    })

  }

  function get_user_task() {

    $.ajax({
      type: 'post',
      url: '<?= base_url('task/get_user_task'); ?>',
      dataType: 'json',
      success: function(result) {

        var list = '';

        if (result.name != 0) {

          for(var i = 0; i < result.name.length; i++) {

            if (result.selfId == result.userId[i]) {

              list += '';

            } else {

              list += '<li onclick="detail_user_task('+ result.userId[i] +')" class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="add_user()"> <img src="<?= base_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin-right: 0.9em;" alt="">'+ result.name[i] +'</li>';

            }

          }

          var key = "'all'";

          var selfList = '<li onclick="detail_user_task('+ result.selfId +')" class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="add_user()"> <img src="<?= base_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin-right: 0.9em;" alt="">You</li>';
          var allList = '<li onclick="detail_user_task('+ key +')" class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="add_user()"> <img src="<?= base_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin-right: 0.9em;" alt="">All</li>';

          $('.targetCollapseButtonUser').html(list);
          $('.self').html(selfList);
          $('.all').html(allList);

        }

      }
    })

  }

  function detail_user_task(userId) {

    if (userId == 'all') {

      get_all_task();
      
    } else {

      get_task(userId);


    }


  }

</script>

<script src="<?= base_url(); ?>/assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js" charset="utf-8"></script>
<script src="<?= base_url(); ?>/assets/bootstrap-5.0.0/js/bootstrap.min.js" charset="utf-8"></script>
<script src="<?= base_url(); ?>/assets/fontawesome-5/js/fontawesome.min.js" charset="utf-8"></script>


</body>
</html>
