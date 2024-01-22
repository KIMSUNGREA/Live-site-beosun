<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>
<style>
	.rt_data_table tbody tr td a {display: inline-block; width: 60px; text-align: center; height: 33px; line-height: 33px; background-color: #666; color: #fff; border-radius:5px;}
	.rt_data_table tbody tr td #address1 {width: auto; min-width:300px;}
	.rt_data_table tbody tr td .edu-date-1,
	.rt_data_table tbody tr td .edu-date-2,
	.rt_data_table tbody tr td .edu-date-3,
	.rt_data_table tbody tr td .edu-date-4,
	.rt_data_table tbody tr td .edu-date-5 {width: auto;}
</style>
<form name="dataform" action="<?php echo $__sc?>/update.php" method="post" target="rt_ifrm" enctype="multipart/form-data">
<input type="hidden" name="mode" value="<?php echo $__cfg['mode'];?>">
<input type="hidden" name="seq" value="<?php echo $env->_get['seq'];?>">

<table class="rt_data_table">
	<caption>등록</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tbody>
		<tr>
			<th>이름</th>
			<td>
				<input type="text" name="name" class="required" msg="이름을 입력해주세요." value="<?php echo $_r['name'];?>" style="width:150px;">
			</td>
		</tr>
		<tr>
			<th>제목</th>
			<td>
				<input type="text" name="title" class="required" msg="제목을 입력해주세요." value="<?php echo $_r['title'];?>">
			</td>
		</tr>
		<tr>
			<th>내용</th>
			<td>
				<textarea name="cont_tx" id="cont_tx" style="display:none;"><?php echo $_r['cont_tx'];?></textarea>
			</td>
		</tr>
		<tr>
			<th>대표 이미지</th>
			<td>
				<input type="file" name="file1">
				<?php if ($_r['file1_new']) {?>
				<img src="<?php echo $_r['file_subdir'];?>/<?php echo $_r['file1_new'];?>" style="max-width:200px;">
				<a href="javascript:img_delete(<?php echo $_r['seq'];?>, 1)" class="rt_btn_red"> 삭제 </a>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<th>등록일</th>
			<td>
				<input type="text" name="reg_date" class="required" msg="등록일을 입력해주세요." value="<?php echo $_r['reg_date'];?>" style="width:100px;">
			</td>
		</tr>
	</tbody>
</table>
</form>


<div class="rt_button_wrap rt_tar mb25">
	<?php if ($__cfg['mode'] == "insert") {?>
	<a href="#;" id="btn-submit" class="rt_btn_blue">등록</a>
	<?php } else { ?>
	<a href="#;" id="btn-submit" class="rt_btn_blue">정보 변경</a>
	<a href="#;" class="rt_btn_red" style="background-color:red;color:#fff;" onclick="btn_delete(<?php echo $_r['seq'];?>);">삭제</a>
	<?php } ?>
	<a href="#;" id="btn-move-list" class="rt_btn_gray">목록 가기</a>
</div>

<form name="delete_form" method="post" action="<?php echo $__sc?>/update.php" method="post" target="rt_ifrm">
	<input type="hidden" name="mode" value="select_delete">
	<input type="hidden" name="seq" value="">
</form>

<script src="<?php echo RTW_PLUGIN;?>/SE2.8.2.O12056/js/HuskyEZCreator.js" type="text/javascript"></script>
<script src="<?php echo RTW_ASSETS;?>/js/se2.editor.js" type="text/javascript"></script>
<script type="text/javascript">
var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "cont_tx",
	sSkinURI: "<?php echo RTW_PLUGIN;?>/SE2.8.2.O12056/SmartEditor2Skin.html",
	htParams : {
		bUseToolbar : true,			//툴바
		bUseVerticalResizer : true,	//입력창 크기 조절바
		bUseModeChanger : true		//모드 탭
	},
	fOnAppLoad : function(){
		oEditors.getById["cont_tx"].setDefaultFont("나눔고딕", "10");
	}
});
</script>

<script type="text/javascript">
function img_delete(seq,num) {
	if (confirm("이미지를 삭제하시겠습니까?")) {
		$("#rt_ifrm").attr("src","/rintkit/adm/review/post/update.php?mode=imgdel&seq="+seq+"&num="+num);
	}
}

function btn_delete(val) {

	var form = document.delete_form;

	if (confirm("삭제된 데이터는 복구할 수 없습니다. 삭제하시겠습니까?"))
	{
		form.seq.value=val;
		form.submit();
	}
}
;(function($) {
	$(function() {

		var form = document.dataform;
		var path_cur_pos = rt_path['adm']+"/"+rt_layout['dr'];

		$("#btn-move-list").click(function (){
			location.href = path_cur_pos+"/?sd=post&cf=list";
		});

		$("#btn-submit").click(function (){
			if (rt_chk_form('required')) {
				se2_editor_contents("cont_tx");
				form.submit();
			}
		});
	});
})(jQuery);
</script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>