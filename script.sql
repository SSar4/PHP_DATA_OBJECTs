-- Criação do banco de dados
CREATE DATABASE MeuBancoDeDados;

-- Utiliza o banco de dados criado
USE MeuBancoDeDados;

-- Criação da tabela de usuários
CREATE TABLE Usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);
