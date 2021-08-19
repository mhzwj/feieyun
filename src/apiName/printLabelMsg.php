<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 标签机打印订单
 * Class printLabelMsg
 * @package mhzwj\apiName
 */
class printLabelMsg implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_printLabelMsg';
    }
}