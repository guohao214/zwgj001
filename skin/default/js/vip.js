var $en = $("input[name=en]"),
    $zhImg = $('.zh > img'),
    $enImg = $('.en > img'),
    $remember = $('.remember'),
    $rememberImg = $('.remember > img'),
    $select = $('select[name=Select1]'),
    $username = $('input[name=username]'),
    $password = $('input[name=userpass]'),
    $submit = $('input[type=submit]');

getZh();
function getEn() {
    //改变仓库的值
    // $select.find('option').eq(0).html('International EnYuan');
    $select.find('option').eq(0).html('International ZhongWei');
    $username.attr('placeholder', 'User Name');
    $password.attr('placeholder', 'Pass Wrod');
    $remember.find('span').html('Remember Me');
    $submit.val('Login');
}

$enImg.on('click', function () {
    changeEn();
});

$zhImg.on('click', function () {
    changeEn();
});

$rememberImg.click(function () {
    if ($(this).attr('src') == '/skin/default/images/radio-down.png') {
        $(this).attr('src', '/skin/default/images/remember.png')
    } else {
        $(this).attr('src', '/skin/default/images/radio-down.png');
    }
});

function changeEn() {
    if ($en.val() == 'zh') {
        $en.val('en');
        getEn();
        $enImg.attr('src', '/skin/default/images/check-icon.png');
        $zhImg.attr('src', '/skin/default/images/radio.icon.png');
        $("#rdyw").trigger('click');
    } else {
        $en.val('zh');
        getZh();
        $("#rdzw").trigger('click');
        $zhImg.attr('src', '/skin/default/images/check-icon.png');
        $enImg.attr('src', '/skin/default/images/radio.icon.png');
    }
}


function getZh() {
    // $select.find('option').eq(0).html('恩原国际');
    $select.find('option').eq(0).html('中唯国际');
    $username.attr('placeholder', '用户名');
    $password.attr('placeholder', '密码');
    $remember.find('span').html('记住我');
    $submit.val('登 录');
}

if (document.cookie.indexOf("User=") > -1) {
    var lcstr = document.cookie.substring(document.cookie.indexOf("User=") + 5, document.cookie.indexOf(";", document.cookie.indexOf("User=") + 5) > -1 ? document.cookie.indexOf(";", document.cookie.indexOf("User=") + 5) : document.cookie.length)
    var la = lcstr.split("&");
    var i = 0;
    for (i = 0; i < la.length; i++) {
        var lb = la[i].split("=");
        if (lb[0] == "name") {
            $("username").value = lb[1];
        }
        else if (lb[0] == "PassWord") {
            $("userpass").value = lb[1];
        }
        else if (lb[0] == "jzw") {
            $("CkRemember").checked = lb[1] = "1" ? true : false;
        }
    }
}

function checkform(toform) {
    var lerr = true;
    if (toform == null)
        lerr = false;
    if (toform.username.value == "") {
        toform.username.focus();
        alert('用户名不能为空，请输入！');
        lerr = false;
    } else if (toform.userpass.value == "") {
        toform.userpass.focus();
        alert('用户密码不能为空，请输入！');
        lerr = false;
    } else {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + 1);
        document.cookie = "IsCookies" + "=" + escape("0") + ";expires=" + exdate.toGMTString() + ";Path=/";
    }
    if (lerr) {
        $('input[name=rdyy]').removeAttr('style');

        if ($("#Select1").val() == "EBKEY")
            toform.action = "http://180.168.44.186:5751/ktlogis/EBOOKING/frmECchwGrid.aspx";
        else
            toform.action = "http://180.168.40.78:6372/ktlog/EBOOKING/frmECchwGrid.aspx";

        //toform.action = "http://180.168.44.186:5751/ktlogis/EBOOKING/frmECchwGrid.aspx";
    }
    return lerr;
}

/*
 function checkform(toform) {
 var lerr = true;if (toform == null) lerr = false;

 if (toform.username.value == "") {toform.username.focus();
 $("usernamemessage").innerText = "用户名不能为空，请输入！";lerr = false;}
 else if (toform.userpass.value == "") {toform.userpass.focus();
 $("userpassmessage").innerText = "用户密码不能为空，请输入！";lerr = false;}
 else {var exdate = new Date();exdate.setDate(exdate.getDate() + 1);
 document.cookie ="IsCookies" + "=" + escape("0") + ";expires=" + exdate.toGMTString() + ";Path=/";}
 if (lerr) {toform.action = "http://210.5.158.188/ktlogis/EBOOKING/frmECchwGrid.aspx";}return lerr;}
 function selectyy(tcyy) {switch (tcyy) {case "1":{$("tusername").childNodes[0].data = "User Name：";
 $("tpassword").childNodes[0].data = "Pass Wrod：";	$("Remember").innerText = "Remember Me";	$("btlogin").value = "Login";
 $("tdbid").childNodes[0].data = "Ware house:";	$("dbid1").childNodes[0].data = "Warehouse HeQin";
 $("dbid2").childNodes[0].data = "Warehouse MiaoChe";	$("rdzw").nextSibling.data = "Chinese";
 break;}default:{	$("tusername").childNodes[0].data = "用  户  名：";	$("tpassword").childNodes[0].data = "密    码：";
 $("Remember").innerText = "记住我";	$("btlogin").value = "登  陆";$("tdbid").childNodes[0].data = "仓    库：";
 $("rdzw").nextSibling.data = "简体中文";	$("dbid1").childNodes[0].data = "合庆仓库";	$("dbid2").childNodes[0].data = "庙车仓库";
 break;}}}
 function $(tcobj) {var lerr = true, loobj = null;if (tcobj == null || tcobj == "")lerr = false;
 if (lerr) {loobj = document.getElementById(tcobj)}loobj = typeof (loobj) == "undefined" ? null : loobj;
 return loobj;}
 */






    
