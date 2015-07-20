<?php
namespace Admin\Controller;
use Think\Controller;
class EmailController extends Controller {
    public function mailbox(){
        $this->display('Email/mailbox');
    }
    

    public function mail_detail(){
        $this->display('Email/mail_detail');
    }

    public function mail_compose(){
        $this->display('Email/mail_compose');
    }
}