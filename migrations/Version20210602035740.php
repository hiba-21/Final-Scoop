<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602035740 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE img (id INT AUTO_INCREMENT NOT NULL, supplements_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_BBC2C8ACAB6F3E81 (supplements_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supplements (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prix INT NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_F9B7EF6C67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE img ADD CONSTRAINT FK_BBC2C8ACAB6F3E81 FOREIGN KEY (supplements_id) REFERENCES supplements (id)');
        $this->addSql('ALTER TABLE supplements ADD CONSTRAINT FK_F9B7EF6C67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE img DROP FOREIGN KEY FK_BBC2C8ACAB6F3E81');
        $this->addSql('DROP TABLE img');
        $this->addSql('DROP TABLE supplements');
    }
}
