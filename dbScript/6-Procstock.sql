delimiter //

CREATE PROCEDURE `pr_roles`( in idUser INTEGER)
COMMENT 'Les rôles'
  LANGUAGE SQL
  NOT DETERMINISTIC
  MODIFIES SQL DATA 

BEGIN
select r.* from role r 
inner join user_app_has_role ur on ur.role_idRole = r.idRole
where user_app_iduser_app = idUser and r.del<>1;

END//

CREATE PROCEDURE `searchUser`(in param1 DATE, in nbItem INTEGER)
BEGIN
Drop temporary table if exists $userSelec;
create temporary Table $userSelec(userid INT);
insert into $userSelec (select iduser_app from user_app u 
inner join user_app_has_role ur on ur.user_app_iduser_app = u.iduser_app 
left join Cadeau c on c.user_app_iduser_app = u.iduser_app
where u.del is null and ur.role_idRole=3 
ORDER BY RAND()  
LIMIT nbItem);

END//

CREATE PROCEDURE `searchUser24`(in param1 DATE, in nbItem INTEGER)
BEGIN
DECLARE nbLigne INTEGER DEFAULT 0;
DECLARE nbLignetmp INTEGER DEFAULT 0;

Drop temporary table if exists $userSelec;
create temporary Table $userSelec(userid INT , somme INT);
-- Recherche des personnes qui on joué sans cadeau
insert into $userSelec (select j.user_app_iduser_app, 0 from jeunoel j 
left join Cadeau c on c.user_app_iduser_app = j.user_app_iduser_app
ORDER BY RAND()  
LIMIT nbItem);

-- Vérification du nombre dans la liste
select FOUND_ROWS() into nbligne; 
if nbligne < nbItem then
	-- ajout des joueurs qui ont le plus joué
	set nbLignetmp = nbItem - nbLigne;
    insert into $userSelec (select iduser, j1+j2+j3+j4+j5+j6+j7+j8+j9+j10+j11+j12+j13+j14+j15+j16+j17+j18+j19+j20+j21+j22+j23 as somme   from(
SELECT case jour1 when 'N' then 0 else 1 end as j1,
	   case jour2 when 'N' then 0 else 1 end as j2,
       case jour3 when 'N' then 0 else 1 end as j3,
       case jour4 when 'N' then 0 else 1 end as j4,
       case jour5 when 'N' then 0 else 1 end as j5,
       case jour6 when 'N' then 0 else 1 end as j6,
       case jour7 when 'N' then 0 else 1 end as j7,
       case jour8 when 'N' then 0 else 1 end as j8,
       case jour9 when 'N' then 0 else 1 end as j9,
       case jour10 when 'N' then 0 else 1 end as j10,
       case jour11 when 'N' then 0 else 1 end as j11,
       case jour12 when 'N' then 0 else 1 end as j12,
	   case jour13 when 'N' then 0 else 1 end as j13,
       case jour14 when 'N' then 0 else 1 end as j14,
       case jour15 when 'N' then 0 else 1 end as j15,
       case jour16 when 'N' then 0 else 1 end as j16,
       case jour17 when 'N' then 0 else 1 end as j17,
       case jour18 when 'N' then 0 else 1 end as j18,
       case jour19 when 'N' then 0 else 1 end as j19,
       case jour20 when 'N' then 0 else 1 end as j20,
       case jour21 when 'N' then 0 else 1 end as j21,
       case jour22 when 'N' then 0 else 1 end as j22,
       case jour23 when 'N' then 0 else 1 end as j23,
       user_app_iduser_app as iduser
       FROM jeunoel ) as tmp order by somme asc LIMIT nbLignetmp);
end if;

END//

 CREATE PROCEDURE prTirageJour (in param1 DATE)
  COMMENT 'permet le calcul tirage du jour'
  LANGUAGE SQL
  NOT DETERMINISTIC
  MODIFIES SQL DATA 

BEGIN
  DECLARE finished INTEGER DEFAULT 0;
  DECLARE dayCalcul INTEGER DEFAULT 0;
  DECLARE iduserSel INTEGER DEFAULT 0;
  DECLARE countItem INTEGER DEFAULT 5;
  DECLARE idlot INTEGER DEFAULT 0;
  DECLARE cursor_lot CURSOR FOR select idCadeau from Cadeau where Agagner<=param1 and user_app_iduser_app is null;
  DECLARE cursor_user CURSOR FOR select userid from $userSelec where userid is not null ;
  DECLARE CONTINUE HANDLER 
        FOR NOT FOUND SET finished = 1;
 
   select count(idCadeau) into countItem  from Cadeau where Agagner<=param1 and user_app_iduser_app is null;
  -- Test du jour 
  set dayCalcul = (select dayofmonth(param1));
  INSERT INTO messages(message,created_at)
  VALUES(concat('Calcul Tirage au sort','2'),NOW());
select dayCalcul, countItem ;
-- table temp
if dayCalcul = 24 then
	call searchUser24(param1, countItem);
else
	call searchUser(param1, countItem);
end if;

-- Supression de tous les tirage du jour
  DELETE FROM `tirage` WHERE `datetir`= param1 ;
-- gestion des curseurs
  
   OPEN cursor_lot;
   OPEN cursor_user; 
	read_loop: LOOP
        FETCH cursor_lot INTO idlot;
        IF finished = 1 THEN 
            LEAVE read_loop;
        END IF;
        
        FETCH cursor_user INTO iduserSel;
        
		IF finished = 1 THEN 
            LEAVE read_loop;
        END IF;
        -- insertTirageJour
		INSERT INTO `tirage`(`datetir`, `Cadeau_idCadeau`, `user_app_iduser_app`) VALUES (param1, idlot, iduserSel);
    END LOOP read_loop;
    
    CLOSE cursor_lot;
	close cursor_user;

END//