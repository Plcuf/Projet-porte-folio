CREATE DATABASE IF NOT EXISTS Portefolio CHARACTER SET = utf8mb4;

CREATE USER IF NOT EXISTS 'portefolio_user'@'localhost' IDENTIFIED BY '8QXzqCZS34eJ!qB';

GRANT SELECT, INSERT, UPDATE, DELETE ON Portefolio.* TO 'portefolio_user'@'localhost';