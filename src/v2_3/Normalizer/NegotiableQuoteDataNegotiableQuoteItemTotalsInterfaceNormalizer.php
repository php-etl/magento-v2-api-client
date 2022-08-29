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
class NegotiableQuoteDataNegotiableQuoteItemTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\NegotiableQuoteDataNegotiableQuoteItemTotalsInterface();
        if (\array_key_exists('cost', $data) && \is_int($data['cost'])) {
            $data['cost'] = (double) $data['cost'];
        }
        if (\array_key_exists('catalog_price', $data) && \is_int($data['catalog_price'])) {
            $data['catalog_price'] = (double) $data['catalog_price'];
        }
        if (\array_key_exists('base_catalog_price', $data) && \is_int($data['base_catalog_price'])) {
            $data['base_catalog_price'] = (double) $data['base_catalog_price'];
        }
        if (\array_key_exists('catalog_price_incl_tax', $data) && \is_int($data['catalog_price_incl_tax'])) {
            $data['catalog_price_incl_tax'] = (double) $data['catalog_price_incl_tax'];
        }
        if (\array_key_exists('base_catalog_price_incl_tax', $data) && \is_int($data['base_catalog_price_incl_tax'])) {
            $data['base_catalog_price_incl_tax'] = (double) $data['base_catalog_price_incl_tax'];
        }
        if (\array_key_exists('cart_price', $data) && \is_int($data['cart_price'])) {
            $data['cart_price'] = (double) $data['cart_price'];
        }
        if (\array_key_exists('base_cart_price', $data) && \is_int($data['base_cart_price'])) {
            $data['base_cart_price'] = (double) $data['base_cart_price'];
        }
        if (\array_key_exists('cart_tax', $data) && \is_int($data['cart_tax'])) {
            $data['cart_tax'] = (double) $data['cart_tax'];
        }
        if (\array_key_exists('base_cart_tax', $data) && \is_int($data['base_cart_tax'])) {
            $data['base_cart_tax'] = (double) $data['base_cart_tax'];
        }
        if (\array_key_exists('cart_price_incl_tax', $data) && \is_int($data['cart_price_incl_tax'])) {
            $data['cart_price_incl_tax'] = (double) $data['cart_price_incl_tax'];
        }
        if (\array_key_exists('base_cart_price_incl_tax', $data) && \is_int($data['base_cart_price_incl_tax'])) {
            $data['base_cart_price_incl_tax'] = (double) $data['base_cart_price_incl_tax'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cost', $data)) {
            $object->setCost($data['cost']);
        }
        if (\array_key_exists('catalog_price', $data)) {
            $object->setCatalogPrice($data['catalog_price']);
        }
        if (\array_key_exists('base_catalog_price', $data)) {
            $object->setBaseCatalogPrice($data['base_catalog_price']);
        }
        if (\array_key_exists('catalog_price_incl_tax', $data)) {
            $object->setCatalogPriceInclTax($data['catalog_price_incl_tax']);
        }
        if (\array_key_exists('base_catalog_price_incl_tax', $data)) {
            $object->setBaseCatalogPriceInclTax($data['base_catalog_price_incl_tax']);
        }
        if (\array_key_exists('cart_price', $data)) {
            $object->setCartPrice($data['cart_price']);
        }
        if (\array_key_exists('base_cart_price', $data)) {
            $object->setBaseCartPrice($data['base_cart_price']);
        }
        if (\array_key_exists('cart_tax', $data)) {
            $object->setCartTax($data['cart_tax']);
        }
        if (\array_key_exists('base_cart_tax', $data)) {
            $object->setBaseCartTax($data['base_cart_tax']);
        }
        if (\array_key_exists('cart_price_incl_tax', $data)) {
            $object->setCartPriceInclTax($data['cart_price_incl_tax']);
        }
        if (\array_key_exists('base_cart_price_incl_tax', $data)) {
            $object->setBaseCartPriceInclTax($data['base_cart_price_incl_tax']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cost'] = $object->getCost();
        $data['catalog_price'] = $object->getCatalogPrice();
        $data['base_catalog_price'] = $object->getBaseCatalogPrice();
        $data['catalog_price_incl_tax'] = $object->getCatalogPriceInclTax();
        $data['base_catalog_price_incl_tax'] = $object->getBaseCatalogPriceInclTax();
        $data['cart_price'] = $object->getCartPrice();
        $data['base_cart_price'] = $object->getBaseCartPrice();
        $data['cart_tax'] = $object->getCartTax();
        $data['base_cart_tax'] = $object->getBaseCartTax();
        $data['cart_price_incl_tax'] = $object->getCartPriceInclTax();
        $data['base_cart_price_incl_tax'] = $object->getBaseCartPriceInclTax();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}