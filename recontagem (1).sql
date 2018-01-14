-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jan-2018 às 19:40
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recontagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contagem`
--

CREATE TABLE `contagem` (
  `id` int(10) UNSIGNED NOT NULL,
  `contagem_fisica` double NOT NULL,
  `mes` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `franquia_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

CREATE TABLE `entradas` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantidade` double NOT NULL,
  `mes` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `franquia_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `franquias`
--

CREATE TABLE `franquias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `franquia_id` varchar(50) NOT NULL,
  `data_DQA` date NOT NULL,
  `data_inicio_periodo_sob_avaliacao` date NOT NULL,
  `data_fim_periodo_sob_avaliacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `header`
--

INSERT INTO `header` (`id`, `franquia_id`, `data_DQA`, `data_inicio_periodo_sob_avaliacao`, `data_fim_periodo_sob_avaliacao`) VALUES
(8, '5', '2017-09-21', '2017-09-22', '2017-09-20'),
(9, '6', '2017-09-21', '2017-09-22', '2017-09-20'),
(10, '5', '2017-09-08', '2017-09-14', '2017-09-22'),
(11, '5', '2017-09-07', '2017-09-21', '2017-09-15'),
(12, '6', '2017-08-31', '2017-09-14', '2017-09-08'),
(13, '6', '2017-09-08', '2017-09-16', '2017-09-14'),
(14, '6', '2017-09-21', '2017-09-15', '2017-09-08'),
(15, '6', '2017-09-14', '2017-09-14', '2017-09-14'),
(16, '5', '2017-09-08', '2017-09-15', '2017-09-07'),
(17, '6', '2017-08-31', '2017-09-01', '2017-09-07'),
(18, '5', '2017-09-07', '2017-09-14', '2017-09-13'),
(19, '0', '2017-09-07', '2017-09-16', '2017-09-23'),
(20, 'MZ_FTM_188530', '2017-09-08', '2017-09-02', '2017-09-28'),
(21, 'MZ_FTM_191913', '2017-09-08', '2017-09-14', '2017-09-20'),
(23, 'MZ_FTM_191913', '2017-09-08', '2017-09-15', '2017-09-08'),
(24, 'MZ_FTM_27947', '2017-09-22', '2017-09-08', '2017-09-08'),
(25, 'MZ_FTM_3385', '2017-09-14', '2017-09-08', '2017-09-08'),
(26, 'MZ_FTM_212407', '2017-09-14', '2017-09-08', '2017-09-08'),
(27, 'MZ_FTM_191913', '2017-09-08', '2017-09-15', '2017-09-21'),
(28, 'MZ_FTM_191913', '2017-09-01', '2017-09-15', '2017-09-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_regito_v`
--

CREATE TABLE `livro_regito_v` (
  `id` int(11) DEFAULT NULL,
  `pagina` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `metodo` varchar(100) DEFAULT NULL,
  `data_registo` varchar(30) DEFAULT NULL,
  `franquia` varchar(105) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `data_DQA` date DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodos`
--

CREATE TABLE `metodos` (
  `id` varchar(45) NOT NULL,
  `metodo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `metodos`
--

INSERT INTO `metodos` (`id`, `metodo`) VALUES
('continuadoraPfDiuXIX', 'Continuadora de PF DIU <=19 anos'),
('continuadoraPfDiuXXIV', 'Continuadora de PF DIU 20-24 anos'),
('continuadoraPfDiuXXV', 'Continuadora de PF DIU >=25 anos'),
('continuadoraPfImplanteXIX', 'Continuadora de PF Implante <=19 anos'),
('continuadoraPfImplanteXXIV', 'Continuadora de PF Implante 20-24 anos'),
('continuadoraPfImplanteXXV', 'Continuadora de PF Implante >=25 anos'),
('continuadoraPfInjectaveisXIX', 'Continuadora de PF Injectaveis <=19 anos'),
('continuadoraPfInjectaveisXXIV', 'Continuadora de PF Injectaveis 20-24 anos'),
('continuadoraPfInjectaveisXXV', 'Continuadora de PF Injectaveis >=25 anos'),
('continuadoraPfNa', 'Continuadora de PF N/A'),
('continuadoraPfPilulaXIX', 'Continuadora de PF Pilula <=19 anos'),
('continuadoraPfPilulaXXIV', 'Continuadora de PF Pilula 20-24 anos'),
('continuadoraPfPilulaXXV', 'Continuadora de PF Pilula >=25 anos'),
('contraceptivos', 'Distribuição de contraceptivos 25+ e 25-\r\n'),
('DIUContinuamXIX', 'DIU Utentes que continuam o metodo <=19 anos'),
('DIUContinuamXXIV', 'DIU Utentes que continuam o metodo 20-24 anos'),
('DIUContinuamXXV', 'DIU Utentes que continuam o metodo >=25 anos'),
('DIUNa', 'DIU N/A'),
('DIUNovasXIX', 'DIU Utentes novos <=19 anos'),
('DIUNovasXXIV', 'DIU Utentes novos 20-24 anos'),
('DIUNovasXXV', 'DIU Utentes novos >=25 anos'),
('DIUTotalCiclosXIX', 'DIU Total de Implantes por tipo <=19 anos'),
('DIUTotalCiclosXXIV', 'DIU Total de Implantes por tipo 20-24 anos'),
('DIUTotalCiclosXXV', 'DIU Total de Implantes por tipo >=25 anos'),
('ImplantesContinuamXIX', 'Implantes Utentes que continuam o metodo <=19 anos'),
('ImplantesContinuamXXIV', 'Implantes Utentes que continuam o metodo 20-24 anos'),
('ImplantesContinuamXXV', 'Implantes Utentes que continuam o metodo >=25 anos'),
('ImplantesNa', 'Implantes N/A'),
('ImplantesNovasXIX', 'Implantes Utentes novos <=19 anos'),
('ImplantesNovasXXIV', 'Implantes Utentes novos 20-24 anos'),
('ImplantesNovasXXV', 'Implantes Utentes novos >=25 anos'),
('ImplantesTotalCiclosXIX', 'Implantes Total de Implantes por tipo <=19 anos'),
('ImplantesTotalCiclosXXIV', 'Implantes Total de Implantes por tipo 20-24 anos'),
('ImplantesTotalCiclosXXV', 'Implantes Total de Implantes por tipo >=25 anos'),
('InjectaveisContinuamXIX', 'Injectaveis Utentes seguintes <=19 anos'),
('InjectaveisContinuamXXIV', 'Injectaveis Utentes seguintes 20-24 anos'),
('InjectaveisContinuamXXV', 'Injectaveis Utentes seguintes >=25 anos'),
('InjectaveisNa', 'Injectaveis  N/A'),
('InjectaveisNovasXIX', 'Injectaveis Utentes novos <=19 anos'),
('InjectaveisNovasXXIV', 'Injectaveis Utentes novos 20-24 anos'),
('InjectaveisNovasXXV', 'Injectaveis Utentes novos >=25 anos'),
('InjectaveisTotalCiclosXIX', 'Injectaveis Total de injectaveis por tipo <=19 anos'),
('InjectaveisTotalCiclosXXIV', 'Injectaveis Total de injectaveis por tipo 20-24 anos'),
('InjectaveisTotalCiclosXXV', 'Injectaveis Total de injectaveis por tipo >=25 anos'),
('novasPfDiuXIX', 'Nova utente de PF DIU <=19 anos'),
('novasPfDiuXXIV', 'Nova utente de PF DIU 20-24 anos'),
('novasPfDiuXXV', 'Nova utente de PF DIU >=25 anos'),
('novasPfImplanteXIX', 'Nova utente de PF Implante <=19 anos'),
('novasPfImplanteXXIV', 'Nova utente de PF Implante 20-24 anos'),
('novasPfImplanteXXV', 'Nova utente de PF Implante >=25 anos'),
('novasPfInjectaveisXIX', 'Nova utente de PF Injectaveis <=19 anos'),
('novasPfInjectaveisXXIV', 'Nova utente de PF Injectaveis 20-24 anos'),
('novasPfInjectaveisXXV', 'Nova utente de PF Injectaveis >=25 anos'),
('novasPfNa', 'Nova utente de PF N/A'),
('novasPfPilulaXIX', 'Nova utente de PF Pilula <=19 anos'),
('novasPfPilulaXXIV', 'Nova utente de PF Pilula 20-24 anos'),
('novasPfPilulaXXV', 'Nova utente de PF Pilula >=25 anos'),
('pilulaContinuamXIX', 'Pilula Utentes que continuam o metodo <=19 anos'),
('pilulaContinuamXXIV', 'Pilula Utentes que continuam o metodo 20-24 anos'),
('pilulaContinuamXXV', 'Pilula Utentes que continuam o metodo >=25 anos'),
('pilulaNa', 'Pilula N/A'),
('pilulaNovasXIX', 'Pilula Utentes Novas no metodo <=19 anos'),
('pilulaNovasXXIV', 'Pilula Utentes Novas no metodo 20-24 anos'),
('pilulaNovasXXV', 'Pilula Utentes Novas no metodo >=25 anos'),
('pilulaTotalCiclosXIX', 'Pilula Total de ciclos <=19 anos'),
('pilulaTotalCiclosXXIV', 'Pilula Total de ciclos 20-24 anos'),
('pilulaTotalCiclosXXV', 'Pilula Total de ciclos >=25 anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_30_131033_create_franquias_table', 2),
(4, '2017_11_30_131309_create_saidas_table', 2),
(5, '2017_11_30_131623_create_entradas_table', 2),
(6, '2017_11_30_130729_create_produtos_table', 3),
(7, '2017_11_30_131309_create_contagem_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registo_por_pagina`
--

CREATE TABLE `registo_por_pagina` (
  `id` int(11) NOT NULL,
  `pagina` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Metodos_id` varchar(45) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `data_registo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saidas`
--

CREATE TABLE `saidas` (
  `id` int(10) UNSIGNED NOT NULL,
  `saldo_inicial` double NOT NULL,
  `entradas_bin_card` double NOT NULL,
  `entradas_salesforce` double NOT NULL,
  `mes` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `franquia_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emidi Nhacudima', 'enhacudima@psi.org.mz', '$2y$10$zmyiPx5o0vauHrC4tWlP4OEvYP2REZcaZw6E.T3WHYwfPGBFzYmRS', NULL, '2018-01-14 07:57:30', '2018-01-14 07:57:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contagem`
--
ALTER TABLE `contagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franquias`
--
ALTER TABLE `franquias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `franquias_nome_unique` (`nome`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produtos_codigo_unique` (`codigo`);

--
-- Indexes for table `saidas`
--
ALTER TABLE `saidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contagem`
--
ALTER TABLE `contagem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franquias`
--
ALTER TABLE `franquias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saidas`
--
ALTER TABLE `saidas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
