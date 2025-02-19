<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250219140000_FixForeignKeyConstraint extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Fix foreign key constraint issue when modifying id column';
    }

    public function up(Schema $schema): void
    {
        // Drop foreign key constraint
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6B899279');
        
        // Modify the column
        $this->addSql('ALTER TABLE user MODIFY id INT AUTO_INCREMENT NOT NULL');
        
        // Recreate foreign key constraint
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E6B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // Reverse the changes
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6B899279');
        $this->addSql('ALTER TABLE user MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E6B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
    }
}
