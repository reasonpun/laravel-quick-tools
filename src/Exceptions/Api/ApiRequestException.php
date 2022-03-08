<?php
/**
 * Updated by Reasonpun
 * User: youxingxiang
 * Date: 2019/9/29
 * Time: 11:19 AM
 */

namespace Reasonpun\LaravelQuick\Exceptions\Api;

use Reasonpun\LaravelQuick\Exceptions\ApiException;

class ApiRequestException extends ApiException
{

    public function render()
    {
        $this->requestError($this->getMessage());
        return parent::render();
    }
}
