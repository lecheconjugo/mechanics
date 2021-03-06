<?php
use Migrations\AbstractSeed;

/**
 * Supplies seed.
 */
class SuppliesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Grasa blanca',
                'description' => '',
                'total_price' => '500',
                'price_for_request' => '1000',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:23:59',
                'modified' => '2017-03-13 19:24:46',
            ],
            [
                'id' => '2',
                'name' => 'Spray para pastillas',
                'description' => '',
                'total_price' => '2500',
                'price_for_request' => '500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:25:09',
                'modified' => '2017-03-13 19:25:09',
            ],
            [
                'id' => '3',
                'name' => 'Limpia parabrisas',
                'description' => '',
                'total_price' => '3000',
                'price_for_request' => '750',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:25:50',
                'modified' => '2017-03-13 19:25:50',
            ],
            [
                'id' => '4',
                'name' => 'Limpiador de frenos',
                'description' => '',
                'total_price' => '3000',
                'price_for_request' => '700',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:26:12',
                'modified' => '2017-03-13 19:26:12',
            ],
            [
                'id' => '5',
                'name' => 'Grasa',
                'description' => '',
                'total_price' => '2000',
                'price_for_request' => '500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:26:34',
                'modified' => '2017-03-13 19:26:34',
            ],
            [
                'id' => '6',
                'name' => 'Lija',
                'description' => '',
                'total_price' => '1000',
                'price_for_request' => '500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:26:56',
                'modified' => '2017-03-13 19:26:56',
            ],
            [
                'id' => '7',
                'name' => 'Liquido de frenos',
                'description' => '',
                'total_price' => '5200',
                'price_for_request' => '1500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:27:31',
                'modified' => '2017-03-13 19:27:31',
            ],
            [
                'id' => '8',
                'name' => 'Spray para batería',
                'description' => '',
                'total_price' => '4600',
                'price_for_request' => '1000',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:28:43',
                'modified' => '2017-03-13 19:28:43',
            ],
            [
                'id' => '9',
                'name' => 'Guincha aisladora',
                'description' => '',
                'total_price' => '2500',
                'price_for_request' => '500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:29:17',
                'modified' => '2017-03-13 19:29:17',
            ],
            [
                'id' => '10',
                'name' => 'Limpia contactos',
                'description' => '',
                'total_price' => '3500',
                'price_for_request' => '700',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:32:37',
                'modified' => '2017-03-13 19:32:37',
            ],
            [
                'id' => '11',
                'name' => 'WD-40',
                'description' => '',
                'total_price' => '5500',
                'price_for_request' => '1200',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:32:57',
                'modified' => '2017-03-13 19:32:57',
            ],
            [
                'id' => '12',
                'name' => 'Multi tester',
                'description' => '',
                'total_price' => '150000',
                'price_for_request' => '1500',
                'stock' => '5',
                'active' => '1',
                'created' => '2017-03-13 19:33:28',
                'modified' => '2017-03-13 19:33:28',
            ],
            [
                'id' => '13',
                'name' => 'Limpia carburador',
                'description' => '',
                'total_price' => '6000',
                'price_for_request' => '600',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:34:33',
                'modified' => '2017-03-13 19:34:33',
            ],
            [
                'id' => '14',
                'name' => 'Silicona',
                'description' => '',
                'total_price' => '4500',
                'price_for_request' => '450',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:34:56',
                'modified' => '2017-03-13 19:34:56',
            ],
            [
                'id' => '15',
                'name' => 'Agua destilada',
                'description' => '',
                'total_price' => '5000',
                'price_for_request' => '2500',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:35:41',
                'modified' => '2017-03-13 19:35:41',
            ],
            [
                'id' => '16',
                'name' => 'Abrazadera',
                'description' => '',
                'total_price' => '500',
                'price_for_request' => '1000',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:36:00',
                'modified' => '2017-03-13 19:36:00',
            ],
            [
                'id' => '17',
                'name' => 'Agua refrigerante',
                'description' => '',
                'total_price' => '5000',
                'price_for_request' => '2500',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:36:20',
                'modified' => '2017-03-13 19:36:20',
            ],
            [
                'id' => '18',
                'name' => 'Fusible',
                'description' => '',
                'total_price' => '500',
                'price_for_request' => '1000',
                'stock' => '25',
                'active' => '1',
                'created' => '2017-03-13 19:36:41',
                'modified' => '2017-03-13 19:36:41',
            ],
            [
                'id' => '19',
                'name' => 'Sanitizador',
                'description' => '',
                'total_price' => '2500',
                'price_for_request' => '5000',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:37:14',
                'modified' => '2017-03-13 19:37:14',
            ],
            [
                'id' => '20',
                'name' => 'Huaipe',
                'description' => '',
                'total_price' => '2000',
                'price_for_request' => '500',
                'stock' => '10',
                'active' => '1',
                'created' => '2017-03-13 19:38:05',
                'modified' => '2017-03-13 19:38:05',
            ],
            [
                'id' => '21',
                'name' => 'Llave de filtro de combustión',
                'description' => '',
                'total_price' => '8000',
                'price_for_request' => '400',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:38:56',
                'modified' => '2017-03-13 19:38:56',
            ],
            [
                'id' => '22',
                'name' => 'Llave de filtros',
                'description' => '',
                'total_price' => '4000',
                'price_for_request' => '250',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:39:29',
                'modified' => '2017-03-13 19:39:29',
            ],
            [
                'id' => '23',
                'name' => 'Líquido de dirección',
                'description' => '',
                'total_price' => '7000',
                'price_for_request' => '3500',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 19:39:50',
                'modified' => '2017-03-13 19:39:50',
            ],
            [
                'id' => '24',
                'name' => 'Aceite',
                'description' => '',
                'total_price' => '9000',
                'price_for_request' => '4500',
                'stock' => '20',
                'active' => '1',
                'created' => '2017-03-13 19:40:20',
                'modified' => '2017-03-13 19:40:20',
            ],
            [
                'id' => '25',
                'name' => 'Linterna',
                'description' => '',
                'total_price' => '1500',
                'price_for_request' => '0',
                'stock' => '15',
                'active' => '1',
                'created' => '2017-03-13 20:06:14',
                'modified' => '2017-03-13 20:06:14',
            ],
            [
                'id' => '26',
                'name' => 'Aceite de transmisión',
                'description' => '',
                'total_price' => '6000',
                'price_for_request' => '10000',
                'stock' => '50',
                'active' => '1',
                'created' => '2017-03-14 18:29:47',
                'modified' => '2017-03-14 18:29:47',
            ],
        ];

        $table = $this->table('supplies');
        $table->insert($data)->save();
    }
}
