<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $GLOBALS['S']['title'] ?></title>
        <meta NAME="Keywords" CONTENT="<?php echo $GLOBALS['S']['keywords'] ?>" />
        <meta name="description" content="<?php echo $GLOBALS['S']['description'] ?>"/>
        <link href="/skin/default/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
         <link href="/skin/default/css/common.css" rel="stylesheet">
         <link href="/skin/default/css/index.css" rel="stylesheet">
    </head>
    <body>
        <div class="content-body">
            <div class="header">
    <div class="top-info" style="margin-top: 0px;">
        <div class="logo-info">
            <img src="/skin/default/images/logo1.png" height="85" style=""><!--<span><?php echo $GLOBALS['S']['title'] ?></span>-->
        </div>
        <div class="top-info-right" style="margin-top: 35px;">
            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  tid='44'  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
            <div class="<?php if ($type['tid'] == '44' || $type['pid'] == '44') { ?>header-top-select <?php } ?> header-top"><a href="<?php echo $v['url'] ?>"><img src="<?php if ($type['tid'] == '44' || $type['pid'] == '44') { ?>/skin/default/images/map-icon-select.png<?php } else { ?>/skin/default/images/map-icon.jpg <?php } ?>" height="15"> <?php echo $v['classname'] ?></a>&nbsp;&nbsp;</div>
            <?php } ?>
             <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  tid='41'  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                <?php $an=0;$tablea=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  pid='".$v[tid]."'  order by orders desc,tid limit 1");foreach($tablea as $a){ $a["tid_leafid"]=$sy_class_type->leafid($a["tid"]);$a["n"]=$an=$an+1; $a["classname"]=stripslashes($a["classname"]);$a["description"]=stripslashes($a["description"]); $a["url"]=html_url("classtype",$a); ?>
                    <div class="header-top <?php if ($type['tid'] == '41' || $type['pid'] == '41') { ?>header-top-select <?php } ?>"><a href="<?php echo $a['url'] ?>"><img src="<?php if ($type['tid'] == '41' || $type['pid'] == '41') { ?>/skin/default/images/search-icon-select.png<?php } else { ?>/skin/default/images/search-icon.jpg<?php } ?>" height="15"> <?php echo $v['classname'] ?></a>&nbsp;&nbsp;</div>
                <?php } ?>
            <?php } ?>
            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  tid='37'  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                <?php $an=0;$tablea=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  pid='".$v[tid]."'  order by orders desc,tid limit 1");foreach($tablea as $a){ $a["tid_leafid"]=$sy_class_type->leafid($a["tid"]);$a["n"]=$an=$an+1; $a["classname"]=stripslashes($a["classname"]);$a["description"]=stripslashes($a["description"]); $a["url"]=html_url("classtype",$a); ?>
                    <div class="header-top <?php if ($type['tid'] == '37' || $type['pid'] == '37') { ?>header-top-select <?php } ?>">
                        <a href="<?php echo $a['url'] ?>"><img src="<?php if ($type['tid'] == '37' || $type['pid'] == '37') { ?>/skin/default/images/custom-icon-select.png<?php } else { ?>/skin/default/images/custom-icon.jpg<?php } ?>" height="15"> <?php echo $v['classname'] ?></a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <nav class="navbar">
        <ul class="nav navbar-nav">
            <li class="text-center mainmenu <?php if($type['tid'] == ''){ ?>active<?php } ?>">
                <a href="/">首页</a>
            </li>
            <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  pid=0  order by orders desc,tid limit 10");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                <?php if ($v['tid'] == 24) {?>
                <li class="text-center mainmenu <?php if($type['pid'] == $v['tid'] || $type['tid'] == $v['tid'] ){ ?>active<?php } ?>">
                    <a  data-toggle="dropdown" href="<?php echo $v['url'] ?>">
                       <?php echo $v['classname'] ?>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?php $an=0;$tablea=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,orders,mrank,mgold,isshow,keywords,description,telphone,address,contact,area,sarea,shebei,weizhi,cangku_image,image_description,zhandi,jingwei,huadong_image from s_cangku a left join s_cangku_field b on (a.id=b.aid) where isshow=1 and tid in(24)  order by tid asc ");foreach($tablea as $a){ $a["tid_leafid"]=$sy_class_type->leafid($a["tid"]);$a["n"]=$an=$an+1; $a["url"]=html_url("channel",$a,0,0,cangku); $a["title"]=stripslashes($a["title"]); $a["description"]=stripslashes($a["description"]); ?>
                            <a href="<?php echo $a['url'] ?>" class="text-center"><?php echo $a['title'] ?></a>
                            <?php } ?>    
                        </li>
                    </ul>
                </li>
               <?php } else if ($v['tid'] == 25 || $v['tid'] == 27 || $v['tid'] == 47){ ?>
                    <li class="text-center mainmenu <?php if($type['pid'] == $v['tid'] || $type['tid'] == $v['tid'] ){ ?>active<?php } ?>">
                    <a  data-toggle="dropdown" href="<?php echo $v['url'] ?>">
                       <?php echo $v['classname'] ?>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?php $an=0;$tablea=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from s_classtype where  pid='".$v[tid]."'  order by orders desc,tid");foreach($tablea as $a){ $a["tid_leafid"]=$sy_class_type->leafid($a["tid"]);$a["n"]=$an=$an+1; $a["classname"]=stripslashes($a["classname"]);$a["description"]=stripslashes($a["description"]); $a["url"]=html_url("classtype",$a); ?>
                            <a href="<?php echo $a['url'] ?>" class="text-center"><?php echo $a['classname'] ?></a>
                            <?php } ?>    
                        </li>
                    </ul>
                </li>
               <?php } else if ($v['tid'] == 26){ ?>
               <li class="text-center mainmenu <?php if($type['pid'] == $v['tid'] || $type['tid'] == $v['tid'] ){ ?>active<?php } ?>">
                    <a  href="<?php echo $v['url'] ?>">
                       <?php echo $v['classname'] ?>
                    </a>
                </li>
            <?php } else { ?>
               <?php } ?>
            <?php } ?>
        </ul>
    </nav>
