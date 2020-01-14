<?php

namespace Digitonic\IexCloudSdk\InvestorsExchangeData\Stats;

use Digitonic\IexCloudSdk\Contracts\IEXCloud;
use Digitonic\IexCloudSdk\Requests\BaseRequest;

class Intraday extends BaseRequest
{
    const ENDPOINT = 'stats/intraday';

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
        return self::ENDPOINT;
    }
}
