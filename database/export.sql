----
-- phpLiteAdmin database dump (https://www.phpliteadmin.org/)
-- phpLiteAdmin version: 1.9.9-dev
-- Exported: 6:48pm on April 9, 2025 (CEST)
-- database file: .\database.sqlite
----
BEGIN TRANSACTION;

----
-- Table structure for tmp
----
CREATE TABLE "tmp" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "current_team_id" integer, "profile_photo_path" varchar, "two_factor_secret" text, "two_factor_recovery_codes" text, "two_factor_confirmed_at" datetime, "created_at" datetime, "updated_at" datetime);

----
-- Data dump for tmp, a total of 2 rows
----
INSERT INTO "tmp" ("id","name","email","email_verified_at","password","remember_token","current_team_id","profile_photo_path","two_factor_secret","two_factor_recovery_codes","two_factor_confirmed_at","created_at","updated_at") VALUES ('1','Manuel','manuel@gmail.com',NULL,'$2y$12$6oRsmlv2.H0.Ku4dEgK8XO5CJuX6PBS2v9XZ4NM5yoCD.RfpMs.S6','FJpZdnnmDZHuPMq8OW0S41SPmpR7oOPmqjGskuMikdUTRploZKzaP3cVuDHp','1','profile-photos/6FJRiRCJps7jwRm7OSKaBGMxnEnnLiGlgJCJ4cAo.png',NULL,NULL,NULL,'2025-03-30 09:58:54','2025-03-30 09:59:45');
INSERT INTO "tmp" ("id","name","email","email_verified_at","password","remember_token","current_team_id","profile_photo_path","two_factor_secret","two_factor_recovery_codes","two_factor_confirmed_at","created_at","updated_at") VALUES ('3','xxx','xxx@email.com',NULL,'$2y$12$QI.DPykBm.R754cAFfgdfOcSrVfTqcbPOOQNThu7YDZpA864J3krK',NULL,'1',NULL,NULL,NULL,NULL,'2025-03-30 10:37:29','2025-03-30 11:33:28');

----
-- structure for index tmp_email_unique on table tmp
----
CREATE UNIQUE INDEX "tmp_email_unique" on "tmp" ("email");
COMMIT;
