<?php //-->
/**
 * This file is part of a package designed for the CradlePHP Project.
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

use PHPUnit\Framework\TestCase;

use Cradle\Module\System\Object\Service;

use Cradle\Module\System\Object\Service\SqlService;
use Cradle\Module\System\Object\Service\RedisService;
use Cradle\Module\System\Object\Service\ElasticService;
use Cradle\Module\System\Utility\Service\NoopService;

/**
 * Service layer test
 *
 * @vendor   Cradle
 * @package  Object
 * @author   John Doe <john@acme.com>
 */
class Cradle_Module_System_Object_ServiceTest extends TestCase
{
    /**
     * @covers Cradle\Module\Role\Service::get
     */
    public function testGet()
    {
        $actual = Service::get('sql');
        $this->assertTrue($actual instanceof SqlService || $actual instanceof NoopService);

        $actual = Service::get('redis');
        $this->assertTrue($actual instanceof RedisService || $actual instanceof NoopService);

        $actual = Service::get('elastic');
        $this->assertTrue($actual instanceof ElasticService || $actual instanceof NoopService);
    }
}
