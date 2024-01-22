<?php
//-----------------------------------------------------------------------------------------
// 린트킷 엔진 포함
//-----------------------------------------------------------------------------------------

exit;
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

$url = "./g5_member_utf.csv";
$array = file($url);
for($i=0;$i<count($array);$i++)
{
	if ($length < strlen($array[$i]))
	{
		$length = strlen($array[$i]);
	}
}

unset($array);
$error_occur = false;
$cnt = 0;
$handle = fopen($url, "r");
while(($data = fgetcsv($handle, $length, ",")) !== FALSE)
{
	$udata['lgubun'			] = "w";
	$udata['user_id'		] = trim($data[1]);
	$udata['oldweb_pw'		] = trim($data[2]);
	$udata['user_nm'		] = trim($data[3]);
	$udata['email'			] = trim($data[6]);
	$udata['mgroup'			] = 1;
	$udata['reg_date'		] = trim($data[5]);
	$udata['oldweb_en'		] = "y";

	$dbo->insert("RT_RTMEMBER", $udata);

	$cnt++;
}
fclose($handle);

if($error_occur)
{
	echo $error_row." 건의 입력 에러가 발생하였습니다.<p>";
}
else
{
	echo $cnt."건이 업데이트되었습니다.";
}
/*
$data[1] 아이디
$data[2] 패스워드
$data[3] 이름
$data[4] 닉네임
$data[5] 가입일
$data[6] 이메일
*/
?>