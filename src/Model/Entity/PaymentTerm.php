<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaymentTerm Entity
 *
 * @property int $id
 * @property float $sum
 * @property int $loan_id
 * @property \Cake\I18n\FrozenTime $term
 *
 * @property \App\Model\Entity\Loan $loan
 */
class PaymentTerm extends Entity
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
        'sum' => true,
        'loan_id' => true,
        'term' => true,
        'loan' => true,
    ];
}
