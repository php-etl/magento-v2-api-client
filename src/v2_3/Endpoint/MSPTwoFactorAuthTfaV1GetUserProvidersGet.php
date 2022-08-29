<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class MSPTwoFactorAuthTfaV1GetUserProvidersGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $userId;
    /**
     * Get a user provider
     *
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{userId}'), array($this->userId), '/V1/msp-2fa/user-providers/{userId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetUserProvidersGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\MSpTwoFactorAuthProviderInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetUserProvidersGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
