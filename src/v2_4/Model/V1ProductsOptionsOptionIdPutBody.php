<?php

namespace Kiboko\Magento\v2_4\Model;

class V1ProductsOptionsOptionIdPutBody
{
    /**
     *
     *
     * @var CatalogDataProductCustomOptionInterface
     */
    protected $option;
    /**
     *
     *
     * @return CatalogDataProductCustomOptionInterface
     */
    public function getOption(): CatalogDataProductCustomOptionInterface
    {
        return $this->option;
    }
    /**
     *
     *
     * @param CatalogDataProductCustomOptionInterface $option
     *
     * @return self
     */
    public function setOption(CatalogDataProductCustomOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
