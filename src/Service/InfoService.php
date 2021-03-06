<?php

declare(strict_types=1);

namespace TYPO3\CrowdinBridge\Service;

use Akeneo\Crowdin\Api\Info;

class InfoService extends BaseService
{
    public function get()
    {
        /** @var Info $api */
        $api = $this->client->api('info');
        $api->addUrlParameter('json', 1);
        $response = $api->execute();

        return json_decode($response->getContents(), true);
    }
}
