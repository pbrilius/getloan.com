<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InterestRate Entity
 *
 * @property int $id
 * @property float $rate
 * @property int $loan_id
 *
 * @property \App\Model\Entity\Loan $loan
 */
class InterestRate extends Entity
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
        'rate' => true,
        'loan_id' => true,
        'loan' => true,
    ];
}
