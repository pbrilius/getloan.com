<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class LoanMigration extends AbstractMigration
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
      $loan = $this->table('loan');
      $loan->addColumn('lender', 'integer', ['null' => false]);
      $loan->addColumn('borrower', 'integer', ['null' => false]);
      $loan->addForeignKey('lender', 'user', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);
      $loan->addForeignKey('borrower', 'user', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);

      $loan->create();
    }
}
