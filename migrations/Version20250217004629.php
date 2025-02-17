<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217004629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD adresse VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE patient ADD naissance DATE DEFAULT NULL, DROP birthday, DROP birth_month, DROP birth_year');
        $this->addSql('ALTER TABLE psychiatre ADD num_licence VARCHAR(255) NOT NULL, ADD phone INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE psychiatre DROP num_licence, DROP phone');
        $this->addSql('ALTER TABLE fournisseur DROP adresse');
        $this->addSql('ALTER TABLE patient ADD birthday INT DEFAULT NULL, ADD birth_month INT DEFAULT NULL, ADD birth_year INT DEFAULT NULL, DROP naissance');
    }
}
