<?php

namespace Digitonic\IexCloudSdk\AlternativeData;

use Digitonic\IexCloudSdk\Contracts\IEXCloud;
use Digitonic\IexCloudSdk\Exceptions\WrongData;
use Digitonic\IexCloudSdk\Requests\BaseRequest;

class CeoComp extends BaseRequest
{
    const ENDPOINT = 'stock/{symbol}/ceo-compensation';

    /**
     * Create constructor.
     *
     * @param  IEXCloud  $api
     */
    public function __construct(IEXCloud $api)
    {
        parent::__construct($api);
    }

    /**
     * @return string
     */
    protected function getFullEndpoint(): string
    {
        return str_replace('{symbol}', $this->symbol, self::ENDPOINT);
    }

    /**
     * @return bool|void
     */
    protected function validateParams(): void
    {
        if (empty($this->symbol)) {
            throw WrongData::invalidValuesProvided('Please provide a symbol to query!');
        }
    }
}
