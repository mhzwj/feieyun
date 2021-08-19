<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 删除批量打印机，Open_printerEdit
 * Class printerDelList
 * @package mhzwj\apiName
 */
class printerDelList implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return 'Open_printerDelList';
    }
}