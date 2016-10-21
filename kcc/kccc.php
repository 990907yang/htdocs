<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>20615양경식</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
      <script>
        
        function sample6_execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var fullAddr = ''; // 최종 주소 변수
                    var extraAddr = ''; // 조합형 주소 변수

                    // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        fullAddr = data.roadAddress;

                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        fullAddr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                    if(data.userSelectedType === 'R'){
                        //법정동명이 있을 경우 추가한다.
                        if(data.bname !== ''){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있을 경우 추가한다.
                        if(data.buildingName !== ''){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                        fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                    document.getElementById('sample6_address').value = fullAddr;

                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById('sample6_address2').focus();
                }
            }).open();
        }

        $(document).ready(function(){
            var re_id = /^[a-z0-9_]{4,20}$/; //아이디 정규식
            var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 정규식
            var re_email = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/; // 이메일 정규식
            var 
                form = $(".form"),
                uid = $("#uid"),
                upw = $("#upw"),
                uemail = $("#uemail");
            
            $("#uid").on("keyup keydown keypress", function(){
                fn($("#uid").val());
            });
            
            form.submit(function(){
            if(re_id.test(uid.val()) != true){
                alert("[ID 입력 오류] 유효한 ID를 입력해 주세요.");
                uid.focus();
                return false;
            }else if(re_pw.test(upw.val()) != true){
                alert("[PASSWORD 입력 오류] 유효한 PW를 입력해 주세요.");
                upw.focus();
                return false;
            }else if(re_email.test(uemail.val()) != true){
                alert("[EMAIL 입력 오류] 이메일을 정확히 입력해 주세요.");
                uemail.focus();
                return false;
            }
        });
        });

        function fn(str){
            $.post("member.php", { id: str }, function(data) {
                $(".id_ck").empty();
                $(".id_ck").append(data);
        });
        }
        
        
    </script>
    <style>
        * { margin: 0; padding: 0; }
        body { background: #3498db; }
        .form { margin: 0 auto; margin-top: 160px; width: 500px; height: 330px; border: 1px solid #ddd; }
        .w { width: 50px;  height: 20px;}
        .m { margin: 15px 0  3px 0px; }
        span { margin-left: 10px; }
        .bb { margin-left: 5px; }
        .start { margin-top: 10px; }
    </style>
</head>
<body>
    <form method="post" action="signup_check.php" class="form">
        <span>이름</span><input name="name" type="text" class="m start" placeholder="nmae" required><br>
        <span>생년월일</span><select name="year" class="year m" required>
                    <option value="" selected>연도를 선택</option>
                    <?php
                        for($i=1960; $i<=2016; $i++){
                            print "<option value=".$i.">".$i."</option>";
                        }
                    ?>
                </select>년
                <select name="month" class="month m" required>
                    <option value="" selected>월을 선택</option>
                    <?php
                        for($i=1; $i<=12; $i++){
                            print "<option value=".$i.">".$i."</option>";
                        }
                    ?>
                </select>월
                <select name="day" class="day m" required>
                    <option value="" selected>일을 선택</option>
                    <?php
                    for($i=1; $i<=31; $i++){
                        print "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>일<br>
        <span>아이디</span><input name="id" id="uid" type="text" class="m" placeholder="ID" required>
        <span class="id_ck"></span><br>
        <span>비밀번호</span><input name="password" id="upw"type="password" placeholder="PASSWORD" class="m" required><br>
        <span>휴대폰 번호</span> <select name="phone1" class="w" required>
                       <option value="010">010</option>
                       <option value="011">011</option>
                       <option value="016">016</option>
                       <option value="017">017</option>
                       <option value="018">018</option>
                       <option value="019">019</option>
                    </select> - <input name="phone2" type="text" class="w" required> - <input name="phone3" type="text" class="w" required><br>
        <span>SMS 수신여부</span> <input type="radio" name="ok" value="1" checked required>예
                    <input type="radio" name="ok" value="0" required>아니오<br>
        <span>E-MAIL</span> <input type="text" name="email" id="uemail" placeholder="admin@aaa.com" class="m" required><br>
        
        
        <input type="text" name="add_num" id="sample6_postcode" placeholder="우편번호" required readonly>
        <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" required><br>
        <input type="text" name="address1" id="sample6_address" placeholder="주소" readonly required>
        <input type="text" name="address2" id="sample6_address2" placeholder="상세주소" required>
        <button type="submit">회원가입</button>
    </form>
</body>
  
</html>