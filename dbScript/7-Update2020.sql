-- Ajout de l'année sur le jeu
ALTER TABLE ``jeunoel` 
ADD COLUMN `annee` INT(4) NULL AFTER `jour24`;

-- MAJ Cadeau
ALTER TABLE `cadeau` 
ADD COLUMN `annee` INT(4) NOT NULL AFTER `user_app_iduser_app`,
ADD COLUMN `remisle` DATE NULL AFTER `annee`,
ADD COLUMN `commentaire` VARCHAR(45) NULL AFTER `remisle`;


ALTER TABLE `user_app` 
ADD COLUMN `matricule` INT(5) NULL AFTER `del`,
ADD COLUMN `user_appcol` VARCHAR(45) NULL AFTER `matricule`;

update cadeau set annee = 2019;
update jeunoel set annee = 2019;

update `user_app`  set del = 1  where sso_id = 'sebastien.gerardin';
update `user_app`  set del = 1  where sso_id = 'pierre.cerezal';
update `user_app`  set del = 1  where sso_id = 'ambroise.viot';
update `user_app`  set del = 1  where sso_id = 'julie.lassalle';
update `user_app`  set del = 1  where sso_id = 'marie.brochoire';
update `user_app`  set del = 1  where sso_id = 'jenstobias.schmidt';
update `user_app`  set del = 1  where sso_id = 'naima.radi';
update `user_app`  set del = 1  where sso_id = 'toussaint.baldacci';


INSERT INTO `user_app`
( `sso_id`, `pwd_hash`, `matricule`,`email`)
VALUES
( 'adrien.meunier', 259,259,'ameunier@cogelec.fr'),
('sonia.brin',333 ,	333, 'soniantoine85@gmail.com'),
('amelie.brochard',	334,	334	,'brochardguillaume@orange.fr'),
('elise.cabrita	',335,	335	,'ecabrita@intratone.fr'),
('joy.cholet',336,	336	,'joy.cholet@laposte.net'),
('celine.manceau',338,	338	,'eric.manceau64@sfr.fr'),
('magalie.retailleau',339,	339	,'magalie.retailleau@neuf.fr'),
('laetitia.samson',340,	340	,'laetitia.samson4@orange.fr'),
('annesophie.viaud',341,	341	,'annesodamiente@gmail.com'),
('pierre.halley',	345	,345	,'phalley@cogelec.fr'),
('xavier.benaiteau',346,	346	,'xavier.benaiteau@laposte.net'),
('vincent.gillet',347,	347	,'vgillet3@laposte.net'),
('laurence.loiseau',349,	349	,'lowena974@gmail.com'),
('mathilde.faucher',351,	351	,'MFAUCHER85@hotmail.fr'),
('yann.bochereau',353,	353	,'bochereau.yann@gmail.com'),
('nathalie.leveille',355,	355	,'tony.nat.oe@gmail.com'),
('clement.recrosio',356,	356	,'contact@legerthe.fr'),
('thomas.briard	',358,	358	,'thomas.briard@gmail.com'),
('prycilla.lesec',359,	359	,'Prycilla.lesec@sfr.fr'),
('marina.duc',362	,362	,'mduc@cogelec.fr'),
('francois.jouvance',363,	363	,'fjouvance@intratone.fr'),
('mehdi.aksoum',364	,364	,'maksoum@intratone.fr'),
('elise.levin',365	,365	,'elevin@intratone.fr'),
('isora.gennetay',366,	366	,'isogenne@gmail.com'),
('philippe.orfeo',367,	367	,'porfeo@intratone.fr'),
('loic.quentin',368	,368	,'lhervochon@cogelec.fr'),
('claire.forgeau',369,	369	,'forgette85@hotmail.fr'),
('corinne.delengaigne',370,	370	,'corinned@ntymail.com'),
('aurelie.guinaudeau',371,	371	,'aurelieguinaudeau@live.fr'),
('anais.aiouaz',372	,372	,'aiouaz.anais@hotmail.fr'),
('aubin.prudhomme',373,	373	,'aprudhomme@cogelec.fr'),
('jeanvincent.picart',374,	374	,'jpicart@intratone.fr'),
('chloe.rousselot',375,	375	,'chloe.rousselot3@gmail.com'),
('maxime.gelin',376,	376	,'mgelin@cogelec.fr'),
('edwin.ganachau',377,	377	,'eganachau@cogelec.fr'),
('camille.adam',378,	378	,'cadam@intratone.fr'),
('olga.spivak',379,	379	,'ospivak@intratone.fr'),
('stephane.givry',380,	380	,'sgivry@intratone.fr'),
('christophe.aurousseau',	381,	381,'caurousseau@intratone.fr');

-- update email`

