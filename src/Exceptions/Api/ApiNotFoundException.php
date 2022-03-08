<?php
/**
 * Updated by Reasonpun
 * User: youxingxiang
 * Date: 2019/9/29
 * Time: 11:19 AM
 */

namespace Reasonpun\LaravelQuickTools\Exceptions\Api;

use Reasonpun\LaravelQuickTools\Exceptions\ApiException;

class ApiNotFoundException extends ApiException
{

    public function render()
    {
        $this->noFound($this->getMessage());
        return parent::render();
    }
}
