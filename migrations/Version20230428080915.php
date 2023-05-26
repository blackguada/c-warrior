<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230428080915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD produits_id INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCCD11A2CF FOREIGN KEY (produits_id) REFERENCES commentaire (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCCD11A2CF ON commentaire (produits_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCCD11A2CF');
        $this->addSql('DROP INDEX IDX_67F068BCCD11A2CF ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP produits_id');
    }
}
