ALTER TABLE `ad` ADD `sphere` ENUM ('programmer', 'system_admin', 'security_admin', 'web_designer', 'project_manager', 'software_testing', 'web_developer') NOT NULL
AFTER `person_id`, ADD `is_confirmed` TINYINT NOT NULL DEFAULT '0'
AFTER `sphere`;

ALTER TABLE `user` CHANGE `role` `role` ENUM('student','employer','root') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

