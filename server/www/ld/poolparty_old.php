<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>에어스카이호텔</title>
    <meta name="title" content="에어스카이호텔">
    <meta name="description" content="">
    <meta name="keywords" content="에어스카이호텔">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="에어스카이호텔">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://img.hotelairsky.co.kr/svc/img/sample/sns_thumb.jpg">

    <!-- <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/font/nanumgothic/nanumgothic.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/javascript/lib/datepicker/css/theme01.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/mng/assets/hotelstory/amenitys/style.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/css/init.min.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/css/style.min.css" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="http://img.hotelairsky.co.kr/svc/img/symbol/favicon.ico" /> -->

    <!-- http://hotelairsky.co.kr/ -->
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/js/common.js"></script>

    <link rel="stylesheet" href="http://static.hotelairsky.co.kr/svc/css/totalweb.css">
    <script src="http://static.hotelairsky.co.kr/svc/js/totalweb.js"></script>

    <!--[if lt IE 9]>
		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/flexibility.min.js"></script>

		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/html5shiv.js"></script>
		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="/static/svc/css/ld/init.css">

    <script type="text/javascript" src="/static/svc/js/ld/init.js"></script>
</head>

<body class="page-home">

    <!-- 190910 메인 + 영상이 있을경우 vid 멀티클래스 추가 -->
    <!-- <header class="header"> -->
    <header class="header">
        <div class="ajax_loader b_hide">
            <div>
                <img src="http://img.hotelairsky.co.kr/svc/img/loader/loading.gif" />
                <p>처리 요청 중입니다.</p>
            </div>
        </div>
        <div class="image_view_container">
            <div class="view">
                <i class="icon-10 img-remove"></i>
            </div>
        </div>
        <!--<div class="top_line">
        <div class="group-f">
            <ul class="box">
                <li class="call"><i class="icon-05"></i> 1666-1243</li>
                <li class="email"><i class="icon-03"></i> valuehotelgangneung@ebiznetworks.co.kr</li>
            </ul>
        </div>
    </div>-->

        <div class="gnb">
            <div class="group-f">
                <!-- 190910 logo 추가 수정 -->
                <a href="/index.php" class="logo-box com">
                    <h1>
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/top_logo.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>
                <a href="/index.php" class="logo-box vid">
                    <h1>
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/top_logo_w.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>

                <button class="nav-tab hidden-mdlg">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <nav class="cf nav">
                    <span class="sr-only">전체 메뉴</span>
                    <div class="bg-drop"></div>
                    <div class="nav-box">
                        <div class="nav-tit hidden-mdlg">
                            <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-menu"><span class="i-x" onclick=""></span>
                            <div class="menu-btn-box">
                                <a href="../reservation/" class="btn-bk">객실예약</a>
                                <a href="../reservation/confirm.php" class="btn-bkc">예약확인</a>
                            </div>
                        </div>
                        <ul class="cf menu">
                            <li>
                                <a class="title">호텔소개</a>
                                <ul class="sub">
                                    <li><a href="/main/about/index.php">호텔 소개</a></li>
                                    <li><a href="/main/factsheet/index.php">시설 개요</a></li>
                                    <li><a href="/main/map/index.php">오시는 길</a></li>
                                    <!-- <li><a href="/brd/lists/notice.php">공지사항</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="#none" class="title">객실안내</a>
                                <!-- 190719 메뉴 수정 -->
                                <ul class="sub">
                                    <li><a href="/rooms/detail_new/std_db.php">스탠다드 더블</a></li>
                                    <li><a href="/rooms/detail_new/std_tw.php">스탠다드 트윈</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_db.php">디럭스 오션 더블</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_tw.php">디럭스 오션 트윈</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_ondol.php">디럭스 오션 온돌</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_db.php">프리미어 오션 온돌</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_tw.php">프리미어 오션 트윈</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_famtw.php">프리미어 오션 패밀리 트윈</a></li>
                                    <li><a href="/rooms/detail_new/suite.php">스위트</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="title">다이닝&amp;부대시설</a>
                                <ul class="sub">
                                    <li><a href="/facilities/restaurant.php">레스토랑</a></li>
                                    <li><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                                    <li><a href="/facilities/seminar.php">세미나룸</a></li>
                                    <li><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
                                    <li><a href="/facilities/convenience.php">편의점</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/group/index.php" class="title">단체문의</a>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="alert('준비중입니다.')" class="title">장기/단기 숙박</a>
                                <!-- <a href="/rent/index.php" class="title">장기/단기 숙박</a> -->
                            </li>
                            <li>
                                <a href="javascript:;" onclick="alert('준비중입니다.')" class="title">이벤트/축제</a>
                                <!-- <a href="/event/index.php" class="title">이벤트/축제</a> -->
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="bk-menu hidden-smxs airsky">
                    <a href="/reserve" class="btn-bk">예약하기</a>
                    <ul class="bk-list">
                        <li class="item item-1 fst"><a href="/reserve">객실예약</a></li>
                        <li class="item item-2"><a href="/history/?dd=Sws5TzdVKg==">예약확인</a></li>
                        <li class="item item-3"><a href="/group">단체예약</a></li>
                        <li class="item item-4"><a href="/rent">장기/단기예약</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="body"></div>
    <br class="br_sub">

    <div class="contents ld-contents">
        <!-- 비주얼 영역 -->
        <div class="sect visual">
            <div class="container">
                <figure>
                    <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/visual/tit.png" alt="온라인최저가보상 LET's POOL PARTY">
                </figure>
                <p class="hidden">
                    프리미엄 호텔에서 즐기는 풀파티와 숙박서비스!<br>
                    가족, 연인, 친구와 함께 특별한 추억을 만드세요.
                </p>
            </div>
        </div>

        <!-- 탑배너 영역 -->
        <div class="sect banner">
            <div class="container">
                <p class="box-txt">POOL PACKAGE</p>
                <h2 class="tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/tit_top_bn.png" alt="호텔 수영장 & 프리미엄 호텔 숙박"></h2>
                <p class="txt">프리미엄 호텔 <span class="fg-yellow">수영장과 호텔 숙박 패키지 최저가</span> 이용 찬스!</p>
            </div>
        </div>

        <!-- 우측 배너 영역 -->
        <div class="sect tab-banner" id="ld-banner">
            <div class="container">
                <ul class="tab-list">
                    <li class="grp">
                        <a href="javascript:;" role="button">
                            <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/tab/menu_01.png" alt="풀파티 단체예약">
                        </a>
                    </li>
                    <li class="pkg">
                        <a href="javascript:;" role="button">
                            <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/tab/menu_02.png" alt="풀파티 패키지구매">
                        </a>
                    </li>
                    <li class="rest">
                        <a href="javascript:;" role="button">
                            <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/tab/menu_03.png" alt="객실예약">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 패키지 영역 -->
        <div class="sect pkg" id="ld-pkg">
            <div class="container">
                <h2 class="tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/tit.png" alt="프리미엄 호텔 POOL 패키지"></h2>
                <p class="txt"><em class="fw-bd">낮에는 시원하게, 밤에는 따뜻한 온수풀에서 낭만적인 풀파티</em>와<br>프리미엄 호텔의 차별화된 숙박 서비스를 동시에 경험하세요!</p>
                <ul class="pkg-list">
                    <li>
                        <div class="list-box">
                            <figure class="img-box">
                                <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/img_01.jpg" alt="인피니티 풀 이미지">
                            </figure>
                            <div class="txt-box">
                                <h3 class="pkg-tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/sub_tit_01.png" alt="인피니티 풀"></h3>
                                <p class="pkg-txt">
                                    15층에 위치한 인피니티 풀은 <span class="fg-sky">하늘과 바다를 대면하는 환상의 프라이빗 공간</span>입니다. <br class="hidden-smxs">
                                    연인, 친구와 감동의 시간을 함께하세요.
                                </p>
                            </div>
                        </div>
                    </li>
                    <!--<li>
                        <div class="list-box">
                            <figure class="img-box">
                                <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/img_02.jpg" alt="패밀리 풀 이미지">
                            </figure>
                            <div class="txt-box">
                                <h3 class="pkg-tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/sub_tit_02.png" alt="패밀리 풀"></h3>
                                <p class="pkg-txt">
                                    5층에 위치한 패밀리 풀은 <span class="fg-sky">바다 전망으로 가족, 연인, 친구들과 여행의 피로를 힐링 하실 수 있는 최적의 플레이스 </span>입니다. <span class="hidden-smxs mt-10"></span>
                                    야외에서 하늘과 바다를 직접 대하는 듯한 환상의 느낌을 받으실 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </li>-->
                    <li class="chg plus">
                        <div class="list-box">
                            <figure class="img-box">
                                <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/img_03.jpg" alt="프리미엄 호텔 강릉 씨베이 이미지">
                            </figure>
                            <div class="txt-box">
                                <span class="star"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/img_star.png" alt="평점 5점"></span>
                                <h3 class="pkg-tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/pkg/sub_tit_03.png" alt="프리미엄 호텔 강릉 씨베이"></h3>
                                <p class="pkg-txt">
                                    아름다운 푸른 동해가 파노라마 처럼 펼쳐지는 주문진 해변가<span class="hidden-smxs dis-inbk"> </span>에 인접한 에어스카이호텔은 전 객실의 약 70%가 바다 조망권인 프리미엄 호텔입니다.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 풀파티 단체예약 영역 -->
        <div class="sect grpRest">
            <div class="container">
                <div class="row">
                    <h2 class="tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/grpRest/tit.png" alt="풀파티 단체예약"></h2>
                </div>
                <div class="row txt-box">
                    잠시 패스
                </div>
            </div>
        </div>

        <!-- 예약하기 영역 -->
        <div class="sect rest">
            <div class="container">
                <h2 class="tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/rest/tit.png" alt="최저가 예약하기"></h2>
                <p class="txt"><em class="fw-bd">가격걱정 NO!</em><br>패키지 할인특가로 프리미엄 호텔의 품격있는 혜택과 서비스를 최저가로 이용해보세요!</p>
                <ul class="rest-list">
                    <li>
                        <a href="#none" class="list-box">
                            <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/rest/img_prd_01.png" alt="에어스카이 호텔 숙박권 상품 바로가기">
                        </a>
                    </li>
                    <li>
                        <a href="#none" class="list-box">
                            <img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/rest/img_prd_02.png" alt="수영장 이용권 + 에어스카이 호텔 숙박권 상품 바로가기">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 시설안내 영역 -->
        <div class="sect facil">
            <div class="container">
                <h2 class="tit"><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/tit.png" alt="에어스카이호텔 시설안내"></h2>
                <p class="txt">
                    아름다운 푸른 동해 바로 앞에 위치한 에어스카이호텔은 미팅, 회의, 세미나, 가족행사까지 가능한 <br class="hidden-smxs">
                    연회장과 비즈니스코너, 그리고 여행의 피로를 풀어줄 3개의 수영장과 <br class="hidden-smxs">
                    2개의 POOL SIDE BAR , 1개의 LOBBY LOUNGE BAR (1F), 키즈코너 등이 구비되어 있습니다.
                </p>

                <ul class="facil-list">
                    <li>
                        <div class="img-box">
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_01_1.png" alt="VALUE PLATE"></figure>
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_01_2.png" alt="VALUE PLATE"></figure>
                        </div>
                        <div class="txt-box">
                            <p class="facil-list-tit">VALUE PLATE</p>
                            <p class="facil-list-txt">
                                셰프가 매일 직접 엄선한 신선한 재료들을 사용하여<br class="show-smxs"> 열정이 살아 숨쉬는 맛있는 뷔페를 제공합니다.<br>
                                모던하고 안락한 분위기에서 최고의 서비스와 함께 정성스럽게 준비한<br class="show-smxs"> 건강한 음식을 맛보실 수 있습니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_02_1.png" alt="BAR 59"></figure>
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_02_2.png" alt="BAR 59"></figure>
                        </div>
                        <div class="txt-box">
                            <p class="facil-list-tit">BAR 59</p>
                            <p class="facil-list-txt">
                                복층구조의 세련되고 스타일리쉬한 인테리어가 돋보이는 로비바에서 <br class="show-smxs">커피, 건강차, 칵테일 등 다양한 음료를 즐겨보세요.<br>
                                소중한 분들과의 만남 또는 일상탈피를 통한 삶의 여유를 찾으시기에 최적의 공간입니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_03_1.png" alt="연회장"></figure>
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_03_2.png" alt="연회장"></figure>
                        </div>
                        <div class="txt-box">
                            <p class="facil-list-tit">연회장</p>
                            <p class="facil-list-txt">
                                최대 100명까지 수용 가능한 다목적 미팅룸은 1층(대연회장) 과 지하 1층(소연회장)에 위치해 있으며 <br class="hidden-smxs">
                                행사의 목적과 성격에 맞게 분리 혹은 통합해서 사용 가능합니다.<br>
                                보드룸 회의, 세미나 등의 비즈니스 행사부터 돌잔치, 회갑연 등의 가족모임까지 다양한 연회 행사 진행이 가능합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_04_1.png" alt="하늘공원"></figure>
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_04_2.png" alt="하늘공원"></figure>
                        </div>
                        <div class="txt-box">
                            <p class="facil-list-tit">하늘공원</p>
                            <p class="facil-list-txt">
                                주문진에서 가장 고층인 에어스카이호텔 옥상에서 드넓고 깨끗한 동해바다와 주변 저층 건물들의 <br class="hidden-smxs">
                                아기자기함을 한눈에 담아보기에 적합한 장소입니다. <br class="show-smxs">선명한 동해바다의 일출을 여러분에게 선물합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_05_1.png" alt="패밀리 풀 / 인피니티 풀"></figure>
                            <figure><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/facil/list_05_2.png" alt="패밀리 풀 / 인피니티 풀"></figure>
                        </div>
                        <div class="txt-box">
                            <p class="facil-list-tit">패밀리 풀 / 인피니티 풀</p>
                            <p class="facil-list-txt">
                                바다 전망의 풀에서 가족, 연인, 친구들과 여행의 피로를 <br class="show-smxs">힐링하실 수 있는 최적의 플레이스입니다.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 단체예약 Q&A 영역 -->
        <div class="sect group">
            <div class="qna-sec">
                <h2 class="h2-tit">단체예약 Q&amp;A</h2>
                <p class="p0">에어스카이호텔 단체예약과 관련한 궁금증을 풀어드립니다.</p>
                <ul class="qna-list" id="qna-list">
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q1.</span>
                            <p>인원이 1,500명인데 이용 가능한가요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                에어스카이호텔은 340 객실로, 1,500명 까지 이용 가능합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q2.</span>
                            <p>기준인원 초과시 추가요금을 지불해야 하나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                단체이용건의 경우, 예상되는 총 인원수를 기준으로 사용할 객실 수를 정하고, 인원추가비가 포함된 이용요금이 책정되므로 별도의 추가요금은 없습니다.<br>
                                다만, 사전 협의된 인원이 초과된 경우에는, 추가 인원에 대해서 1인당 20,000원(1인, 1박기준)의 비용이 발생합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q3.</span>
                            <p>단체로 가는데 할인되나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                단체이용 고객님들께는, 더 즐거운 행사가 되도록 더 많은 할인을 제공하고 있습니다.<br>
                                (이용일, 이용인원에 따라 할인율을 변경될 수 있습니다.)
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q4.</span>
                            <p>견적서는 언제 받을 수 있나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                단체문의 상담은 1년 365일, 24시간 언제나 가능합니다.<br>
                                다만, 견적서는 문서화 작업이 필요하므로, 접수(또는 전화문의)일 기준으로, 다음날 17시 까지는 수신가능합니다. (메일 또는 팩스)<br>
                                토요일 또는 공휴일전날 접수건은 다음 영업일 17시까지는 견적서를 받으실 수 있습니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q5.</span>
                            <p>단체 이용시에도 체크인,체크아웃이 시간이 정해져 있나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                단체 이용에 불편함이 없도록, 행사일정에 따른 입퇴실 시간 변경이 가능합니다.(사전협의 필요)
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q6.</span>
                            <p>단체이용은 숙박만 해당하나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                아닙니다. 레스토랑, 연회장, 수영장 등 다양한 부대시설을 보유중이고, 어떤 행사에든 최적화된 공간과 기구를 제공하고 있습니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="f-q">
                            <span class="q-con">Q7.</span>
                            <p>레스토랑 시설도 있나요?</p>
                            <span class="ic-bArrow arr"></span>
                        </div>
                        <div class="f-a">
                            <p>
                                네.있습니다. 신선한 재료를 사용한 다양한 레스토랑 메뉴를 제공해 드리고 있습니다.(사전협의 필요)<br>
                                아울러, 맛과 풍미는 물론 단체인원을 수용이 가능한 넓은 공간을 자랑하고 있습니다.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="etc-sec" id="etc-sec">
                <div class="d-box-1 d-cm">
                    <p class="p-0">에어스카이호텔이 행복과 즐거움을 책임집니다.</p>
                    <p class="p-1 c-blue">단체여행 20년 경력의 특급여행플래너가 최적의 플랜을 제시해 드립니다.</p>
                    <p class="p-1">모든 것이 완벽한 에어스카이호텔에서 아름다운 추억을 만들어보세요!</p>
                    <p class="p-1 c-red mt-0">
                        에어스카이호텔은 340객실의 대형호텔이며 1,500명까지 동시 이용이 가능합니다.
                    </p>
                    <div class="contact-pop type-2" id="contact-pop" style="z-index: 0;">
                        <div class="d-top i-chk-bef">
                            <span class="s-1">은 </span>필수 입력 사항입니다.
                        </div>
                        <ul class="ul-tb nece">
                            <li class="li-tr">
                                <span class="s-lbl i-chk-aft">예약자</span>
                                <input type="text" class="wd-1" name="name" maxlength="40">
                                <hr class="show-smxs">
                                <span class="s-lbl i-chk-aft ml-1">연락처</span>
                                <input type="text" class="wd-2" name="tel1" onkeyup="util.checktype('number','tel1'); util.checknum('tel1', 'tel2','2');" maxlength="3">
                                <span class="mg-"></span>
                                <input type="text" class="wd-2" name="tel2" onkeyup="util.checktype('number','tel2'); util.checknum('tel2', 'tel3','3');" maxlength="4">
                                <span class="mg-"></span>
                                <input type="text" class="wd-2" name="tel3" onkeyup="util.checktype('number','tel3'); util.checknum('tel3', 'email','3');" maxlength="4">
                                <div class="show-smxs"></div>
                            </li>
                            <li class="li-tr">
                                <span class="s-lbl i-chk-aft">이메일</span>
                                <input type="text" class="wd-3" name="email">
                            </li>
                        </ul>
                        <ul class="ul-tb">
                            <li class="li-tr">
                                <span class="s-lbl">단체명</span>
                                <input type="text" class="wd-1" name="d_name">
                                <hr class="show-smxs">
                                <span class="s-lbl ml-1">행사분류</span>
                                <select name="h_gubun" id="h_gubun" class="wd-1 wd-1-2">
                                    <option value="수련회">수련회</option>
                                    <option value="워크샵/오티">워크샵/오티</option>
                                    <option value="세미나/단체행사">세미나/단체행사</option>
                                    <option value="학술모임">학술모임</option>
                                    <option value="각종잔치">각종잔치</option>
                                    <option value="기타">기타</option>
                                </select>
                            </li>
                            <li class="li-tr">
                                <span class="s-lbl">이용일</span>
                                <input type="text" class="wd-4 sdate hasDatepicker" name="date" placeholder="체크인" readonly="">
                                <select name="day" id="day" class="wd-1 wd-1-2">
                                    <option value="당일">당일</option>
                                    <option value="1박2일" selected="">1박 2일</option>
                                    <option value="2박3일">2박 3일</option>
                                    <option value="3박4일">3박 4일</option>
                                    <option value="4박5일">4박 5일</option>
                                    <option value="5박이상">5박 이상</option>
                                </select>
                            </li>
                            <li class="li-tr">
                                <span class="s-lbl">인원</span>
                                <span class="s-txt">남자</span>
                                <input type="text" class="wd-5" name="person_man" onkeyup="util.checktype('number','person_man'); n_sum();"><span>명</span>
                                <span class="s-txt">여자</span>
                                <input type="text" class="wd-5" name="person_her" onkeyup="util.checktype('number','person_her'); n_sum();"><span>명</span>
                                <span class="mg-l"></span>
                                <span class="s-txt">총 인원</span>
                                <input type="text" class="wd-6" name="person_all" value="0" disabled=""><span>명</span>
                            </li>
                            <li class="li-tr">
                                <span class="s-lbl">예산</span>
                                <input type="text" class="wd-7" name="ex_price" onchange="getNumber(this);" onkeyup="getNumber(this);" style="text-align:right;"><span>원</span>

                                <p class="p-1 c-lightred">※ 고객님이 제시한 예산범위내에서 최적의 플랜을 제시해 드리겠습니다.</p>
                            </li>
                            <li class="li-tr">
                                <span class="s-lbl ver-t">기타요청</span>
                                <textarea name="content" id="" cols="30" rows="10" class="wd-8"></textarea>
                            </li>
                        </ul>
                    </div>

                    <p class="area-btn"><a class="a-btn" href="javascript:form_check();">단체 문의하기 <span class="ic-rArrow"></span></a></p>
                </div>
                <div class="d-box-2 d-cm">
                    <p class="p-0 c-blue">단체 행사 문의에 대한 빠른 상담이 필요하신가요?</p>
                    <p class="p-1">단체 예약 전용 번호로 연락 주시면 담당자가 빠르게 안내해 드리겠습니다. </p>
                    <p class="area-btn02"><a href="tel:010-9544-8281" class="a-btn"><span class="pic-call">☎</span> <span class="num">010-2641-7741</span> <span class="txt">(주중/주말 06시~02시)</span></a></p>
                    <p class="p-2"><i class="far fa-envelope"></i> ddiasis@ebiznetworks.co.kr</p>
                </div>
            </div>
        </div>

        <!-- 버튼 영역 -->
        <div class="sect btn">
            <div class="container">
                <div class="btn-box">
                    <a href="#none" class="btn-link btn-rest"><span><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/btn_01.png" alt="에어스카이호텔 객실예약"></span></a>
                    <a href="#none" class="btn-link btn-pkg"><span><img src="http://img.hotelairsky.co.kr/svc/img/ld/ppt/btn_02.png" alt="호텔 수영장 & 숙박 패키지구매"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="group-popup">
        <div class="popup-wrap">
            <div class="popup-container">
                <div class="popup-cust">
                    <p class="f-bd"><span class="fc-yellow">홍길동</span> 고객님!</p>
                    <p>에어스카이호텔 방문을 계획해 주셔서 감사합니다.</p>
                    <p class="popup-txt pd-tb">문의사항이 정상 접수 되었습니다.</p>
                    <p class="popup-txt">
                        문의에 대한 답변은 <span class="fc-yellow">2018년 03월 21일 17시</span> 까지 <br>
                        남겨주신 연락처 또는 이메일로 빠르게 안내해 드리겠습니다.
                    </p>
                </div>
                <p class="info-txt">
                    단체문의 관련 통화는 1년 365일 언제나 가능합니다.<br>
                    다만, 견적전달은 영업일에만 가능합니다.
                </p>
                <a class="btn-close" href="javascript:void(0);" onclick="popupClose('.group-popup');">확 인</a>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $.fn.datepicker.dates['ko'] = {
                days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                daysMin: ["일", "월", "화", "수", "목", "금", "토"],
                months: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
                monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                today: "Today",
                clear: "Clear",
                format: "yyyy-mm-dd",
                titleFormat: "MM yyyy년",
                weekStart: 0,
            };
            var opt = {
                format: 'yyyy-mm-dd',
                language: 'ko',
                autoclose: !0,
                startDate: get_today()
            }
            $('.sdate').datepicker(opt);
            $('#qna-list > li').on('click', function() {
                var idx = $(this).index();
                $(this).toggleClass('on').siblings().removeClass('on');
            });
        })

        function faq_move() {
            $('html, body').stop().animate({
                //scrollTop: $($_anchor.attr('href')).offset().top - 150
                scrollTop: ($(".etc-sec").offset().top - $('#gnb-header').height() - 25) //150대신 $('#gnb-header').height()-25 으로 적용해주세요!
            }, 800);
            event.preventDefault();
        }
    </script>


    <footer class="footer">
        <div class="group">
            <div class="terms-bar">
                <ul class="terms-list">
                    <li class="hidden-smxs"><a href="/main/about/index.php">회사소개</a></li>
                    <li class="l hidden-smxs">|</li>
                    <li class="hidden-smxs"><a href="/main/map/index.php">찾아오시는 길</a></li>
                    <li class="l hidden-smxs">|</li>
                    <li><a href="/main/access.php">이용약관</a></li>
                    <li class="l">|</li>
                    <li><a href="/main/policy.php">개인정보취급방침이용약관</a></li>
                    <li class="l">|</li>
                    <li><a href="/main/email.php">이메일무단수집금지</a></li>
                </ul>
            </div>
            <div class="sfa">
                <div class="split split-2">
                    <div class="inquiry-bar">
                        <a class="item item-1 clr">
                            <p class="s1">예약문의<span class="s1-2">예약 확정, 변경, 취소 / 이벤트 관련 문의</span></p>
                            <!-- <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">1666-6701</span> -->
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">1666-1243</span>
                            <span class="s3">(주중 09시 30분 ~ 25시 / 주말 09시 30분 ~ 24시)</span>
                        </a>
                        <a class="item item-2 clr">
                            <p class="s1">프론트<span class="s1-2">체크인, 체크아웃 / 시설이용 관련 문의</span></p>
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">033-820-0005</span>
                            <span class="s3">(주중/주말 06시 ~ 02시)</span>
                        </a>
                        <a class="item item-3 clr">
                            <p class="s1">단체문의<span class="s1-2">워크샵, 학생, 산업단체 / 단체이용 관련 문의</span></p>
                            <!-- <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">010-9544-8281</span> -->
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">010-9094-0396</span>
                            <span class="s3">(주중/주말 06시 ~ 02시)</span>
                        </a>
                    </div>
                </div>
                <div class="split split-1">
                    <div class="logo-box">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/footer_logo.png" alt="씨베이호텔" class="logo">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/logo_f_goco.png" alt="고코투어" class="logo-goco">
                        <div id="family-wrapper" class="family-wrapper">
                            <div class="family-site">
                                <span class="family-site-label" onclick="$(this).next().toggle()">패밀리사이트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▲</span>
                                <ul class="site" style="display: none">
                                    <li class="group-name">
                                        <div class="fam_btn">[호텔/리조트]</div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ocean2you.co.kr/" target="_blank">오션투유리조트</a></div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ramadapt.co.kr/" target="_blank">평택라마다앙코르호텔</a></div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://seabay.co.kr/" target="_blank">씨베이호텔</a></div>
                                    </li>
                                    <li class="group-division" style="border-top: 1px dashed #a3a3a3; margin: 5px 10px"></li>
                                    <li class="group-name">
                                        <div class="fam_btn">[호텔위탁운영사]</div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ebiznetworks.co.kr/home/program/?dd=WQwvfDZJKkYs" target="_blank">이비즈네트웍스</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="addr-bar">
                        <address class="addr">
                            <div class="info">
                                <em class="item">에어스카이호텔</em><br>
                                <span class="item">강원도 강릉시 주문진읍 주문로 59</span>
                            </div>
                            <div class="info">
                                <em class="item">(주)바로네트웍스</em><br>
                                <span class="item">대표이사: 박기범</span><br class="show-smxs">
                                <span class="item">주소 : 서울특별시 강남구 테헤란로82길 15, 3층(대치동, 디아이타워)</span><br>
                                <span class="item">사업자등록번호 : 215-87-85373</span>
                                <span class="item">통신판매업 : 제2017-서울강남-00561호</span><br>
                                <span class="item">여행등록번호 : 제2017-07호</span>
                                <span class="item">여행영업보증서 : 국내여행 제100-000-2015 0144 5816호</span><br>
                            </div>
                            <div class="info">
                                <em class="item">(주)이비즈네트웍스</em><br>
                                <span class="item">대표이사: 박기범</span><br class="show-smxs">
                                <span class="item">주소 : 서울특별시 강남구 테헤란로82길 15 (대치동, 디아이타워)</span><br>
                                <span class="item">사업자등록번호 : 220-87-30865</span>
                                <span class="item">통신판매업 : 강남-11501호</span><br>
                                <span class="item">여행등록번호 : 제2015-44호</span>
                                <span class="item">여행영업보증서 : 국내여행 제 100-000-2018041610009호</span><br>
                                <span class="item">*이비즈네트웍스는 에어스카이호텔의 공식 온라인 총판으로서 온라인 예약 및 결제를 대행합니다. </span>
                            </div>
                            <p class="copyright">COPYRIGHT © SEABAY HOTEL GANGNEUNG. ALL RIGHTS RESERVED.</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- http://design.ebiznetworks.co.kr/joon/airskyhotel/ -->
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery.parallax.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery.word-break-keep-all.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/flexibility.min.js"></script>
<![endif]-->

    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jssor/jssor.slider.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/func/function01.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/js/script.min.js"></script>
</body>

</html>