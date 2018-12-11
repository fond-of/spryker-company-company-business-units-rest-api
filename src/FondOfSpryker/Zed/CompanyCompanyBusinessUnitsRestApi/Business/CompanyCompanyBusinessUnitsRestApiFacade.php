<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnitsRestApiBusinessFactory getFactory()
 */
class CompanyCompanyBusinessUnitsRestApiFacade extends AbstractFacade implements CompanyCompanyBusinessUnitsRestApiFacadeInterface
{
    /**
     * @inheritdoc
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function mapCompanyToCompanyBusinessUnit(
        RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer,
        CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): CompanyBusinessUnitTransfer {
        return $this->getFactory()->createCompanyCompanyBusinessUnitMapper()->mapCompanyToCompanyBusinessUnit(
            $restCompanyBusinessUnitsRequestAttributesTransfer,
            $companyBusinessUnitTransfer
        );
    }
}
