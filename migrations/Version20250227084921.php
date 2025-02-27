<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250227084921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD blocked TINYINT(1) DEFAULT 0 NOT NULL, ADD contact_name VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD phone INT DEFAULT NULL, DROP etat, CHANGE adresse company_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE patient ADD blocked TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE psychiatre ADD blocked TINYINT(1) DEFAULT 0 NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD etat TINYINT(1) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, DROP blocked, DROP company_name, DROP contact_name, DROP address, DROP phone');
        $this->addSql('ALTER TABLE patient DROP blocked');
        $this->addSql('ALTER TABLE psychiatre DROP blocked');
    }
}
