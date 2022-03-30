<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330194224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bpm (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, m20 VARCHAR(10) DEFAULT NULL, m19 VARCHAR(10) DEFAULT NULL, m18 VARCHAR(10) DEFAULT NULL, m17 VARCHAR(10) DEFAULT NULL, m16 VARCHAR(10) DEFAULT NULL, m15 VARCHAR(10) DEFAULT NULL, m14 VARCHAR(10) DEFAULT NULL, m13 VARCHAR(10) DEFAULT NULL, m12 VARCHAR(10) DEFAULT NULL, m11 VARCHAR(10) DEFAULT NULL, m10 VARCHAR(10) DEFAULT NULL, m9 VARCHAR(10) DEFAULT NULL, m8 VARCHAR(10) DEFAULT NULL, m7 VARCHAR(10) DEFAULT NULL, m6 VARCHAR(10) DEFAULT NULL, m5 VARCHAR(10) DEFAULT NULL, m4 VARCHAR(10) DEFAULT NULL, m3 VARCHAR(10) DEFAULT NULL, m2 VARCHAR(10) DEFAULT NULL, m1 VARCHAR(10) DEFAULT NULL, current_bpm VARCHAR(10) NOT NULL, p1 VARCHAR(10) DEFAULT NULL, p2 VARCHAR(10) DEFAULT NULL, p3 VARCHAR(10) DEFAULT NULL, p4 VARCHAR(10) DEFAULT NULL, p5 VARCHAR(10) DEFAULT NULL, p6 VARCHAR(10) DEFAULT NULL, p7 VARCHAR(10) DEFAULT NULL, p8 VARCHAR(10) DEFAULT NULL, p9 VARCHAR(10) DEFAULT NULL, p10 VARCHAR(10) DEFAULT NULL, p11 VARCHAR(10) DEFAULT NULL, p12 VARCHAR(10) DEFAULT NULL, p13 VARCHAR(10) DEFAULT NULL, p14 VARCHAR(10) DEFAULT NULL, p15 VARCHAR(10) DEFAULT NULL, p16 VARCHAR(10) DEFAULT NULL, p17 VARCHAR(10) DEFAULT NULL, p18 VARCHAR(10) DEFAULT NULL, p19 VARCHAR(10) DEFAULT NULL, p20 VARCHAR(10) DEFAULT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A82EA24FA1D25D79 ON bpm (current_bpm)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bpm');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
