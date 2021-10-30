<!DOCTYPE html>

<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="신박한 중고거래 떴다마켓, 제휴된공간에서 안전거래, 수수료없는 안전결제, 중고거래는 떴다마켓에서~">
	<meta property="og:type" content="website"> 
	<meta property="og:title" content="떴다마켓">
	<meta property="og:description" content="신박한 중고거래 떴다마켓, 제휴된공간에서 안전거래, 수수료없는 안전결제, 중고거래는 떴다마켓에서~">
	<meta property="og:image" content="https://ttuttamarket.net/site/images/banner.png">
	<meta property="og:url" content="https://ttuttamarket.net">
    <title> 떴다마켓 </title>
    <link href="./site/css/style.css" rel="stylesheet" type="text/css">
    <link href="./site/css/aos.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="./site/images/logo.ico">
<script>

 

// OS 확인

var uAgent = navigator.userAgent.toLocaleLowerCase();

if(uAgent.indexOf("android") != -1)  

 OSName = "android";

else if(uAgent.indexOf("iphone") != -1 || uAgent.indexOf("ipad") != -1 || uAgent.indexOf("ipod") != -1) 

 OSName="ios";

else 

 OSName="is not mobile";

 

// 어플 실행

function appStart(){

 if("ios" == OSName || "android" == OSName){

  document.checkframe.location = "jhmol://";

  setTimeout("checkApplicationInstall_callback()", 1500);

 }else{

  // 어플 실행하지 않고 종료 

  return;

 } 

}

 

// Android의경우 어플실행 확인 및 설치페이지 이동

// IOS의 경우 어플실행명령 후 1.5초 후에 설치페이지 이동에 대한 확인창 발생

function checkApplicationInstall_callback() {

 

 if("android"==OSName){

  try {

   var s = document.checkframe.document.body.innerHTML;

   // 어플리케이션 설치되어있음

  } catch (e) {

   // 어플리케이션 설치 안 되어있음

   // IOS 는 이영역으로 넘어오질 않음.. 

  // if (window.confirm("Not installed - android ")){

    var android_url = "https://play.google.com/store/apps/details?id=com.ddutamarket.app&hl=ko";

    location.href = android_url;

   //}

  }

 }

 

 if("ios" == OSName){

  //if (window.confirm("Not installed - ios")){

   var ios_url = "https://apps.apple.com/us/app/%EB%96%B4%EB%8B%A4%EB%A7%88%EC%BC%93/id1482883167?ls=1";

   location.href = ios_url;

 // }

  

 }

}

</script>


