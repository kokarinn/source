<?php

/**
 Template Name: 追番页面
 */

get_header(); ?>

<link href="https://cdn.jsdelivr.net/gh/Fog-Forest/bilibili@1.1/page-anime1.min.css" rel="stylesheet">
<div id="container" class="container" >
    <div class="page-header">
        <h1>我的追番
         <?php
            require_once ("anime_bili.php");
            $bili=new bilibiliAnime('8142789','_uuid=8407C483-2011-9D9D-371E-55D603F3DF6892380infoc; buvid3=7E5282FE-467F-4498-9D54-17388577E775155809infoc; _ga=GA1.2.1592275501.1584255596; CURRENT_FNVAL=16; rpdid=|(J|Y|Y|kkJm0J'ul)RkllY|~; LIVE_BUVID=AUTO4215842556083238; DedeUserID=130092894; DedeUserID__ckMd5=5ccee398e8546910; SESSDATA=7dff734a%2C1599831456%2C5d8eb*31; bili_jct=ff900dfbced1017264b303b5de71acba; PVID=3; SL_GWPT_Show_Hide_tmp=1; SL_wptGlobTipTmp=1; sid=99u0xkcy');
            echo "<small>当前已追".$bili->sum."部，继续加油！</small></h1></div><div class=\"row\">";
            function precentage($str1,$str2)
            {
                if(is_numeric($str1) && is_numeric($str2)) return $str1/$str2*100;
                else if ($str1=="没有记录!") return 0;
                else return 100;
            }
            for($i=0;$i<$bili->sum;$i++)
            {
                echo "<div class=\"bangumi-item col-md-4 col-lg-3\"><a class=\"no-line bangumi-link\" href=\"https://www.bilibili.com/bangumi/play/ss".$bili->season_id[$i]."/ \" target=\"_blank\"><div class=\"bangumi-banner\"><img src=\"".$bili->image_url[$i]."\"><div class=\"bangumi-des\"><p>".$bili->evaluate[$i]."</p></div></div><div class=\"bangumi-content\"><h3 class=\"bangumi-title\">".$bili->title[$i]."</h3><div class=\"bangumi-progress\" style=\"width:100%\"><div class=\"bangumi-progress-bar\" style=\"width:".precentage($bili->progress[$i],$bili->total[$i])."%\"></div></div><div class=\"bangumi-progress-num\">进度：".$bili->progress[$i]." / ". $bili->total[$i]."</div></div></a></div>";
            }
        ?>
    </div>
</div>

<?php
get_footer();
