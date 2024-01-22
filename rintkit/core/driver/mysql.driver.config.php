<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: MySQL DB 접속 정보
//-----------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

$_cfg_db = array();
$_cfg_db['host'] =  "db.beosun.gabia.io";
$_cfg_db['post'] =  "3306";
$_cfg_db['name'] =  "dbbeosun";
$_cfg_db['user'] =  "beosun";
$_cfg_db['pass'] =  "beosun!3343@";
?>