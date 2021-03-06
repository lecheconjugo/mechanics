<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Replacement Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $original_price
 * @property float $price_for_request
 * @property bool $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\CarBrandsProvider[] $car_brands_providers
 * @property \App\Model\Entity\AvailableService[] $available_services
 * @property \App\Model\Entity\PurchaseOrder[] $purchase_orders
 * @property \App\Model\Entity\Provider[] $providers
 */
class Replacement extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