</div>
            <div class="content">
                <div class="banner">
                    <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                        <div role="listbox" class="carousel-inner">
                            <?php $i=0; ?>
                            <?php $vn=0;$tablev=syClass("syModel")->findSql("select * from s_ads where isshow=1 and taid='1' and type='1'  order by orders desc,id desc limit 5");foreach($tablev as $v){ $v["n"]=$vn=$vn+1; $v["name"]=stripslashes($v["name"]); ?>
                                <div class="item <?php if($i==0){ ?>active<?php } ?>">
                                    <img alt="<?php echo $v['name'] ?>" src="<?php echo $v['adfile'] ?>" data-holder-rendered="true">
                                </div>
                                <?php $i++;?>
                            <?php } ?>

                        </div>
                        <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
                            <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="cangku-info">
                    <div class="cangku-title">
                        <img src="/skin/default/images/house-icon.jpg" height="16">仓库信息
                    </div>
                    <div class="cangku-show" id="Marquee_x">
                        <ul>
                            <li>
                        <?php $i=0; ?>
                        <?php $vn=0;$tablev=syClass("syModel")->findSql("select id,tid,sid,title,style,trait,gourl,addtime,hits,htmlurl,htmlfile,orders,mrank,mgold,isshow,keywords,description,telphone,address,contact,area,sarea,shebei,weizhi,cangku_image,image_description,zhandi,jingwei,huadong_image from s_cangku a left join s_cangku_field b on (a.id=b.aid) where isshow=1 and tid in(24)  order by orders desc,addtime desc,id desc limit 10");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["url"]=html_url("channel",$v,0,0,cangku); $v["title"]=stripslashes($v["title"]); $v["description"]=stripslashes($v["description"]); ?>
                            <?php $i++; ?>
                            <div class="cangku-image-area1">
                                <div class="cangku-image-info">
                                    <a href=<?php echo $v['url'] ?>><div class="cangku-image">
                                        <img src="<?php echo $v['cangku_image'] ?>">
                                        <div class="cangku-info-fugai">
                                            <div class="cangku-description">
                                                <p>占地：<span><?php echo $v['zhandi'] ?></span>m²</p>
                                                <p><?php echo $v['image_description'] ?></p>
                                            </div>
                                        </div>
                                        </div></a>
                                    <div class="cangku-info-detail">
                                        <div class="cangku-info-name">
                                            <?php echo $v['title'] ?>
                                        </div>
                                        <div class="cangku-info-phone">
                                            <i class="phone-icon"></i>
                                            <?php echo $v['telphone'] ?>
                                        </div>
                                    </div>
                                    <div class="cangku-address">
                                        <i class="address-icon"></i>
                                        <div class="cangku-address-info"><?php echo $v['address'] ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

           <div class="footer">
    <div class="footer-info">
    <p class="text-center" ><img src="/skin/default/images/weibo-icon.jpg" >&nbsp;微博：上海中唯 &nbsp;&nbsp;<img src="/skin/default/images/weixin-icon.jpg" >&nbsp;服务号：上海中唯</p>
    <p class="text-center">版权所有@&nbsp;&nbsp;2014-<?php echo Date('Y'); ?>&nbsp;&nbsp;上海中唯国际物流有限公司&nbsp;&nbsp;沪ICP备06022390号-1</p>
    </div>
</div>

        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/skin/default/js/bootstrap.min.js"></script>
    <script src="/skin/default/js/header.js"></script>
    <script src="/skin/default/js/index.js"></script>
    <script src="/skin/default/js/jQuery-jcMarquee.js"></script>
    <script>
    $(function(){
        $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'10px','speed':20 });
    });
    </script>
    </body>
</html>
