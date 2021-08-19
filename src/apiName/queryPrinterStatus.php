<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 获取某台打印机状态，Open_queryPrinterStatus
 * Class queryPrinterStatus
 * @package mhzwj\apiName
 */
class queryPrinterStatus implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
       return 'Open_queryPrinterStatus';
    }
}