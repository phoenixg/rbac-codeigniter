<?php 

// 登录后地址： http://user.qunar.com/userinfo/index.jsp#basic
$config['grab_url_login'] = "https://user.qunar.com/passport/loginx.jsp";

// 服务后台地址：http://fuwu.qunar.com/index.do?domain=slg.trade.qunar.com#sid=nav_FI_DEMAND_LIST&module=welcome9527|nav_FI_DEMAND_LIST
// 待报价需求单标签页地址： http://slg.trade.qunar.com/tts/backAdmin/international/demand/list?status=0
$config['grab_url_page'] = "http://slg.trade.qunar.com/tts/backAdmin/international/demand/list?status=0";
$config['grab_url_page'] = "http://slg.trade.qunar.com/tts/backAdmin/international/demand/list?status=1";

$config['grab_user'] = "13146942969";
$config['grab_pass'] = "ZHong2014";

// curl 'http://slg.trade.qunar.com/tts/backAdmin/international/demand/list?status=0' -H 'Host: slg.trade.qunar.com' -H 'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8' -H 'Accept-Language: en-US,en;q=0.5' -H 'Accept-Encoding: gzip, deflate' -H 'Referer: http://fuwu.qunar.com/index.do?domain=slg.trade.qunar.com' -H 'Cookie: QN99=2790; QunarGlobal=192.168.24.207_7a21bfbe_14800961907_-2c11|1408759971495; QN1=wKgZEFP3+KR7DCjLr0rwAg==; QN25="c0d1fe3d-1f90-4f1d-b49c-bceb8122a56fe765635f3c3ec6847ac6d0b7ca528b12{en7mni(z"; RcGlobal=d8616b29f4386f27358795b0ee394ca183; csrfToken=tUMbsamVqDAGndxm0jtIolirwEvIwf03; _mdp=5+%2B0%7F%04%01r; QN29=206d249bd6ab4bfd9c8e243c21cd3e51; QN43=3; QN42=foia8465; _q=U.pble6267; _t=23577381; _v=QOfVSOJZMik-WSmps-M9Jak9P1jBetISWaJUteA12M4sW1deNDYXhO8B19YP85_vz_QV-x0BT1GUcRChc7NxKhkjdfIhsgEgErbkgFll4c1mH51evZybl_Mes9fPZagpRw707_QbxxfQtYtiyUwTonAc5B-8RCA2oMJ0uQTCdYJr; QN44=pble6267' -H 'Connection: keep-alive'

