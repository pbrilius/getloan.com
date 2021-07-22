<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Log extends AbstractMigration
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
      $log = $this->table('log');
      $log->addColumn('date', 'datetime', ['null' => false])
        ->addColumn('level', 'string', ['null' => false])
        ->addColumn('loan_id', 'integer', ['null' => false])
        ->addColumn('payment_id', 'integer', ['null' => false]);

      $log->addForeignKey('loan_id', 'loan', 'id');
      $log->addForeignKey('payment_id', 'payments', 'id');

      $log->save();

    }
}
