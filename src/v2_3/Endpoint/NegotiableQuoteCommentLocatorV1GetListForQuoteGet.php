<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class NegotiableQuoteCommentLocatorV1GetListForQuoteGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $quoteId;
    /**
     * Returns comments for a specified negotiable quote.
     *
     * @param int $quoteId Negotiable Quote ID.
     */
    public function __construct(int $quoteId)
    {
        $this->quoteId = $quoteId;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/negotiableQuote/{quoteId}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\NegotiableQuoteDataCommentInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataCommentInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}