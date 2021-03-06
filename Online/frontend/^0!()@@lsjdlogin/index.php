<?php
    include 'config/session.php';
    include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 lrHeight left">
            <div class="left-bg">
                <!--p为占位-->
                <p style="height: 10px"></p>

                <div class="left-nav" style="color: #2188b6">
                    <span class="map-nav usemessage"></span>
                    <span class="messagename">用户管理</span>
                    <span class="rx" style="background-position:-260px -36px "></span>
                </div>
                <ul class="list" style="display: block;color: #2188b6">
                    <li class="list-li" url="usecreat.php">用户列表</li>
                </ul>

                <div class="left-nav">
                    <span class="map-nav runanalyze"></span>
                    <span class="messagename">运营分析</span>
                    <span class="rx"></span>
                </div>
                <ul class="list">
                    <li class="list-li" url="user_view.php">用户视图</li>
                    <li class="list-li" url="user_oper.php">用户操作</li>
                    <li class="list-li" url="static_ang.php">统计分析</li>
                </ul>

            </div>
        </div>
        <div class=" col-lg-10 lrHeight right">
            <div class="iframe-con">
                <!--<div class="scroll-container">-->
                <!--<div class="scroll">-->
                <iframe src="usecreat.php" frameborder="0" class="iframe"></iframe>
                <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<script>
    //  左侧导航第一个
    var bol0 = true;
    $(".left-nav").eq(0).click(function(){
        if(bol0){
            $(this).css("color","#ffffff");
            $(".usemessage").css("background-position","2px 6px")
            $(".rx").eq(0).css("background-position"," -260px 6px");
            $(".list").eq(0).slideUp();
            bol0 = false;
        }else{
            $(this).css("color","#2188b6");
            $(".usemessage").css("background-position","2px -41px")
            $(".rx").eq(0).css("background-position"," -260px -36px");
            $(".list").eq(0).slideDown();
            bol0 = true;
        }
    })
    //  左侧导航第2个
    var bol1 = true;
    $(".left-nav").eq(1).click(function(){
        if(bol1){
            $(this).css("color","#2188b6");
            $(".runanalyze").css("background-position"," -46px -40px");
            $(".rx").eq(1).css("background-position"," -260px -36px");
            $(".list").eq(1).slideDown();
            bol1 = false;
        }else{
            $(this).css("color","#ffffff");
            $(".runanalyze").css("background-position"," -46px 7px");
            $(".rx").eq(1).css("background-position"," -260px 6px");
            $(".list").eq(1).slideUp();
            bol1 = true;
        }
    })
</script>
<script>
    //    导航对应的iframe
    var arr = ["iframe-usecreat.html","iframe-useview.html","iframe-useopera.html","iframe-stati-analy.html"];
    $(".list-li").each(function(i){
        $(this).click(function(){
            var url = $(this).attr('url');
            $(".list-li").css("color","#ffffff");
            $(this).css("color","#2188b6");
           // $(".iframe").attr("src",arr[i]);
            $(".iframe").attr("src",url);
        })
    })
</script>
</body>
</html>