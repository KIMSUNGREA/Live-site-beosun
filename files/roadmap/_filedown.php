<?php
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

//https://beosun.gabia.io/files/roadmap/_filedown.php

$arr = array();
$arr[1] = "씨버선길_1길 주왕산달기약수탕길_지도.png";
$arr[2] = "외씨버선길_2길 슬로시티길_지도.png";
$arr[3] = "외씨버선길_3길 김주영객주길_지도.png";
$arr[4] = "외씨버선길_4길 장계향디미방길_지도.png";
$arr[5] = "외씨버선길_5길 오일도시인의길_지도.png";
$arr[6] = "외씨버선길_6길 조지훈문학길_지도.png";
$arr[7] = "외씨버선길_7길 치유의길_지도.png";
$arr[8] = "외씨버선길_8길 보부상길_지도.png";
$arr[9] = "외씨버선길_9길 춘향목솔향기길_지도.png";
$arr[10] = "외씨버선길_10길 약수탕길_지도.png";
$arr[11] = "외씨버선길_11길 마루금길_지도.png";
$arr[12] = "외씨버선길_12길 김삿갓문학길_지도.png";
$arr[13] = "외씨버선길_13길 관풍헌가는길_지도.png";
$arr[14] = "외씨버선길_봉화연결길_지도.png";
$arr[15] = "외씨버선길_영양연결길_지도.png";

$n = $_GET['n'];
$fn = "map".$n.".png";
$df = RT_DOC_ROOT."/files/roadmap/".$fn;
$df = str_replace("//","/",$df);

if (is_file($df)) {

	if(fopen($df,"r")) {

		$fn = iconv("UTF-8", "EUC-KR", $fn);

		Header("Content-type: application/octet-stream");
		Header("Content-Length: ".filesize($df));
		Header("Content-Disposition: attachment; filename=".$arr[$n]);
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