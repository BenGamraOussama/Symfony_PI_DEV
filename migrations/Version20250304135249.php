<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250304135249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD is_blocked TINYINT(1) NOT NULL, DROP blocked, CHANGE company_name company_name VARCHAR(255) DEFAULT NULL, CHANGE contact_name contact_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD blocked TINYINT(1) DEFAULT 0 NOT NULL, DROP is_blocked, CHANGE company_name company_name VARCHAR(255) NOT NULL, CHANGE contact_name contact_name VARCHAR(255) NOT NULL');
    }
}
