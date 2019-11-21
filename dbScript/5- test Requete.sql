SHOW EVENTS FROM logindb;

-- cadeau disponible
select idCadeau from cadeau where Agagner<='20191202' and user_app_iduser_app is null;

-- function utilisateur sans cadeau
select iduser_app from user_app u 
inner join user_app_has_role ur on ur.user_app_iduser_app = u.iduser_app 
left join Cadeau c on c.user_app_iduser_app = u.iduser_app
where u.del is null and ur.role_idRole=3 
and not exists ( select Cadeau_idCadeau from tirage t where t.user_app_iduser_app =  u.iduser_app and t.`date`= param1)
ORDER BY RAND()  
LIMIT 1 ;

select iduser_app from user_app u 
inner join user_app_has_role ur on ur.user_app_iduser_app = u.iduser_app
left join Cadeau c on c.user_app_iduser_app = u.iduser_app
left join tirage t where t.user_app_iduser_app =  u.iduser_app and t.`date`='20191201'
where u.del is null and ur.role_idRole=3 
ORDER BY RAND()  
LIMIT 1 ;

-- function utilisateur sans cadeau et ont joué 1 fois
select iduser_app from jeunoel j 
where not exists( select idCadeau from cadeau c where c.user_app_iduser_app = j.user_app_iduser_app )
ORDER BY RAND()  
LIMIT 1 ;

-- Recherche du nombre de tentative de chaque joueur


select iduser, j1+j2+j3+j4+j5+j6+j7+j8+j9+j10+j11+j12+j13+j14+j15+j16+j17+j18+j19+j20+j21+j22+j23 as somme   from(
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
       FROM logindb.jeunoel ) as tmp order by somme asc top 10;
 






