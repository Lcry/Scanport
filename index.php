<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>在线端口扫描</title>
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./css/sb-admin-2.css" rel="stylesheet">
    <style>
        #loading{
            background-color: #FFF;
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            margin-top: 0px;
            top: 0px;
        }
        #loading-center{
            width: 100%;
            height: 100%;
            position: relative;
        }
        #loading-center-absolute {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 150px;
            width: 150px;
            margin-top: -75px;
            margin-left: -75px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .object{
            width: 20px;
            height: 20px;
            background-color: #0099CC;
            position: absolute;
            left: 65px;
            top: 65px;
            -moz-border-radius: 50% 50% 50% 50%;
            -webkit-border-radius: 50% 50% 50% 50%;
            border-radius: 50% 50% 50% 50%;
        }
        .object:nth-child(2n+0) {
            margin-right: 0px;

        }
        #object_one {
            -webkit-animation: object_one 2s infinite;
            animation: object_one 2s infinite;
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }
        #object_two {
            -webkit-animation: object_two 2s infinite;
            animation: object_two 2s infinite;
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }
        #object_three {
            -webkit-animation: object_three 2s infinite;
            animation: object_three 2s infinite;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }
        #object_four {
            -webkit-animation: object_four 2s infinite;
            animation: object_four 2s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }
        #object_five {
            -webkit-animation: object_five 2s infinite;
            animation: object_five 2s infinite;
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        #object_six {
            -webkit-animation: object_six 2s infinite;
            animation: object_six 2s infinite;
            -webkit-animation-delay: 0.7s;
            animation-delay: 0.7s;
        }
        #object_seven {
            -webkit-animation: object_seven 2s infinite;
            animation: object_seven 2s infinite;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }
        #object_eight {
            -webkit-animation: object_eight 2s infinite;
            animation: object_eight 2s infinite;
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }
        #object_big{

            position: absolute;
            width: 50px;
            height: 50px;
            left: 50px;
            top: 50px;
            -webkit-animation: object_big 2s infinite;
            animation: object_big 2s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }
        @-webkit-keyframes object_big {
            50% { -webkit-transform: scale(0.5); }

        }

        @keyframes object_big {
            50% {
                transform: scale(0.5);
                -webkit-transform: scale(0.5);
            }

        }
        @-webkit-keyframes object_one {
            50% { -webkit-transform: translate(-65px,-65px)  ; }
        }
        @keyframes object_one {
            50% {
                transform: translate(-65px,-65px) ;
                -webkit-transform: translate(-65px,-65px) ;
            }

        }
        @-webkit-keyframes object_two {
            50% { -webkit-transform: translate(0,-65px) ; }
        }

        @keyframes object_two {
            50% {
                transform: translate(0,-65px) ;
                -webkit-transform: translate(0,-65px) ;
            }

        }
        @-webkit-keyframes object_three {
            50% { -webkit-transform: translate(65px,-65px) ; }
        }

        @keyframes object_three {
            50% {
                transform: translate(65px,-65px) ;
                -webkit-transform: translate(65px,-65px) ;
            }
        }

        @-webkit-keyframes object_four {

            50% { -webkit-transform: translate(65px,0) ; }

        }
        @keyframes object_four {
            50% {
                transform: translate(65px,0) ;
                -webkit-transform: translate(65px,0) ;
            }
        }
        @-webkit-keyframes object_five {
            50% { -webkit-transform: translate(65px,65px) ; }
        }
        @keyframes object_five {
            50% {
                transform: translate(65px,65px) ;
                -webkit-transform: translate(65px,65px) ;
            }
        }
        @-webkit-keyframes object_six {

            50% { -webkit-transform: translate(0,65px) ; }

        }
        @keyframes object_six {
            50% {
                transform:  translate(0,65px) ;
                -webkit-transform:  translate(0,65px) ;
            }
        }
        @-webkit-keyframes object_seven {

            50% { -webkit-transform: translate(-65px,65px) ; }

        }
        @keyframes object_seven {
            50% {
                transform: translate(-65px,65px) ;
                -webkit-transform: translate(-65px,65px) ;
            }

        }
        @-webkit-keyframes object_eight {

            50% { -webkit-transform: translate(-65px,0) ; }

        }

        @keyframes object_eight {
            50% {
                transform: translate(-65px,0) ;
                -webkit-transform: translate(-65px,0) ;
            }

        }
    </style>
</head>
<body>
<div id="loading" class="hidden">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
            <div class="object" id="object_big"></div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row" style="margin-top:80px">
            <div class="col-md-4 col-md-offset-4">
                <a href="#"><img class="img-responsive img-rounded" src="logo.png"/></a>
            </div>
        </div>
        <div class="row" style="margin-top:30px">
           <form id="myform" method="post" action="scanPort.php" class="col-md-offset-3 ">
               <div class="row">
                     <div class="form-group">
                            <div class="col-md-8">
                                <input style="height: 40px;" type="text" class="form-control" name="inputIp" id="inputIp" placeholder="请输入IP地址 进行端口扫描">
                            </div>
                            <div class="col-md-2">
                                <button style="height: 40px;" type="button" class="btn btn-primary form-control" onclick="check()">提交</button>
                            </div>
                     </div>

               </div>
               <p id="tip" style="color: red;margin-left: 10px"></p>
           </form>
        </div> 
  <div class="well" style="text-align: center;"><a href="http://weibo.com/leizi2015">新浪微博</a></div>
    </div>
    <script src="./jquery/dist/jquery.min.js"></script>
    <script>
        function check(){
            var inputIp = document.getElementById("inputIp");
            if(inputIp.value==""){
                document.getElementById("tip").innerText="*IP地址不能为空";
            }else{
                $('#loading').removeClass("hidden");
                document.getElementById("myform").submit();
            }
        }

    </script>
</body>
</html>
