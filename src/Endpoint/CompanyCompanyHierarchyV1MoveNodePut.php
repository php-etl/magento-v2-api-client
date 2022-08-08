<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyCompanyHierarchyV1MoveNodePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Moves teams and users within the company structure.
     *
     * @param int $id
     * @param \Kiboko\Magento\V2\Model\V1HierarchyMoveIdPutBody $companyCompanyHierarchyV1MoveNodePutBody
     */
    public function __construct(int $id, \Kiboko\Magento\V2\Model\V1HierarchyMoveIdPutBody $companyCompanyHierarchyV1MoveNodePutBody)
    {
        $this->id = $id;
        $this->body = $companyCompanyHierarchyV1MoveNodePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/hierarchy/move/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyHierarchyV1MoveNodePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCompanyHierarchyV1MoveNodePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
