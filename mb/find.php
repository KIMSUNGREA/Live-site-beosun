<?php include "../_head.php"; ?>
        <section class="sub_top sub_community"></section>
        <div id="sub_wrap">
            <section class="sub_ind_cont">
                <div class="tit">
                    <h1 class="text_ct">ID/PW 찾기</h1>
                </div>

				<?php rt_app("rtmember","display",array("find"));?>

            </section>
        </div>
<?php include "../_tail.php"; ?>