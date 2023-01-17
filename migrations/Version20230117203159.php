<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230117203159 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news ADD users_id INT NOT NULL');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD3995067B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_1DD3995067B3B43D ON news (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD3995067B3B43D');
        $this->addSql('DROP INDEX IDX_1DD3995067B3B43D ON news');
        $this->addSql('ALTER TABLE news DROP users_id');
    }
}
