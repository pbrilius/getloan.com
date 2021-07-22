<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InterestRates extends AbstractMigration
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
      $interestRates = $this->table('interest_rates');
      $interestRates->addColumn('rate', 'float', ['null' => false])
        ->addColumn('loan_id', 'integer', ['null' => false]);

      $interestRates->addForeignKey('loan_id', 'loan', 'id');

      $interestRates->save();
    }
}