</head>
<body>
    <div class="tta_contain_wrap">

        <!-- 상단 01 -->
        <div class="top01_bg center">
            <div class="content_wrap">
                <div class="content_one_block">

                    <div class="content_one_left">
                        <div class="title_sp ju_center b01_txt01">스마트폰 구매의<br>새로운 기준이 되다</div>
                        <div class="title_big ju_center b01_txt02">떴다마켓</div>
                        <div class="title_s ju_center b01_txt03">실시간 최저가 휴대폰 가격 비교</div>
                        <div class="content_one_btn ju_center">
                            <div class="b01_btn01 center" style="cursor:pointer">
                                <a href="javascript:appStart();"><img src="./site/images/Android_top_btn.png" /></a>
                            </div>
                            <div class="b01_btn02 center" style="cursor:pointer">
                                <a href="javascript:appStart();"><img src="./site/images/ios_top_btn.png" /></a>
                            </div>
                        </div>
                        <div class="content_one_image b01_people center">
                            <img src="./site/images/top_people.png" />
                        </div>
                    </div>

                    <div class="just_align_one"></div>

                    <div class="content_one_right b01_phone">
                        <img src="./site/images/phone_b.png" />
                    </div>
                </div>
            </div>
        </div>


        <div class="top02_bg center">
            <div class="content_wrap">
                <div class="content_two_block">

                    <div class="content_two_left">
                        <div data-aos="flip-left">
                            <img src="./site/images/top02_img01.png" />
                        </div>
                        <div data-aos="flip-left" class="top02_img_align">
                            <img src="./site/images/top02_img02.png" />
                        </div>
                    </div>

                    <div class="just_align_two"></div>

                    <div class="content_two_right right_align">
                        <div data-aos="fade-right" class="title_b">실시간으로</div>
                        <div data-aos="fade-up" class="txt_img_align">
                            <img src="./site/images/top02_txt_image01.png" />
                        </div>
                        <div data-aos="fade-up" class="txt_img_align">
                            <img src="./site/images/top02_txt_image02.png" />
                        </div>
                        <div data-aos="fade-up" class="title_sb">더이상 헛걸음 하지마세요 <i>!!</i></div>
                    </div>

                    <div class="content_two_left_copy">
                        <div class="two_block center">
                            <div data-aos="flip-left" class="center">
                                <img src="./site/images/top02_img01.png" />
                            </div>
                            <div data-aos="flip-left" class="center">
                                <img src="./site/images/top02_img02.png" />
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>




        <div class="top03_bg center">
            <div class="content_wrap">
                <div class="content_three_block">

                    <div class="content_three_right left_align">
                        <div data-aos="fade-right" class="title_b">친구 추가하고</div>
                        <div data-aos="fade-up" class="txt_img_align">
                            <img src="./site/images/top03_txt_image01.png" />
                        </div>
                        <div data-aos="fade-up" class="title_sc">
                            <span># <span style="color: #ffd800">중복적립</span>가능</span>
                            <span class="top03_txtalign"># <span style="color: #ffd800">무한적립</span>가능</span>
                        </div>
                        <div data-aos="fade-up" class="top03_cup_align center">
                            <img src="./site/images/top03_cup_3.png" />
                            <img src="./site/images/top03_cup_10.png" />
                        </div>

                    </div>

                    <div class="just_align_three"></div>

                    <div class="content_three_left">
                        <div data-aos="zoom-in" class="three_block">
                            <img src="./site/images/top03_img011.png" />
                        </div>
                    </div>

                </div>
            </div>
        </div>






        <div class="top04_bg center">
            <div class="content_wrap">
                <div class="content_four_block">

                    <div class="content_four_left">
                        <div data-aos="flip-left">
                            <img src="./site/images/top04_delv_img01.png" />
                        </div>
                    </div>

                    <div class="just_align_four"></div>

                    <div class="content_four_right right_align">
                        <div data-aos="fade-down" class="delv_wrap">
                            <img src="./site/images/top04_delv_img.png" />
                        </div>
                        <div data-aos="zoom-out-right" class="title_b">주문즉시 바로배송</div>
                        <div data-aos="fade-up" class="title_m">택배서비스</div>
                        <div data-aos="fade-up" class="title_sd"><span style="color: #ffd800">전국 어디서나 </span>편리하게 <i>!!</i></div>
                    </div>

                    <div class="content_four_left_copy">
                        <div data-aos="flip-left">
                            <img src="./site/images/top04_delv_img01.png" />
                        </div>
                    </div>


                </div>
                <div data-aos="fade-up" class="top04_align center">
                    <img src="./site/images/top04_img01.png" />
                </div>
            </div>
        </div>




        <div class="top05_bg center">
            <div class="content_wrap">
                <div class="content_three_block">

                    <div class="content_five_right left_align">
                        <div data-aos="fade-right" class="title_b">구매후기 이벤트</div>
                        <div data-aos="fade-up" class="title_m"><span style="color: #43f0ee">선물이</span>팡팡</div>
                        <div data-aos="fade-up" class="title_sf">
                            <span>리뷰를 작성하신 고객님들중</span><br />
                            <span style="color: #ffd800">매주마다 7명씩 추첨증정!</span>
                        </div>
                    </div>

                    <div class="just_align_five"></div>

                    <div class="content_five_left">
                        <div data-aos="zoom-in">
                            <img src="./site/images/top05_img.png" />
                        </div>
                    </div>

                </div>

            </div>
        </div>




        <div class="top06_bg al_center" style="flex-direction: column">
            <div class="content_wrap">




<div style="padding:56.25% 0 0 0;position:relative;margin-top: 80px"><iframe src="https://player.vimeo.com/video/417470991?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>


                <div data-aos="fade-right" class="video_txt center">
                    지금 앱다운받고 이모든 혜택을 누려보세요
                </div>

                <div class="btm_btn center">
                    <div data-aos="fade-up" class="btm_m_size" style="cursor:pointer">
                        <a href="javascript:appStart();"><img src="./site/images/Android_btm_btn.png" /></a>
                    </div>
                    <div data-aos="fade-up" class="btm_m_size btn_align" style="cursor:pointer">
                        <a href="javascript:appStart();"><img src="./site/images/ios_btm_btn.png" /></a>
                    </div>
                </div>
            </div>
        </div>




    <div class="top07_bg center">
        <div class="content_wrap">
            <div class="tta_footer center">
                <img src="./site/images/top07.png" />

				<!-- 표시마크 
				<div class="agree_pre">
                    <img style="cursor:pointer; " src="https://www.ictmarket.or.kr/getCertIcon.do?cert_icon=KP20012946927H001" onclick="window.open('https://www.ictmarket.or.kr/precon/pop_CertIcon.do?PRECON_REQ_ID=PRE0000129670','_blank','toolbar=no, menubar=no, scrollbars=no, resizable=no' )"/>
                </div>
                -->
            </div>
        </div>
    </div>

    -->
    </div>

        <!-- 텍스트 애니메이션-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js'></script>
        <script src="./site/js/script.js"></script>
        <script src="./site/js/aos.js"></script>
        <script>
            AOS.init();
        </script>

		<!-- 비디오 특정 지점 플레이 시키기
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>


		<script>
			var isVisible = false;
			$(window).on('scroll', function () {
				if (checkVisible($('.top06_bg')) && !isVisible) {
					/* 이벤트 효과*/
					$('#video01').get(0).play();

					isVisible = true;

				}
			});

			function checkVisible(elm, eval) {
				eval = eval || "object visible";
				var viewportHeight = $(window).height(), // Viewport Height
					scrolltop = $(window).scrollTop(), // Scroll Top
					y = $(elm).offset().top,
					elementHeight = $(elm).height();

				if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
				if (eval == "above") return ((y < (viewportHeight + scrolltop)));
			}
		</script>
-->
<iframe id="checkframe" name="checkframe" src="check.html" width="0" height="0" style="display:none"></iframe>
</body>
</html>