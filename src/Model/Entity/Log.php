<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $level
 * @property int $loan_id
 * @property int $payment_id
 *
 * @property \App\Model\Entity\Loan $loan
 * @property \App\Model\Entity\Payment $payment
 */
class Log extends Entity
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
        'date' => true,
        'level' => true,
        'loan_id' => true,
        'payment_id' => true,
        'loan' => true,
        'payment' => true,
    ];
}
