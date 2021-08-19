<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 打印订单，Open_printMsg
 * Class printMsg
 * @package mhzwj\apiName
 */
class printMsg implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_printMsg';
    }
}