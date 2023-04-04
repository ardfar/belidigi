<?php
namespace App\Custom;
class DJavaAPI {
	public $api_url = 'https://djavapanel.com/api/'; // API URL
	public $api_id = '24834'; // API ID
	public $api_key = 'ca44dc-bf01d7-ac6e20-c85bb3-5ba752'; // API KEY

	public function profile() {
		return json_decode($this->connect($this->api_url.'profile', array('api_id' => $this->api_id, 'api_key' => $this->api_key)),true);
	}

	public function services() {
		return json_decode($this->connect($this->api_url.'services', array('api_id' => $this->api_id, 'api_key' => $this->api_key)),true);
	}

	public function order($data) {
		return json_decode($this->connect($this->api_url.'order', array_merge(array('api_id' => $this->api_id, 'api_key' => $this->api_key), $data)),true);
	}

	public function status($order_id) {
		return json_decode($this->connect($this->api_url.'status', array('api_id' => $this->api_id, 'api_key' => $this->api_key, 'id' => $order_id)),true);
	}

	private function connect($end_point, $post) {
		$_post = Array();
		if (is_array($post)) {
			foreach ($post as $name => $value) {
				$_post[] = $name.'='.urlencode($value);
			}
		}
		$ch = curl_init($end_point);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		if (is_array($post)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
		}
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		$result = curl_exec($ch);
		if (curl_errno($ch) != 0 && empty($result)) {
			$result = false;
		}
		curl_close($ch);
		return $result;
	}
}