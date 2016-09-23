
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="kcc.css">
        <meta charset="UTF-8">
        <title>KCC</title>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div class="log">
                    <ul id="wel">
                        <li>justhwoo님 환영합니다</li>
                        <li>|</li>
                        <li>회원정보수정</li>
                        <li>|</li>
                        <li>채팅룸</li>
                        <li>|</li>
                        <li>로그아웃</li>
                        <li>|</li>
                        <li>사이트맵</li>
                    </ul>
                    <div id="line"></div>
                    <div><img id="img" src="img/kcclogo.png" alt="logo">
                        <img id="logo" src="img/Untitled-1.png" alt="logo"></div>
                    <div class="intro">
                        <ul>
                            <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">INTRODUCTION<br/>클럽소개</a></li>
                            <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">RESERVATION<br/>예약하기</a></li>
                            <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COURSE<br/>코스안내</a></li>
                            <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">FACILITIES<br/>시설안내</a></li>
                            <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COMMUNITY<br/>커뮤니티</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="article">
                <div id="survise">
                    <h2>회원서비스</h2>
                    <nav>
                        <ul>
                            <li>로그인</li>
                            <li>회원가입 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ></li>
                            <li>아이디/비밀번호찾기</li>
                            <li>회원정보 수정</li>
                            <li>개인정보 취급방침</li>
                        </ul>
                    </nav>
                </div>
                <div id="joinbox">
                    <div id="join">
                        <h4>홈 &nbsp; >&nbsp; 회원서비스&nbsp; > &nbsp;회원가입 <br/> &nbsp;</h4>
                        <h1>회원가입</h1>
                        <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
                        <ul>
                            <li>약관동의</li>
                            <li>></li>
                            <li>본인인증</li>
                            <li>></li>
                            <li>회원정보입력</li>
                            <li>></li>
                            <li>가입완료</li>
                        </ul>
                    </div>
                    <div id="in">
                        <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
                    </div>
                    <div id="put">
                        <table class="table">
                            <tr>
                                <td>이름&nbsp;<span class="star">*</span></td>
                                <td><input name="name" type="text"></td>
                            </tr>
                            <tr>
                                <td>생년월일&nbsp;<span class="star">*</span></td>
                                <td><select name="year" class="year">
                                    <option value="" selected>연도를 선택</option>
                                    <?php
                                        for($i=1960; $i<=2016; $i++){
                                            print "<option value=".$i.">".$i."</option>";
                                        }
                                    ?>
                                    </select>&nbsp;년</td>
                                <td><select name="mot" class="mot">
                                    <option value="" selected>월을 선택</option>
                                    <?php
                                        for($i=1; $i<=12; $i++){
                                            print "<option value=".$i.">".$i."</option>";
                                        }
                                    ?>
                                    </select>&nbsp;월</td>
                                <td><select name="day" class="day">
                                    <option value="" selected>일을 선택</option>
                                    <?php
                                    for($i=1; $i<=31; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                    </select>&nbsp;일
                                </td>
                            </tr>
                            <tr>
                                <td>아이디&nbsp;<span class="star">*</span></td>
                                <td><input name="id" type="text" style="margin-left:16px;"></td>
                                <td><input type="button" value="중복확인"></td>
                                <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                            </tr>
                            <tr>
                                <td>비밀번호&nbsp;<span class="star">*</span></td>
                                <td><input name="password" type="password"></td>
                                <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                            </tr>
                            <tr>
                                <td>E-MAIL&nbsp;<span class="star">*</span></td>
                                <td><input type="text" style="margin-left:26px;"></td>
                            </tr>            
                        </table>
                    </div>
                    <div id="line2"></div>
                    <div id="put2">
                        <table class="table2">
                            <tr>
                                <td>직장명&nbsp;<span class="star">*</span></td>
                                <td><input type="text" style="margin-left:14px;"></td>
                            </tr>
                            <tr>
                                <td>직종</td>
                                <td><input type="text" style="margin-left:42px;"></td>
                            </tr>
                            <tr>
                                <td>직위&nbsp;<span class="star">*</span></td>
                                <td><input type="text" style="margin-left:30px;"></td>
                            </tr>
                            <tr>
                                <td id="workpost">직장 우편번호<span class="star">*</span></td>
                                <td><input type="text" style="width:40px;">&nbsp;-</td>
                                <td><input type="text" style="width:40px;"></td>
                                <td><input type="button" value="우편번호 찾기"></td>
                            </tr>
                            <tr>
                                <td>직장주소<span class="star">*</span></td>
                                <td><input type="text" style="width:300px; margin-left:4px;"></td>
                                <td><br/><input type="text" style="width:300px; margin-left:129px;"></td>
                            </tr>
                            <tr>
                                <td id="number">직장전화번호<span class="star">*</span></td>
                                <td><select name="phone">
                                    <option value="1">010</option>
                                    <option value="2">011</option>
                                    <option value="3">016</option>
                                    <option value="4">017</option>
                                    <option value="5">018</option>
                                    <option value="6">019</option>
                                    </select>&nbsp;-</td>
                                <td><input type="text" style="width:60px;">&nbsp;-</td>
                                <td><input type="text" style="width:60px;"></td>
                            </tr>
                            <tr>
                                <td id="fax">팩스번호</td>
                                <td><select name="phone">
                                    <option value="1">010</option>
                                    <option value="2">011</option>
                                    <option value="3">016</option>
                                    <option value="4">017</option>
                                    <option value="5">018</option>
                                    <option value="6">019</option>
                                    </select>&nbsp;-</td>
                                <td><input type="text" style="width:60px;">&nbsp;-</td>
                                <td><input type="text" style="width:60px;"></td>
                            </tr>
                            <tr>
                                <td id="merry">결혼여부</td>
                                <td><input type="radio"></td>
                                <td><span class="ex">미혼</span></td>
                                <td><input type="radio"></td>
                                <td><span class="ex">기혼</span></td>
                            </tr>
                            <tr>
                                <td id="mdate">결혼기념일</td>
                                <td><select name="year" class="year">
                                    <option value="1">2000</option>
                                    <option value="2">2001</option>
                                    <option value="3">2002</option>
                                    <option value="4">2003</option>
                                    <option value="5">2004</option>
                                    <option value="6">2005</option>
                                    <option value="7">2006</option>
                                    <option value="8">2007</option>
                                    <option value="9">2008</option>
                                    <option value="10">2009</option>
                                    <option value="11">2010</option>
                                    <option value="12">2011</option>
                                    <option value="13">2012</option>
                                    <option value="14">2013</option>
                                    <option value="15">2014</option>
                                    <option value="16">2015</option>
                                    <option value="17">2016</option>
                                    </select>&nbsp;년</td>
                                <td><select name="mot" class="mot">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    </select>&nbsp;월</td>
                                <td><select name="day" class="day">
                                    <option value="1">11</option>
                                    <option value="2">16</option>
                                    <option value="3">28</option>
                                    </select>&nbsp;일
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="line3"></div>
                    <div id="btn">
                        <a href="#" id="back">취소</a>
                        <a href="#" id="next">다음</a>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="footer_line"></div>
                <div class="footer_p">
                    <h4>회칙 및 이용약관 &nbsp; &nbsp; &nbsp; &nbsp; 개인정보 취급방침 &nbsp; &nbsp; &nbsp; &nbsp; 인트라넷</h4>    
                    <h5>(주)금강레져 대표자:조종호&nbsp; <span class="W">|</span>&nbsp; 경기도 여주군 가남면 본두리 1-2&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-880-6000&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-884-5155</h5>
                    <h5>사업자등록번호: 126-81-0997&nbsp; <span class="W">|</span>&nbsp; 통신판매법 신고 : 2009-경기여주-0058&nbsp; <span class="W">|</span>&nbsp; 개인정보관리책임자 : 윤두환 031-880-6000 <input type="button" value="사업자 정보확인 ▶"></h5>
                    <h5>Copyright (c) Kumkang leisure Ltd. All rights reserved</h5>
                </div>
            </div>
        </div>
    </body>
</html>