<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219150651 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patient_exercice (patient_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_D39D9FE86B899279 (patient_id), INDEX IDX_D39D9FE889D40298 (exercice_id), PRIMARY KEY(patient_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient_activite (patient_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_8FF00DB06B899279 (patient_id), INDEX IDX_8FF00DB09B0F88B1 (activite_id), PRIMARY KEY(patient_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patient_exercice ADD CONSTRAINT FK_D39D9FE86B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient_exercice ADD CONSTRAINT FK_D39D9FE889D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient_activite ADD CONSTRAINT FK_8FF00DB06B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient_activite ADD CONSTRAINT FK_8FF00DB09B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_patient DROP FOREIGN KEY FK_E761A1466B899279');
        $this->addSql('ALTER TABLE exercice_patient DROP FOREIGN KEY FK_E761A14689D40298');
        $this->addSql('ALTER TABLE activite_patient DROP FOREIGN KEY FK_507C106E6B899279');
        $this->addSql('ALTER TABLE activite_patient DROP FOREIGN KEY FK_507C106E9B0F88B1');
        $this->addSql('DROP TABLE exercice_patient');
        $this->addSql('DROP TABLE activite_patient');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F866B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC76B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exercice_patient (exercice_id INT NOT NULL, patient_id INT NOT NULL, INDEX IDX_E761A14689D40298 (exercice_id), INDEX IDX_E761A1466B899279 (patient_id), PRIMARY KEY(exercice_id, patient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE activite_patient (activite_id INT NOT NULL, patient_id INT NOT NULL, INDEX IDX_507C106E9B0F88B1 (activite_id), INDEX IDX_507C106E6B899279 (patient_id), PRIMARY KEY(activite_id, patient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE exercice_patient ADD CONSTRAINT FK_E761A1466B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_patient ADD CONSTRAINT FK_E761A14689D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_patient ADD CONSTRAINT FK_507C106E6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_patient ADD CONSTRAINT FK_507C106E9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient_exercice DROP FOREIGN KEY FK_D39D9FE86B899279');
        $this->addSql('ALTER TABLE patient_exercice DROP FOREIGN KEY FK_D39D9FE889D40298');
        $this->addSql('ALTER TABLE patient_activite DROP FOREIGN KEY FK_8FF00DB06B899279');
        $this->addSql('ALTER TABLE patient_activite DROP FOREIGN KEY FK_8FF00DB09B0F88B1');
        $this->addSql('DROP TABLE patient_exercice');
        $this->addSql('DROP TABLE patient_activite');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC76B899279');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E6B899279');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F866B899279');
    }
}
