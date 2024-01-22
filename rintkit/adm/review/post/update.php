<?php
require_once "../../engine.php";

$udata = array();
$upload_path = "/app/userfiles";

rt_load_component("fileupload");
$cls_F = new fileupload($upload_path);

if ($env->_post['mode'] == "insert") {

	$udata['name'			] = $env->_post['name'];
	$udata['title'			] = $env->_post['title'];
	$udata['cont_tx'		] = $env->_post['cont_tx'];
	$udata['confirm_en'		] = "N";
	$udata['file_subdir'	] = $upload_path;
	$udata['reg_date'		] = $env->_post['reg_date'];

	for ($m = 1; $m < 5; $m++) {
		if (!empty($env->_files['file'.$m]['name'])) {
			$ar_info = $cls_F->upload($env->_files['file'.$m]);
			$udata['file'.$m.'_new'] = $ar_info['name_new'];
			$udata['file'.$m.'_ori'] = $ar_info['name'];
		}
	}

	if ($dbo->insert("RT_REVIEW", $udata)) {
		rt_js_move("등록되었습니다.", "parent", "href", "../?sd=post&cf=list");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
		exit;
	}
} else if ($env->_post['mode'] == "modify") {

	$_r = $dbo->fetch("SELECT * FROM RT_REVIEW WHERE seq='".$env->_post['seq']."'");

	if (!empty($_r)) {

		$udata['name'			] = $env->_post['name'];
		$udata['title'			] = $env->_post['title'];
		$udata['cont_tx'		] = $env->_post['cont_tx'];
		$udata['file_subdir'	] = $upload_path;
		$udata['reg_date'		] = $env->_post['reg_date'];

		for ($m = 1; $m < 5; $m++) {
			if (!empty($env->_files['file'.$m]['name'])) {
				$ar_info = $cls_F->upload($env->_files['file'.$m]);
				$udata['file'.$m.'_new'] = $ar_info['name_new'];
				$udata['file'.$m.'_ori'] = $ar_info['name'];

				if ($ar_info['name_new'] && $_r['file'.$m.'_new']) {
					$cls_F->delete_file($_r['file'.$m.'_new']);
				}
			}
		}

		if ($dbo->update("RT_REVIEW", $udata, "seq='".$_r['seq']."'")) {
			rt_js_move("수정되었습니다.", "parent", "reload", "");
		} else {
			rt_js_msg("시스템문제로 등록되지 않았습니다.");
			exit;
		}
	}
} else if ($env->_post['mode'] == "select_delete" && is_numeric($env->_post['seq'])) {

	$_r = $dbo->fetch("SELECT * FROM RT_REVIEW WHERE seq='".$env->_post['seq']."'");

	if (!empty($_r)) {

		if ($dbo->query("DELETE FROM RT_REVIEW WHERE seq='".$_r['seq']."'")) {

			$cls_F->delete_file($_r['file1_new']);
			$cls_F->delete_file($_r['file2_new']);
			$cls_F->delete_file($_r['file3_new']);
			$cls_F->delete_file($_r['file4_new']);

			rt_js_move("", "parent", "href", "../?sd=post&cf=list");
		} else {
			rt_js_msg("시스템문제로 등록되지 않았습니다.");
		}
	}

} else if ($env->_get['mode'] == "imgdel" && is_numeric($env->_get['seq']) && is_numeric($env->_get['num'])) {

	$num = $env->_get['num'];//파일번호

	$_r = $dbo->fetch("SELECT * FROM RT_REVIEW WHERE seq='".$env->_get['seq']."'");

	if ($dbo->query("UPDATE RT_REVIEW SET file".$num."_new='',file".$num."_ori='' WHERE seq='".$env->_get['seq']."'")) {

		$cls_F->delete_file($_r['file'.$num.'_new']);

		rt_js_move("", "parent", "reload");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}

} else if ($env->_get['mode'] == "confirm") {

	$seq = $env->_get['seq'];

	$_r = $dbo->fetch("SELECT * FROM RT_REVIEW WHERE seq='".$seq."'");

	$confirm = ($_r['confirm_en'] == "Y") ? "N":"Y";

	$udata['confirm_en'] = $confirm;

	$dbo->update("RT_REVIEW", $udata, "seq='".$seq."'");

	rt_js_move("상태가 변경되었습니다.", "parent", "reload");
}
?>