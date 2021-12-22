<?php

namespace App\Http;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ImagenApiClient implements ImagenApiClientInterface
{
    /**
     * @var HttpClientInterface
     */
    private HttpClientInterface $httpClient;

    private const MAPPING_URL = 'https://hiringtestmcc.imagencloud.com:83/imcc/v1/import/mappings';
    private const RECORD_URL = 'https://hiringtestmcc.imagencloud.com:83/mcc/import/record_PUT';
    private $apiKey;
    private $secretAccessKey;

    public function __construct(HttpClientInterface $httpClient, $apiKey, $secretAccessKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->secretAccessKey = $secretAccessKey;
    }

    public function importRecord(): JsonResponse
    {
        $mappingResponse = $this->getMappingResponse();

        $rawData = '<Records>
<ImagenRecord>
<Fields>
<Title>Test title</Title>
<Summary>Test summary</Summary>
</Fields>
<MediaObject Version="3" ID="-1" MediaType="Image">
<MediaElement MediaType="Image">
<OriginalFile>https://hiringtest.imagencloud.com/source/images/site-logo.png</OriginalFile>
</MediaElement>
</MediaObject>
</ImagenRecord>
</Records>';

        $response = $this->httpClient->request('GET', self::RECORD_URL, [
            'header' => [
                'X-Imagen-API-Key' => $this->apiKey,
                'Authorization'  => 'Bearer '
            ],
            'data-raw' => $rawData
        ]);

        // @todo handle non 200 responses
        if ($response->getStatusCode() !== 200) {

            return new JsonResponse('Finance API Client Error ', 400);
        }

        $data = json_decode($response->getContent());

        return new JsonResponse($data, 200);
    }

    private function getMappingResponse(): JsonResponse
    {
        $response = $this->httpClient->request('GET', self::MAPPING_URL, [
            'header' => [
                'X-Imagen-API-Key' => $this->apiKey,
                'X-Imagen-API-Signature'  => $this->secretAccessKey
            ]
        ]);

        // @todo handle non 200 responses
        if ($response->getStatusCode() !== 200) {
            return new JsonResponse('Mapping URL error ', 400);
        }

        return new JsonResponse(json_decode($response->getContent()), 200);
    }
}














