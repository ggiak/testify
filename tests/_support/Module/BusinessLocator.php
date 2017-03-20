<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Testify\Module;

use Codeception\Module;
use Spryker\Shared\Testify\Locator\BusinessLocator as Locator;

class BusinessLocator extends Module
{

    /**
     * @var array
     */
    protected $config = [
        'namespaces' => [
            'Spryker'
        ]
    ];


    /**
     * @return \Spryker\Shared\Testify\Locator|\Generated\Zed\Ide\AutoCompletion|\Generated\Service\Ide\AutoCompletion
     */
    public function getLocator()
    {
        return new Locator();
    }
}
