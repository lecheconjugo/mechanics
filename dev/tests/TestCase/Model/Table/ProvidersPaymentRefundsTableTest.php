<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvidersPaymentRefundsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvidersPaymentRefundsTable Test Case
 */
class ProvidersPaymentRefundsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvidersPaymentRefundsTable
     */
    public $ProvidersPaymentRefunds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.providers_payment_refunds',
        'app.providers',
        'app.items',
        'app.categories',
        'app.items_logs',
        'app.request_services',
        'app.requests',
        'app.clients',
        'app.roles',
        'app.users',
        'app.commune',
        'app.cities',
        'app.communes',
        'app.users_communes',
        'app.answered_surveys',
        'app.surveys',
        'app.questions',
        'app.cars',
        'app.payment_method',
        'app.schedules',
        'app.session',
        'app.user_abilities',
        'app.abilities',
        'app.workloads',
        'app.tools',
        'app.users_tools',
        'app.permissions',
        'app.roles_permissions',
        'app.mechanics',
        'app.health_reports',
        'app.payments',
        'app.payment_methods',
        'app.purchase_orders',
        'app.purchase_orders_items',
        'app.requests_files',
        'app.available_services',
        'app.available_services_items',
        'app.requests_types',
        'app.requests_types_available_services',
        'app.requests_available_services',
        'app.qualifications_to_mechanics',
        'app.purcharse_order_items',
        'app.providers_items',
        'app.payment_refunds',
        'app.banks',
        'app.codes',
        'app.banks_codes',
        'app.users_payment_refunds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProvidersPaymentRefunds') ? [] : ['className' => 'App\Model\Table\ProvidersPaymentRefundsTable'];
        $this->ProvidersPaymentRefunds = TableRegistry::get('ProvidersPaymentRefunds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProvidersPaymentRefunds);

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
