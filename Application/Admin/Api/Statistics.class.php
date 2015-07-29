<?php

namespace Admin\Api;

interface Statistics {

	public function user_count($data="");
	public function product_count($data="");
	public function chanrge_count($data="");
	public function withdraw_count($data="");
	public function out_money_count($data="");
	public function income_money_count($data="");
	
}

?>