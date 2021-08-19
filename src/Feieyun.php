<?php


namespace mhzwj;


use Exception;
use GuzzleHttp\Client;

/**
 * Class Feieyun
 * @package mhzwj
 * 添加打印机
 * @method  printerAddlist(array $private_params = [])
 * 打印订单
 * @method  printMsg(array $private_params = [])
 * 标签机打印订单
 * @method  printLabelMsg(array $private_params = [])
 * 删除批量打印机
 * @method  printerDelList(array $private_params = [])
 * 修改打印机信息
 * @method  printerEdit(array $private_params = [])
 * 清空待打印队列
 * @method  delPrinterSqs(array $private_params = [])
 * 查询订单是否打印成功
 * @method  queryOrderState(array $private_params = [])
 * 查询指定打印机某天的订单统计数
 * @method  queryOrderInfoByDate(array $private_params = [])
 * 获取某台打印机状态
 * @method  queryPrinterStatus(array $private_params = [])
 */
class Feieyun
{
    /**
     * @var
     */
    private $username;
    /**
     * @var
     */
    private $uKey;
    /**
     * @var string
     */
    private $apiName;
    /**
     * @var string
     */
    private $requestUrl = 'http://api.feieyun.cn/Api/Open/';

    /**
     * Feieyun constructor.
     * @param $username
     * @param $u_key
     */
    public function __construct($username, $u_key)
    {
        $this->username = $username;
        $this->uKey     = $u_key;
    }

    /**
     * @param string $apiName
     * @return $this
     */
    public function setApiName(string $apiName)
    {
        $this->apiName = $apiName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * @param array $private_params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(array $private_params = [])
    {
        $apiname = $this->getApiName();
        if (empty($apiname)) {
            throw new Exception('api_name is not allow empty');
        }
        $public_params = [
            'user'    => $this->username,
            'stime'   => $this->getTime(),
            'sig'     => $this->getSig(),
            'apiname' => $apiname,
        ];
        $params        = array_filter(array_merge($public_params, $private_params));

        $client = new Client();
        return $client->post($this->requestUrl, [
            'headers'     => [],
            'form_params' => $params,
        ])->getBody()->getContents();
    }


    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __call($name, $arguments)
    {
        $class_name = __NAMESPACE__ . '\\apiName\\' . lcfirst($name);
        if (!class_exists($class_name)) {
            throw new Exception($class_name . ' api class not found');
        }
        return $this->setApiName((new $class_name())->getApiName())->request(...$arguments);
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return time();
    }

    /**
     * @return string
     */
    private function getSig()
    {
        return sha1($this->username . $this->uKey . $this->getTime());
    }

}
