<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PaymentSlip extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
      $paymentSlip = $this->table('payment_slip');
      $paymentSlip->changeComment('Actual payment slip.');
      $paymentSlip->addColumn('membership_type', 'integer', ['null' => false]);
      $paymentSlip->addColumn('user_id', 'integer', ['null' => false]);

      $paymentSlip->addForeignKey('membership_type', 'premium_membership', 'id');
      $paymentSlip->addForeignKey('user_id', 'user', 'id');

      $paymentSlip->save();
    }
}
