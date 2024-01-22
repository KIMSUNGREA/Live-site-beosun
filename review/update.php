<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 버전			: 1.0
// 인코딩			: UTF-8
//-----------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

if ($env->_post['mode'] == "insert") {

	$user = $cls_rtm->get_member_info();
	if (!$user['user_id']) {
		rt_js_msg("시간이 오래되어서 로그인을 다시해 주셔야 합니다.\\n작성한 내용을 복사해서 다시 사용하세요.");
		exit;
	}

	rt_load_component("fileupload");

	$upload_path = "/app/userfiles";
	$cls_F = new fileupload($upload_path);

	$udata = array();
	$udata['user_id'		] = $user['user_id'];
	$udata['name'			] = $env->_post['name'];
	$udata['title'			] = $env->_post['title'];
	$udata['cont_tx'		] = $env->_post['cont_tx'];
	$udata['confirm_en'		] = "N";
	$udata['file_subdir'	] = $upload_path;
	$udata['reg_date'		] = date("Y-m-d");

	for ($m = 1; $m < 2; $m++) {
		if (!empty($env->_files['file'.$m]['name'])) {
			$ar_info = $cls_F->upload($env->_files['file'.$m]);
			$udata['file'.$m.'_new'] = $ar_info['name_new'];
			$udata['file'.$m.'_ori'] = $ar_info['name'];
		}
	}

	if ($dbo->insert("RT_REVIEW", $udata)) {
		rt_js_move("등록되었습니다.", "parent", "href", "/review/");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
		exit;
	}
}
?>