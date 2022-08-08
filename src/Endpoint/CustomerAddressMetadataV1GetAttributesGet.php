<?php

namespace Kiboko\Magento\V2\Endpoint;

class CustomerAddressMetadataV1GetAttributesGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $formCode;
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode
     */
    public function __construct(string $formCode)
    {
        $this->formCode = $formCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{formCode}'), array($this->formCode), '/V1/attributeMetadata/customerAddress/form/{formCode}');
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
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CustomerDataAttributeMetadataInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
