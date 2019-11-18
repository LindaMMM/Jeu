SHOW EVENTS FROM logindb;

-- cadeau disponible
select idCadeau from cadeau where Agagner<='20191202' and user_app_iduser_app is null;

-- function utilisateur sans cadeau
select iduser_app from user_app u 
inner join user_app_has_role ur on ur.user_app_iduser_app = u.iduser_app 
where u.del is null and ur.role_idRole=3 and not exists( select idCadeau from cadeau c where c.user_app_iduser_app = u.iduser_app )
ORDER BY RAND()  
LIMIT 1 ;

-- function utilisateur sans cadeau et ont joué 1 fois
select iduser_app from jeunoel j 
where not exists( select idCadeau from cadeau c where c.user_app_iduser_app = j.user_app_iduser_app )
ORDER BY RAND()  
LIMIT 1 ;






