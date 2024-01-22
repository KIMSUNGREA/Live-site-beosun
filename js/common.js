$(document).ready(function() { // HTML 문서가 로드되면 실행될 코드
    $(".mobile_menu_btn").click(function(){
        $(".mobile_menu").addClass("on")
    })

        // 길 버스시간표 팝업
        $(".bus_time button").click(function(){
            $(".layer_dimm").fadeIn()
            $(".popup").fadeIn()
        })
        $(".p_head button").click(function(){
            $(".layer_dimm").fadeOut()
            $(".popup").fadeOut()
        })

        // 길 기차시간표 팝업
        $(".sb_time button").click(function(){
            $(".layer_dimm").fadeIn()
            $(".popup2").fadeIn()
        })
        $(".p_head button").click(function(){
            $(".layer_dimm").fadeOut()
            $(".popup2").fadeOut()
        })


    $(".close_btn").click(function(){
        $(".mobile_menu").removeClass("on")
    })

    $(".mob_menu_list > li").click(function(){
        $(".mob_menu_list > li .sub_road_list").slideUp();
        $(this).children(".sub_road_list").slideDown();
    })

    // if ($(window).width() >= 1024) {
    //     $('header nav > ul').on('mouseenter', function() {
    //         $('#pc_menu > ul > li > .sub_road_list').addClass('show');
    //         $('#pc_menu > ul > li > .sub_road_list').animate({
    //             'opacity': '1',
    //             'top': '62px'
    //         });
            
    //     });

    //     $('header nav > ul').on('mouseleave', function() {
    //         $('this .sub_road_list').removeClass('show');
    //         $('#pc_menu > ul > li > .sub_road_list').animate({
    //             'opacity': '0',
    //             'top': '0'
    //         });
            
    //     });
    // }

            $('header nav > ul > li').on('mouseenter', function() {
                $(this).children("a").addClass("on")
                $(this).children(".sub_road_list").stop().slideDown();
            });
    
            $('header nav > ul > li').on('mouseleave', function() {
                $(this).children("a").removeClass("on")
                $(this).children(".sub_road_list").stop().slideUp();
            });

	/* 파일업로드 */
	$("#file1").on('change',function(){
            var fileName = $("#file1").val();
            $(".upload-name1").val(fileName);
        });
        $("#file2").on('change',function(){
            var fileName = $("#file2").val();
            $(".upload-name2").val(fileName);
        });
        $("#file3").on('change',function(){
            var fileName = $("#file3").val();
            $(".upload-name3").val(fileName);
        });
        $("#file4").on('change',function(){
            var fileName = $("#file4").val();
            $(".upload-name4").val(fileName);
        });

        $(".sb_tit").click(function() {
        $(".sb_box").toggleClass("on");
        $(".sb_tit .aw").toggleClass("on");
        });

        $(".you_close_btn").click(function() {
            $(".youtube").addClass("on");
        });
});