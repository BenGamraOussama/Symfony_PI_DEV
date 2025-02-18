<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215022139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consultation (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, prix DOUBLE PRECISION NOT NULL, modeconsultation VARCHAR(255) NOT NULL, etaenum VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, heure TIME NOT NULL, priorite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE traitement (id INT AUTO_INCREMENT NOT NULL, consultation_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, medicament VARCHAR(255) NOT NULL, suivi VARCHAR(255) NOT NULL, INDEX IDX_2A356D2762FF6CDF (consultation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE traitement ADD CONSTRAINT FK_2A356D2762FF6CDF FOREIGN KEY (consultation_id) REFERENCES consultation (id)');
        $this->addSql('ALTER TABLE patient ADD r_dv_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBA0A596B1 FOREIGN KEY (r_dv_id) REFERENCES rdv (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EBA0A596B1 ON patient (r_dv_id)');
        $this->addSql('ALTER TABLE psychiatre ADD consultation_id INT DEFAULT NULL, ADD r_dv_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE psychiatre ADD CONSTRAINT FK_559A887F62FF6CDF FOREIGN KEY (consultation_id) REFERENCES consultation (id)');
        $this->addSql('ALTER TABLE psychiatre ADD CONSTRAINT FK_559A887FA0A596B1 FOREIGN KEY (r_dv_id) REFERENCES rdv (id)');
        $this->addSql('CREATE INDEX IDX_559A887F62FF6CDF ON psychiatre (consultation_id)');
        $this->addSql('CREATE INDEX IDX_559A887FA0A596B1 ON psychiatre (r_dv_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE first_name first_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE psychiatre DROP FOREIGN KEY FK_559A887F62FF6CDF');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBA0A596B1');
        $this->addSql('ALTER TABLE psychiatre DROP FOREIGN KEY FK_559A887FA0A596B1');
        $this->addSql('ALTER TABLE traitement DROP FOREIGN KEY FK_2A356D2762FF6CDF');
        $this->addSql('DROP TABLE consultation');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('DROP INDEX IDX_1ADAD7EBA0A596B1 ON patient');
        $this->addSql('ALTER TABLE patient DROP r_dv_id');
        $this->addSql('DROP INDEX IDX_559A887F62FF6CDF ON psychiatre');
        $this->addSql('DROP INDEX IDX_559A887FA0A596B1 ON psychiatre');
        $this->addSql('ALTER TABLE psychiatre DROP consultation_id, DROP r_dv_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE last_name last_name VARCHAR(255) DEFAULT \'NULL\', CHANGE first_name first_name VARCHAR(255) DEFAULT \'NULL\'');
    }
}
