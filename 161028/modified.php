<?php
    require_once 'inc/header.php';
    include "db.php";
    $sql = "select * from board where idx='{$_GET['idx']}'";
    $se = $pdo->prepare($sql);
    $se->execute();
    $re = $se->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	//jquery onload
	$(function(){
		//Html parsing 이 다 된 후 호출되는 영역.
	  $(".lnb li a").mouseover(function(){
	  	$(".lnb li a.selected").removeClass("selected");
	  	$(this).addClass("selected");
	  });
	});
</script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#gnb" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>
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
			<ul class="gnb_menu">
			<li>김윤미님 환영합니다</li>
			<li><a href="#">회원정보수정</a></li>
			<li><a href="#">채팅룸</a></li>
			<li><a href="#">로그아웃</a></li>
			<li><a href="#">사이트맵</a></li>
			</ul>
		</div>
		<div id="site_menu_wrap">
			<div id="site_menu">
				<h2 class="blind">사이트메뉴</h2>
				<ul class="site_menu_lst">
				<li class="menu_lst1">
					<a href="#" class="sp_com introduct"><span class="blind">Introduction 클럽소개</span></a>
					<ul class="site_sub_menu">
					<li><a href="#"><span class="blind">클럽소개</span></a></li>
					<li><a href="#"><span class="blind">연혁</span></a></li>
					<li><a href="#"><span class="blind">이용안내</span></a></li>
					<li><a href="#"><span class="blind">관계사 소개</span></a></li>
					<li><a href="#"><span class="blind">오시는 길</span></a></li>
					<li><a href="#"><span class="blind">CONTACT US</span></a></li>
					</ul>
				</li>
				<li class="menu_lst2">
					<a href="#" class="sp_com reservation"><span class="blind">RESERVATION 예약정보</span></a>
					<ul class="site_sub_menu">
					<li><a href="#"><span class="blind">예약관리</span></a></li>
					<li><a href="#"><span class="blind">조인관리</span></a></li>
					<li><a href="#"><span class="blind">이용내역</span></a></li>
					<li><a href="#"><span class="blind">위약정보</span></a></li>
					</ul>
				</li>
				<li class="menu_lst3">
					<a href="#" class="sp_com course"><span class="blind">COURCE 코스안내</span></a>
					<ul class="site_sub_menu">
					<li><a href="#"><span class="blind">코스소개</span></a></li>
					<li><a href="#"><span class="blind">서코스</span></a></li>
					<li><a href="#"><span class="blind">동코스</span></a></li>
					<li><a href="#"><span class="blind">남코스</span></a></li>
					<li><a href="#"><span class="blind">코스 갤러리</span></a></li>
					</ul>
				</li>
				<li class="menu_lst4">
					<a href="#" class="sp_com facilities"><span class="blind">FACILITIES 시설안내</span></a>
					<ul class="site_sub_menu">
					<li><a href="#"><span class="blind">클럽하우스</span></a></li>
					<li><a href="#"><span class="blind">특선메뉴</span></a></li>
					<li><a href="#"><span class="blind">그늘집</span></a></li>
					<li><a href="#"><span class="blind">락커룸</span></a></li>
					<li><a href="#"><span class="blind">프로샵</span></a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="sp_com community"><span class="blind">COMMUNITY 커뮤니티</span></a>
					<ul class="site_sub_menu">
					<li><a href="#"><span class="blind">공지사항</span></a></li>
					<li><a href="#"><span class="blind">자료실</span></a></li>
					<li><a href="#"><span class="blind">Joinroom</span></a></li>
					</ul>
				</li>
				</ul>
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
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#" class="selected_hard">글쓰기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">커뮤니티</a>						
						<span>&gt;</span>
						<strong>글쓰기</strong>
					</p>
                    <div class="join_wrap">
                       <?php
                            foreach($re as $ro){
                        ?>
                        <form action="modify.php?idx=<?=$ro['idx']?>" method="post">
                                <span>제목</span><input type="text" name="title" value="<?=$ro['title']?>">
                                <span>작성자</span><input type="text" name="writer" value="<?=$ro['writer']?>" disabled>
                                <span>내용</span><input type="textarea" class="textaaa" name="content" value="<?=$ro['content']?>">
                            <button type="submit">수정</button>
                        </form>
                        <?php
                            }
                        ?>
                    </div>
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
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