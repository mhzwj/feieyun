<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 查询指定打印机某天的订单统计数，Open_queryOrderInfoByDate
 * Class queryOrderInfoByDate
 * @package mhzwj\apiName
 */
class queryOrderInfoByDate implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_queryOrderInfoByDate';
    }
}