<?php

namespace Jhosawa\Monday;

use Jhosawa\Monday\Http\GraphRequest;

class BaseRequestBuilder
{
    const TYPE_MUTATION = 'mutation';

    const TYPE_QUERY = 'query';

    public function __construct(protected GraphRequest $client, protected string $body = '')
    {}

    /**
     * Set body content
     *
     * @param string $type
     * @param string $request
     * @return string
     */
    protected function getBodyContent(string $type, string $request): string
    {
        return json_encode(['query' => $type . ' { ' . $request . ' } ']);
    }
}
