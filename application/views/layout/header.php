<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">

  <title><?= $title; ?></title>

  <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap-5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/solid.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-5/css/regular.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/font/sf-font.css">


  <script src="<?= base_url(); ?>/assets/jquery/dist/jquery.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script> -->
  <script src="<?= base_url(); ?>/assets/anime-master/lib/anime.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/slmodal-1.js"></script>



  <style media="screen">
    /* keyframe */

    /* slide out */
    @-webkit-keyframes slide-out-elliptic-top-bck {
      0% {
        -webkit-transform: translateY(0) rotateX(0) scale(1);
        transform: translateY(0) rotateX(0) scale(1);
        -webkit-transform-origin: 50% 1400px;
        transform-origin: 50% 1400px;
        opacity: 1;
      }

      100% {
        -webkit-transform: translateY(-600px) rotateX(-30deg) scale(0);
        transform: translateY(-600px) rotateX(-30deg) scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        opacity: 1;
      }
    }

    @keyframes slide-out-elliptic-top-bck {
      0% {
        -webkit-transform: translateY(0) rotateX(0) scale(1);
        transform: translateY(0) rotateX(0) scale(1);
        -webkit-transform-origin: 50% 1400px;
        transform-origin: 50% 1400px;
        opacity: 1;
      }

      100% {
        -webkit-transform: translateY(-600px) rotateX(-30deg) scale(0);
        transform: translateY(-600px) rotateX(-30deg) scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        opacity: 1;
      }
    }


    /* roll in */
    @-webkit-keyframes roll-in-left {
      0% {
        -webkit-transform: translateX(-800px) rotate(-540deg);
        transform: translateX(-800px) rotate(-540deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0) rotate(0deg);
        transform: translateX(0) rotate(0deg);
        opacity: 1;
      }
    }

    @keyframes roll-in-left {
      0% {
        -webkit-transform: translateX(-800px) rotate(-540deg);
        transform: translateX(-800px) rotate(-540deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0) rotate(0deg);
        transform: translateX(0) rotate(0deg);
        opacity: 1;
      }
    }

    @-webkit-keyframes swirl-in-fwd {
      0% {
        -webkit-transform: rotate(-540deg) scale(0);
        transform: rotate(-540deg) scale(0);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotate(0) scale(1);
        transform: rotate(0) scale(1);
        opacity: 1;
      }
    }

    @keyframes swirl-in-fwd {
      0% {
        -webkit-transform: rotate(-540deg) scale(0);
        transform: rotate(-540deg) scale(0);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotate(0) scale(1);
        transform: rotate(0) scale(1);
        opacity: 1;
      }
    }

    /* ----------------------------------------------
 * ----------------------------------------
 * animation slide-out-right
 * ----------------------------------------
 */
    @-webkit-keyframes slide-out-right {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0;
      }
    }

    @keyframes slide-out-right {
      0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0;
      }
    }

    /* ----------------------------------------------
    /**
 * ----------------------------------------
 * animation scale-in-center
 * ----------------------------------------
 */
    @-webkit-keyframes scale-in-center {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes scale-in-center {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    /**
 * ----------------------------------------
 * animation slide-in-bottom
 * ----------------------------------------
 */
    @-webkit-keyframes slide-in-bottom {
      0% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes slide-in-bottom {
      0% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }
    }

    /**
 * ----------------------------------------
 * animation slide-out-bottom
 * ----------------------------------------
 */
    @-webkit-keyframes slide-out-bottom {
      0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0;
      }
    }

    @keyframes slide-out-bottom {
      0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }

      100% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0;
      }
    }

    /**
 * ----------------------------------------
 * animation slide-in-right
 * ----------------------------------------
 */
    @-webkit-keyframes slide-in-right {
      0% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slide-in-right {
      0% {
        -webkit-transform: translateX(1000px);
        transform: translateX(1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }

    /**
 * ----------------------------------------
 * animation slide-in-left
 * ----------------------------------------
 */
    @-webkit-keyframes slide-in-left {
      0% {
        -webkit-transform: translateX(-1000px);
        transform: translateX(-1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slide-in-left {
      0% {
        -webkit-transform: translateX(-1000px);
        transform: translateX(-1000px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }




    /* end keyframe */

    /* slmodal style */

    .swirl-in-fwd {
      -webkit-animation: swirl-in-fwd 0.6s ease-out both;
      animation: swirl-in-fwd 0.6s ease-out both;
    }

    #modalNotification>.modal-dialog>.modal-content {
      background: #fff;
      border-radius: 1rem;
    }

    #modalNotification>.modal-dialog>.modal-content>.modal-body {
      padding: 1em 0 0 0;
    }

    .iconInfo {
      text-align: center;
    }

    #targetDescNotif {
      text-align: center;
      margin-top: 1rem;
      font-family: var(--sfpd-regular);
    }

    .footerNotif {
      width: 100%;
      display: flex;
      margin-top: 2em;
      border-top: 1px solid var(--suva-gray);
      padding: 0 1em;
      display: none;
    }

    .footerNotif1 {
      width: 100%;
      display: flex;
      margin-top: 2em;
      border-top: 1px solid var(--suva-gray);
      padding: 0 1em;
      text-align: center;
      display: none;
    }

    .confirmFull,
    .cancelFull {
      width: 100%;
      text-align: center;
      padding: 1em;
    }

    .confirmNotif {
      width: 50%;
      text-align: center;
      border-left: 1px solid var(--suva-gray);
      padding: 1em;
    }

    .cancelNotif {
      width: 50%;
      text-align: center;
      padding: 1em;
    }

    .confrimButtonSlModal {
      color: #0b72f0;
      text-transform: uppercase;
      text-align: center;
      background: transparent;
      border: none;
      font-family: var(--sfpd-heavy) !important;
      font-size: 0.9em;
    }

    .cancelButtonSlModal {
      text-transform: uppercase;
      text-align: center;
      color: #f00b41;
      background: transparent;
      border: none;
      font-family: var(--sfpd-heavy) !important;
      font-size: 0.9em;
    }

    /* end slmodal style */

    body,
    html {
      height: 100%;
      background: #1f1f1f;

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

    .slide-out-right {
      -webkit-animation: slide-out-right 0.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
      animation: slide-out-right 0.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    .slide-in-right {
      -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .scale-in-center {
      -webkit-animation: scale-in-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: scale-in-center 0.3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-in-left {
      -webkit-animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-in-left-4 {
      -webkit-animation: slide-in-left 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-left 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-in-left-3 {
      -webkit-animation: slide-in-left 0.3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-left 0.3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-out-elliptic-top-bck {
      -webkit-animation: slide-out-elliptic-top-bck 0.7s ease-in both;
      animation: slide-out-elliptic-top-bck 0.7s ease-in both;
    }

    .roll-in-left {
      -webkit-animation: roll-in-left 0.6s ease-out both;
      animation: roll-in-left 0.6s ease-out both;
    }

    .slide-in-bottom {
      -webkit-animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
      animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-out-bottom {
      -webkit-animation: slide-out-bottom 0.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
      animation: slide-out-bottom 0.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    .colSidenav {
      height: 100vh;
      background: #282828;
    }

    .sideNav {
      margin-top: 3.3em;
    }

    .sideNav>.list-group>.list-group-item {
      background: transparent;
      color: #fff;
      border: none;
      margin: 0.5em 0;
      align-items: center;
      cursor: pointer;
    }

    .mainTab {
      padding: 0;
    }

    .header {
      padding: 0.5em 0.9em;
      background: #282828;
      width: 100%;
      border-bottom: 1px solid black;
    }

    .userAvatar {
      border-radius: 50%;
      background: #4fff3d;
    }

    .main {
      padding: 2em 2.4em;
      transition: ease .5s;
      left: 0;
      position: relative;
    }

    .todayTitle {
      margin: 1em 0.8em;
    }

    .spanTodayTitle {
      color: #fff;
      font-family: var(--sfpd-regular);
      font-size: 1.2em;
      text-transform: uppercase;
    }

    .spanDate {
      color: var(--suva-gray);
      font-family: var(--sfpd-light);
      font-size: 0.8em;
    }

    .todayTable {
      margin-top: 3em;
    }

    .taskDoneTable {
      margin-top: 3em;
      /* display: none; */
    }

    .targetOwnerTask {
      text-transform: capitalize;
      color: #fff;
      font-size: 0.9em;
      font-family: var(--sfpd-regular);
    }

    .iconTodayTable {
      width: 2em;
      border-top: 1px solid #4d4c4c !important;
      border-bottom: none;
      border: none;
      vertical-align: middle;
      align-items: center;
      line-height: 2.5em;
      padding-bottom: 0;
      line-height: 1.5;
      margin-top: 0.15em;
    }

    td.descTodayTable {
      max-width: 10em;
      width: auto;
      color: #fff;
      font-family: var(--sfpd-thin);
      border-bottom: none;
      border-top: 1px solid #4d4c4c !important;
      vertical-align: middle;
      align-items: center;
      cursor: pointer;
      padding-bottom: 0;
      line-height: 1.5;
      margin-top: 0.15em;
    }

    td.descSubtask {
      max-width: 10em;
      width: auto;
      color: #fff;
      font-family: var(--sfpd-thin);
      border-bottom: 1px solid #4d4c4c !important;
      vertical-align: middle;
      align-items: center;
      cursor: pointer;
      padding-bottom: 0;
    }

    td.descSubtask>p {
      max-width: 20em;
      overflow: scroll;
    }

    td.descTodayTable>p {
      max-width: 20em;
      width: 20em;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
    }

    td.tdAction {
      width: 2em;
      color: #fff;
      font-family: var(--sfpd-thin);
      border-top: 1px solid #4d4c4c !important;
      border: none;
      vertical-align: middle;
      align-items: center;
      cursor: pointer;
      padding-bottom: 0;
      line-height: 1.5;
      margin-top: 0.15em;
    }

    .table.table-user>:not(caption)>*>* {
      padding: .3em .5em;
      background-color: var(--bs-table-bg);
      border-bottom-width: 1px;
      box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .btn:focus {
      box-shadow: none !important;
    }

    .rtr {
      transform: rotate(5deg) !important;
    }

    .customBadge {
      height: 8px;
      width: 8px;
      background: red;
      border-radius: 50%;
      color: red;
      display: inline-flex;
      margin: 0;
      margin-right: 0.3em;
    }

    .titleProject {
      color: #fff;
      font-family: var(--sfpd-light);
      font-size: 0.9em;
    }

    .counter {
      color: var(--suva-gray);
      font-size: 0.8em;
    }

    .masterProject {
      margin-bottom: 0.8em;
    }

    .masterCounter {
      margin-bottom: 0.8em;
    }

    .activeItem {
      background: #363636 !important;
    }

    .taskForm {
      width: 100%;
      background: #262525;
      height: 5em;
      border-radius: 0.8em;
      border: 1px solid #b4b2b2;
      padding: 0.8em;
      display: none;
    }

    .subtaskForm {
      width: 100%;
      background: #262525;
      height: 5em;
      border-radius: 0.8em;
      border: 1px solid #b4b2b2;
      padding: 0.8em;
      display: none;
    }

    .quickForm {
      width: 100%;
      background: #262525;
      height: 5em;
      border-radius: 0.8em;
      border: 1px solid #b4b2b2;
      padding: 0.8em;
    }

    .taskForm>input,
    .subtaskForm>input,
    .quickForm>input {
      width: 100%;
      background: transparent;
      border: none;
      color: var(--suva-gray);
    }

    .taskForm>input:focus,
    .subtaskForm>input:focus,
    .quickForm>input:focus {
      outline: none;
    }

    .subtaskForm>input::placeholder {
      font-size: 0.9em;
      font-family: var(--sfpd-light);
      color: var(--dim-gray);
    }

    .subTask {
      cursor: pointer;
    }

    .subTask>span:hover,
    .subTask>img:hover {
      color: #fff !important;
    }

    .buttonTaskForm,
    .buttonSubtask {
      cursor: pointer;
    }

    .spanAddFormModal {
      margin-left: 0.7em;
      color: var(--suva-gray);
      font-family: var(--sfpd-light);
    }

    .spanAddFormModal:hover {
      color: #fff;
    }

    .buttonGroupAdd,
    .buttonGroupAddSubtask {
      margin-top: 0.5em;
      display: none;
    }

    .doAddTask,
    .doAddSubtask,
    .doAddSubtaskk,
    .editTaskButton,
    .doSaveComment {
      background: #532e2d;
      border: none;
      outline: none;
      border-radius: 0.3em;
      margin-right: 0.5em;
      font-family: var(--sfpd-ligth);
      color: #615f5f;
    }

    .activeForButton {
      background: #cf5650 !important;
      color: #fff !important;
    }

    .background {
      text-align: center;
      display: none;
    }

    .headerDetail {
      border: none;
    }

    .contentDetail,
    .contentDetailSub {
      background: #282828;
      border-radius: 0.8em;
      max-height: 30em;
      height: 50em;
    }

    .targetTitleDetail,
    .targetTitleSubtask {
      color: var(--silver);
      font-family: var(--sfpd-regular);
      font-size: 1em;
      text-transform: capitalize;
      margin-left: 0.5em;
    }

    .parentTabsDetail {
      text-align: center;
      margin-top: 3em;
      padding: 0 3.5em;
    }

    .parentTabsDetail div {
      border-bottom: 1px solid var(--dim-gray);
    }

    .activeTab {
      border-bottom: 1px solid var(--silver) !important;
    }

    .activeTab>span {
      color: #fff !important;
    }

    .parentTabsDetail div span {
      color: var(--dim-gray);
      font-family: var(--sfpd-light);
      font-size: 0.9em;
    }

    .flexibleDetail {
      padding: 0.5em 3em;
      margin-top: 6em;
    }

    .targetSubtask,
    .targetDeepSubtask {
      padding: 0.8em 1.8em;
    }

    .tdEllipsis {
      width: 2em;
      border-color: #4d4c4c;
      cursor: pointer;
    }

    .popoverTask>li {
      background: #4c4c4c;
      border: none;
      color: #fff;
      cursor: pointer;
    }

    li.deleteTask {
      border-bottom: 1px solid var(--suva-gray) !important;
    }

    li.buttonDeadlineTask {
      display: flex;
      justify-content: space-around;
    }

    .popoverTask>li:hover {
      color: var(--silver);
    }

    .btnPopover {
      margin: 0 1em !important;
    }

    .fa-calendar-check,
    .fa-calendar-day {
      color: #5AE60E;
      font-size: 1.2em;
    }

    .fa-sun {
      color: #FDCD1F;
      font-size: 1.2em;
    }

    .fa-edit,
    .fa-trash {
      color: var(--suva-gray);
      font-size: 1.2em;
    }

    .fa-couch {
      color: #22C4F5;
      font-size: 1.2em;
    }

    .fa-calendar-week {
      color: #AB22F5;
      font-size: 1.2em;
    }

    .fa-calendar-times {
      color: var(--tomato);
      font-size: 1.2em;
    }

    .noDate {
      display: none;
    }

    .far.fa-calendar.today {
      color: #5AE60E;
      margin-right: 0.5em;
    }

    .far.fa-calendar.tomorrow {
      color: #FDCD1F;
      margin-right: 0.5em;
    }

    .far.fa-calendar.week {
      color: #AB22F5;
      margin-right: 0.5em;
    }

    .far.fa-calendar.overdue {
      color: #ff0303;
      margin-right: 0.5em;
    }

    .todaySubtask {
      color: #5AE60E;
      margin: 0;
      font-size: 0.8em;
      font-family: var(--sfpd-regular);
    }

    .tomorrowSubtask {
      color: #FDCD1F;
      margin: 0;
      font-size: 0.8em;
      font-family: var(--sfpd-regular);
    }

    .weekSubtask {
      color: #AB22F5;
      margin: 0;
      font-size: 0.8em;
      font-family: var(--sfpd-regular);
    }

    .overdueSubtask {
      color: #ff0303;
      margin: 0;
      font-size: 0.8em;
      font-family: var(--sfpd-regular);
    }



    .todayPopover,
    .todayPopoverr,
    .tomorrowPopover,
    .weekendPopover,
    .weekPopover,
    .clearDatePopover {
      padding: 0;
      margin: 0;
      font-size: 0.8em;
      font-family: var(--sfpd-light);
    }

    .todayPopover,
    .todayPopoverr {
      color: #5AE60E;
    }

    .tomorrowPopover {
      color: #FDCD1F;
    }

    .weekendPopover {
      color: #22C4F5;
    }

    .weekPopover {
      color: #AB22F5;
    }

    .clearDatePopover {
      color: var(--suva-gray);
    }

    .toast {
      background: #282828;
      box-shadow: 4px 7px 26px 7px rgba(0, 0, 0, 0.75);
      -webkit-box-shadow: 4px 7px 26px 7px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 4px 7px 26px 7px rgba(0, 0, 0, 0.75);
      color: #fff;
      z-index: 10001;
    }

    .toast-header {
      background: #282828;
    }

    .toast-header>span {
      font-family: var(--sfpd-bold);
      text-transform: capitalize;
      font-size: 1.2em;
    }

    .addedTime {
      border-bottom: 1px solid var(--dim-gray);
      padding: 0 0 0.8em 0;
    }

    .spanAddedTime {
      color: #fff;
      font-family: var(--sfpd-medium);
      text-transform: capitalize;
      font-size: 0.9em;
    }

    .detailActivity {
      margin-top: 0.8em;
    }

    .detailActivity>.table-responsive>table>tbody>tr {
      border-bottom: 1px solid var(--dim-gray);
      padding: 0.3em 0;
    }

    .icon {
      height: 2.3em;
      width: 2.4em;
      background: green;
      border-radius: 50%;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    .icon>span {
      text-transform: capitalize;
      color: #fff;
      font-size: 1.4em;
      margin-left: 0.1em;
    }

    .chatColomn,
    .chatColomnSubtask {
      height: 25em;
      max-height: 25em;
      overflow: scroll;
      width: 100%;
      cursor: pointer;
    }

    .typeComments {
      height: 7em;
      width: 100%;
      border: 0.5px solid var(--suva-gray);
      padding: 0.4em;
      border-radius: 0.8em;
    }

    .typeComments>textarea {
      width: 100%;
      background: transparent;
      height: 4em;
      border: none;
      box-shadow: none;
      border-bottom: 1px solid var(--suva-gray);
      padding: 0.4em 0.5em;
      color: #fff;
    }

    .typeComments>textarea:focus {
      outline: none;
    }

    .actionComments {
      vertical-align: middle;
      text-align: right;
    }

    .actionComments>button {
      background: var(--tomato) !important;
      border-radius: 0.5em;
      border: none;
      padding: 0.4em;
      color: #fff;
      font-size: 0.8em;
      width: auto;
    }

    .tdIcon {
      background: green;
      text-align: center;
      border-radius: 50%;
      height: 1.5em;
      width: 1.5em;
      margin-right: 0.7em;
    }

    .senderComment {
      padding: 0;
      color: var(--silver);
      font-family: var(--sfpd-medium);
      font-size: 1.1em;
    }

    .timeComment {
      color: var(--suva-gray);
      font-family: var(--sfpd-light);
      font-size: 0.8em;
      margin-left: 0.5em;
    }

    .messageComment {
      padding: 0;
      margin-bottom: 0 !important;
      color: var(--silver);
      font-family: var(--sfpd-regular);
      font-size: 0.9em;
    }

    .far.fa-comment {
      color: var(--suva-gray);
      margin-right: 0.2em;
    }

    .userManagement {
      display: none;
      margin-top: 1em;
      padding: 0.2em 4em;
      position: relative;
      transition: ease .5s;
      left: 0;
    }

    .fa-dot-circle {
      color: var(--dim-gray);
    }

    .fas.fa-power-off {
      color: red;
      font-size: 0.9em;
    }

    .fas.fa-trash.userTrash {
      color: var(--dim-gray);
      font-size: 0.9em;
    }

    .userName {
      color: #fff;
      font-size: 0.9em;
      margin-bottom: 0;
      font-family: var(--sfpd-regular);
    }

    .userActivity {
      color: var(--dim-gray);
      font-size: 0.7em;
      font-family: var(--sfpd-light);
    }

    .statusUser {
      color: #fff;
      font-size: 0.9em;
      font-family: var(--sfpd-regular);
      margin-bottom: 0;
    }

    .addUserContent {
      background: #282828;
      border-radius: 0.8em;
    }

    .addUserContent>.modal-header {
      border: none;
      color: #fff;
      font-family: var(--sfpd-regular);
      font-size: 0.9em;
    }

    .addUserList {
      background: transparent;
      box-shadow: none;
      border: none;
      border-bottom: 1px solid black;
      color: #fff;
      font-size: 0.8em;
      font-family: var(--sfpd-light);
      margin-top: 0.8em;
    }

    .addUserList:focus {
      background: transparent;
      outline: none;
      color: #fff;
      box-shadow: none;
      border: none;
      border-bottom: 1px solid black;
    }

    .addUserList>option {
      color: #fff;
    }

    .saveUser {
      width: 100%;
      color: #fff;
      font-family: var(--sfpd-bold);
      background: #ffc38d;
      padding: 0.2em 0.4em;
      margin-top: 1.5em;
    }

    .userShow {
      display: flex;
    }

    .far.fa-clock {
      font-size: 0.9em;
      color: var(--dim-gray);
      margin-right: 0.9em;
      vertical-align: middle;
    }

    .badgeNotification {
      background: var(--tomato);
      color: var(--tomato);
      padding: 0;
      width: 12px;
      border-radius: 50%;
    }

    .offcanvas {
      visibility: hidden;
    }

    /* media for fixed elements */

    /* @media (max-width: 991.98px) { */
    .offcanvas.offcanvas-start {
      position: fixed;
      top: 60px;
      /* Height of navbar */
      bottom: 0;
      right: 100%;
      width: 25%;
      padding-right: 1rem;
      padding-left: 1rem;
      overflow-y: auto;
      visibility: hidden;
      background-color: #282828;
      transition: transform 0.3s ease-in-out, visibility 0.3s ease-in-out;
      z-index: 1001;
    }

    .offcanvas.offcanvas-start.open {
      visibility: visible;
      transform: translateX(100%);
    }

    #modalLoading {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1050;
      display: none;
      width: 100%;
      height: 100%;
      overflow: hidden;
      outline: 0;
    }

    .table.table-user {
      margin-bottom: 3em;
    }

    .table.table-user>thead {
      color: black;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      background: #fff;
    }

    @media screen and (min-width: 576px) and (max-width: 769px) {

      .headerDetailSubtask {
        position: fixed;
        width: 50%;
        text-align: center;
      }

    }

    @media screen and (min-width: 769px) and (max-width: 1200px) {

      .headerDetailSubtask {
        position: fixed;
        width: 50%;
        text-align: center;
      }

    }

    /* media for fixed elements */


    /* mobile css */

    .mobile-body {
      background: #e3ebfa;
      height: 100vh;
      padding: 0;
      overflow: hidden;
    }

    .mobile-row-header {
      background: #fff;
      padding: 1em 1em;
      margin: 0;
      height: 27%;
      border-bottom-left-radius: 5em;
      border-bottom-right-radius: 5em;
    }

    .mobile-row-title {
      padding: 0 2em;
      margin-top: 2em;
    }

    .mobile-floating-add {
      background: #1e67fa;
      padding: 2em;
      display: flex;
      justify-content: center;
      border-top-left-radius: 8em;
      border-top-right-radius: 8em;
      border-bottom-left-radius: 8em;
      width: 75%;
    }

    .mobile-floating-add-icon {
      font-size: 2.5em;
      color: #fff;
    }

    .mobile-col-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .mobile-title-header>p {
      font-size: 5.5em;
      text-transform: capitalize;
      font-family: var(--sfpd-bold);
      letter-spacing: 15px;
    }

    .view-list {
      letter-spacing: 1em;
      background: #e6e6e6;
      padding: 0.5em 1em;
      border-radius: 14px;
    }

    .mobile-row-header-tab {
      padding: 1em 2em;
      margin-top: 3em;
    }

    .header-tab {
      display: flex;
      justify-content: space-between;
    }

    .header-all-task>p,
    .header-teams>p,
    .header-personal>p {
      font-size: 3em;
      text-transform: capitalize;
      font-family: var(--sfpd-medium);
      margin-bottom: -1em;
    }

    .active-header-tab {
      color: #588ffc !important;
    }

    .active-dot-tab {
      color: #588ffc !important;
      text-align: center;
    }

    .mobile-row-all-task {
      margin-top: 4em;
      padding: 0.5em 4em;
      align-items: center;
    }

    .mobile-row-user {
      align-items: center;
    }

    .span-user-icon {
      border-radius: 50%;
      background: green;
      text-align: center;
    }

    .span-user-icon {
      max-width: 80% !important;
    }

    .mobile-user-name>p {
      margin-bottom: 0;
      font-family: var(--sfpd-regular);
      font-size: 3em;
      color: #353536;
      text-transform: capitalize;
    }

    .mobile-user-all-task {
      margin-top: 2em;
      background: #fff;
      padding: 2em;
      border-radius: 25px;
    }

    .all-p {
      max-width: 35em;
    }

    .p-all-task {
      font-size: 2.5em;
      text-transform: capitalize;
      font-family: var(--sfpd-regular);
      margin-bottom: 0;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }

    .all-sub {
      display: flex;
      justify-content: space-between;
    }

    .p-all-comments {
      font-size: 1.5em;
      color: #4e4f4f;
    }

    /* end mobile css */
  </style>

</head>

<body>

  <div class="row">

    <!-- <div class="col-lg-3 col-md-3 colSidenav">

      <div class="sideNav">

        <ul class="list-group">

          <li class="list-group-item userTab" data-bs-toggle="collapse" href="#collapseUser" role="button" aria-expanded="false" aria-controls="collapseUser"><img src="<?= base_url(); ?>/assets/images/usermanagement.png" width="20" height="20" alt=""><span style="margin-left: 0.8em;">User</span></li>

          <div class="collapse collapseUser" id="collapseUser">
            <ul class="list-group">
              <li class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;" onclick="addUser()"> <img src="<?= base_url(); ?>/assets/images/adduser.png" width="20" height="20" style="margin=left: 0.9em;" alt=""> Add User</li>
              <li class="list-group-item" style="background: #282828 !important; color: var(--suva-gray); cursor: pointer; border: none;"> <img src="<?= base_url(); ?>/assets/images/usergroup.png" width="20" height="20" style="margin=left: 0.9em;" alt=""> Manage User</li>
            </ul>
          </div>

          <li class="list-group-item todayTab activeItem" data-bs-toggle="collapse" href="#collapseTodayTask" role="button" aria-expanded="false" aria-controls="collapseTodayTask"><img src="<?= base_url(); ?>/assets/images/todaycalendar.png" width="20" height="20" alt=""><span style="margin-left: 0.8em;">Today</span></li>

          <div class="collapse collapseTask" id="collapseExample">
            <ul class="list-group">
              <div class="self">

              </div>
              <div class="targetCollapseButtonUser">

              </div>
            </ul>
          </div>

          <li class="list-group-item upcomingTab"><img src="<?= base_url(); ?>/assets/images/upcomingcalendar.png" width="20" height="20" alt=""> <span style="margin-left: 0.8em;">Upcoming</span></li>

        </ul>

      </div>

    </div> -->

    <!-- modal add user -->

    <div class="modal modalAddUser fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content addUserContent">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="" style="color: #fff; font-family: var(--sfpd-light); font-size: 0.9em;">Choose User</label>
              <select class="form-control addUserList" name="addUserList">
              </select>
            </div>
            <div class="form-group">
              <button type="button" class="btn saveUser" onclick="save_user()" name="saveUser">Save User</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end modal add user -->