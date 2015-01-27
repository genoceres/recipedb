CREATE TABLE `recipes` (
  `rp_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rp_title` varchar(100) DEFAULT NULL,
  `rp_chef` varchar(100) DEFAULT NULL,
  `rp_course` varchar(20) DEFAULT NULL,
  `rp_serves` smallint(6) DEFAULT NULL,
  `rp_ingredients` varchar(4000) DEFAULT NULL,
  `rp_method` varchar(4000) DEFAULT NULL,
  `rp_image` varchar(300) DEFAULT NULL,
  `rp_tags` varchar(250) DEFAULT NULL,
  `rp_indt` datetime DEFAULT NULL,
  `rp_moddt` datetime DEFAULT NULL,
  `rp_user` smallint(6) DEFAULT NULL,
  `rp_lastaccessed` datetime DEFAULT NULL,
  PRIMARY KEY (`rp_id`),
  FULLTEXT KEY `idx_tags` (`rp_tags`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `recipes` (`rp_id`,`rp_title`,`rp_chef`,`rp_course`,`rp_serves`,`rp_ingredients`,`rp_method`,`rp_image`,`rp_tags`,`rp_indt`,`rp_moddt`,`rp_user`,`rp_lastaccessed`) VALUES (1,'Paella','Tony Tobin','main',4,'2 tbsp olive oil\n1 shallot, chopped\n1 garlic clove, chopped\n½ tsp smoked paprika\n½ red pepper, chopped\n400g/14oz risotto rice (such as arborio or carnaroli)\npinch saffron strands\n150ml/5½fl oz white wine\n500ml/18fl oz hot vegetable stock\n4 raw king prawns, shells removed, cleaned\n1 squid, cleaned and cut into rings\nhandful fresh parsley, chopped\nsalt and freshly ground black pepper\n1 lemon, cut into wedges, to serve\n','Heat the oil in a large frying pan and gently fry the shallot, garlic, paprika and red pepper until softened.\nAdd the rice and stir until coated in oil.\nAdd the saffron and wine and simmer until the liquid has reduced by half.\nAdd the stock and simmer for ten minutes, or until most of the stock has been absorbed.\nAdd the prawns and squid rings and cook for a further 3-4 minutes, or until the rice is tender and the prawns and squid are cooked through.\nSprinkle over the parsley, season, to taste, with salt and freshly ground black pepper and stir well.\nTo serve, place servings of the paella onto plates and garnish with lemon wedges.',NULL,'paella, chicken, chorizo','2015-01-25 21:21:56',NULL,1,NULL);
INSERT INTO `recipes` (`rp_id`,`rp_title`,`rp_chef`,`rp_course`,`rp_serves`,`rp_ingredients`,`rp_method`,`rp_image`,`rp_tags`,`rp_indt`,`rp_moddt`,`rp_user`,`rp_lastaccessed`) VALUES (2,'Sausage Casserole','Nick Nairn','main',1,'1 tbsp olive oil\n3 Toulouse sausages, cut into 3 pieces\n½ onion, chopped\n2 garlic cloves, chopped\n75ml/2½fl oz red wine\n1 tbsp tomato purée\n2 tsp tomato ketchup\n150ml/¼ pint hot beef stock\nhandful each fresh chives and parsley, chopped, to serve','Heat the olive oil in a casserole dish or large saucepan. Add the sausages and cook until browned on all sides.\nAdd the onion and fry for 3-4 minutes. Add the garlic and fry for a further minute.\nAdd the red wine, tomato purée, ketchup and beef stock and simmer for 8-10 minutes, or until the sauce has thickened and the sausages are completely cooked through.\nTo serve, pour into a serving bowl and scatter with the chopped herbs.',NULL,'sausage, casserole','2015-01-27 20:38:06',NULL,1,NULL);
