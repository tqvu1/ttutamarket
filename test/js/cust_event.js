
$(function(){


// gnb 메뉴 이벤트

//tab 이벤트
    $('.cust_tab').click(function(){

        const tab_idx = $(this).index();

        $(this).addClass('cust_tab_active').siblings().removeClass('cust_tab_active');
        if(tab_idx == 0){
            $('.tab_sk').show().siblings().hide();
        } else if (tab_idx == 1){
            $('.tab_kt').show().siblings().hide();
        } else if (tab_idx == 2){
            $('.tab_lg').show().siblings().hide();
        } else {
            $('.tab_etc').show().siblings().hide();
        }
    });

//paging 이벤트
        $('.cust_paging').click(function(){
            $(this).addClass('cust_paging_active').siblings().removeClass('cust_paging_active');
    })

//색상 선택했을때 이벤트
        $('.detail_color li').click(function(){
            $(this).append("<div class='detail_color_active'></div>").siblings().children().remove();
    })

//가입형태 클릭시 이벤트
        $('.telecom_selct li').click(function(){
            const telecom_idx = $(this).index();
            $(this).addClass('cust_fill_btn_sm').siblings().removeClass('cust_fill_btn_sm');
            if (telecom_idx == 0){
                $('.telecom_selct_label01').show();
                $('.telecom_selct_label02').hide();
            } else {
                $('.telecom_selct_label02').show();
                $('.telecom_selct_label01').hide();
            }
    })
    // bx 슬라이드
    $('.slider_main').bxSlider({
        auto: true,
        speed: 500,
        pause: 2000,
        pager:true
    });

    $('.slider_sale').bxSlider({
        auto: true,
        speed: 500,
        pause: 3000,
        pager:true
    });
});

