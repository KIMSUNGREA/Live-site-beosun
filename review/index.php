<?php
include "../_head.php";

/**
 * 게시판 환경 데이터
 */

rt_load_component("board");
$cls_board = new board("RT_REVIEW",24,10);

$add_qry = array(); //DB 쿼리 배열
$add_url = ""; //전달 변수 배열

//고정 쿼리
$add_qry[] = "(confirm_en='Y')";

//변동 쿼리
if ($env->_get['search'] && $env->_get['searchstring']) {
	if ($env->_get['search'] == "subjcont") {
		$add_qry[] = "((subject LIKE '%".$env->_get['searchstring']."%') OR (content LIKE '%".$env->_get['searchstring']."%'))";
	} else {
		$add_qry[] = "(".$env->_get['search']." LIKE '%".$env->_get['searchstring']."%')";
	}
	$add_url.= "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
	$add_sch_url = "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
}

if (count($add_qry) > 0) {
	$str_add_qry = implode(" AND ", $add_qry);
	$cls_board->set_fix_where_qry($str_add_qry);
}
$cls_board->set_fix_url_val($add_url);
$cls_board->init();

//-------------------------------------------------------------------------------------------------

?>
        <section class="sub_top sub_community"></section>
        <div id="sub_wrap">
            <section class="sub_ind_cont">
                <div class="tit">
                    <h1 class="text_ct">완주후기</h1>
                    <ul>
                        <li class="on"><a href="/review/">완주후기</a></li>
                        <li><a href="/review/form.php">완주후기 쓰기</a></li>
                    </ul>
                </div>
                <div class="common_box show1 on">
                    <ul class="review_list">

						<!-- 게시물 목록 S -->
						<?php
						$_l = $cls_board->get_list("reg_date DESC");
						for ($i = 0; $i < count($_l); $i++) {

							if ($_l[$i]['file1_new']) {
								$img_src = $_l[$i]['file_subdir']."/".$_l[$i]['file1_new'];
							} else {
								//이미지 없을 경우
								$img_src = "/images/no_img.png";
							}
							?>
                        <li>
                            <a href="/review/view.php?seq=<?php echo $_l[$i]['seq'];?>">
                                <figure>
                                    <img src="<?php echo $img_src;?>" alt="완주후기">
                                </figure>
                                <figcaption>
                                    <p><?php echo $_l[$i]['title'];?></p>
                                    <!-- <img src="/images/naver_blog.png" alt="네이버 블로그 아이콘"> -->
                                </figcaption>
                            </a>
                        </li>
						<!-- 게시물 목록 E -->
							<?php
						}?>
                    </ul>
                    <?php echo $cls_board->put_page_num_user($_SERVER['PHP_SELF'])?>
                </div>
            </section>
        </div>
<?php include "../_tail.php"; ?>