-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2021 às 18:26
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuarios_mind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `imagem`, `nivel`) VALUES
(1, 'Guilherme Waizbart', '11122233355', 'guilhermewaizbart@gmail.com', '$2a$04$Cf1f11ePArKlBJomM0F6a.dScEyFN/pkvh9FpMUe4GJq4gMhb57Oe', 'a194e046cc916b2fe03a1aaa0f0ff3e1.jpg', 999),
(2, 'Mark Zuckerberg', '99988877766', 'mark@meta.com', '$2a$04$Cf1f11ePArKlBJomM0F6a.qziv8lS0Ofygo25w8tHoLFwiqajTRKi', '08113d7903e78ce5e048af5b100f9b71jpeg', 1),
(3, 'Carlos Soler Waizbart', '11122233399', 'carloswaizbart@gmail.com', '$2a$04$Cf1f11ePArKlBJomM0F6a.XRamiGTAKrdb8OOzmLaOI1q9ztJKcym', '41fffab189e7ac913b711610345f4840.jpg', 1),
(4, 'JoÃ£o ApolinÃ¡rio', '99955577766', 'jaoapoli@gmail.com', '$2a$04$Cf1f11ePArKlBJomM0F6a.hAEbPhik3JT.q8ASkF0j4MI.RHAJ6H2', 'fa84cad1a4f87e1482d8db1df3246f72.jpg', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
