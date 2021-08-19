<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 批量添加打印机，Open_printerAddlist
 * Class printerAddlist
 * @package mhzwj\apiName
 */
class printerAddlist implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_printerAddlist';
    }
}