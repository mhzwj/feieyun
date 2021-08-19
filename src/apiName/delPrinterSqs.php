<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 清空待打印队列，Open_delPrinterSqs
 * Class delPrinterSqs
 * @package mhzwj\apiName
 */
class delPrinterSqs implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_delPrinterSqs';
    }
}