<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonesCommunesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonesCommunesTable Test Case
 */
class ZonesCommunesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonesCommunesTable
     */
    public $ZonesCommunes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.zones_communes',
        'app.zones',
        'app.cities',
        'app.communes',
        'app.requests',
        'app.users',
        'app.roles',
        'app.commune',
        'app.users_communes',
        'app.cities_communes',
        'app.abilities',
        'app.answered_surveys',
        'app.surveys',
        'app.questions',
        'app.cars',
        'app.items_logs',
        'app.request_services',
        'app.available_services',
        'app.items',
        'app.purcharse_order_items',
        'app.purcharse_orders',
        'app.available_services_items',
        'app.providers',
        'app.providers_items',
        'app.requests_types',
        'app.requests_types_available_services',
        'app.payment_methods',
        'app.payments',
        'app.schedules',
        'app.session',
        'app.workloads',
        'app.tools',
        'app.users_tools',
        'app.health_reports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ZonesCommunes') ? [] : ['className' => 'App\Model\Table\ZonesCommunesTable'];
        $this->ZonesCommunes = TableRegistry::get('ZonesCommunes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ZonesCommunes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
