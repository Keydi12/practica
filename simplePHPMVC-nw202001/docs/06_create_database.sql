CREATE SCHEMA `prueba` ;
CREATE USER 'prueba'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY '12345678';
GRANT ALL ON prueba.* TO 'prueba'@'127.0.0.1';