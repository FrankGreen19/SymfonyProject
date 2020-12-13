<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201208172842 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "recording_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "recording" (id INT NOT NULL, fio VARCHAR(255) NOT NULL, temperature DOUBLE PRECISION NOT NULL, sore_throat BOOLEAN NOT NULL, cough BOOLEAN NOT NULL, chills BOOLEAN NOT NULL, muscle_pain BOOLEAN NOT NULL, fatigue BOOLEAN NOT NULL, dyspnea BOOLEAN NOT NULL, runny_nose BOOLEAN NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE "recording_id_seq" CASCADE');
        $this->addSql('DROP TABLE "recording"');
    }
}
