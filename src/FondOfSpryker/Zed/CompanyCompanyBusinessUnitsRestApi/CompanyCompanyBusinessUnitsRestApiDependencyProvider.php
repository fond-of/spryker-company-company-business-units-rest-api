<?php

namespace FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi;

use FondOfSpryker\Zed\CompanyCompanyBusinessUnitsRestApi\Dependency\Facade\CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeBridge;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class CompanyCompanyBusinessUnitsRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_COMPANIES_REST_API = 'FACADE_COMPANIES_REST_API';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        $container = $this->addCompaniesRestApiFacade($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addCompaniesRestApiFacade(Container $container): Container
    {
        $container[static::FACADE_COMPANIES_REST_API] = function (Container $container) {
            return new CompanyCompanyBusinessUnitsRestApiToCompaniesRestApiFacadeBridge(
                $container->getLocator()->companiesRestApi()->facade()
            );
        };

        return $container;
    }
}
