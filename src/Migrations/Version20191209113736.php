<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191209113736 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE tbl_question_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tbl_question (id INT NOT NULL, text VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE tbl_answer ADD answer_id INT NOT NULL');
        $this->addSql('ALTER TABLE tbl_answer ADD CONSTRAINT FK_577B239AAA334807 FOREIGN KEY (answer_id) REFERENCES tbl_question (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_577B239AAA334807 ON tbl_answer (answer_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE tbl_answer DROP CONSTRAINT FK_577B239AAA334807');
        $this->addSql('DROP SEQUENCE tbl_question_id_seq CASCADE');
        $this->addSql('DROP TABLE tbl_question');
        $this->addSql('DROP INDEX IDX_577B239AAA334807');
        $this->addSql('ALTER TABLE tbl_answer DROP answer_id');
    }
}
