<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $GLOBALS['S']['keywords'] ?>-<?php echo $channel['title'] ?></title>
        <meta NAME="Keywords" CONTENT="<?php echo $GLOBALS['S']['keywords'] ?>" />
        <meta name="description" content="<?php echo $GLOBALS['S']['description'] ?>"/>
        <link href="/skin/default/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
         <link href="/skin/default/css/common.css" rel="stylesheet">
         <link href="/skin/default/css/cangku.css?v=1" rel="stylesheet">
        <!--引用百度地图API-->
				<style type="text/css">
				    html,body{margin:0;padding:0;}
				    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
				    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
				    .pop .bottom {
				    	padding-top: 24px;
				    }
				    
				    .pop .center {
				    	padding-left: 250px;
				    }
				    
				    label {
				    	max-width: none;	
				    }

				</style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
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
                    <?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow,body from s_classtype where  tid='24'  order by orders desc,tid limit 1");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
                        <img src="<?php echo $v['litpic'] ?>">
                    <?php } ?>
                </div>
                <div class="header-title">
                    <img src="/skin/default/images/cangku-icon.jpg" height="15"> <span><?php echo $type['classname'] ?></span> <img src="/skin/default/images/right-icon.jpg" height="15"> <span><?php echo $channel['title'] ?></span>
                </div>
                <div class="cangku-info">
                    <div class="cangku-detail-left">
                        <div class="cangku-detail-left-up">
                            <div class="cangku-detail-left-up-info">
                                <div class="cangku-detail-left-up-img">
                                    <img src="<?php echo $channel['cangku_image'] ?>">
                                </div>
                                <div class="cangku-detail-left-up-title">
                                    <span><?php echo $channel['title'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="cangku-detail-left-down">
                            <div class="cangku-detail-left-down-info">
                                <p><span>联系人：</span><?php echo $channel['contact'] ?></p>
                                <p><span>电话：</span><?php echo $channel['telphone'] ?></p>
                                <p><span>仓库地址：</span><?php echo $channel['address'] ?>。</p>
                                <p><span>仓库面积：</span><?php echo $channel['area'] ?></p>
                                <p><span>场地面积：</span><?php echo $channel['sarea'] ?></p>
                                <p><span>设备及设施：</span><?php echo $channel['shebei'] ?></p>
                                <p><span>地理位置：</span><?php echo $channel['weizhi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="cangku-detail-right">
                        <div class="dituContent" style="width:699px;height:600px;border:#ccc solid 1px;" id="map_canvas"></div>
                    </div>
                </div>
                
                <?php
                    $array = array(',|','|');
                    $image = str_replace($array,'',$channel['huadong_image']);
                    $image = explode('-',$image);
                ?>
                <?php if (! empty($image[0])):?>
                <div class="header-title">
                    <img src="/skin/default/images/cangku-icon.jpg" height="15"><span><?php echo $channel['title'] ?>展示</span>
                </div>
                <div class="list">
                    <div class="list-content">
                        <div class="image-list"> 
                            <?php if (! empty($image[0])):?>
                            <?php $i=1; ?>
                            <?php foreach($image as $item): ?>
                                <div class="content-images <?php if ($i%3 != 1) :?>left-margin<?php endif; ?>">
                                    <div class="hd-image">
                                        <img src="<?php echo $item ?>">
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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
    <?php 
    	$jingwei = explode('|',$channel['jingwei']);
			$jingwei = implode(',',$jingwei);
    ?>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
    		$(".BMap_bubble_content").css("box-sizing",'content-box');
    		$(".BMap_bubble_content").css("webkit-box-sizing",'content-box');
    		$(".BMap_bubble_content").css("moz-box-sizing",'content-box');
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("map_canvas");//在百度地图容器中创建一个地图
        var point = new BMap.Point(<?php echo $jingwei ?>);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.disableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"<?php echo $channel['title'] ?>",content:"<?php echo $channel['address'] ?>",point:"<?php echo $channel['jingwei'] ?>",isOpen:1,icon:{w:23,h:25,l:0,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
    </body>
</html>