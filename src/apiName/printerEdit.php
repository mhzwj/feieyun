<?php


namespace mhzwj\apiName;


use mhzwj\ApiNameInterface;

/**
 * 修改打印机信息，Open_printerEdit
 * Class printerEdit
 * @package mhzwj\apiName
 */
class printerEdit implements ApiNameInterface
{

    /**
     * @return string
     */
    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'Open_printerEdit';
    }
}