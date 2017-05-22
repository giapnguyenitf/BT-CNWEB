<?php

  class account{
    var $username;
    var $password;
    var $dicen;

    public function __contruct($username,$password,$dicen){
      $this->$username = $username;
      $this->$password = $password;
      $this->$dicen = $dicen;
    }

    public function get_username(){
      return $this->$username;
    }

    public function get_password(){
      return $this->$password;
    }

    public function get_dicen(){
      return $this->$dicen;
    }

  }
 ?>
