<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DropForeignKeyCommand extends Command
{
    protected static $defaultName = 'app:drop-fk';

    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Drops the foreign key constraints on question, reponse and rdv tables');
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            // Check and drop foreign key constraints if they exist
            $schemaManager = $this->connection->createSchemaManager();
            $foreignKeys = $schemaManager->listTableForeignKeys('question');
            
            foreach ($foreignKeys as $foreignKey) {
                if ($foreignKey->getName() === 'FK_B6F7494E6B899279') {
                    $this->connection->executeStatement('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6B899279');
                    $output->writeln('Dropped foreign key constraint FK_B6F7494E6B899279 from question table');
                }
            }

            $foreignKeys = $schemaManager->listTableForeignKeys('reponse');
            foreach ($foreignKeys as $foreignKey) {
                if ($foreignKey->getName() === 'FK_5FB6DEC76B899279') {
                    $this->connection->executeStatement('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC76B899279');
                    $output->writeln('Dropped foreign key constraint FK_5FB6DEC76B899279 from reponse table');
                }
            }

            $foreignKeys = $schemaManager->listTableForeignKeys('rdv');
            foreach ($foreignKeys as $foreignKey) {
                if ($foreignKey->getName() === 'FK_10C31F866B899279') {
                    $this->connection->executeStatement('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F866B899279');
                    $output->writeln('Dropped foreign key constraint FK_10C31F866B899279 from rdv table');
                }
            }

            
            $output->writeln('Foreign key constraints handled successfully.');
            return Command::SUCCESS;


        } catch (\Exception $e) {
            $output->writeln('Error: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
