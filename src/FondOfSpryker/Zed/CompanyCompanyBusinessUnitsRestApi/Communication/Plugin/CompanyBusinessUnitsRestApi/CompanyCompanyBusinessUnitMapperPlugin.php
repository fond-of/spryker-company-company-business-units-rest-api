<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Communication\Plugin\CompanyBusinessUnitsRestApi;

use FondOfSpryker\Zed\CompanyBusinessUnitsRestApi\Dependency\Plugin\CompanyBusinessUnitMapperPluginInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnitsRestApiFacadeInterface getFacade()
 */
class CompanyCompanyBusinessUnitMapperPlugin extends AbstractPlugin implements CompanyBusinessUnitMapperPluginInterface
{
    /**
     * @inheritdoc}
     * - Maps rest request company to company business unit.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function map(
        RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer,
        CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): CompanyBusinessUnitTransfer {
        return $this->getFacade()->mapCompanyToCompanyBusinessUnit(
            $restCompanyBusinessUnitsRequestAttributesTransfer,
            $companyBusinessUnitTransfer
        );
    }
}
