<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade;

use Generated\Shared\Transfer\CompanyTransfer;

interface CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeInterface
{
    /**
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function findByExternalReference(string $externalReference): ?CompanyTransfer;
}
