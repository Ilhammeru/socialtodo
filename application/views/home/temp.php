<!-- notif and chat coloumn -->

<!-- <div class="titleNotif">

  <div class="">

    <span class="textNotif">Notification</span>

  </div>

  <div class="">

    <span class="viewAllNotif">View All</span>

  </div>

</div>

<div class="notification">

  <span class="forwardNotif"><img class="" src="<?= base_url(); ?>/assets/images/next.svg" width="20" height="20" alt="" /></span>
  <span class="messageNotif">Rifan just signed your task</span> <br>
  <span class="timeNotif">18 March 2021 - 10:00 AM</span>

  <p class="buttonView">View</p>

</div>

<div class="titleChat">

  <div class="">

    <span class="textChat">Team Chat</span>
    <span class="imgPeople">
      <img class="member1" src="<?= base_url(); ?>/assets/images/businessman.png" width="35" height="35" alt="">
      <img class="member2" src="<?= base_url(); ?>/assets/images/nerdman.png" width="35" height="35" alt="">
      <img class="member3" src="<?= base_url(); ?>/assets/images/religious.png" width="35" height="35" alt="">
    </span>

  </div>

  <div class="">

    <div class="buttonInvite">

      <span>Invite People</span>

    </div>

  </div>

</div>

<div class="chatBox">

  <div class="viewer">

    <div class="bubleImg">

      <img class="member1" src="<?= base_url(); ?>/assets/images/businessman.png" width="35" height="35" alt="">

    </div>

    <div class="bubleChatViewer">

      <span class="message">Hey, how was going? any problem?</span>

    </div>

  </div>

  <div class="sender">

    <div class="bubleChatSender">

      <span class="message">Everything was going so well. I'm working on the homepage right now</span>

    </div>

    <div class="bubleImg">

      <img class="member1" src="<?= base_url(); ?>/assets/images/nerdman.png" width="35" height="35" alt="">

    </div>

  </div>

  <div class="viewer">

    <div class="bubleImg">

      <img class="member1" src="<?= base_url(); ?>/assets/images/religious.png" width="35" height="35" alt="">

    </div>

    <div class="bubleChatViewer">

      <span class="message">If anything goes wrong, give me a call</span>

    </div>

  </div>

  <div class="typeBox">

    <input type="text" class="fieldChat" name="" placeholder="Type message here">
    <img class="sendIcon" src="<?= base_url(); ?>/assets/images/send.svg" alt="">

  </div>

</div> -->

<!-- notif and chat coloumn -->

css

/* .notification {
  background: #524598;
  border-radius: 1.4em;
  padding: 1.2em;
}

.titleNotif {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1em;
}

.textNotif {
  font-family: var(--sfpd-bold);
  font-size: 1.1em;
}

.viewAllNotif {
  font-size: 0.7em;
  color: #fadbaf;
  margin-right: 0.5em;
}

.forwardNotif {
  padding: 0.5em;
  background: #faf9fc;
  border-radius: 0.4em;
  opacity: 0.5;
}

.messageNotif {
  color: #fff;
  font-family: var(--sfpd-medium);
  text-transform: capitalize;
  font-size: 1.2em;
  margin-left: 1em;
  text-align: left;
}

.timeNotif {
  color: #dad9dc;
  font-family: var(--sfpd-light);
  text-transform: capitalize;
  font-size: 0.8em;
  margin-left: 4.7em;
  text-align: left;
}

.buttonView {
  padding: 0.2em;
  background: #f7cb8d;
  text-align: center;
  margin-left: 4em;
  width: 5em;
  border-radius: 0.7em;
  margin-top: 0.4em;
}

.titleChat {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1em;
  margin-top: 1.7em;
  vertical-align: middle;
}

.textChat {
  margin-right: 0.8em;
  font-family: var(--sfpd-bold);
  font-size: 1.1em;
}

.member1 {
  background: grey;
  border-radius: 50%;
  z-index: 14 !important;
}

.member2 {
  background: #d7e95e;
  border-radius: 50%;
  margin-left: -8px;
  z-index: 1 !important;
}

.member3 {
  background: #5ed0e9;
  border-radius: 50%;
  margin-left: -8px;
  z-index: 1 !important;
}

.buttonInvite {
  background: #524598;
  border-radius: 0.7em;
  padding: 0.5em 0.9em;
  align-items: center;
  margin-right: 0.5em;
}

.buttonInvite span {
  color: #fff;
}

.viewer {
  display: flex;
  margin-bottom: 2em;
}

.sender {
  display: flex;
  margin-bottom: 2em;
  justify-content: flex-end;
}

.chatBox {
  background: #faf9fc;
  border-radius: 0.7em;
  height: 40vh;
  max-height: 40vh;
  width: 100%;
  padding: 1.5em;
}

.bubleChatViewer {
  background: #fff;
  border-radius: 0.4em;
  width: 17em;
  height: 3em;
  max-height: 3em;
  overflow: scroll;
  margin-left: 1.4em;
  padding: 0.1em 0.5em;
}

.bubleChatSender {
  background: #fff;
  border-radius: 0.4em;
  width: 17em;
  height: 3em;
  max-height: 3em;
  overflow: scroll;
  margin-right: 1.4em;
  padding: 0.1em 0.5em;
}

.message {
  font-size: 0.7em;
}

.typeBox {
  background: #fff;
  position: relative;
  width: 30em;
  height: 35px;
  border-radius: 2em;
  margin-top: 1em;
}

input[class="fieldChat"] {
  border: none !important;
  position: absolute !important;
  top: 0;
  left: 0;
  width: 100% !important;
  max-width: 90% !important;
  height: 25px !important;
  line-height: 20px !important;
  display: block;
  font-size: 0.9em !important;
  border-radius: 20px;
  padding: 0 1.2em !important;
  margin-top: 0.3em !important;
}

.fieldChat:focus {
  outline: none;
}

.sendIcon {
  box-sizing: border-box;
  padding: 7px;
  width: 30px;
  height: 30px;
  position: absolute;
  top: 0.17em;
  right: 0.6em;
  text-align: center;
  font-size: 1em;
  transition: all 1s;
} */
