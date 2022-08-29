<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $bulkUuid;
    /**
     * Get Bulk summary data with list of operations items full data.
     *
     * @param string $bulkUuid
     */
    public function __construct(string $bulkUuid)
    {
        $this->bulkUuid = $bulkUuid;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{bulkUuid}'), array($this->bulkUuid), '/V1/bulk/{bulkUuid}/detailed-status');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
