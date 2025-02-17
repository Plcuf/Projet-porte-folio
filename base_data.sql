INSERT INTO Users VALUES(0, "Admin", "Admin", true, "admin@phpportefolio.com", "$2y$10$mGz36tk4aXk8TEUgUtwwweYCWm8h5QgZnG2GsfJUpF7bMO7Za9p.K");
INSERT INTO Users VALUES(1, "Martin", "Mystère", false, "martinmystere@tfou.com", "$2y$10$pwokxbugmR1gK3Oi6dnrrOeIPxY2IveJfw76f4xc8/USXmgH8WKNe");
INSERT INTO Users VALUES(2, "Jean-Marc", "Généreux", false, "jmgenereux@gmail.com", "$2y$10$Ao78m0oGi65zzuoaFSd1rOWhYkLwgmT9WMmc.20MhXun5MtzG01z.");
--mot de passe : 'admin' 'mystère' "J'ACHÈTE!"


INSERT INTO Skills VALUES(0, "Résolution de problèmes");
INSERT INTO Skills VALUES(1, "Enquête");
INSERT INTO Skills VALUES(2, "Dance");

INSERT INTO Has_Skill VALUES(1, 1, 5);
INSERT INTO Has_Skill VALUES(2, 2, 5);
INSERT INTO Has_Skill VALUES(1, 0, 5);

INSERT INTO Projects VALUES(0, 1, "Martin Mystère Saison 1", "J'ai participé à la saison 1 de Martin Mystère", "", "");
INSERT INTO Projects VALUES(1, 1, "Martin Mystère Saison 2", "J'ai participé à la saison 2 de Martin Mystère", "", "");
INSERT INTO Projects VALUES(2, 1, "Martin Mystère Saison 3", "J'ai participé à la saison 3 de Martin Mystère", "", "");
INSERT INTO Projects VALUES(3, 2, "Danse Avec Les Stars Saison 1", "J'ai été juge lors de la saison 1 de Danse Avec Les Stars", "", "");
INSERT INTO Projects VALUES(4, 2, "Danse Avec Les Stars Saison 1", "J'ai été juge lors de la saison 1 de Danse Avec Les Stars", "", "");
INSERT INTO Projects VALUES(5, 2, "Danse Avec Les Stars Saison 1", "J'ai été juge lors de la saison 1 de Danse Avec Les Stars", "", "");