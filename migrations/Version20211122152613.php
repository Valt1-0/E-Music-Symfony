<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211122152613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe_instrument ADD chemin_img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE instrument ADD chemin_img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_instrument ADD chemin_img VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe_instrument DROP chemin_img');
        $this->addSql('ALTER TABLE instrument DROP chemin_img');
        $this->addSql('ALTER TABLE type_instrument DROP chemin_img');
    }
}
