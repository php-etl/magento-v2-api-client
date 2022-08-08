<?php

namespace Kiboko\Magento\V2\Endpoint;

class AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $bulkUuid;
    protected $status;
    /**
     * Get operations count by bulk uuid and status.
     *
     * @param string $bulkUuid
     * @param int $status
     */
    public function __construct(string $bulkUuid, int $status)
    {
        $this->bulkUuid = $bulkUuid;
        $this->status = $status;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{bulkUuid}', '{status}'), array($this->bulkUuid, $this->status), '/V1/bulk/{bulkUuid}/operation-status/{status}');
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
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
