<?php
use Migrations\AbstractSeed;

/**
 * Permissions seed.
 */
class PermissionsSeed extends AbstractSeed
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
                'name' => 'Listado de Usuarios',
                'description' => '',
                'controller' => 'Users',
                'action' => 'index',
                'created' => '2017-02-21 14:05:28',
                'modified' => '2017-02-21 14:05:28',
            ],
            [
                'id' => '2',
                'name' => 'Ver Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'view',
                'created' => '2017-02-21 14:05:48',
                'modified' => '2017-02-21 14:05:48',
            ],
            [
                'id' => '3',
                'name' => 'Agregar Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'add',
                'created' => '2017-02-21 14:06:08',
                'modified' => '2017-02-21 14:06:08',
            ],
            [
                'id' => '4',
                'name' => 'Editar Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'edit',
                'created' => '2017-02-21 14:06:31',
                'modified' => '2017-02-21 14:06:31',
            ],
            [
                'id' => '5',
                'name' => 'Editar Mecánico',
                'description' => '',
                'controller' => 'Users',
                'action' => 'editMechanic',
                'created' => '2017-02-21 14:07:14',
                'modified' => '2017-02-21 14:07:14',
            ],
            [
                'id' => '6',
                'name' => 'Eliminar Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'delete',
                'created' => '2017-02-21 14:07:46',
                'modified' => '2017-02-21 14:07:46',
            ],
            [
                'id' => '7',
                'name' => 'Activar Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'activated',
                'created' => '2017-02-21 14:08:01',
                'modified' => '2017-02-21 14:08:01',
            ],
            [
                'id' => '8',
                'name' => 'Desactivar Usuario',
                'description' => '',
                'controller' => 'Users',
                'action' => 'deactivated',
                'created' => '2017-02-21 14:08:18',
                'modified' => '2017-02-21 14:08:18',
            ],
            [
                'id' => '9',
                'name' => 'Listado de Usuarios Personalizado',
                'description' => 'Listado de usuario con filtro por rol',
                'controller' => 'Users',
                'action' => 'showAll',
                'created' => '2017-02-21 14:09:05',
                'modified' => '2017-02-21 14:09:05',
            ],
            [
                'id' => '10',
                'name' => 'Eliminar Foto de Perfil',
                'description' => '',
                'controller' => 'Users',
                'action' => 'deletePhoto',
                'created' => '2017-02-21 14:10:10',
                'modified' => '2017-02-21 14:10:10',
            ],
            [
                'id' => '11',
                'name' => 'Listar Roles',
                'description' => '',
                'controller' => 'Roles',
                'action' => 'index',
                'created' => '2017-02-21 14:12:52',
                'modified' => '2017-02-21 14:12:52',
            ],
            [
                'id' => '12',
                'name' => 'Agregar Rol',
                'description' => '',
                'controller' => 'Roles',
                'action' => 'add',
                'created' => '2017-02-21 14:19:37',
                'modified' => '2017-02-21 14:19:37',
            ],
            [
                'id' => '13',
                'name' => 'Editar Rol',
                'description' => '',
                'controller' => 'Roles',
                'action' => 'edit',
                'created' => '2017-02-21 14:19:56',
                'modified' => '2017-02-21 14:19:56',
            ],
            [
                'id' => '14',
                'name' => 'Eliminar Rol',
                'description' => '',
                'controller' => 'Roles',
                'action' => 'delete',
                'created' => '2017-02-21 14:20:29',
                'modified' => '2017-02-21 14:20:29',
            ],
            [
                'id' => '15',
                'name' => 'Listar Permisos',
                'description' => '',
                'controller' => 'Permissions',
                'action' => 'index',
                'created' => '2017-02-21 14:21:37',
                'modified' => '2017-02-21 14:21:37',
            ],
            [
                'id' => '16',
                'name' => 'Agregar Permiso',
                'description' => '',
                'controller' => 'Permissions',
                'action' => 'add',
                'created' => '2017-02-21 14:22:04',
                'modified' => '2017-02-21 14:22:04',
            ],
            [
                'id' => '17',
                'name' => 'Editar Permiso',
                'description' => '',
                'controller' => 'Permissions',
                'action' => 'edit',
                'created' => '2017-02-21 14:22:21',
                'modified' => '2017-02-21 14:22:21',
            ],
            [
                'id' => '18',
                'name' => 'Eliminar Permiso',
                'description' => '',
                'controller' => 'Permissions',
                'action' => 'delete',
                'created' => '2017-02-21 14:22:45',
                'modified' => '2017-02-21 14:22:45',
            ],
            [
                'id' => '19',
                'name' => 'Ver Rol',
                'description' => '',
                'controller' => 'Roles',
                'action' => 'view',
                'created' => '2017-02-21 14:23:26',
                'modified' => '2017-02-21 14:23:26',
            ],
            [
                'id' => '20',
                'name' => 'Ver Permiso',
                'description' => '',
                'controller' => 'Permissions',
                'action' => 'view',
                'created' => '2017-02-21 14:23:47',
                'modified' => '2017-02-21 14:23:47',
            ],
            [
                'id' => '21',
                'name' => 'Listar Solicitudes',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'index',
                'created' => '2017-02-22 17:46:16',
                'modified' => '2017-02-22 17:46:39',
            ],
            [
                'id' => '22',
                'name' => 'Agregar Solicitud',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'add',
                'created' => '2017-02-22 18:13:13',
                'modified' => '2017-02-22 18:13:13',
            ],
            [
                'id' => '23',
                'name' => 'Asignar Mecánico',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'assignMechanic',
                'created' => '2017-02-22 18:19:24',
                'modified' => '2017-02-22 18:19:24',
            ],
            [
                'id' => '24',
                'name' => 'Cancelar Solicitud (Cliente)',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'cancelByClient',
                'created' => '2017-02-22 18:20:27',
                'modified' => '2017-02-22 18:20:27',
            ],
            [
                'id' => '25',
                'name' => 'Cancelar Solicitud (Mecánico)',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'cancelByMechanic',
                'created' => '2017-02-22 18:21:00',
                'modified' => '2017-02-22 18:21:00',
            ],
            [
                'id' => '26',
                'name' => 'Agregar Pago',
                'description' => '',
                'controller' => 'Payments',
                'action' => 'add',
                'created' => '2017-02-22 18:24:41',
                'modified' => '2017-02-22 18:24:41',
            ],
            [
                'id' => '27',
                'name' => 'Marcar como Pagado',
                'description' => '',
                'controller' => 'Payments',
                'action' => 'markAsPaid',
                'created' => '2017-02-22 18:30:22',
                'modified' => '2017-02-22 18:30:22',
            ],
            [
                'id' => '28',
                'name' => 'Agregar Orden de Compra',
                'description' => '',
                'controller' => 'PurchaseOrders',
                'action' => 'add',
                'created' => '2017-02-22 18:33:37',
                'modified' => '2017-02-22 18:33:37',
            ],
            [
                'id' => '29',
                'name' => 'Editar Orden de Compra',
                'description' => '',
                'controller' => 'PurchaseOrders',
                'action' => 'edit',
                'created' => '2017-02-22 18:34:11',
                'modified' => '2017-02-22 18:34:11',
            ],
            [
                'id' => '30',
                'name' => 'Eliminar Orden de Compra',
                'description' => '',
                'controller' => 'PurchaseOrders',
                'action' => 'delete',
                'created' => '2017-02-22 18:35:32',
                'modified' => '2017-02-22 18:35:32',
            ],
            [
                'id' => '31',
                'name' => 'Aprobar Orden de Compra',
                'description' => 'Aprueba la orden de compra generada por defecto para una solicitud determinada',
                'controller' => 'PurchaseOrders',
                'action' => 'approve',
                'created' => '2017-02-22 18:36:17',
                'modified' => '2017-02-22 18:36:17',
            ],
            [
                'id' => '32',
                'name' => 'Ver Solicitud',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'view',
                'created' => '2017-02-22 18:37:31',
                'modified' => '2017-02-22 18:37:31',
            ],
            [
                'id' => '33',
                'name' => 'Ver Orden de Compra',
                'description' => '',
                'controller' => 'PurchaseOrders',
                'action' => 'view',
                'created' => '2017-02-22 18:38:04',
                'modified' => '2017-02-22 18:38:04',
            ],
            [
                'id' => '34',
                'name' => 'Marcar "Solicitud en Curso"',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'markInCourse',
                'created' => '2017-02-22 18:40:11',
                'modified' => '2017-02-22 18:40:11',
            ],
            [
                'id' => '35',
                'name' => 'Marcar "Solicitud Finalizada"',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'markFinish',
                'created' => '2017-02-22 18:42:14',
                'modified' => '2017-02-22 18:42:14',
            ],
            [
                'id' => '36',
                'name' => 'Listar Servicios Disponibles',
                'description' => '',
                'controller' => 'AvailableServices',
                'action' => 'index',
                'created' => '2017-02-22 18:46:43',
                'modified' => '2017-02-22 18:46:43',
            ],
            [
                'id' => '37',
                'name' => 'Desactivar Servicio',
                'description' => '',
                'controller' => 'AvailableServices',
                'action' => 'disable',
                'created' => '2017-02-22 18:47:26',
                'modified' => '2017-02-22 18:47:26',
            ],
            [
                'id' => '38',
                'name' => 'Activar Servicio',
                'description' => '',
                'controller' => 'AvailableServices',
                'action' => 'enable',
                'created' => '2017-02-22 18:48:08',
                'modified' => '2017-02-22 18:48:08',
            ],
            [
                'id' => '39',
                'name' => 'Listar Vehiculos',
                'description' => '',
                'controller' => 'Cars',
                'action' => 'index',
                'created' => '2017-02-22 18:55:28',
                'modified' => '2017-02-22 18:55:28',
            ],
            [
                'id' => '40',
                'name' => 'Ver Vehiculo',
                'description' => '',
                'controller' => 'Cars',
                'action' => 'view',
                'created' => '2017-02-22 18:56:08',
                'modified' => '2017-02-22 18:56:08',
            ],
            [
                'id' => '41',
                'name' => 'Agregar Vehiculo',
                'description' => '',
                'controller' => 'Cars',
                'action' => 'add',
                'created' => '2017-02-22 18:56:34',
                'modified' => '2017-02-22 18:56:34',
            ],
            [
                'id' => '42',
                'name' => 'Editar Vehiculo',
                'description' => '',
                'controller' => 'Cars',
                'action' => 'edit',
                'created' => '2017-02-22 18:57:46',
                'modified' => '2017-02-22 18:57:46',
            ],
            [
                'id' => '43',
                'name' => 'Eliminar Vehiculo',
                'description' => '',
                'controller' => 'Cars',
                'action' => 'delete',
                'created' => '2017-02-22 18:58:18',
                'modified' => '2017-02-22 18:58:18',
            ],
            [
                'id' => '44',
                'name' => 'Listar Insumos',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'index',
                'created' => '2017-02-23 15:09:57',
                'modified' => '2017-03-13 19:18:29',
            ],
            [
                'id' => '45',
                'name' => 'Agregar Insumo',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'add',
                'created' => '2017-02-23 15:10:26',
                'modified' => '2017-03-13 19:18:40',
            ],
            [
                'id' => '46',
                'name' => 'Editar Insumo',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'edit',
                'created' => '2017-02-23 15:10:43',
                'modified' => '2017-03-13 19:19:14',
            ],
            [
                'id' => '47',
                'name' => 'Eliminar Insumo',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'delete',
                'created' => '2017-02-23 15:11:01',
                'modified' => '2017-03-13 19:18:50',
            ],
            [
                'id' => '48',
                'name' => 'Ver Insumo',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'view',
                'created' => '2017-02-23 15:11:32',
                'modified' => '2017-03-13 19:19:33',
            ],
            [
                'id' => '49',
                'name' => 'Dashboard',
                'description' => '',
                'controller' => 'Pages',
                'action' => 'dashboard',
                'created' => '2017-02-23 15:22:43',
                'modified' => '2017-02-23 15:22:43',
            ],
            [
                'id' => '50',
                'name' => 'Exportar Insumos a Excel',
                'description' => '',
                'controller' => 'Supplies',
                'action' => 'exportData',
                'created' => '2017-02-24 15:04:56',
                'modified' => '2017-03-13 19:19:24',
            ],
            [
                'id' => '51',
                'name' => 'Exportar pagos a mecánicos',
                'description' => '',
                'controller' => 'Payments',
                'action' => 'exportData',
                'created' => '2017-02-24 19:06:51',
                'modified' => '2017-02-24 19:06:51',
            ],
            [
                'id' => '52',
                'name' => 'Listado de Reportes',
                'description' => '',
                'controller' => 'Reports',
                'action' => 'index',
                'created' => '2017-03-06 17:31:39',
                'modified' => '2017-03-06 17:31:39',
            ],
            [
                'id' => '53',
                'name' => 'Listar Repuestos',
                'description' => '',
                'controller' => 'Replacements',
                'action' => 'index',
                'created' => '2017-03-13 19:29:59',
                'modified' => '2017-03-13 19:29:59',
            ],
            [
                'id' => '54',
                'name' => 'Agregar Repuesto',
                'description' => '',
                'controller' => 'Replacements',
                'action' => 'add',
                'created' => '2017-03-13 19:30:33',
                'modified' => '2017-03-13 19:30:33',
            ],
            [
                'id' => '55',
                'name' => 'Editar Repuesto',
                'description' => '',
                'controller' => 'Replacements',
                'action' => 'edit',
                'created' => '2017-03-13 19:31:01',
                'modified' => '2017-03-13 19:31:01',
            ],
            [
                'id' => '56',
                'name' => 'Ver Repuesto',
                'description' => '',
                'controller' => 'Replacements',
                'action' => 'view',
                'created' => '2017-03-13 19:31:19',
                'modified' => '2017-03-13 19:31:19',
            ],
            [
                'id' => '57',
                'name' => 'Eliminar Repuesto',
                'description' => '',
                'controller' => 'Replacements',
                'action' => 'delete',
                'created' => '2017-03-13 19:31:42',
                'modified' => '2017-03-13 19:31:42',
            ],
            [
                'id' => '58',
                'name' => 'Listar fabricantes de vehiculos',
                'description' => '',
                'controller' => 'CarBrands',
                'action' => 'index',
                'created' => '2017-03-14 19:32:32',
                'modified' => '2017-03-14 19:32:32',
            ],
            [
                'id' => '59',
                'name' => 'Agregar fabricante de vehiculos',
                'description' => '',
                'controller' => 'CarBrands',
                'action' => 'add',
                'created' => '2017-03-14 19:33:02',
                'modified' => '2017-03-14 19:34:26',
            ],
            [
                'id' => '60',
                'name' => 'Editar fabricante de vehiculos',
                'description' => '',
                'controller' => 'CarBrands',
                'action' => 'edit',
                'created' => '2017-03-14 19:33:21',
                'modified' => '2017-03-14 19:34:40',
            ],
            [
                'id' => '61',
                'name' => 'Eliminar fabricante de vehiculos',
                'description' => '',
                'controller' => 'CarBrands',
                'action' => 'delete',
                'created' => '2017-03-14 19:33:45',
                'modified' => '2017-03-14 19:33:45',
            ],
            [
                'id' => '62',
                'name' => 'Ver fabricante de vehiculos',
                'description' => '',
                'controller' => 'CarBrands',
                'action' => 'view',
                'created' => '2017-03-14 19:34:06',
                'modified' => '2017-03-14 19:34:06',
            ],
            [
                'id' => '63',
                'name' => 'Listar modelo de vehiculos',
                'description' => '',
                'controller' => 'CarModels',
                'action' => 'index',
                'created' => '2017-03-14 19:35:26',
                'modified' => '2017-03-14 19:35:26',
            ],
            [
                'id' => '64',
                'name' => 'Agregar modelo de vehiculo',
                'description' => '',
                'controller' => 'CarModels',
                'action' => 'add',
                'created' => '2017-03-14 19:36:02',
                'modified' => '2017-03-14 19:36:02',
            ],
            [
                'id' => '65',
                'name' => 'Editar modelo de vehiculo',
                'description' => '',
                'controller' => 'CarModels',
                'action' => 'edit',
                'created' => '2017-03-14 19:36:22',
                'modified' => '2017-03-14 19:36:22',
            ],
            [
                'id' => '66',
                'name' => 'Eliminar modelo de vehiculo',
                'description' => '',
                'controller' => 'CarModels',
                'action' => 'delete',
                'created' => '2017-03-14 19:36:43',
                'modified' => '2017-03-14 19:36:43',
            ],
            [
                'id' => '67',
                'name' => 'Ver modelo de vehiculo',
                'description' => '',
                'controller' => 'CarModels',
                'action' => 'view',
                'created' => '2017-03-14 19:37:17',
                'modified' => '2017-03-14 19:37:17',
            ],
            [
                'id' => '68',
                'name' => 'Listar Proveedores',
                'description' => '',
                'controller' => 'Providers',
                'action' => 'index',
                'created' => '2017-03-17 19:20:20',
                'modified' => '2017-03-17 19:20:20',
            ],
            [
                'id' => '69',
                'name' => 'Cargar documentos tributarios',
                'description' => '',
                'controller' => 'Requests',
                'action' => 'uploadBills',
                'created' => '2017-03-23 17:59:35',
                'modified' => '2017-03-23 18:14:53',
            ],
        ];

        $table = $this->table('permissions');
        $table->insert($data)->save();
    }
}