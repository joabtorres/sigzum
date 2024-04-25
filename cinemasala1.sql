-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/04/2024 às 03:43
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinemasala1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'informativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `companies`
--

INSERT INTO `companies` (`id`, `full_name`, `cnpj`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Zum Telecom - Provedor de Internet', '10.548.603/0001-86', 'Tv. Victor Campos, 221, Centro, Itaituba, PA, 68180-070', '(93) 3518-6443', '', '2024-03-13 18:03:30', '2024-03-14 20:45:10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT '0',
  `time` varchar(255) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `indication` varchar(255) NOT NULL DEFAULT '0',
  `trailer` varchar(255) NOT NULL DEFAULT '0',
  `categories` varchar(255) NOT NULL DEFAULT '0',
  `mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `films`
--

INSERT INTO `films` (`id`, `slug`, `name`, `image`, `time`, `description`, `indication`, `trailer`, `categories`, `mode`) VALUES
(1, 'planeta-dos-macacos-o-reinado', 'Planeta dos Macacos: O Reinado', 'images/2024/2024-04-04/planeta-dos-macacos-o-reinado.jpg', '02:18h (138 minutos)', 'Planeta dos Macacos: O Reinado realiza um salto no tempo após a conclusão da Guerra pelo Planeta dos Macacos. Muitas sociedades de macacos cresceram desde quando César levou seu povo a um oásis, enquanto os humanos foram reduzidos a sobreviver e se esconder nas sombras. Apesar de ser responsável pela segurança da nova geração de primatas evoluídos, muitos não conhecem os feitos de César. E é neste novo cenário que um líder macaco começa a escravizar outros grupos para encontrar tecnologia humana, enquanto um jovem macaco, que viu seu clã ser capturado, embarca em uma viagem para encontrar a liberdade, sendo uma jovem humana a chave para todos.', 'Não recomendado para menos de 14 anos', 'NmTPDA15lPA', 'Ação, Aventura, Ficção Científica', '2D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `news`
--

INSERT INTO `news` (`id`, `user_id`, `category_id`, `slug`, `title`, `subtitle`, `image`, `description`, `date`) VALUES
(1, 2, 1, 'como-adqui-i-a-ca-tei-a-de-estudante-guia-passo-a-passo', 'Como adquirir a carteira de estudante: guia passo a passo', 'A carteira de estudante é um documento essencial para estudantes de todos os níveis de ensino, pois oferece diversos benefícios, como meia-entrada em cinemas, teatros, eventos esportivos e culturais, além de descontos em diversos estabelecimentos comerciais. Se você ainda não possui a sua carteira de estudante, não se preocupe! Neste guia, vamos explicar passo a passo como adquirir a sua.', 'images/2024/2024-04-01/meia-entrada.jpg', '<p>A carteira de estudante é um documento essencial para estudantes de todos os níveis de ensino, pois oferece diversos benefícios, como meia-entrada em cinemas, teatros, eventos esportivos e culturais, além de descontos em diversos estabelecimentos comerciais. Se você ainda não possui a sua carteira de estudante, não se preocupe! Neste guia, vamos explicar passo a passo como adquirir a sua.</p>\r\n            <h4 class=\"text-orange\">1. Documentação necessária</h4>\r\n            <p>Para solicitar a carteira de estudante, você precisará apresentar os seguintes documentos:</p>\r\n            <ul>\r\n                <li>Documento de identificação (RG ou CNH);</li>\r\n                <li>Comprovante de matrícula atualizado;</li>\r\n                <li>Uma foto 3x4 recente.</li>\r\n            </ul>\r\n            <h4 class=\"text-orange\">2. Escolha da entidade emissora</h4>\r\n            <p>Existem diversas entidades autorizadas a emitir a carteira de estudante, como a UNE (União Nacional dos Estudantes), a Ubes (União Brasileira dos Estudantes Secundaristas) e as entidades estudantis estaduais e municipais. Você pode escolher a entidade que melhor atenda às suas necessidades e que seja reconhecida em seu estado ou município.</p>\r\n            <h4 class=\"text-orange\">3. Preenchimento do formulário</h4>\r\n            <p>Após escolher a entidade emissora, será necessário preencher um formulário com seus dados pessoais e acadêmicos. Esse formulário geralmente está disponível no site da entidade ou na sede física, e deve ser preenchido com atenção para evitar erros.</p>\r\n            <h4 class=\"text-orange\">4. Pagamento da taxa</h4>\r\n            <p>Para emitir a carteira de estudante, você deverá pagar uma taxa, que varia de acordo com a entidade emissora e o estado em que você se encontra. Essa taxa é destinada à confecção da carteira e à manutenção das atividades da entidade estudantil.</p>\r\n            <h4 class=\"text-orange\">5. Recebimento da carteira</h4>\r\n            <p>Após o pagamento da taxa e a entrega da documentação necessária, você receberá a sua carteira de estudante em um prazo determinado pela entidade emissora. É importante ressaltar que a carteira de estudante tem validade de um ano, sendo necessário renová-la anualmente.</p>\r\n            <h4 class=\"text-orange\">6. Utilização da carteira</h4>\r\n            <p>Com a sua carteira de estudante em mãos, você poderá usufruir de todos os benefícios oferecidos, como meia-entrada em eventos culturais e descontos em estabelecimentos comerciais. Lembre-se de sempre carregar a sua carteira de estudante junto com um documento de identificação, pois ela é pessoal e intransferível.</p>\r\n            <p>Em resumo, adquirir a carteira de estudante é um processo simples e rápido, que pode trazer diversos benefícios para a sua vida acadêmica. Não deixe de solicitar a sua e aproveitar todas as vantagens que ela oferece!</p>\r\n            <p>Esperamos que este guia tenha sido útil e que você consiga adquirir a sua carteira de estudante sem problemas. Boa sorte!</p>', '2024-04-24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `abbreviation` varchar(40) DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `abbreviation`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Suporte Técnico', '', 1, '2024-03-13 18:06:10', '2024-03-15 12:37:54'),
(2, 'Comércio', '', 1, '2024-03-13 18:07:00', '2024-03-15 14:21:04'),
(4, 'Marketing', '', 1, '2024-03-15 12:38:21', NULL),
(5, 'Diretoria Executiva', '', 1, '2024-03-15 12:39:43', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `sector_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT 1,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `sector_id`, `first_name`, `last_name`, `email`, `password`, `avatar`, `level`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Joab', 'T. Alencar', 'joabtorres1508@gmail.com', '$2y$10$wCAWmc1dBWeDKdzSjl.2weGoRU6mfI728/YqSE/3pGSWpjGeH9KAy', NULL, 1, 1, '2024-03-13 18:03:58', '2024-03-13 19:40:05'),
(2, 5, 'Cinema', 'Sala 1', 'cinemasala1itb@gmail.com', '$2y$10$wCAWmc1dBWeDKdzSjl.2weGoRU6mfI728/YqSE/3pGSWpjGeH9KAy', NULL, 1, 1, '2024-04-25 00:16:09', '2024-04-25 00:16:18');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_new_to_users` (`user_id`),
  ADD KEY `fk_news_to_categories` (`category_id`);

--
-- Índices de tabela `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sectors_companies_idx` (`company_id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_users_sectors1_idx` (`sector_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_new_to_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_news_to_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `sectors`
--
ALTER TABLE `sectors`
  ADD CONSTRAINT `fk_sectors_companies` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_sectors1` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
