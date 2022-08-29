<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class VertexAddressValidationAddressManagementV1GetValidAddressPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_3\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody)
    {
        $this->body = $vertexAddressValidationAddressManagementV1GetValidAddressPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/vertex-address-validation/vertex-address';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataAddressInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}