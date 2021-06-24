<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210624142432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE critary_form CHANGE place_no place_no INT NOT NULL, CHANGE available available TINYINT(1) NOT NULL, CHANGE tent tent TINYINT(1) DEFAULT NULL, CHANGE caravan caravan TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE critary_form CHANGE place_no place_no INT DEFAULT NULL, CHANGE available available TINYINT(1) DEFAULT NULL, CHANGE tent tent TINYINT(1) NOT NULL, CHANGE caravan caravan TINYINT(1) NOT NULL');
    }
}
