<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business;

use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnit\CompanyCompanyBusinessUnitMapper;
use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnit\CompanyCompanyBusinessUnitMapperInterface;
use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\CompanyCompanyBusinessUnitsRestApiDependencyProvider;
use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class CompanyCompanyBusinessUnitsRestApiBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Business\CompanyCompanyBusinessUnit\CompanyCompanyBusinessUnitMapperInterface
     */
    public function createCompanyCompanyBusinessUnitMapper(): CompanyCompanyBusinessUnitMapperInterface
    {
        return new CompanyCompanyBusinessUnitMapper(
            $this->getCompaniesRestApiFacade()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface
     */
    protected function getCompaniesRestApiFacade(): CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface
    {
        return $this->getProvidedDependency(CompanyCompanyBusinessUnitsRestApiDependencyProvider::FACADE_COMPANIES_REST_API);
    }
}
