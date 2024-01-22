<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>
<div class="rt_content_container m0">

	<div class="rt_m_body clearfix" id="masorny_wrap">
		<div class="rt_m_33">
			<div class="rt_m_box rt_shadow">
				<h1 class="rt_m_bar_tit">사이트 요약</h1>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">사이트 명</p>
					<div class="rt_button_wrap">
						<span><?php echo $rt_conf_db['adm_title'];?></span>
						<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_btn_blue">관리</a>
					</div>
				</div>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">도메인</p>
					<div class="rt_button_wrap">
						<span><?php echo $rt_conf_db['domain'];?></span>
						<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_btn_blue">관리</a>
					</div>
				</div>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">메일 환경정보</p>
					<div class="rt_button_wrap">
						<div class="rt_check_wrap">
							<?php if ($__mail_conf_is) {?>
							<span class="rt_blue">등록됨</span>
							<?php } else { ?>
							<span class="rt_red">등록안됨</span>
							<?php } ?>
						</div>
						<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_btn_blue">관리</a>
					</div>
				</div>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">SMS 환경정보</p>
					<div class="rt_button_wrap">
						<div class="rt_check_wrap">
							<?php if ($__sms_conf_is) {?>
							<span class="rt_blue">등록됨</span>
							<?php } else { ?>
							<span class="rt_red">등록안됨</span>
							<?php } ?>
						</div>
						<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_btn_blue">관리</a>
					</div>
				</div>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">보안 SSL</p>
					<div class="rt_button_wrap">
						<div class="rt_check_wrap">
							<?php if ($__ssl_conf_is) {?>
							<span class="rt_blue">사용함</span>
							<?php } else { ?>
							<span class="rt_red">사용안함</span>
							<?php } ?>
						</div>
						<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_btn_blue">관리</a>
					</div>
				</div>
				<div class="rt_site_summary clearfix">
					<p class="rt_site_summary_txt">회원정책</p>
					<div class="rt_button_wrap">
						<div class="rt_check_wrap">
							<?php if ($__mem_conf_is) {?>
							<span class="rt_red">관리자승인</span>
							<?php } else { ?>
							<span class="rt_blue">자동승인</span>
							<?php } ?>
						</div>
						<a href="<?php echo RTW_ADM;?>/app/?appcode=rtmember&sd=admin-setting" class="rt_btn_blue">관리</a>
					</div>
				</div>
			</div>
		</div>
		<div class="rt_m_33">
			<div class="rt_m_box rt_shadow">
				<h1 class="rt_m_bar_tit">회원요약</h1>
				<div class="rt_bar_letter_wrap">
					<h1 class="rt_subject"><a href="#;">전체 회원 <?php echo $member_total_cnt;?>명</a></h1>
				</div>
				<div class="rt_bar_letter_wrap">
					<h1 class="rt_subject"><a href="#;">오늘 가입 회원 <?php echo $member_today_cnt;?>명</a></h1>
				</div>
				<div class="rt_bar_letter_wrap">
					<h1 class="rt_subject"><a href="#;">오늘 로그인 회원 <?php echo $member_today_login;?>명</a></h1>
				</div>
			</div>
		</div>
		<div class="rt_m_33">
			<div class="rt_m_box rt_shadow">
				<h1 class="rt_m_bar_tit mb10">최근 댓글</h1>
				<?php
				for ($m = 0; $m < count($cmt_data); $m++) {
					$cmt_data[$m]['content'] = rt_str_length_cut(rt_dbstr_decode($cmt_data[$m]['content']),110,"..");
				?>
				<div class="rt_reply_wrap">
					<span class="rt_bar"><span class="rt_radius"></span></span>
					<p class="rt_wirter"><span><?php echo $cmt_data[$m]['reg_date'];?></span>, <span>작성자 : </span><?php echo $cmt_data[$m]['name'];?></p>
					<p class="rt_substance"><a href="<?php echo RTW_ADM?>/app/?appcode=rtboard&sd=theme-<?php echo $cmt_data[$m]['theme'];?>-data&cf=view&bcode=<?php echo $cmt_data[$m]['bcode']?>&seq=<?php echo $cmt_data[$m]['post_seq']?>"><?php echo $cmt_data[$m]['content'];?></a></p>
				</div>
				<?php } ?>
				<div class="rt_radius_button">
					<h1 class="rt_bar"><span></span></h1>
					<a href="/rintkit/adm/app/?appcode=rtboard&sd=admin-comment">전체댓글 보러가기</a>
				</div>
			</div>
		</div>
		<?php for ($m = 0; $m < count($bbs_list); $m++) { ?>
		<div class="rt_m_33">
			<div class="rt_m_box rt_shadow">
				<h1 class="rt_m_bar_tit"><?php echo $bbs_list[$m]['name']?></h1>
				<?php for ($d = 0; $d < count($bbs_data[$m]); $d++) {?>
				<div class="rt_bar_letter_wrap">
					<h1 class="rt_subject"><a href="<?php echo RTW_ADM?>/app/?appcode=rtboard&sd=theme-<?php echo $bbs_list[$m]['theme'];?>-data&cf=view&bcode=<?php echo $bbs_data[$m][$d]['bcode']?>&seq=<?php echo $bbs_data[$m][$d]['seq']?>"><?php echo rt_str_length_cut(stripslashes($bbs_data[$m][$d]['subject']),32,"..")?></a><p class="rt_writer"><?php echo $bbs_data[$m][$d]['name'];?></p></h1>
				</div>
				<?php }?>
			</div>
		</div>
		<?php }?>
	</div>
</div>