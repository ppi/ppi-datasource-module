<?php
/**
 * This file is part of the PPI Framework.
 *
 * @copyright   Copyright (c) 2014 Paul Dragoonis <paul@ppi.io>
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        http://www.ppi.io
 */

namespace PPI\DataSourceModule;

use PPI\Framework\Autoload;
use PPI\Framework\Module\AbstractModule;
use PPI\DataSourceModule\Factory\DataSourceFactory;

/**
 * @author Paul Dragoonis <paul@ppi.io>
 */
class Module extends AbstractModule
{

    public function init($e)
    {
        Autoload::add(__NAMESPACE__, dirname(__DIR__));
    }

    public function getName()
    {
        return 'PPI\DataSourceModule';
    }

    public function getServiceConfig()
    {
        return ['factories' => [
            'datasource' => DataSourceFactory::class,
        ]];
    }
}