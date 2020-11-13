<?php
  class User
  {
      //Properties
      public $name;
      public $username;
      public $email;

     function addFriend($name){
       echo $name . " added a friend <br/>";
     }

     function postStatus($name){
       echo $name . " posted a status <br/>";
     }
  }
  $user1 = new User();
  $user1->addFriend('Van Joakhim B. Laude');
  $user1-> postStatus('Van Joakhim B. Laude');
?>
