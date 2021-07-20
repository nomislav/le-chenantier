<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709074615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE critary_form');
        $this->addSql('ALTER TABLE map ADD start DATE NOT NULL, ADD end DATE NOT NULL, ADD place_no INT DEFAULT NULL, ADD electricity TINYINT(1) NOT NULL, ADD available TINYINT(1) DEFAULT NULL, ADD child INT DEFAULT NULL, ADD adult INT NOT NULL, ADD tent TINYINT(1) DEFAULT NULL, ADD caravan TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE critary_form (id INT AUTO_INCREMENT NOT NULL, start DATE NOT NULL, end DATE NOT NULL, place_no INT DEFAULT NULL, electricity TINYINT(1) NOT NULL, available TINYINT(1) DEFAULT NULL, child INT DEFAULT NULL, adult INT NOT NULL, tent TINYINT(1) NOT NULL, caravan TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE map DROP start, DROP end, DROP place_no, DROP electricity, DROP available, DROP child, DROP adult, DROP tent, DROP caravan');
    }
}
