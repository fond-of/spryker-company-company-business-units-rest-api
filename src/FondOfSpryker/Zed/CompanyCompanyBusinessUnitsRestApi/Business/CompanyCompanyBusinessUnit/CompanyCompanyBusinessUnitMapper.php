<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnit;

use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer;

class CompanyCompanyBusinessUnitMapper implements CompanyCompanyBusinessUnitMapperInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface
     */
    protected $companiesRestApiFacade;

    /**
     * @param \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface $companiesRestApiFacade
     */
    public function __construct(
        CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface $companiesRestApiFacade
    ) {
        $this->companiesRestApiFacade = $companiesRestApiFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function mapCompanyToCompanyBusinessUnit(
        RestCompanyBusinessUnitsRequestAttributesTransfer $restCompanyBusinessUnitsRequestAttributesTransfer,
        CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): CompanyBusinessUnitTransfer {
        $company = $restCompanyBusinessUnitsRequestAttributesTransfer->getCompany();

        if ($company === null || $company->getExternalReference() === null) {
            return $companyBusinessUnitTransfer;
        }

        $companyTransfer = $this->companiesRestApiFacade->findByExternalReference($company->getExternalReference());

        if ($companyTransfer !== null) {
            $companyBusinessUnitTransfer->setFkCompany($companyTransfer->getIdCompany())
                ->setCompany($companyTransfer);
        }

        return $companyBusinessUnitTransfer;
    }
}
