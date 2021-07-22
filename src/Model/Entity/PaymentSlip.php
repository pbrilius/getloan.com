<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaymentSlip Entity
 *
 * @property int $id
 * @property int $premium_membership_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\PremiumMembership $premium_membership
 * @property \App\Model\Entity\User $user
 */
class PaymentSlip extends Entity
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
        'premium_membership_id' => true,
        'user_id' => true,
        'premium_membership' => true,
        'user' => true,
    ];
}