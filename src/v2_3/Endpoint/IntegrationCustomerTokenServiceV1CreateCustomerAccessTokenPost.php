<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody)
    {
        $this->body = $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/integration/customer/token';
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
     * @throws \Kiboko\Magento\v2_3\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}