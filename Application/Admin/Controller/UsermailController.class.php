<?php
namespace Admin\Controller;
use Think\Controller;
class UsermailController extends Controller {
    public function mailbox(){
        $this->display('Usermail/mailbox');
    }
    

    public function mail_detail(){
        $this->display('Usermail/mail_detail');
    }

    public function mail_compose(){
        $this->display('Usermail/mail_compose');
    }
}