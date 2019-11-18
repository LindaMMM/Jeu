USE `logindb` ;

-- -----------------------------------------------------
-- Table `logindb`.`role`
-- -----------------------------------------------------

INSERT INTO `logindb`.`role` (`name`,`codRole`, `del`) VALUES( 'Administrateur', 'ADM', 0);
INSERT INTO `logindb`.`role` (`name`,`codRole`, `del`) VALUES( 'Membre CSE', 'MBR', 0);
INSERT INTO `logindb`.`role` (`name`,`codRole`, `del`) VALUES( 'Utilisateur', 'USR', 0);


-- -----------------------------------------------------
-- Table `logindb`.`user_app`
-- -----------------------------------------------------
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('Administrateur', 'toto@85Adm', 'lmartin.cogelec@gmail.com') ;



-- -----------------------------------------------------
-- Table `logindb`.`user_app_has_role`
-- -----------------------------------------------------
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (1,1);
  
