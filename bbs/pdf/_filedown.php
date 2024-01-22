<?php
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

$fn = "calendar_2024.pdf";
$df = RT_DOC_ROOT."/bbs/pdf/".$fn;
$df = str_replace("//","/",$df);

if (is_file($df)) {

	if(fopen($df,"r")) {

		$fn = iconv("UTF-8", "EUC-KR", $fn);

		Header("Content-type: application/octet-stream");
		Header("Content-Length: ".filesize($df));
		Header("Content-Disposition: attachment; filename=".$fn);
		Header("Content-Transfer-Encoding: binary");
		Header("Pragma: no-cache");
		Header("Expires: 0");

		$fp = fopen($df, "rb");
		while(!feof($fp)) {
			echo fread($fp, 100*1024);
			flush();
		}
		fclose ($fp);
	}
} else {
	rt_js_msg("파일이 없습니다.");exit;
}
?>