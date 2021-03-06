<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ScheduleLogsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ScheduleLogsController Test Case
 */
class ScheduleLogsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.schedule_logs',
        'app.schedules',
        'app.users',
        'app.roles',
        'app.permissions',
        'app.roles_permissions',
        'app.commune',
        'app.cities',
        'app.communes',
        'app.requests',
        'app.clients',
        'app.answered_surveys',
        'app.surveys',
        'app.questions',
        'app.requests_clients',
        'app.mechanics',
        'app.requests_mechanics',
        'app.cars',
        'app.car_brands',
        'app.car_models',
        'app.providers',
        'app.purchase_orders_replacements',
        'app.purchase_orders',
        'app.replacements',
        'app.car_brands_providers',
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
        'app.purchase_orders_supplies',
        'app.requests_available_services',
        'app.replacements_providers',
        'app.payment_refunds',
        'app.banks',
        'app.unique_codes',
        'app.bank',
        'app.banks_codes',
        'app.codes',
        'app.providers_payment_refunds',
        'app.users_payment_refunds',
        'app.health_reports',
        'app.maintence_records',
        'app.payments',
        'app.payment_methods',
        'app.requests_files',
        'app.qualifications_to_mechanics',
        'app.invoices',
        'app.reports',
        'app.report_question_categories',
        'app.report_question_answers',
        'app.report_questions',
        'app.report_question_groups',
        'app.report_question_alternatives',
        'app.payment_method',
        'app.session',
        'app.user_abilities',
        'app.workloads',
        'app.users_communes',
        'app.tools',
        'app.users_tools'
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
