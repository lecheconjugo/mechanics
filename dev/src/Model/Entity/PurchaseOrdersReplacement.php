<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PurchaseOrdersReplacement Entity
 *
 * @property int $id
 * @property int $purchase_order_id
 * @property int $replacement_id
 * @property int $provider_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\PurchaseOrder $purchase_order
 * @property \App\Model\Entity\Replacement $replacement
 * @property \App\Model\Entity\Provider $provider
 */
class PurchaseOrdersReplacement extends Entity
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
