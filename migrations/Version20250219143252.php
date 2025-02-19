<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219143252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exercice_patient (exercice_id INT NOT NULL, patient_id INT NOT NULL, INDEX IDX_E761A14689D40298 (exercice_id), INDEX IDX_E761A1466B899279 (patient_id), PRIMARY KEY(exercice_id, patient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exercice_patient ADD CONSTRAINT FK_E761A14689D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_patient ADD CONSTRAINT FK_E761A1466B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exercice_patient DROP FOREIGN KEY FK_E761A14689D40298');
        $this->addSql('ALTER TABLE exercice_patient DROP FOREIGN KEY FK_E761A1466B899279');
        $this->addSql('DROP TABLE exercice_patient');

    }
}
