<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\PurchaseOrdersReplacementsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\PurchaseOrdersReplacementsController Test Case
 */
class PurchaseOrdersReplacementsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.purchase_orders_replacements',
        'app.purchase_orders',
        'app.requests',
        'app.clients',
        'app.roles',
        'app.users',
        'app.commune',
        'app.cities',
        'app.communes',
        'app.users_communes',
        'app.mechanics',
        'app.answered_surveys',
        'app.surveys',
        'app.questions',
        'app.cars',
        'app.car_brands',
        'app.car_models',
        'app.providers',
        'app.items',
        'app.providers_items',
        'app.purchase_orders_items',
        'app.payment_refunds',
        'app.banks',
        'app.unique_codes',
        'app.bank',
        'app.banks_codes',
        'app.codes',
        'app.providers_payment_refunds',
        'app.users_payment_refunds',
        'app.car_brands_providers',
        'app.replacements',
        'app.available_services',
        'app.requests_types',
        'app.request_services',
        'app.items_logs',
        'app.abilities',
        'app.available_services_abilities',
        'app.available_services_replacements',
        'app.supplies',
        'app.available_services_supplies',
        'app.supplies_providers',
        'app.requests_available_services',
        'app.replacements_providers',
        'app.health_reports',
        'app.maintence_records',
        'app.payment_method',
        'app.schedules',
        'app.session',
        'app.user_abilities',
        'app.workloads',
        'app.tools',
        'app.users_tools',
        'app.permissions',
        'app.roles_permissions',
        'app.payments',
        'app.payment_methods',
        'app.requests_files',
        'app.qualifications_to_mechanics',
        'app.invoices'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
