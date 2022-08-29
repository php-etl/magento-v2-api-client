<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class QuoteDataCartItemExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataCartItemExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataCartItemExtensionInterface';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Kiboko\Magento\v2_3\Model\QuoteDataCartItemExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('discounts', $data)) {
            $values = array();
            foreach ($data['discounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\SalesRuleDataRuleDiscountInterface', 'json', $context);
            }
            $object->setDiscounts($values);
        }
        if (\array_key_exists('negotiable_quote_item', $data)) {
            $object->setNegotiableQuoteItem($this->denormalizer->denormalize($data['negotiable_quote_item'], 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataNegotiableQuoteItemInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDiscounts()) {
            $values = array();
            foreach ($object->getDiscounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['discounts'] = $values;
        }
        if (null !== $object->getNegotiableQuoteItem()) {
            $data['negotiable_quote_item'] = $this->normalizer->normalize($object->getNegotiableQuoteItem(), 'json', $context);
        }
        return $data;
    }
}