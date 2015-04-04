<?php

$access_token = "n6bjjYkfAkM81LjWey99osYPuTlGgz8Q6NqKZX3tJ7atKL-wemhgeM4RRNizw3-xvNyd57CeDziWz03r3wCVN07OAecpiFC7VLUJ6Rps50k";

$jsonmenu = '{
      "button":[
      {
            "name":"进入商城",
           "sub_button":[
            {
               "type":"view",
               "name":"零食",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=book&a=cate&cid=342"
            },
            {
               "type":"view",
               "name":"饮料",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=book&a=cate&cid=343"
            },
            {
               "type":"view",
               "name":"衣服",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=book&a=cate&cid=344"
            },
            {
               "type":"view",
               "name":"鞋子",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=book&a=cate&cid=345"
            
            }]
      

       },
       {
           "name":"购物车",
           "sub_button":[
            {
               "type":"view",
               "name":"会员中心",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=User&a=login"
            },
            {
              "type":"view",
               "name":"购物车",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=Shopcart&a=index"
            }]
       

       },
	   {
            "name":"商城介绍",
           "sub_button":[
            {
              "type":"view",
               "name":"关于我们",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=aboutus&a=index&id=2"
            },
            {
               "type":"view",
               "name":"联系方式",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=aboutus&a=index&id=3"
            },
            {
              "type":"view",
               "name":"加入我们",
               "url":"http://joelizzie.vicp.cc/wm/index.php?m=aboutus&a=index&id=4"
            }]
      

       }]
 }';


$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
var_dump($result);

function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

?>