<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250226194752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consultation (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, prix DOUBLE PRECISION NOT NULL, modeconsultation VARCHAR(255) NOT NULL, etaenum VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT NOT NULL, etat TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT NOT NULL, dossier_medical VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE psychiatre (id INT NOT NULL, consultation_id INT DEFAULT NULL, specialite VARCHAR(255) NOT NULL, INDEX IDX_559A887F62FF6CDF (consultation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, psychiatre_id INT DEFAULT NULL, heure TIME NOT NULL, date DATE NOT NULL, priorite VARCHAR(255) NOT NULL, INDEX IDX_10C31F866B899279 (patient_id), INDEX IDX_10C31F86DA6C8211 (psychiatre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE traitement (id INT AUTO_INCREMENT NOT NULL, consultation_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, medicament VARCHAR(255) NOT NULL, suivi VARCHAR(255) NOT NULL, INDEX IDX_2A356D2762FF6CDF (consultation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(255) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, discr VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE psychiatre ADD CONSTRAINT FK_559A887F62FF6CDF FOREIGN KEY (consultation_id) REFERENCES consultation (id)');
        $this->addSql('ALTER TABLE psychiatre ADD CONSTRAINT FK_559A887FBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F866B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86DA6C8211 FOREIGN KEY (psychiatre_id) REFERENCES psychiatre (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE traitement ADD CONSTRAINT FK_2A356D2762FF6CDF FOREIGN KEY (consultation_id) REFERENCES consultation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32BF396750');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBBF396750');
        $this->addSql('ALTER TABLE psychiatre DROP FOREIGN KEY FK_559A887F62FF6CDF');
        $this->addSql('ALTER TABLE psychiatre DROP FOREIGN KEY FK_559A887FBF396750');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F866B899279');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86DA6C8211');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE traitement DROP FOREIGN KEY FK_2A356D2762FF6CDF');
        $this->addSql('DROP TABLE consultation');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE psychiatre');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE traitement');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
