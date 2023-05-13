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
DROP DATABASE IF EXISTS users;
CREATE TABLE IF NOT EXISTS `users` (
    clientName VARCHAR(45) PRIMARY KEY NOT NULL,
    contrasenia VARCHAR(150) NOT NULL
) ENGINE = INNODB;
-- ----------------------------------
-- Table blog
-- ----------------------------------
CREATE TABLE IF NOT EXISTS `blog` (
    codBlog INT PRIMARY KEY NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    subtitulo VARCHAR(100)
) ENGINE = INNODB;