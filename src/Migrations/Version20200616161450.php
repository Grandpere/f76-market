<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200616161450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE weapon_major (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapon_prefix (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE armor_prefix (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE armor_minor (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE armor_major (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapon_minor (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE weapon_major ADD CONSTRAINT FK_108E0D6CBF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weapon_prefix ADD CONSTRAINT FK_AE44A9A9BF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armor_prefix ADD CONSTRAINT FK_D034E411BF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armor_minor ADD CONSTRAINT FK_13028852BF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armor_major ADD CONSTRAINT FK_D1BF0861BF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weapon_minor ADD CONSTRAINT FK_D2338D5FBF396750 FOREIGN KEY (id) REFERENCES legendary_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weapon ADD prefix_id INT DEFAULT NULL, ADD major_id INT DEFAULT NULL, ADD minor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E65C554FFE FOREIGN KEY (prefix_id) REFERENCES weapon_prefix (id)');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E6E93695C7 FOREIGN KEY (major_id) REFERENCES weapon_major (id)');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E6414899B6 FOREIGN KEY (minor_id) REFERENCES weapon_minor (id)');
        $this->addSql('CREATE INDEX IDX_6933A7E65C554FFE ON weapon (prefix_id)');
        $this->addSql('CREATE INDEX IDX_6933A7E6E93695C7 ON weapon (major_id)');
        $this->addSql('CREATE INDEX IDX_6933A7E6414899B6 ON weapon (minor_id)');
        $this->addSql('ALTER TABLE armor ADD prefix_id INT DEFAULT NULL, ADD major_id INT DEFAULT NULL, ADD minor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFC5C554FFE FOREIGN KEY (prefix_id) REFERENCES armor_prefix (id)');
        $this->addSql('ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFCE93695C7 FOREIGN KEY (major_id) REFERENCES armor_major (id)');
        $this->addSql('ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFC414899B6 FOREIGN KEY (minor_id) REFERENCES armor_minor (id)');
        $this->addSql('CREATE INDEX IDX_BF27FEFC5C554FFE ON armor (prefix_id)');
        $this->addSql('CREATE INDEX IDX_BF27FEFCE93695C7 ON armor (major_id)');
        $this->addSql('CREATE INDEX IDX_BF27FEFC414899B6 ON armor (minor_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E6E93695C7');
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E65C554FFE');
        $this->addSql('ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFC5C554FFE');
        $this->addSql('ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFC414899B6');
        $this->addSql('ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFCE93695C7');
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E6414899B6');
        $this->addSql('DROP TABLE weapon_major');
        $this->addSql('DROP TABLE weapon_prefix');
        $this->addSql('DROP TABLE armor_prefix');
        $this->addSql('DROP TABLE armor_minor');
        $this->addSql('DROP TABLE armor_major');
        $this->addSql('DROP TABLE weapon_minor');
        $this->addSql('DROP INDEX IDX_BF27FEFC5C554FFE ON armor');
        $this->addSql('DROP INDEX IDX_BF27FEFCE93695C7 ON armor');
        $this->addSql('DROP INDEX IDX_BF27FEFC414899B6 ON armor');
        $this->addSql('ALTER TABLE armor DROP prefix_id, DROP major_id, DROP minor_id');
        $this->addSql('DROP INDEX IDX_6933A7E65C554FFE ON weapon');
        $this->addSql('DROP INDEX IDX_6933A7E6E93695C7 ON weapon');
        $this->addSql('DROP INDEX IDX_6933A7E6414899B6 ON weapon');
        $this->addSql('ALTER TABLE weapon DROP prefix_id, DROP major_id, DROP minor_id');
    }
}
