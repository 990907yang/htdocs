<?php
   //phpinfo();
    //주석임
    /*여러줄 주석임 ㅇㅋ?*/
    //print "출력문임 저는 당신의 똥입니다."; 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<style>
    .gugu { background-color: pink; }    
</style>
<body>
    <header>
        <ul>
          <li>안녕</li>
          <li>하시다?</li>
          <li>3번째 예제<?php
              print PHP_VERSION;
              print PHP_OS;
              define("HELLO","안녕하시다요");
              print HELLO;
              print __FILE__;
              print __DIR__;
              print "dddasfasdfasdfasdfasdfasdf";
              ?></li>
          <?php
            print "알겠습니다."
          ?>
          <li>4</li>
          <?php
            $hello = "안녕하세요!";
            $data = "데이터가 ㅇ벗었다."; //자동으로 타입변환
            //배열
            $week[0]="월";
            $week[1]="화";
            $mon=array(1,2,3,4,5,6,7,8,9,"월","화");
            $year=[2016,2015,2014,2013];
            //배열초기화
            $month=array();
            
            
            print $hello;
            print $data;
            print $week[1];
            print $mon[0];
            print $year[3];
            
            
            //연관배열
            $member["name"]="양경식";
            $member["age"]="18";
            $member["height"]="3000000cm";
                print $member["age"];
                print "<pre>";
                print_r ($member);
            
            ?>
      </ul>
      <p class="gugu">
        <?php
            for($i=1; $i<=9; $i++){
                print "<br>";
                
                if($i%2 == 0){
                    for($j=1; $j<=9; $j++){
                    print "<span class='red'>".$i."*".$j."=".$i*$j."<br></span>";
                }
                }
                
            }    
        ?>
     </p>
    </header>
</body>
</html>