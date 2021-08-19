<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 查询订单是否打印成功，Open_queryOrderState
 * Class queryOrderState
 * @package mhzwj\apiName
 */
class queryOrderState implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_queryOrderState';
    }
}