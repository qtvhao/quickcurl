<?php
/*
@author Nghiêm Xuân Hào <qtvhao@gmail.com>
*/
class curl{
	function __construct($url){
		$this->ch=curl_init($url);
		$this->ua('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
		$this->setopt(CURLOPT_ENCODING,'');
		$this->setopt(CURLOPT_FOLLOWLOCATION,1);
		if(strpos($url,'https')==0){
			$this->setopt(CURLOPT_SSL_VERIFYPEER,0);
			$this->setopt(CURLOPT_SSL_VERIFYHOST,0);
		}
	}
	function setopt($optkey,$optvalue){
		curl_setopt($this->ch,$optkey,$optvalue);
	}
	function ua($ua){
		switch($ua){
			case 'android':
			$ua='Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.114 Mobile Safari/537.36';
			break;
			case 'java':
			$ua='Nokia6030/2.0(5.40) Profile/MIDP-2.0 Configuration/CLDC-1.1';
			break;
			}
		$this->setopt(CURLOPT_USERAGENT,$ua);
	}
	function run(){
		$this->setopt(CURLOPT_RETURNTRANSFER,1);
		$dat=curl_exec($this->ch);
		if($dat)
			return $dat;
		else return var_export(curl_error($this->ch));
	}
	function header($hdr){
		$this->setopt(CURLOPT_HTTPHEADER,$hdr);
	}
	function post($postdata){
		$this->setopt(CURLOPT_POST,1);
		$this->setopt(CURLOPT_POSTFIELDS,$postdata);
	}
}
