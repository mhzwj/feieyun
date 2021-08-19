基于 [飞鹅云开放平台](http://help.feieyun.com/document.php) 的 PHP 接口组件

[![Latest Stable Version](http://poser.pugx.org/mhzwj/feieyun/v)](https://packagist.org/packages/mhzwj/feieyun) [![Total Downloads](http://poser.pugx.org/mhzwj/feieyun/downloads)](https://packagist.org/packages/mhzwj/feieyun) [![Latest Unstable Version](http://poser.pugx.org/mhzwj/feieyun/v/unstable)](https://packagist.org/packages/mhzwj/feieyun) [![License](http://poser.pugx.org/mhzwj/feieyun/license)](https://packagist.org/packages/mhzwj/feieyun)

## 安装

~~~~
composer require mhzwj/feieyun 
~~~~

## 配置

请先注册 [飞鹅云开放平台](http://help.feieyun.com/document.php) 账号，获取到相应的用户名和 api key

## 使用

~~~
$username = 'username';
$u_key = 'u_key';

$feieyun = new \mhzwj\Feieyun($username, $u_key);


// 各个接口定义私有参数
$private_params = ['sn' => '打印机编号'];

// 方式1,设置公共参数apiname, eg: Open_printerAddlist
$response_data = $feieyun->setApiName('Open_printerAddlist')->request($private_params);

// 方式2,使用已定义的接口类
$response_data = $feieyun->printerAddlist($private_params);
~~~

## 已定义的接口类

- 添加打印机 printerAddlist
- 打印订单  printMsg
- 标签机打印订单 printLabelMsg
- 删除批量打印机 printerDelList
- 修改打印机信息 printerEdit
- 清空待打印队列 delPrinterSqs
- 查询订单是否打印成功 queryOrderState
- 查询指定打印机某天的订单统计数 queryOrderInfoByDate
- 获取某台打印机状态 queryPrinterStatus

