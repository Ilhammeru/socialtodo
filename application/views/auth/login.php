<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/solid.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/regular.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font/sf-font.css?1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">

    <script src="<?= base_url(); ?>/assets/jquery/dist/jquery.min.js"></script>

    <style media="screen">

    html {
      --black: #000;
      --white: #fff;
      --dim-gray: #5e5e5e;
      --suva-gray: #929292;
      --light-gray: #d5d5d5;
      --silver: #c2c2c2;
      --solitude: #f2f2f7;
      --white-lilac: #e0e0e5;
      --deep-sky-blue: #00a2ff;
      --misty-rose: #ffdbd8;
      --tomato: #ff644e;
      --sandybrown: #f4a460;
      --gold: #FFD700;
      --sfpd-regular: "SF Pro Display Regular";
      --sfpd-bold: "SF Pro Display Bold";
      --sfpd-semibold: "SF Pro Display Semibold";
      --sfpd-heavy: "SF Pro Display Heavy";
      --sfpd-medium: "SF Pro Display Medium";
      --sfpd-light: "SF Pro Display Light";
      --sfpd-ultralight: "SF Pro Display Ultra Light";
      --sfpd-thin: "SF Pro Display Thin";
      --fs-default: .750rem;
      --br-default: .750rem;
      font-family: var(--sfpd-regular) !important;
      caret-color: var(--deep-sky-blue);
    }

    body {
      height: 100%;
    }

    @media screen and (max-width: 1024px) {

      .columnImg {
        display: none;
      }

      .columnCard {
        background: #2d4d9b !important;
        width: 100%;
        height: 100vh;
      }

      .logo {
        margin-top: 10em !important;
        text-align: center;
      }

      .sllogo {
        width: 120;
        height: 120px
      }

      .sltext {
        /* Fallback: Set a background color. */
        background-color: #CA4246;

        /* Create the gradient. */
         background-image: linear-gradient(
              45deg,
              #CA4246 16.666%,
              #E16541 16.666%,
              #E16541 33.333%,
              #F18F43 33.333%,
              #F18F43 50%,
              #8B9862 50%,
              #8B9862 66.666%,
              #476098 66.666%,
              #476098 83.333%,
              #A7489B 83.333%);

        /* Set the background size and repeat properties. */
        background-size: 100%;
        background-repeat: repeat;

        /* Use the text as a mask for the background. */
        /* This will show the gradient as a text color rather than element bg. */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

        font-size: 6.3em;
        margin-left: 0.5em;
        text-transform: capitalize;
        font-family: var(--sfpd-medium);

      }

      .usernameForm {
        position: relative;
        width: 80%;
        height: 85px;
        background-color: #fff;
        border-radius: 0.8em !important;
        margin-top: 20em;
        margin-left: 10%;
        transition: ease .3s;
        /* border: 2px solid #f66f6f; */
      }

      .passwordForm {
        position: relative;
        width: 80%;
        height: 85px;
        background-color: #fff;
        border-radius: 0.8em !important;
        margin-top: 1em;
        margin-left: 10%;
        transition: ease .3s;
        /* border: 2px solid #f66f6f; */
      }

      .username,
      .password {
        border: none !important;
      	position: absolute !important;
      	top: 0;
      	left: 0;
      	width: 90% !important;
      	height: 70px !important;
      	display: block;
      	font-size: 1.9em !important;
      	padding: 0 50px !important;
      	margin-top: 0.15em !important;
        border-radius: 0.8em;
        font-family: var(--sfpd-light);
      }

      .username:focus,
      .password:focus {
        outline: none;
      }

      .userIcon {
        box-sizing: border-box;
      	padding: 5px;
      	width: 72.5px;
      	height: 72.5px;
      	position: absolute;
      	top: 20px;
      	right: -5px;
      	border-radius: 50%;
      	color: #07051a;
      	text-align: center;
      	font-size: 2em;
      	transition: all 1s;
      }

      .errorUsername,
      .errorPassword {
        color: #fff;
        font-size: 2em;
        font-family: var(--sfpd-ultralight);
        margin-left: 12%;
        height: 0;
        transition: ease .5s;
      }

      .loginButton {
        border-radius: 0.5em;
        background: #cf6262;
        outline: none;
        border: none;
        margin-top: 3em;
        width: 80%;
        margin-left: 10%;
        color: #fff;
        font-size: 1.9em;
        font-family: var(--sfpd-regular);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        padding: 0.8em 0;
      }

      .loginButton:hover {
        transform: scale(1.1);
        background: #ce5050;
      }

    }

    @media screen and (min-width: 1025px) {

      .columnImg {
        display: block;
        width: 60%;
        height: 100vh;
      }

      .columnCard {
        width: 40%;
        background: #2d4d9b;
        height: 100vh;
        padding: 2em;
      }

      #imgLogn {
        text-align: center;
      }

      .imgLogin {
        width: 800px;
        height: 600px;
        text-align: center;
      }

      .quotes {
        font-family: var(--sfpd-medium);
        font-size: 1.2em;
        color: #b9b1b1;
        margin-top: 0.7em;
        text-align: left;
        padding: 1em;
      }

      .logo {
        margin-top: 5em;
        text-align: center;
      }

      .sllogo {
        width: 80;
        height: 80px
      }

      .sltext {
        /* Fallback: Set a background color. */
        background-color: #CA4246;

        /* Create the gradient. */
         background-image: linear-gradient(
              45deg,
              #CA4246 16.666%,
              #E16541 16.666%,
              #E16541 33.333%,
              #F18F43 33.333%,
              #F18F43 50%,
              #8B9862 50%,
              #8B9862 66.666%,
              #476098 66.666%,
              #476098 83.333%,
              #A7489B 83.333%);

        /* Set the background size and repeat properties. */
        background-size: 100%;
        background-repeat: repeat;

        /* Use the text as a mask for the background. */
        /* This will show the gradient as a text color rather than element bg. */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

        font-size: 2.3em;
        margin-left: 0.5em;
        text-transform: capitalize;
        font-family: var(--sfpd-medium);

      }

      .usernameForm {
        position: relative;
        width: 50%;
        height: 25px;
        background-color: #fff;
        border-radius: 0.3em !important;
        margin-top: 7em;
        margin-left: 25%;
        transition: ease .3s;
        /* border: 2px solid #f66f6f; */
      }

      .passwordForm {
        position: relative;
        width: 50%;
        height: 25px;
        background-color: #fff;
        border-radius: 0.3em !important;
        margin-top: 0.1em;
        margin-left: 25%;
        transition: ease .3s;
        /* border: 2px solid #f66f6f; */
      }

      .username,
      .password {
        border: none !important;
      	position: absolute !important;
      	top: 0;
      	left: 0;
      	width: 90% !important;
      	height: 19px !important;
      	line-height: 20px !important;
      	display: block;
      	font-size: 0.9em !important;
      	padding: 0 20px !important;
      	margin-top: 0.15em !important;
        border-radius: 0.8em;
        font-family: var(--sfpd-light);
      }

      .username:focus,
      .password:focus {
        outline: none;
      }

      .userIcon {
        box-sizing: border-box;
      	padding: 5px;
      	width: 42.5px;
      	height: 42.5px;
      	position: absolute;
      	top: 0;
      	right: -10px;
      	border-radius: 50%;
      	color: #07051a;
      	text-align: center;
      	font-size: 1em;
      	transition: all 1s;
      }

      .seePassword {
        cursor: pointer;
      }

      .seePassword:hover {
        color: #0429e9
      }

      .errorUsername,
      .errorPassword {
        color: #fff;
        font-size: 0.7em;
        font-family: var(--sfpd-ultralight);
        margin-left: 26%;
        height: 0;
        transition: all .3s;
      }

      .loginButton {
        border-radius: 0.5em;
        background: #cf6262;
        outline: none;
        border: none;
        margin-top: 3em;
        width: 50%;
        margin-left: 25%;
        color: #fff;
        font-size: 0.9em;
        font-family: var(--sfpd-regular);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }

      .loginButton:hover {
        transform: scale(1.1);
        background: #ce5050;
      }

      .spinner-border {
        width: 20px;
        height: 20px;
      }

    }



    </style>

  </head>
  <body>

    <div class="row">

      <div class="columnImg">

        <div id="imgLogin">

          <img class="imgLogin" src="<?= base_url(); ?>/assets/images/login.jpg" alt="">
          <p class="quotes">
            “Good teams become great ones, when members trust each other enough to surrender the ‘me’ for the ‘we.’ – Phil Jackson
          </p>

        </div>

      </div>

      <div class="columnCard">

        <div class="logo">

          <img src="<?= base_url(); ?>/assets/images/sociallab.svg" class="sllogo" alt="">
          <span class="sltext">social lab</span>

        </div>

        <div class="usernameForm">

          <input type="text" class="username" name="username" value="" placeholder="Type username" autocomplete="off">
          <i class="fas fa-user userIcon"></i>

        </div>
        <span class="errorUsername"></span>

        <div class="passwordForm">

          <input type="password" class="password" name="password" value="" placeholder="Type password" autocomplete="off">
          <i class="fas fa-eye userIcon seePassword"></i>

        </div>
        <span class="errorPassword"></span>

        <div class="submitButton">

          <button type="button" class="loginButton">Login</button>

        </div>

      </div>

    </div>

    <script type="text/javascript">

    $(document).ready(function() {

      $('.seePassword').click(function(e) {

        e.preventDefault();

        var check = $('.password').attr('type');

        if(check == 'password') {

          $('.password').attr('type', 'text');

          $('.seePassword').css({
            "color": "#4da8e7"
          })

        } else {

          $('.password').attr('type', 'password');

          $('.seePassword').css({
            "color": "black"
          })

        }

      })

      $('.loginButton').click(function(e) {

        e.preventDefault();

        var username = $('.username').val();
        var password = $('.password').val();

        if(username == '') {

          error_form('Username cannot be null', 'errorUsername', 'username');

        } else if (username != '') {

          $('.errorUsername').text('');

          $('.errorUsername').css({
            "height": "0"
          })

          $('.passwordForm').css({
            "margin-top": "0.1em"
          })

          if (password == '') {

          error_form('Password cannot be null', 'errorPassword', 'password');

          } else if (password != '') {

            $('.errorPassword').text('');

            $.ajax({

              type: "POST",
              data: {
                username: username,
                password: password
              },
              url: '<?= site_url('auth/get_login'); ?>',
              dataType: 'json',
              beforeSend: function() {
                var spinner = '<div class="spinner-border text-light" role="status">' +
                              '<span class="visually-hidden">Loading...</span>' +
                              '</div>';

                $('.loginButton').html(spinner);
              },
              success: function(result) {

                $('.loginButton').html('Login');

                if (result.message == 'wrong username') {

                  error_form('Cannot find username in database', 'errorUsername', 'username');

                } else if (result.message == 'wrong password') {

                  error_form('Cannot find password in database', 'errorPassword', 'password');

                } else if (result.message == 'error') {

                  error_form('User is not registered', 'errorPassword', 'password');

                } else {

                  var spinner = '<div class="spinner-border text-light" role="status">' +
                                '<span class="visually-hidden">Loading...</span>' +
                                '</div>';

                  $('.loginButton').html(spinner + '  Redirecting ...');

                  setTimeout(function() {

                    var url = "<?= site_url('homepage'); ?>";
                    location.href = url;

                  }, 1500)

                }

              }

            })

          }

        }

      })

    })

    function error_form(text, target, param) {

      if(param == 'username') {

        //manipulate error username and password form
        $('.' + target).text(text);

        $('.' + target).css({
          "height": "2em"
        })

        $('.passwordForm').css({
          "margin-top": "2em"
        })

      } else {

        $('.' + target).text(text);

        $('.' + target).css({
          "height": "1em !important"
        })

      }

    }

    </script>




  <script src="<?= base_url(); ?>/assets/bootstrap-5.0.0/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="<?= base_url(); ?>/assets/fontawesome/js/fontawesome.min.js" charset="utf-8"></script>
  </body>
</html>
