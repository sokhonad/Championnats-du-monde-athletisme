<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322163209 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE athlete (id INT AUTO_INCREMENT NOT NULL, nom_athlete VARCHAR(255) NOT NULL, prenom_athlete VARCHAR(255) NOT NULL, sexe_athlete VARCHAR(255) DEFAULT NULL, nationalite_athlete VARCHAR(255) NOT NULL, code_pays_athlete VARCHAR(255) DEFAULT NULL, taille_athlete DOUBLE PRECISION DEFAULT NULL, poids_athlete DOUBLE PRECISION DEFAULT NULL, ville_athlete VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, edition_calendrier VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, id_calendrier INT NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, nom_competition VARCHAR(255) NOT NULL, pays_competition VARCHAR(255) NOT NULL, ville_competition VARCHAR(255) NOT NULL, lieu_competition VARCHAR(255) NOT NULL, date_competition VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE epreuve (id INT AUTO_INCREMENT NOT NULL, nom_epreuve VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, heure_epreuve VARCHAR(255) DEFAULT NULL, medaille_epreuve VARCHAR(255) DEFAULT NULL, id_competition INT NOT NULL, id_categorie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resultat (id INT AUTO_INCREMENT NOT NULL, medaille VARCHAR(255) DEFAULT NULL, rang INT DEFAULT NULL, temps DOUBLE PRECISION DEFAULT NULL, ecart DOUBLE PRECISION DEFAULT NULL, vitesse DOUBLE PRECISION DEFAULT NULL, poids DOUBLE PRECISION DEFAULT NULL, nombre_participants INT NOT NULL, id_athlete INT NOT NULL, id_epreuve INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE athlete');
        $this->addSql('DROP TABLE calendrier');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE epreuve');
        $this->addSql('DROP TABLE resultat');
    }
}
