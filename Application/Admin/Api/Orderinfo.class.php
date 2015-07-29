<?php

namespace Admin\Api;

interface Orderinfo {
	//订单搜索
	public function order_search($data);
	public function order_delete($data);
	public function order_update($data);

}

?>