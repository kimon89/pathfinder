-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: github
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2016_09_08_224514_create_users_repositories_table',1),('2016_09_08_224620_create_repositories_table',1),('2016_09_09_000027_create_users_table',1),('2016_09_09_002853_rename_users_repositories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repositories`
--

DROP TABLE IF EXISTS `repositories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repositories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repositories`
--

LOCK TABLES `repositories` WRITE;
/*!40000 ALTER TABLE `repositories` DISABLE KEYS */;
INSERT INTO `repositories` VALUES (1,'0_Uy5cOxUeFC'),(2,'1_VERzvb2F62'),(3,'2_fIT1pvbY4A'),(4,'3_zXRXz8zc6J'),(5,'4_zB9L2Q4zMX'),(6,'5_bwHyRXyyMu'),(7,'6_RNUyMgu4KW'),(8,'7_ALhpM1fyFX'),(9,'8_IUYOoYaZEZ'),(10,'9_fZz0jGfFsA'),(11,'10_cmed29VLXn'),(12,'11_LODxSZA2PU'),(13,'12_r7pDbqfMI3'),(14,'13_UPFsBZyZzL'),(15,'14_mpEbud3HsD'),(16,'15_mb7onmz74G'),(17,'16_j67SBO8bHg'),(18,'17_Rw1f2WsDPz'),(19,'18_j6x6y9KFAs'),(20,'19_QjyQiiuX5u'),(21,'20_ugsJByUEhP'),(22,'21_LoBbmvQ7f5'),(23,'22_fTKCTVePf5'),(24,'23_fV5a51gDfT'),(25,'24_AtzhJ31arC'),(26,'25_4AI2xXeb9p'),(27,'26_TqE4OVNwXS'),(28,'27_uQDrVlOiNZ'),(29,'28_vAg4fc1Gld'),(30,'29_P4nDj1g05P'),(31,'30_TbajMCzozh'),(32,'31_Ck77eIsy5Q'),(33,'32_LX9qMlSF3l'),(34,'33_Uu3PCOt9wH'),(35,'34_V0FwxyelSM'),(36,'35_ctKEKySu98'),(37,'36_GrlgD60fNq'),(38,'37_4Hn1XxQYOH'),(39,'38_6pLoKVBO46'),(40,'39_H5yso2eVu3'),(41,'40_YZ7IHAsGNn'),(42,'41_oPsTZKsqfS'),(43,'42_fQRRHbIdLs'),(44,'43_lhsT5qLXuN'),(45,'44_qrgaKfBByM'),(46,'45_QVQNy7cM0v'),(47,'46_9yUz11ryDe'),(48,'47_uUdSnkZo4V'),(49,'48_F9KHT1OuRH'),(50,'49_P61sUDSots'),(51,'50_bQ1NLKBQWu'),(52,'51_zFapCdkzA3'),(53,'52_X0twMHQv3P'),(54,'53_D14CZF0U8N'),(55,'54_LZG64fgj4O'),(56,'55_fGtQr6Qvzr'),(57,'56_WxTh19Hb93'),(58,'57_T88IIfV9GJ'),(59,'58_X3YFUvZGF2'),(60,'59_uoh272JSxe'),(61,'60_Bdjv4jpnSd'),(62,'61_VvkeJfHN41'),(63,'62_SpktQLzWVl'),(64,'63_oWOz2vaUWF'),(65,'64_y3wZGLmk8e'),(66,'65_Jpj7rnPRH2'),(67,'66_Q8GPnsIJpE'),(68,'67_uemhGSI0GD'),(69,'68_0ilirzr7JK'),(70,'69_JNU2a8HPbA'),(71,'70_DKl2fZsVqB'),(72,'71_DLPOXi9ORi'),(73,'72_B0QQ7xcZBU'),(74,'73_NpRueMQk33'),(75,'74_4kPRt6DKlH'),(76,'75_KYRpJoveTU'),(77,'76_xna81hGS5Z'),(78,'77_aHJtw7RC2B'),(79,'78_yLGCeS9TFq'),(80,'79_NWiUWEHLQ0'),(81,'80_lng4qA8mHH'),(82,'81_4bVsqYFFCU'),(83,'82_i4xnY64SEV'),(84,'83_pMFTr2UFj2'),(85,'84_yj5iD3oAeO'),(86,'85_4pscmWsY3m'),(87,'86_oMdCq0VFZi'),(88,'87_ssNOoYgeru'),(89,'88_h6v4RYgsik'),(90,'89_ilb7o9dCoF'),(91,'90_a1116q6DOf'),(92,'91_DOrgKBa2f9'),(93,'92_vihn0qIXfR'),(94,'93_uZ6G39oqtQ'),(95,'94_2BIZrajf3h'),(96,'95_lVU6iD0SjK'),(97,'96_gsPRoXhMzc'),(98,'97_Rd1EXCbDYf'),(99,'98_KvuCSCLNqS'),(100,'99_Qr5yzgZhkr'),(101,'100_v72VvgwFAM'),(102,'101_7IFqlv6ahE'),(103,'102_4kC63hz1ow'),(104,'103_ir8fXLVdKx'),(105,'104_0bP9GgRDqj'),(106,'105_9yDuSSngTa'),(107,'106_J8pJWI64IR'),(108,'107_qMjSuwnNbH'),(109,'108_PLbFtNeH4Q'),(110,'109_1YOvWAH20V'),(111,'110_lHFhUqKHzV'),(112,'111_pX0BMR4kib'),(113,'112_O6aH6Gmg21'),(114,'113_HhkOOjTVfF'),(115,'114_vUkIZsoyRB'),(116,'115_D47AfX3pj0'),(117,'116_JHYQzUrLAN'),(118,'117_68j2baqbM1'),(119,'118_IeT5uqXdnN'),(120,'119_mUsnfT5GAy'),(121,'120_g2DaBl5I1M'),(122,'121_k2Rld0kUXc'),(123,'122_aO5ZHsYbGL'),(124,'123_CSGo3Yti2E'),(125,'124_hLyZibQ0N4'),(126,'125_iLGJQPzHmk'),(127,'126_x4xSXY8tHv'),(128,'127_FUISc9ywYX'),(129,'128_2iXfoXenCL'),(130,'129_iqls2Q2zA4'),(131,'130_3b70YMyP5L'),(132,'131_Mylfi5p2am'),(133,'132_HWGzWLs6l2'),(134,'133_1dZl3EAWrP'),(135,'134_PilIVy17QA'),(136,'135_iNfBaZmx23'),(137,'136_pXY2iBWxly'),(138,'137_trhWEYOxP8'),(139,'138_HYz3A8KhMd'),(140,'139_OnYbIJTG6A'),(141,'140_HZrrL09cnP'),(142,'141_LBD7Md8Kod'),(143,'142_TyZikE8bSP'),(144,'143_PgYLQ72gyn'),(145,'144_JyIOFyVSxx'),(146,'145_XSACRorJd4'),(147,'146_Gqbe5iYyfW'),(148,'147_dpWKyyTyTm'),(149,'148_fK5TZm89Hf'),(150,'149_kH0ArooKeB'),(151,'150_NYBJyh8Ju2'),(152,'151_VCb7wSPodw'),(153,'152_oD4bj6Mn7e'),(154,'153_mNQWmJT32b'),(155,'154_Flq9AE7lGh'),(156,'155_RIMXQBQk0P'),(157,'156_NuhIVv6jV7'),(158,'157_cRAN8rJIMI'),(159,'158_qSxy9dlOLy'),(160,'159_6WXSn2bIlL'),(161,'160_4euWfjZFA6'),(162,'161_UYkQpsVEd5'),(163,'162_0T4KbmH7d9'),(164,'163_Q3GTLvB6Av'),(165,'164_pIn2YUFds7'),(166,'165_Z2FZAT1Vc3'),(167,'166_VTMsp2Pk1Y'),(168,'167_abMrAODExE'),(169,'168_wnVSsFhqKW'),(170,'169_ATJHbKkeHU'),(171,'170_sAcFhgPLou'),(172,'171_AyU3alkWQB'),(173,'172_dEm8eYAEq4'),(174,'173_YPI3H6tMnf'),(175,'174_BVVYC8BjZO'),(176,'175_YcIGju2LHG'),(177,'176_2022XYT166'),(178,'177_0yTmRo5P6h'),(179,'178_pAaDcJ7rdn'),(180,'179_dSTcCQZJik'),(181,'180_JYSaAMIVWW'),(182,'181_hUYL0nS333'),(183,'182_SsehfpxScO'),(184,'183_xa3PCvGJIH'),(185,'184_TqgYuYpK2W'),(186,'185_eIYfGofT44'),(187,'186_AxqfQQScHj'),(188,'187_w9kXlMxKsz'),(189,'188_z1xJTPbLI3'),(190,'189_HycSUcSOI7'),(191,'190_ck38IRcWXH'),(192,'191_Hz7LevUYsB'),(193,'192_QGKXhyTkjx'),(194,'193_BHCyrvX2sE'),(195,'194_83StU62LAV'),(196,'195_WHQYodGD3e'),(197,'196_jstZ97rUsT'),(198,'197_fENY8MmqyV'),(199,'198_1TyP5LCd8x'),(200,'199_25B3NqQcf3'),(201,'200_5OndVteNDd'),(202,'201_0yuEhLcn5f'),(203,'202_dEIfKsQ5VI'),(204,'203_iQklzcNQwW'),(205,'204_iN4MGZvgY4'),(206,'205_rymqoJ6rC2'),(207,'206_bqBy2GvjbH'),(208,'207_dD3b35Nc8L'),(209,'208_bsBTNtHgZe'),(210,'209_XfUkig7jJl'),(211,'210_Yo6JDokzvd'),(212,'211_t9x1Plz46y'),(213,'212_1qTSVFN63p'),(214,'213_g7pbxATMjx'),(215,'214_kz4m2ukB7i'),(216,'215_enSFdlSS9C'),(217,'216_wubfCdTIqu'),(218,'217_PN5wVOskcH'),(219,'218_GaAWApwz6q'),(220,'219_m6CriG6NW7'),(221,'220_WFfMaogOgx'),(222,'221_job8yREDyf'),(223,'222_LavGQzF6YS'),(224,'223_oh1McaDrac'),(225,'224_kPet76et1r'),(226,'225_LDhNrRAs8q'),(227,'226_wRc24evKfx'),(228,'227_hdm7b8RZ6P'),(229,'228_kJ30J7FdBu'),(230,'229_DIJXnGwngH'),(231,'230_93UsWvFVSO'),(232,'231_UzzymxUjh5'),(233,'232_f4L1XGp3Oy'),(234,'233_crWhf3WJXs'),(235,'234_GNoo33d0iC'),(236,'235_S8yQaPinNI'),(237,'236_IeyUCFjxRc'),(238,'237_5ydmO5hrsG'),(239,'238_GCO9vheWxh'),(240,'239_zNrlZshz55'),(241,'240_R6F5zDaBzu'),(242,'241_0g4NUmQB1p'),(243,'242_2ZZaRPSXq1'),(244,'243_FBxCocwnKA'),(245,'244_zWIHIPYDHL'),(246,'245_iFjVS1cgZ1'),(247,'246_tC1CW3qYVt'),(248,'247_mLd5r0IeQ5'),(249,'248_QhgeJzlAE4'),(250,'249_8B1iXt98f4'),(251,'250_AxhcT10dV2'),(252,'251_7OasAyXb1K'),(253,'252_AsocXdexv8'),(254,'253_zB2Rxhkgs3'),(255,'254_W97qVRPp9P'),(256,'255_gZAI70iO5l'),(257,'256_jNTH5DnRHV'),(258,'257_hTUsKaXGf9'),(259,'258_CRvmguJcyI'),(260,'259_0B9RHTLCPg'),(261,'260_JL4Dq9qh48'),(262,'261_cBeZe70wm8'),(263,'262_EjULGct4fd'),(264,'263_2xOISGa4mr'),(265,'264_uHJ0vfADtl'),(266,'265_183kLBgUZ8'),(267,'266_4eevmeV2X8'),(268,'267_Jf1rhR9yk7'),(269,'268_eLGY5JtucB'),(270,'269_0P4gzFnXk1'),(271,'270_2gAXb5xBfU'),(272,'271_DdEvgeaxKq'),(273,'272_RFHdzb1ei6'),(274,'273_ghm0uBaazl'),(275,'274_V5pyvxvxzC'),(276,'275_hmLKo51jjF'),(277,'276_G3Ye6dirAi'),(278,'277_Bte5m2tQ0g'),(279,'278_5uUJaaDU3G'),(280,'279_frDwEeVuJF'),(281,'280_DNJjZGgCr3'),(282,'281_kUjuOLx7SB'),(283,'282_caFzhyXN7q'),(284,'283_cLX0RqHwmH'),(285,'284_Y8e5mpS2dW'),(286,'285_CSsFlNUpHp'),(287,'286_eOcJneVc2i'),(288,'287_umHqxCK9Xm'),(289,'288_0aGkJmkpz8'),(290,'289_k7feu6rAWE'),(291,'290_ZG9TJ0C9ZO'),(292,'291_7G0elSYwWt'),(293,'292_peknXIw036'),(294,'293_UHeAs36JUh'),(295,'294_Wpn6XGe4uf'),(296,'295_4YLVVJLC4y'),(297,'296_J1E2IziTon'),(298,'297_3pjePWSikw'),(299,'298_AKqIjDPhE6'),(300,'299_oMSI8b3aIC'),(301,'300_o5M0orUo6f'),(302,'301_g1IlmT7dzn'),(303,'302_MPte4ebqy3'),(304,'303_WfnhLSo1ak'),(305,'304_eom3kXhHdW'),(306,'305_zBwtQCq0YH'),(307,'306_Gkxu1Ghy1z'),(308,'307_JWfC7t2lCX'),(309,'308_EMHg6M2hBA'),(310,'309_idgbrg08Ro'),(311,'310_5ajlDvAsQu'),(312,'311_hWPr67bZUb'),(313,'312_GIq8bTSGat'),(314,'313_MaxYoXhsT3'),(315,'314_TbcOlLxkho'),(316,'315_4s7ICuK1wb'),(317,'316_ADarZ6BtGX'),(318,'317_mCHowszqnH'),(319,'318_yrqhqQMLw9'),(320,'319_AonHm45vHX'),(321,'320_5dpk5osTbU'),(322,'321_X5PRps46hl'),(323,'322_nXCrKJL8kQ'),(324,'323_wlYP5OAXSB'),(325,'324_R0irBNsaVa'),(326,'325_BQ2hUedOjL'),(327,'326_u1PfP99HtQ'),(328,'327_pABKtWH5OY'),(329,'328_qWBS6jBjc2'),(330,'329_ycMaFuN1B6'),(331,'330_2VWqdDlztX'),(332,'331_eGVjOaaiLQ'),(333,'332_NuZ1MvVFu1'),(334,'333_rA4FrKiz7T'),(335,'334_dASBoWJE9F'),(336,'335_vVHsvVjkLf'),(337,'336_JwivPKyuwM'),(338,'337_sp5YARpkzc'),(339,'338_ydzvtlBEOz'),(340,'339_jvv79yhu6s'),(341,'340_O2lKLUlLyz'),(342,'341_mJx6AZ2gdr'),(343,'342_hqfqGBs9dQ'),(344,'343_7GEMvlYQUh'),(345,'344_V7PERf8a4F'),(346,'345_1bkP64rJIx'),(347,'346_3UCN5scPRy'),(348,'347_PDafWFhd7K'),(349,'348_IRgN1sw8xi'),(350,'349_LCmZItEW3r'),(351,'350_CjZvi37wet'),(352,'351_lgGmAoOBn2'),(353,'352_jCoqHKCWkt'),(354,'353_wQpspAJps5'),(355,'354_fWCg3jijjo'),(356,'355_v1j7IP4MDM'),(357,'356_K1azutXZtE'),(358,'357_uOehN30sgE'),(359,'358_Jjvrx1bHKW'),(360,'359_2OTuTKQCsp'),(361,'360_Z1MPtKupSL'),(362,'361_9aGUNmRRLJ'),(363,'362_XQ3ERfAmUO'),(364,'363_zGhcgV8lHY'),(365,'364_UUP4Zcirlr'),(366,'365_ioONz4rxB0'),(367,'366_xRmLn6efVk'),(368,'367_90ZhxZhupK'),(369,'368_uTcDVPzF4S'),(370,'369_fR3OhjujN3'),(371,'370_9EvvyT1X8L'),(372,'371_siWMnN1G82'),(373,'372_rcsv7UIZ7b'),(374,'373_9iq3mUrDUh'),(375,'374_XrRZvwByME'),(376,'375_bVxl3ZqdyR'),(377,'376_N5nv1ulIBK'),(378,'377_OchM8iDyUd'),(379,'378_9EW5izOCx7'),(380,'379_WHt4wOIGb2'),(381,'380_kytRj1V8gH'),(382,'381_R43AkmrshU'),(383,'382_mokZs8Nc7U'),(384,'383_F4D6VY7yjE'),(385,'384_YPZSoIS2NN'),(386,'385_DtiyRYA2Jp'),(387,'386_aVgof2Ax5d'),(388,'387_8AhYc0y4PL'),(389,'388_FQtf2bI6OW'),(390,'389_jYsfOz5X5z'),(391,'390_StU4qUGRl8'),(392,'391_bkMCq5XMEt'),(393,'392_7LZMm8B6vI'),(394,'393_oZCjPw1wI2'),(395,'394_tjgOFl1pSb'),(396,'395_4LvDBjXNPW'),(397,'396_iTIIKcm0Ld'),(398,'397_QaDiqoiXUG'),(399,'398_pKNQaIqKaX'),(400,'399_rRQa8SAi9q'),(401,'400_GnopUj2npv'),(402,'401_WnLSgh93yT'),(403,'402_YJRLZlzW6l'),(404,'403_oYVVMIS2Iy'),(405,'404_6sLIhdnq7g'),(406,'405_4Ersr3Me3h'),(407,'406_pmH32ymZX5'),(408,'407_doTW1LoHWp'),(409,'408_jWD9uM8nxy'),(410,'409_xqslemCFFL'),(411,'410_P07Z2Vdwm4'),(412,'411_h4vbmt5E0R'),(413,'412_IvPiXpofV3'),(414,'413_Ea5DzsAle2'),(415,'414_1jezyVYeaC'),(416,'415_u6bgD8e0MJ'),(417,'416_j9xWc23WzS'),(418,'417_ypIJ55fyy7'),(419,'418_e0NVDgoVG7'),(420,'419_teMuQOvYTf'),(421,'420_OMY6rSwJYM'),(422,'421_4gNGFbDHoZ'),(423,'422_9AJL0UKiah'),(424,'423_KJgI0pJtmr'),(425,'424_hREBogCRdF'),(426,'425_iJHFqJty5b'),(427,'426_FNgydLLtpX'),(428,'427_HsCE1FOOYh'),(429,'428_HedFaO98Sy'),(430,'429_iR95cX4Tnd'),(431,'430_isCTWEfdWa'),(432,'431_SqdjZJr5Lk'),(433,'432_T743jrGst2'),(434,'433_wnF8dTIOFn'),(435,'434_Vo3ggz4lxm'),(436,'435_z1gCmS05gz'),(437,'436_fXLPVr7yBs'),(438,'437_sdZAfdFpLG'),(439,'438_DW3NWs15Iw'),(440,'439_A3S9mop68F'),(441,'440_nuZeXl864X'),(442,'441_4BtV6rVSZW'),(443,'442_a7QUJeASQv'),(444,'443_ItURfDZtvw'),(445,'444_3zZuo4Mwo4'),(446,'445_lN0lIm4FRK'),(447,'446_cVgIg6Kz0a'),(448,'447_QQiC1W5YlW'),(449,'448_JFIf3PT1dj'),(450,'449_xxx85M5PQk'),(451,'450_IrCW6NeEDG'),(452,'451_XF1e6O8Ll0'),(453,'452_E5svcvJskx'),(454,'453_ORsgdnhVr3'),(455,'454_pMs4O0dAcW'),(456,'455_zc9h2uvgwp'),(457,'456_fWbfBNMhZt'),(458,'457_Hv4chfD3v5'),(459,'458_dntpKemDiy'),(460,'459_ZDTzicZeBC'),(461,'460_Ef6fbp77sY'),(462,'461_v2CFwZW3BV'),(463,'462_JJ8Aqytmj3'),(464,'463_wLOYN5G7lt'),(465,'464_F1PLr8rb2P'),(466,'465_xibupPKTPl'),(467,'466_Z4AZ89Qqu8'),(468,'467_bz86u2BLtd'),(469,'468_AQTRqko41K'),(470,'469_7VRQ1mrIxR'),(471,'470_YlI8nm4lTF'),(472,'471_e7RHaheMVh'),(473,'472_VNneodNj2j'),(474,'473_o6IpQJvQdn'),(475,'474_WT41ydo21c'),(476,'475_QxUe17Giay'),(477,'476_AfJIUtSdE5'),(478,'477_uv5FlKYDGb'),(479,'478_xVBpEDsPKM'),(480,'479_wm6mjfMllX'),(481,'480_ev3uYmesZs'),(482,'481_8Q6PXvPEez'),(483,'482_B8NA5uM7ij'),(484,'483_zPqbFpFbyW'),(485,'484_dldf0Jwgea'),(486,'485_ITZ8lA8Eah'),(487,'486_AeYD7pPvGV'),(488,'487_KHPN8rpNJ7'),(489,'488_uNXleXede5'),(490,'489_JwjaFf4rxn'),(491,'490_C22NoL02Yw'),(492,'491_Ogf2aL1wQI'),(493,'492_SxdaMvrVyW'),(494,'493_XDOTxDVX6X'),(495,'494_18bAdpPM0g'),(496,'495_uvt2sHzbdg'),(497,'496_eW9enRNJpn'),(498,'497_L7OnnJuoQ3'),(499,'498_LSYiyS7aGT'),(500,'499_JhPDBQ3XqD');
/*!40000 ALTER TABLE `repositories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repository_user`
--

DROP TABLE IF EXISTS `repository_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repository_user` (
  `user_id` int(11) NOT NULL,
  `repository_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repository_user`
--

LOCK TABLES `repository_user` WRITE;
/*!40000 ALTER TABLE `repository_user` DISABLE KEYS */;
INSERT INTO `repository_user` VALUES (1,482),(1,283),(1,32),(1,336),(1,247),(1,197),(2,204),(2,216),(2,312),(2,364),(3,291),(3,130),(3,472),(3,53),(3,62),(4,344),(4,304),(4,493),(4,342),(4,156),(4,69),(4,110),(5,422),(5,414),(5,115),(5,438),(5,140),(5,203),(6,264),(6,63),(6,383),(6,202),(6,325),(7,481),(7,123),(7,115),(7,388),(8,301),(8,143),(8,412),(8,319),(9,110),(9,59),(9,459),(9,37),(9,315),(9,201),(9,341),(10,178),(10,396),(10,356),(10,366),(10,67),(10,240),(10,9),(11,344),(11,392),(11,340),(11,342),(11,7),(12,208),(12,77),(12,12),(12,234),(12,320),(13,184),(13,396),(13,157),(13,60),(13,388),(13,381),(13,304),(14,144),(14,133),(14,332),(14,321),(14,253),(14,162),(14,237),(14,74),(15,491),(15,214),(15,309),(15,360),(15,174),(15,474),(15,459),(16,53),(16,419),(16,72),(16,291),(16,68),(16,310),(16,432),(16,371),(17,331),(17,18),(17,78),(17,334),(17,116),(17,228),(18,348),(18,136),(18,9),(18,2),(18,30),(19,339),(19,180),(19,244),(19,92),(20,110),(20,157),(20,45),(20,101),(20,135),(21,482),(21,392),(21,310),(21,247),(22,316),(22,466),(22,37),(22,432),(22,278),(23,387),(23,43),(23,260),(23,473),(24,146),(24,65),(24,254),(24,255),(24,56),(24,479),(24,219),(24,59),(25,490),(25,405),(25,451),(25,207),(25,160),(25,443),(26,26),(26,438),(26,222),(26,401),(26,41),(26,338),(27,55),(27,384),(27,87),(27,373),(27,364),(27,280),(28,440),(28,258),(28,107),(28,347),(29,68),(29,272),(29,273),(29,380),(29,51),(29,249),(29,243),(29,306),(30,168),(30,104),(30,252),(31,8),(31,376),(31,459),(31,162),(32,434),(32,421),(32,447),(32,211),(32,458),(33,292),(33,236),(33,115),(33,220),(33,423),(33,119),(33,375),(33,219),(34,381),(34,58),(34,423),(34,473),(34,187),(35,144),(35,368),(35,273),(35,51),(35,274),(35,238),(36,357),(36,407),(36,344),(36,259),(36,92),(36,36),(37,8),(37,481),(37,128),(37,13),(37,58),(37,96),(38,370),(38,410),(38,265),(38,315),(39,51),(39,255),(39,186),(39,157),(39,298),(40,487),(40,81),(40,158),(40,284),(40,246),(40,122),(41,187),(41,127),(41,347),(41,407),(41,110),(42,296),(42,195),(42,249),(42,232),(42,396),(42,233),(43,16),(43,195),(43,427),(43,335),(44,461),(44,195),(44,394),(44,309),(45,103),(45,324),(45,253),(46,487),(46,420),(46,370),(46,305),(47,230),(47,38),(47,229),(47,329),(47,198),(47,13),(48,142),(48,279),(48,485),(49,91),(49,467),(49,235),(49,379),(49,270),(49,173),(49,321),(50,49),(50,168),(50,406),(50,485),(50,163);
/*!40000 ALTER TABLE `repository_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Madonna Bogan II'),(2,'Zack Block'),(3,'Mrs. Litzy McGlynn III'),(4,'Ms. Haylee Walter DVM'),(5,'Jewell Schroeder'),(6,'Miss Autumn Huels II'),(7,'Lamont Hilpert'),(8,'Rollin Ziemann'),(9,'Dr. Elwyn Lang'),(10,'Delphia Altenwerth'),(11,'Mrs. Trinity Hayes I'),(12,'Adolphus Wolf'),(13,'Edythe Windler'),(14,'Enrique Ondricka'),(15,'Boyd Koss'),(16,'Marlee Becker'),(17,'Prof. Lacey Nitzsche MD'),(18,'Genevieve Cremin Sr.'),(19,'Dr. Aylin Sanford IV'),(20,'Mitchel Schroeder'),(21,'Margarete Walsh Jr.'),(22,'Matilda Johnston'),(23,'Prof. Kasey Thompson Sr.'),(24,'Gregory Schmeler'),(25,'Trevion Ratke'),(26,'Miss Zoe Johnson Sr.'),(27,'Kennedi Bauch'),(28,'Kristoffer Cole PhD'),(29,'Daphney Dickinson'),(30,'Ed Hirthe III'),(31,'Dr. Tessie Bosco III'),(32,'Helga Streich'),(33,'Mr. Tad Ratke'),(34,'Dr. Mikayla Vandervort'),(35,'Dawn Cremin'),(36,'Dr. Rowan Sawayn Jr.'),(37,'Dr. Rosa Ratke'),(38,'Prof. Craig Mante'),(39,'Claude Anderson MD'),(40,'Dr. Megane Ullrich'),(41,'Sarina Halvorson Sr.'),(42,'Susanna Rolfson'),(43,'Gerry Cummerata DDS'),(44,'Ollie Hermann'),(45,'Eda Considine'),(46,'Hattie Quitzon'),(47,'Tristin Kohler'),(48,'Lance Ebert'),(49,'Mr. Garnet Nikolaus'),(50,'Glenda Denesik');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-14  6:52:04
