-- Ajout de l'année sur le jeu
ALTER TABLE `logindb`.`jeunoel` 
ADD COLUMN `annee` INT(4) NULL AFTER `jour24`;

-- MAJ Cadeau
ALTER TABLE `logindb`.`cadeau` 
ADD COLUMN `annee` INT(4) NOT NULL AFTER `user_app_iduser_app`,
ADD COLUMN `remisle` DATE NULL AFTER `annee`,
ADD COLUMN `commentaire` VARCHAR(45) NULL AFTER `remisle`;


update logindb.cadeau set annee = 2019;
update logindb.jeunoel set annee = 2019;

