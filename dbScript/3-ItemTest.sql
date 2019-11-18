USE `logindb` ;


-- -----------------------------------------------------
-- Table `logindb`.`user_app`
-- -----------------------------------------------------
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('Manu', '123', 'manu.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('LOL', '123', 'lol.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('Tom', '123', 'TOM.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('JUL', '123', 'JUL.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('JO', '123', 'JO.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('LEO', '123', 'LEO.cogelec@gmail.com') ;
INSERT INTO`logindb`.`user_app` ( `sso_id`, `pwd_hash`, `email`) values ('ZOE', '123', 'ZOE.cogelec@gmail.com') ;



-- -----------------------------------------------------
-- Table `logindb`.`user_app_has_role`
-- -----------------------------------------------------
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (2,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (3,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (4,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (5,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (6,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (7,3);
INSERT INTO `logindb`.`user_app_has_role` (`user_app_iduser_app` , `role_idRole` ) values (8,3);

-- -----------------------------------------------------
-- Table `logindb`.`Cadeau`
-- -----------------------------------------------------
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('KINDER', '20191201');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('THON', '20191202');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('JOur3', '20191203');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour3-1', '20191203');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour4', '20191204');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour4-1', '20191204');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour4-2', '20191204');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour4-3', '20191204');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour5', '20191205');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour6', '20191206');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour6-1', '20191206');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour7', '20191207');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour7-1', '20191207');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour8', '20191208');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour8-1', '20191208');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour9', '20191209');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Jour9-1', '20191209');

INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Champagne', '20191224');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Cafetière', '20191224');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Stylo', '20191224');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('Bidule', '20191224');
INSERT INTO `logindb`.`Cadeau` (`Description` , `Agagner` ) values ('TRUC', '20191224');