<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219140903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Start transaction
        $this->connection->beginTransaction();
        
        try {
            // Drop foreign key constraint first
            $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6B899279');
            
            // Modify the column
            $this->addSql('ALTER TABLE user MODIFY id INT AUTO_INCREMENT NOT NULL');
            
            // Recreate foreign key constraint
            $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E6B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
            
            // Commit transaction
            $this->connection->commit();
        } catch (\Exception $e) {
            // Rollback on error
            $this->connection->rollBack();
            throw $e;
        }

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite_user (activite_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_FA43CF3B9B0F88B1 (activite_id), INDEX IDX_FA43CF3BA76ED395 (user_id), PRIMARY KEY(activite_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE activite_user ADD CONSTRAINT FK_FA43CF3B9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_user ADD CONSTRAINT FK_FA43CF3BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_patient DROP FOREIGN KEY FK_507C106E9B0F88B1');
        $this->addSql('ALTER TABLE activite_patient DROP FOREIGN KEY FK_507C106E6B899279');
        $this->addSql('DROP TABLE activite_patient');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBBF396750');
        $this->addSql('ALTER TABLE patient DROP dossier_medical_path, DROP gener, DROP adresse, DROP phone, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE name name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP discr');
    }
}
