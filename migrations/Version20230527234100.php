<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230527234100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, comment VARCHAR(255) NOT NULL, note INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, parents_id INT DEFAULT NULL, users_id INT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, couleur VARCHAR(7) NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_3AF34668B706B6D3 (parents_id), INDEX IDX_3AF3466867B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clandar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, allday TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, ville VARCHAR(50) NOT NULL, code_postal INT NOT NULL, nom VARCHAR(50) NOT NULL, numero INT NOT NULL, creat_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_C82E74E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, nom VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_6EEAA67D19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, commentaire LONGTEXT DEFAULT NULL, note INT NOT NULL, create_at DATETIME NOT NULL, evaluation JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact1 (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel INT NOT NULL, message VARCHAR(255) DEFAULT NULL, problem JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forme (id INT AUTO_INCREMENT NOT NULL, commande_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, produits_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_C53D045FCD11A2CF (produits_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE img (id INT AUTO_INCREMENT NOT NULL, supplements_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_BBC2C8ACAB6F3E81 (supplements_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_boutique (id INT AUTO_INCREMENT NOT NULL, descrip LONGTEXT NOT NULL, type VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, capital INT NOT NULL, siret VARCHAR(255) NOT NULL, rcs VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, tel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pannier (id INT AUTO_INCREMENT NOT NULL, produits_id INT NOT NULL, client_id INT NOT NULL, quantite INT NOT NULL, total INT NOT NULL, prix INT NOT NULL, nom VARCHAR(255) NOT NULL, creat_at DATETIME NOT NULL, activer TINYINT(1) NOT NULL, prepare TINYINT(1) NOT NULL, INDEX IDX_AED0E5EBCD11A2CF (produits_id), INDEX IDX_AED0E5EB19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, reglages_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_14B78418CC295FAD (reglages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, categories_id INT NOT NULL, users_id INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, prix INT NOT NULL, crea_at DATETIME NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_BE2DDF8CA21214B7 (categories_id), INDEX IDX_BE2DDF8C67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, repetition INT NOT NULL, quantite INT NOT NULL, type VARCHAR(255) NOT NULL, montant INT NOT NULL, INDEX IDX_C11D7DD167B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion_produits (promotion_id INT NOT NULL, produits_id INT NOT NULL, INDEX IDX_78797BC8139DF194 (promotion_id), INDEX IDX_78797BC8CD11A2CF (produits_id), PRIMARY KEY(promotion_id, produits_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supplements (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prix INT NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_F9B7EF6C67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, domaine VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, tel INT NOT NULL, confirm_password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacance_fermeture (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668B706B6D3 FOREIGN KEY (parents_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF3466867B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FCD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE img ADD CONSTRAINT FK_BBC2C8ACAB6F3E81 FOREIGN KEY (supplements_id) REFERENCES supplements (id)');
        $this->addSql('ALTER TABLE pannier ADD CONSTRAINT FK_AED0E5EBCD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE pannier ADD CONSTRAINT FK_AED0E5EB19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B78418CC295FAD FOREIGN KEY (reglages_id) REFERENCES info_boutique (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD167B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE promotion_produits ADD CONSTRAINT FK_78797BC8139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion_produits ADD CONSTRAINT FK_78797BC8CD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE supplements ADD CONSTRAINT FK_F9B7EF6C67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668B706B6D3');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF3466867B3B43D');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FCD11A2CF');
        $this->addSql('ALTER TABLE img DROP FOREIGN KEY FK_BBC2C8ACAB6F3E81');
        $this->addSql('ALTER TABLE pannier DROP FOREIGN KEY FK_AED0E5EBCD11A2CF');
        $this->addSql('ALTER TABLE pannier DROP FOREIGN KEY FK_AED0E5EB19EB6921');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B78418CC295FAD');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CA21214B7');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C67B3B43D');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD167B3B43D');
        $this->addSql('ALTER TABLE promotion_produits DROP FOREIGN KEY FK_78797BC8139DF194');
        $this->addSql('ALTER TABLE promotion_produits DROP FOREIGN KEY FK_78797BC8CD11A2CF');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE supplements DROP FOREIGN KEY FK_F9B7EF6C67B3B43D');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE clandar');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE contact1');
        $this->addSql('DROP TABLE forme');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE img');
        $this->addSql('DROP TABLE info_boutique');
        $this->addSql('DROP TABLE pannier');
        $this->addSql('DROP TABLE photo');
        $this->addSql('DROP TABLE produits');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE promotion_produits');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE supplements');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE vacance_fermeture');
    }
}
