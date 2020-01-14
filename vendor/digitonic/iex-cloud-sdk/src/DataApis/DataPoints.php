<?php

namespace Digitonic\IexCloudSdk\DataApis;

use Digitonic\IexCloudSdk\Contracts\IEXCloud;
use Digitonic\IexCloudSdk\Exceptions\WrongData;
use Digitonic\IexCloudSdk\Requests\BaseRequest;

class DataPoints extends BaseRequest
{
    const ENDPOINT = 'data-points/{symbol}/{key}';

    /**
     * @var string
     */
    protected $key = '';

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
     * @param  string  $key
     *
     * @return DataPoints
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    protected function getFullEndpoint(): string
    {
        return str_replace(
            '{symbol}',
            $this->symbol,
            str_replace(
                '{key}',
                $this->key,
                self::ENDPOINT
            )
        );
    }

    protected function validateParams()
    {
        if (empty($this->symbol)) {
            throw WrongData::invalidValuesProvided('Please provide a symbol to query!');
        }
    }
}
