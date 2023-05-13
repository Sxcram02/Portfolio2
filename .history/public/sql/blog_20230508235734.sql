-- --------------------------
-- MySQL Script By Marcos Dominguez
-- @charset = utf8mb4
-- @collation = utf8mb4
-- -------------------------------
-- Schema blog
-- -------------------------------
DROP DATABASE IF EXISTS blog;
CREATE DATABASE IF NOT EXISTS `blog` CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE blog;
-- ---------------------------------
-- Table users
-- ---------------------------------
CREATE TABLE IF NOT EXISTS `users` (
    user
) ENGINE = INNODB;