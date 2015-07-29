<?php

namespace Admin\Logic;
use Admin\Api\Email;
class Email implements Email{
	//邮件发送
	public function email_send($id,$title,$content,$addr);
	//邮件接收
	public function email_receive($data);
}

?>