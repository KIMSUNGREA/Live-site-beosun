<header>
    <div class="header_wrap">
                <h1>
                    <a href="/index.php"><img src="/images/main_logo.png" alt="외씨버선길 로고"></a>
                </h1>
                <nav id="pc_menu" class="pc">
                    <ul>
                        <li>
                            <a href="/sub_road_introduction_1.php">외씨버선길</a>
                    <ul class="sub_road_list">
                                <li>
                                    <a href="/sub_road_introduction_1.php">외씨버선길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_introduction_2.php">안내표시판</a>
                                </li>
				<li>
                                    <a href="/sub_road_introduction_3.php">완주인증안내</a>
                                </li>
                                <li>
                                    <a href="/sub_road_introduction_4.php">기념품</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/sub_road_1.php">코스안내</a>
                            <ul class="sub_road_list">
                                <li>
                                    <a href="/sub_road_1.php">1.주왕산달기약수탕길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_2.php">2.슬로시티길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_3.php">3.김주영객주길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_4.php">4.장계향디미방길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_5.php">5.오일도시인의길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_6.php">6.조지훈문학길</a>
                                </li>
								<li>
                                    <a href="/connection_1.php">~영양연결구간</a>
                                </li>
                                <li>
                                    <a href="/sub_road_7.php">7.치유의길</a>
                                </li>
								<li>
                                    <a href="/connection_2.php">~봉화연결구간</a>
                                </li>
                                <li>
                                    <a href="/sub_road_8.php">8.보부상길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_9.php">9.춘양목솔향기길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_10.php">10.약수탕길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_11.php">11.마루금길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_12.php">12.김삿갓문학길</a>
                                </li>
                                <li>
                                    <a href="/sub_road_13.php">13.관풍헌가는길</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/review/">완주후기</a>
                            <ul class="sub_road_list">
                                <li>
                                    <a href="/review/">완주후기</a>
                                </li>
                                <li>
                                    <a href="/review/form.php">완주후기 쓰기</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/bbs/notice.php">커뮤니티</a>
                            <ul class="sub_road_list">
                                <li>
                                    <a href="/bbs/visit.php">방문정보안내</a>
                                </li>
                                <li>
                                    <a href="/bbs/notice.php">공지사항</a>
                                		</li>
				<li>
                                    <a href="/bbs/guide.php">가이드북 및 지도요청</a>
                                		</li>
                                <li>
                                    <a href="/bbs/qna.php">묻고답하기</a>
                                </li>
                                <li>
                                    <a href="/bbs/calendar.php">2024 외씨버선길<br>탁상달력</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="login pc">
                    <ul>
                        <?php if ($cls_rtm->is_login()) { ?>
                        <a href="/app/rtmember/user/logout.php">로그아웃</a>
						<?php } else { ?>
						<a href="/mb/login.php">로그인</a>
						<a href="/mb/join.php?cf=step2">회원가입</a>
						<?php } ?>
                    </ul>
                </div>
                <button class="mobile_menu_btn mob">
                    <img src="/images/ham_icon.png" alt="모바일 메뉴버튼">
                </button>
                <nav class="mobile_menu mob">
                    <div class="mob_menu_top">
                        <h1>
                            <a href="/index.php"><img src="/images/mobile_icon.png" alt="외씨버선길 로고"></a>
                        </h1>
                        <button class="close_btn"><img src="/images/mobile_cs.png" alt="닫기"></button>
                    </div>
                    <div class="menu_comm">
                        <div class="login">
                            <img src="images/mobile_login.png" alt="">
							<?php if ($cls_rtm->is_login()) { ?>
							<a href="/app/rtmember/user/logout.php">로그아웃</a>
							<?php } else { ?>
							<a href="/mb/login.php">로그인</a>
							<a href="/mb/join.php?cf=step2">회원가입</a>
							<?php } ?>
                        </div>
                        <ul class="mob_menu_list">
                            <li>
                                외씨버선길
                                <ul class="road_list">
                                    <li>
                                        <a href="/sub_road_introduction_1.php">외씨버선길</a>
                                    </li>
                                    <li class="half">
                                        <a href="/sub_road_introduction_2.php">안내표시판</a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_introduction_3.php">완주인증</a>
                                    </li>
                                    <li class="half">
                                        <a href="/sub_road_introduction_4.php">기념품</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                코스안내
                                <ul class="road_list road">
                                    <li>
                                        <a href="/sub_road_1.php">
                                            <img src="images/mobile_1.png" alt="">
                                            <span>1길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_2.php">
                                            <img src="images/mobile_2.png" alt="">
                                            <span>2길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_3.php">
                                            <img src="images/mobile_3.png" alt="">
                                            <span>3길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_4.php">
                                            <img src="images/mobile_4.png" alt="">
                                            <span>4길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_5.php">
                                            <img src="images/mobile_5.png" alt="">
                                            <span>5길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_6.php">
                                            <img src="images/mobile_6.png" alt="">
                                            <span>6길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/connection_1.php">
                                            <img src="images/mobile_6-1.png" alt="">
                                            <span>6-1길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_7.php">
                                            <img src="images/mobile_7.png" alt="">
                                            <span>7길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/connection_2.php">
                                            <img src="images/mobile_7-1.png" alt="">
                                            <span>7-1길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_8.php">
                                            <img src="images/mobile_8.png" alt="">
                                            <span>8길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_9.php">
                                            <img src="images/mobile_9.png" alt="">
                                            <span>9길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_10.php">
                                            <img src="images/mobile_10.png" alt="">
                                            <span>10길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_11.php">
                                            <img src="images/mobile_11.png" alt="">
                                            <span>11길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_12.php">
                                            <img src="images/mobile_12.png" alt="">
                                            <span>12길</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sub_road_13.php">
                                            <img src="images/mobile_13.png" alt="">
                                            <span>13길</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                완주후기
                                <ul class="road_list">
                                    <li>
                                        <a href="/review/">완주후기</a>
                                    </li>
                                    <li class="half">
                                        <a href="/review/form.php">완주후기 쓰기</a>
                                    </li>
                                </ul>
                            </li>
			    <li>
                                커뮤니티
                                <ul class="road_list">
                                    <li>
                                        <a href="/bbs/visit.php">방문정보안내</a>
                                    </li>
                                    <li class="half">
                                        <a href="/bbs/notice.php">공지사항</a>
                                    </li>
                                    <li>
                                        <a href="/bbs/guide.php">가이드북 및 지도 신청</a>
                                    </li>
                                    <li class="half">
                                        <a href="/bbs/qna.php">묻고답하기</a>
                                    </li>
                                    <li>
                                        <a href="/bbs/calendar.php">2024탁상달력</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>