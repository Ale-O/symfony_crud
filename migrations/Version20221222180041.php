<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221222180041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_9A51DC6BDD1F1640');
        $this->addSql('DROP INDEX IDX_9A51DC6B408ECD87');
        $this->addSql('DROP INDEX IDX_9A51DC6B1F1F2A24');
        $this->addSql('CREATE TEMPORARY TABLE __temp__date_fields AS SELECT id, subelement_id, element_id, parent_fields_id, title, content, position FROM date_fields');
        $this->addSql('DROP TABLE date_fields');
        $this->addSql('CREATE TABLE date_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, subelement_id INTEGER DEFAULT NULL, element_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL COLLATE BINARY, content DATETIME NOT NULL, position INTEGER NOT NULL, CONSTRAINT FK_9A51DC6B1F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9A51DC6B408ECD87 FOREIGN KEY (subelement_id) REFERENCES symfony_subelement (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9A51DC6BDD1F1640 FOREIGN KEY (parent_fields_id) REFERENCES date_fields (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO date_fields (id, subelement_id, element_id, parent_fields_id, title, content, position) SELECT id, subelement_id, element_id, parent_fields_id, title, content, position FROM __temp__date_fields');
        $this->addSql('DROP TABLE __temp__date_fields');
        $this->addSql('CREATE INDEX IDX_9A51DC6BDD1F1640 ON date_fields (parent_fields_id)');
        $this->addSql('CREATE INDEX IDX_9A51DC6B408ECD87 ON date_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_9A51DC6B1F1F2A24 ON date_fields (element_id)');
        $this->addSql('DROP INDEX IDX_EBE1E0891F1F2A24');
        $this->addSql('DROP INDEX IDX_EBE1E089408ECD87');
        $this->addSql('DROP INDEX IDX_EBE1E089DD1F1640');
        $this->addSql('CREATE TEMPORARY TABLE __temp__number_fields AS SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM number_fields');
        $this->addSql('DROP TABLE number_fields');
        $this->addSql('CREATE TABLE number_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER DEFAULT NULL, subelement_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL COLLATE BINARY, content INTEGER NOT NULL, position INTEGER NOT NULL, CONSTRAINT FK_EBE1E0891F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_EBE1E089408ECD87 FOREIGN KEY (subelement_id) REFERENCES symfony_subelement (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_EBE1E089DD1F1640 FOREIGN KEY (parent_fields_id) REFERENCES number_fields (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO number_fields (id, element_id, subelement_id, parent_fields_id, title, content, position) SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM __temp__number_fields');
        $this->addSql('DROP TABLE __temp__number_fields');
        $this->addSql('CREATE INDEX IDX_EBE1E0891F1F2A24 ON number_fields (element_id)');
        $this->addSql('CREATE INDEX IDX_EBE1E089408ECD87 ON number_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_EBE1E089DD1F1640 ON number_fields (parent_fields_id)');
        $this->addSql('DROP INDEX IDX_A53CF61F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element AS SELECT id, author_id, title, slug, summary, content, published_at FROM symfony_element');
        $this->addSql('DROP TABLE symfony_element');
        $this->addSql('CREATE TABLE symfony_element (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, slug VARCHAR(255) NOT NULL COLLATE BINARY, summary VARCHAR(255) NOT NULL COLLATE BINARY, content CLOB NOT NULL COLLATE BINARY, published_at DATETIME NOT NULL, CONSTRAINT FK_A53CF61F675F31B FOREIGN KEY (author_id) REFERENCES symfony_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_element (id, author_id, title, slug, summary, content, published_at) SELECT id, author_id, title, slug, summary, content, published_at FROM __temp__symfony_element');
        $this->addSql('DROP TABLE __temp__symfony_element');
        $this->addSql('CREATE INDEX IDX_A53CF61F675F31B ON symfony_element (author_id)');
        $this->addSql('DROP INDEX IDX_26C808EBBAD26311');
        $this->addSql('DROP INDEX IDX_26C808EB1F1F2A24');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element_tag AS SELECT element_id, tag_id FROM symfony_element_tag');
        $this->addSql('DROP TABLE symfony_element_tag');
        $this->addSql('CREATE TABLE symfony_element_tag (element_id INTEGER NOT NULL, tag_id INTEGER NOT NULL, PRIMARY KEY(element_id, tag_id), CONSTRAINT FK_26C808EB1F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_26C808EBBAD26311 FOREIGN KEY (tag_id) REFERENCES symfony_tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_element_tag (element_id, tag_id) SELECT element_id, tag_id FROM __temp__symfony_element_tag');
        $this->addSql('DROP TABLE __temp__symfony_element_tag');
        $this->addSql('CREATE INDEX IDX_26C808EBBAD26311 ON symfony_element_tag (tag_id)');
        $this->addSql('CREATE INDEX IDX_26C808EB1F1F2A24 ON symfony_element_tag (element_id)');
        $this->addSql('DROP INDEX IDX_84697330F675F31B');
        $this->addSql('DROP INDEX IDX_846973301F1F2A24');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_subelement AS SELECT id, author_id, element_id, content, published_at, title FROM symfony_subelement');
        $this->addSql('DROP TABLE symfony_subelement');
        $this->addSql('CREATE TABLE symfony_subelement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, element_id INTEGER NOT NULL, content CLOB NOT NULL COLLATE BINARY, published_at DATETIME NOT NULL, title VARCHAR(50) NOT NULL COLLATE BINARY, CONSTRAINT FK_846973301F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_84697330F675F31B FOREIGN KEY (author_id) REFERENCES symfony_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO symfony_subelement (id, author_id, element_id, content, published_at, title) SELECT id, author_id, element_id, content, published_at, title FROM __temp__symfony_subelement');
        $this->addSql('DROP TABLE __temp__symfony_subelement');
        $this->addSql('CREATE INDEX IDX_84697330F675F31B ON symfony_subelement (author_id)');
        $this->addSql('CREATE INDEX IDX_846973301F1F2A24 ON symfony_subelement (element_id)');
        $this->addSql('DROP INDEX IDX_6B697A7B408ECD87');
        $this->addSql('DROP INDEX IDX_6B697A7B1F1F2A24');
        $this->addSql('DROP INDEX IDX_6B697A7BDD1F1640');
        $this->addSql('CREATE TEMPORARY TABLE __temp__text_fields AS SELECT id, subelement_id, element_id, parent_fields_id, title, content, position FROM text_fields');
        $this->addSql('DROP TABLE text_fields');
        $this->addSql('CREATE TABLE text_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, subelement_id INTEGER DEFAULT NULL, element_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL COLLATE BINARY, content VARCHAR(255) NOT NULL COLLATE BINARY, position INTEGER NOT NULL, CONSTRAINT FK_6B697A7B1F1F2A24 FOREIGN KEY (element_id) REFERENCES symfony_element (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_6B697A7B408ECD87 FOREIGN KEY (subelement_id) REFERENCES symfony_subelement (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_6B697A7BDD1F1640 FOREIGN KEY (parent_fields_id) REFERENCES text_fields (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO text_fields (id, subelement_id, element_id, parent_fields_id, title, content, position) SELECT id, subelement_id, element_id, parent_fields_id, title, content, position FROM __temp__text_fields');
        $this->addSql('DROP TABLE __temp__text_fields');
        $this->addSql('CREATE INDEX IDX_6B697A7B408ECD87 ON text_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_6B697A7B1F1F2A24 ON text_fields (element_id)');
        $this->addSql('CREATE INDEX IDX_6B697A7BDD1F1640 ON text_fields (parent_fields_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_9A51DC6B1F1F2A24');
        $this->addSql('DROP INDEX IDX_9A51DC6B408ECD87');
        $this->addSql('DROP INDEX IDX_9A51DC6BDD1F1640');
        $this->addSql('CREATE TEMPORARY TABLE __temp__date_fields AS SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM date_fields');
        $this->addSql('DROP TABLE date_fields');
        $this->addSql('CREATE TABLE date_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER DEFAULT NULL, subelement_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL, content DATETIME NOT NULL, position INTEGER NOT NULL)');
        $this->addSql('INSERT INTO date_fields (id, element_id, subelement_id, parent_fields_id, title, content, position) SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM __temp__date_fields');
        $this->addSql('DROP TABLE __temp__date_fields');
        $this->addSql('CREATE INDEX IDX_9A51DC6B1F1F2A24 ON date_fields (element_id)');
        $this->addSql('CREATE INDEX IDX_9A51DC6B408ECD87 ON date_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_9A51DC6BDD1F1640 ON date_fields (parent_fields_id)');
        $this->addSql('DROP INDEX IDX_EBE1E0891F1F2A24');
        $this->addSql('DROP INDEX IDX_EBE1E089408ECD87');
        $this->addSql('DROP INDEX IDX_EBE1E089DD1F1640');
        $this->addSql('CREATE TEMPORARY TABLE __temp__number_fields AS SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM number_fields');
        $this->addSql('DROP TABLE number_fields');
        $this->addSql('CREATE TABLE number_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER DEFAULT NULL, subelement_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL, content INTEGER NOT NULL, position INTEGER NOT NULL)');
        $this->addSql('INSERT INTO number_fields (id, element_id, subelement_id, parent_fields_id, title, content, position) SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM __temp__number_fields');
        $this->addSql('DROP TABLE __temp__number_fields');
        $this->addSql('CREATE INDEX IDX_EBE1E0891F1F2A24 ON number_fields (element_id)');
        $this->addSql('CREATE INDEX IDX_EBE1E089408ECD87 ON number_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_EBE1E089DD1F1640 ON number_fields (parent_fields_id)');
        $this->addSql('DROP INDEX IDX_A53CF61F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element AS SELECT id, author_id, title, slug, summary, content, published_at FROM symfony_element');
        $this->addSql('DROP TABLE symfony_element');
        $this->addSql('CREATE TABLE symfony_element (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, summary VARCHAR(255) NOT NULL, content CLOB NOT NULL, published_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO symfony_element (id, author_id, title, slug, summary, content, published_at) SELECT id, author_id, title, slug, summary, content, published_at FROM __temp__symfony_element');
        $this->addSql('DROP TABLE __temp__symfony_element');
        $this->addSql('CREATE INDEX IDX_A53CF61F675F31B ON symfony_element (author_id)');
        $this->addSql('DROP INDEX IDX_26C808EB1F1F2A24');
        $this->addSql('DROP INDEX IDX_26C808EBBAD26311');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_element_tag AS SELECT element_id, tag_id FROM symfony_element_tag');
        $this->addSql('DROP TABLE symfony_element_tag');
        $this->addSql('CREATE TABLE symfony_element_tag (element_id INTEGER NOT NULL, tag_id INTEGER NOT NULL, PRIMARY KEY(element_id, tag_id))');
        $this->addSql('INSERT INTO symfony_element_tag (element_id, tag_id) SELECT element_id, tag_id FROM __temp__symfony_element_tag');
        $this->addSql('DROP TABLE __temp__symfony_element_tag');
        $this->addSql('CREATE INDEX IDX_26C808EB1F1F2A24 ON symfony_element_tag (element_id)');
        $this->addSql('CREATE INDEX IDX_26C808EBBAD26311 ON symfony_element_tag (tag_id)');
        $this->addSql('DROP INDEX IDX_846973301F1F2A24');
        $this->addSql('DROP INDEX IDX_84697330F675F31B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony_subelement AS SELECT id, element_id, author_id, content, published_at, title FROM symfony_subelement');
        $this->addSql('DROP TABLE symfony_subelement');
        $this->addSql('CREATE TABLE symfony_subelement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER NOT NULL, author_id INTEGER NOT NULL, content CLOB NOT NULL, published_at DATETIME NOT NULL, title VARCHAR(50) NOT NULL)');
        $this->addSql('INSERT INTO symfony_subelement (id, element_id, author_id, content, published_at, title) SELECT id, element_id, author_id, content, published_at, title FROM __temp__symfony_subelement');
        $this->addSql('DROP TABLE __temp__symfony_subelement');
        $this->addSql('CREATE INDEX IDX_846973301F1F2A24 ON symfony_subelement (element_id)');
        $this->addSql('CREATE INDEX IDX_84697330F675F31B ON symfony_subelement (author_id)');
        $this->addSql('DROP INDEX IDX_6B697A7B1F1F2A24');
        $this->addSql('DROP INDEX IDX_6B697A7B408ECD87');
        $this->addSql('DROP INDEX IDX_6B697A7BDD1F1640');
        $this->addSql('CREATE TEMPORARY TABLE __temp__text_fields AS SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM text_fields');
        $this->addSql('DROP TABLE text_fields');
        $this->addSql('CREATE TABLE text_fields (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, element_id INTEGER DEFAULT NULL, subelement_id INTEGER DEFAULT NULL, parent_fields_id INTEGER DEFAULT NULL, title VARCHAR(50) NOT NULL, content VARCHAR(255) NOT NULL, position INTEGER NOT NULL)');
        $this->addSql('INSERT INTO text_fields (id, element_id, subelement_id, parent_fields_id, title, content, position) SELECT id, element_id, subelement_id, parent_fields_id, title, content, position FROM __temp__text_fields');
        $this->addSql('DROP TABLE __temp__text_fields');
        $this->addSql('CREATE INDEX IDX_6B697A7B1F1F2A24 ON text_fields (element_id)');
        $this->addSql('CREATE INDEX IDX_6B697A7B408ECD87 ON text_fields (subelement_id)');
        $this->addSql('CREATE INDEX IDX_6B697A7BDD1F1640 ON text_fields (parent_fields_id)');
    }
}
