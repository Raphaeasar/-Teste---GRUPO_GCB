CREATE DATABASE IF NOT EXISTS crud;

USE crud;

SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
    time_zone = "+03:00";

CREATE TABLE 'especialidade' (
    'codespecialidade' smallint primary key AUTO_INCREMENT,
    'nome' varchar(120) NOT NULL
) 

CREATE TABLE 'medico' ( 
    'id' smallint primary key AUTO_INCREMENT,
    'nome' varchar(120) NOT NULL, 
    'crm'  varchar(7) NOT NULL,
    'telefone_fixo' int(10) NOT NULL,
    'telefone_celular' int(11) NOT NULL,
    'cep' int(8) NOT NULL,
    'codespecialidade'  int 
)
