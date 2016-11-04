<?php
    require_once 'inc/header.php';
    include "db.php";
    $sql = "select * from board where idx='{$_GET['idx']}'";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
<!-- //skip nav -->
<div id="wrap" class="sub_bg">
	<!-- header -->	
	<div id="header">
		<h1 class="logo">
			<a href="#" class="sp_com kcc">
				<strong class="blind">KCC 금강컨트리클럽</strong>
			</a>
		</h1>			
		<div id="site_gnb">
			<div class="">
			<ul class="gnb_menu">
			<li>김윤미님 환영합니다</li>
			<li><a href="#">회원정보수정</a></li>
			<li><a href="#">채팅룸</a></li>
			<li><a href="#">로그아웃</a></li>
			<li><a href="#">사이트맵</a></li>
			</ul>
			<a class="m_gnb_ico"></a>
			<div class="close_box ">
				<a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
			</div>
			</div>
		</div>
		<div id="site_menu">
			<h2>
				<a class="m_menu_ico"><span  class="blind">사이트메뉴</span></a>
			</h2>
			<!--해당메뉴 li class에 selected 추가-->
			<div class="menu_lst_wrap">
			<ul class="site_menu_lst">
			<li class="menu1">
				<a href="#" class="sp_com site_menu1">Introduction 클럽소개</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu1_1">클럽소개</a></li>
				<li><a href="#" class="sp_com site_menu1_2">연혁</a></li>
				<li><a href="#" class="sp_com site_menu1_3">이용안내</a></li>
				<li><a href="#" class="sp_com site_menu1_4">관계사 소개</a></li>
				<li><a href="#" class="sp_com site_menu1_5">오시는 길</a></li>
				<li><a href="#" class="sp_com site_menu1_6">CONTACT US</a></li>
				</ul>
			</li>
			<li class="menu2">
				<a href="#" class="sp_com site_menu2">RESERVATION 예약정보</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu2_1">예약관리</a></li>
				<li><a href="#" class="sp_com site_menu2_2">조인관리</a></li>
				<li><a href="#" class="sp_com site_menu2_3">이용내역</a></li>
				<li><a href="#" class="sp_com site_menu2_4">위약정보</a></li>
				</ul>
			</li>
			<li class="menu3">
				<a href="#" class="sp_com site_menu3">COURCE 코스안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu3_1">코스소개</a></li>
				<li><a href="#" class="sp_com site_menu3_2">서코스</a></li>
				<li><a href="#" class="sp_com site_menu3_3">동코스</a></li>
				<li><a href="#" class="sp_com site_menu3_4">남코스</a></li>
				<li><a href="#" class="sp_com site_menu3_5">코스 갤러리</a></li>
				</ul>
			</li>
			<li class="menu4">
				<a href="#" class="sp_com site_menu4">FACILITIES 시설안내</a>
				<ul class="site_sub_menu">
				<li><a href="#" class="sp_com site_menu4_1">클럽하우스</a></li>
				<li><a href="#" class="sp_com site_menu4_2">특선메뉴</a></li>
				<li><a href="#" class="sp_com site_menu4_3">그늘집</a></li>
				<li><a href="#" class="sp_com site_menu4_4">락커룸</a></li>
				<li><a href="#" class="sp_com site_menu4_5">프로샵</a></li>
				</ul>
			</li>
			<li class="menu5">
				<a href="#" class="sp_com site_menu5">COMMUNITY 커뮤니티</a>
				<ul class="site_sub_menu">
                                                                        <li><a href="sub1.php" class="sp_com site_menu5_1">공지사항</a></li>
                                                                        <li><a href="" class="sp_com site_menu5_2">자료실</a></li>
                                                                        <li><a href="#" class="sp_com site_menu5_3">Joinroom</a></li>
				</ul>
			</li>
			</ul>
			<div class="close_box close_box2">
				<a href="#" class="btn_close"><span class="blind">메뉴 닫기</span></a>
			</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
			<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">COMMUNITY 커뮤니티</h2>
					<ul class="lnb">
					<li><a href="#">공지사항<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#" class="selected_hard">자료실<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">Joinroom<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
                                    <p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">회원서비스</a>						
						<span>&gt;</span>
						<strong>회원가입</strong>
					</p>
					<div class="join_wrap">	
						<h3 class="sp_sub join_title">공지사항</h3>
						<p class="join_txt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
                                    <table id="view">
                                       <?php
                                            foreach($result as $ro){
                                        ?>
                                        <tr class="view_tr">
                                            <td></td><td>제목:<?=$ro['title']?></td>
                                        </tr>
                                        <tr class="view_tr">
                                            <td></td><td>조회수:<?=$ro['count']?></td>
                                        </tr>
                                        <tr class="view_tr">
                                            <td></td><td>작성일:<?=$ro['date']?></td>
                                        </tr>
                                        <tr class="view_tr"><td>내용</td><td><?=$ro['content']?></td></tr>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                    <p><a href="./modified.php?idx=<?=$ro['idx']?>">수정</a></p>
                                    <p><a href="./del.php?idx=<?=$ro['idx']?>">삭제</a></p>
                                    <p><a href="sub1.php">목록</a></p>
			        </div>	
		          </div>	
	            </div>
            </div>
	<!-- //container -->
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>