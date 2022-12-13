<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221213191724 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_869983D6F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element AS SELECT id, author_id, title, slug, summary, content, published_at FROM symfony_element');
        $this->addSql('DROP TABLE symfony_element');
        $this->addSql('CREATE TABLE symfony_element (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, slug VARCHAR(255) NOT NULL COLLATE BINARY, summary VARCHAR(255) NOT NULL COLLATE BINARY, content CLOB NOT NULL COLLATE BINARY, published_at DATETIME NOT NULL, CONSTRAINT FK_A53CF61F675F31B FOREIGN KEY (author_id) REFERENCES symfony_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_element (id, author_id, title, slug, summary, content, published_at) SELECT id, author_id, title, slug, summary, content, published_at FROM __temp__symfony_element');
        $this->addSql('DROP TABLE __temp__symfony_element');
        $this->addSql('CREATE INDEX IDX_A53CF61F675F31B ON symfony_element (author_id)');
        $this->addSql('DROP INDEX IDX_AF6FAA3BAD26311');
        $this->addSql('DROP INDEX IDX_AF6FAA31F1F2A24');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element_tag AS SELECT element_id, tag_id FROM symfony_element_tag');
        $this->addSql('DROP TABLE symfony_element_tag');
        $this->addSql('CREATE TABLE symfony_element_tag (element_id INTEGER NOT NULL, tag_id INTEGER NOT NULL, PRIMARY KEY(element_id, tag_id), CONSTRAINT FK_26C808EB1F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_26C808EBBAD26311 FOREIGN KEY (tag_id) REFERENCES symfony_tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_element_tag (element_id, tag_id) SELECT element_id, tag_id FROM __temp__symfony_element_tag');
        $this->addSql('DROP TABLE __temp__symfony_element_tag');
        $this->addSql('CREATE INDEX IDX_26C808EB1F1F2A24 ON symfony_element_tag (element_id)');
        $this->addSql('CREATE INDEX IDX_26C808EBBAD26311 ON symfony_element_tag (tag_id)');
        $this->addSql('DROP INDEX IDX_6305B08E1F1F2A24');
        $this->addSql('DROP INDEX IDX_6305B08EF675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_subelement AS SELECT id, author_id, element_id, content, published_at FROM symfony_subelement');
        $this->addSql('DROP TABLE symfony_subelement');
        $this->addSql('CREATE TABLE symfony_subelement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, element_id INTEGER NOT NULL, content CLOB NOT NULL COLLATE BINARY, published_at DATETIME NOT NULL, title VARCHAR(50) NOT NULL, CONSTRAINT FK_846973301F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_84697330F675F31B FOREIGN KEY (author_id) REFERENCES symfony_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_subelement (id, author_id, element_id, content, published_at) SELECT id, author_id, element_id, content, published_at FROM __temp__symfony_subelement');
        $this->addSql('DROP TABLE __temp__symfony_subelement');
        $this->addSql('CREATE INDEX IDX_846973301F1F2A24 ON symfony_subelement (element_id)');
        $this->addSql('CREATE INDEX IDX_84697330F675F31B ON symfony_subelement (author_id)');
        $this->addSql('DROP INDEX UNIQ_4D5855405E237E06');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_tag AS SELECT id, name FROM symfony_tag');
        $this->addSql('DROP TABLE symfony_tag');
        $this->addSql('CREATE TABLE symfony_tag (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO symfony_tag (id, name) SELECT id, name FROM __temp__symfony_tag');
        $this->addSql('DROP TABLE __temp__symfony_tag');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_69D7457E5E237E06 ON symfony_tag (name)');
        $this->addSql('DROP INDEX UNIQ_8FB094A1F85E0677');
        $this->addSql('DROP INDEX UNIQ_8FB094A1E7927C74');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_user AS SELECT id, full_name, username, email, password, roles FROM symfony_user');
        $this->addSql('DROP TABLE symfony_user');
        $this->addSql('CREATE TABLE symfony_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL COLLATE BINARY, username VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, password VARCHAR(255) NOT NULL COLLATE BINARY, roles CLOB NOT NULL COLLATE BINARY --(DC2Type:json)
        )');
        $this->addSql('INSERT INTO symfony_user (id, full_name, username, email, password, roles) SELECT id, full_name, username, email, password, roles FROM __temp__symfony_user');
        $this->addSql('DROP TABLE __temp__symfony_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4EF5061AF85E0677 ON symfony_user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4EF5061AE7927C74 ON symfony_user (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_A53CF61F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element AS SELECT id, author_id, title, slug, summary, content, published_at FROM symfony_element');
        $this->addSql('DROP TABLE symfony_element');
        $this->addSql('CREATE TABLE symfony_element (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, summary VARCHAR(255) NOT NULL, content CLOB NOT NULL, published_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO symfony_element (id, author_id, title, slug, summary, content, published_at) SELECT id, author_id, title, slug, summary, content, published_at FROM __temp__symfony_element');
        $this->addSql('DROP TABLE __temp__symfony_element');
        $this->addSql('CREATE INDEX IDX_869983D6F675F31B ON symfony_element (author_id)');
        $this->addSql('DROP INDEX IDX_26C808EB1F1F2A24');
        $this->addSql('DROP INDEX IDX_26C808EBBAD26311');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element_tag AS SELECT element_id, tag_id FROM symfony_element_tag');
        $this->addSql('DROP TABLE symfony_element_tag');
        $this->addSql('CREATE TABLE symfony_element_tag (element_id INTEGER NOT NULL, tag_id INTEGER NOT NULL, PRIMARY KEY(element_id, tag_id))');
        $this->addSql('INSERT INTO symfony_element_tag (element_id, tag_id) SELECT element_id, tag_id FROM __temp__symfony_element_tag');
        $this->addSql('DROP TABLE __temp__symfony_element_tag');
        $this->addSql('CREATE INDEX IDX_AF6FAA3BAD26311 ON symfony_element_tag (tag_id)');
        $this->addSql('CREATE INDEX IDX_AF6FAA31F1F2A24 ON symfony_element_tag (element_id)');
        $this->addSql('DROP INDEX IDX_846973301F1F2A24');
        $this->addSql('DROP INDEX IDX_84697330F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_subelement AS SELECT id, element_id, author_id, content, published_at FROM symfony_subelement');
        $this->addSql('DROP TABLE symfony_subelement');
        $this->addSql('CREATE TABLE symfony_subelement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER NOT NULL, author_id INTEGER NOT NULL, content CLOB NOT NULL, published_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO symfony_subelement (id, element_id, author_id, content, published_at) SELECT id, element_id, author_id, content, published_at FROM __temp__symfony_subelement');
        $this->addSql('DROP TABLE __temp__symfony_subelement');
        $this->addSql('CREATE INDEX IDX_6305B08E1F1F2A24 ON symfony_subelement (element_id)');
        $this->addSql('CREATE INDEX IDX_6305B08EF675F31B ON symfony_subelement (author_id)');
        $this->addSql('DROP INDEX UNIQ_69D7457E5E237E06');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_tag AS SELECT id, name FROM symfony_tag');
        $this->addSql('DROP TABLE symfony_tag');
        $this->addSql('CREATE TABLE symfony_tag (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO symfony_tag (id, name) SELECT id, name FROM __temp__symfony_tag');
        $this->addSql('DROP TABLE __temp__symfony_tag');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D5855405E237E06 ON symfony_tag (name)');
        $this->addSql('DROP INDEX UNIQ_4EF5061AF85E0677');
        $this->addSql('DROP INDEX UNIQ_4EF5061AE7927C74');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_user AS SELECT id, full_name, username, email, password, roles FROM symfony_user');
        $this->addSql('DROP TABLE symfony_user');
        $this->addSql('CREATE TABLE symfony_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        )');
        $this->addSql('INSERT INTO symfony_user (id, full_name, username, email, password, roles) SELECT id, full_name, username, email, password, roles FROM __temp__symfony_user');
        $this->addSql('DROP TABLE __temp__symfony_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8FB094A1F85E0677 ON symfony_user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8FB094A1E7927C74 ON symfony_user (email)');
    }
}
