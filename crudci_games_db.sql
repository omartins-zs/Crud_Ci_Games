-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 03:45
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
-- Banco de dados: `crudci_games_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_games`
--

CREATE TABLE `tb_games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `release_date` date NOT NULL DEFAULT '1111-11-11',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tb_games`
--

INSERT INTO `tb_games` (`id`, `name`, `category`, `description`, `price`, `developer`, `release_date`, `user_id`) VALUES
(2, 'Grand Theft Auto IV 22222', 'Open World', 'Grand Theft Auto IV is a 2008 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the eleventh title in the Grand Theft Auto series, and the first main entry since 2004\'s Grand Theft Auto: San Andreas. Set within the fictional Liberty City (based on New York City), the single-player story follows a war veteran, Niko Bellic, and his attempts to escape his past while under pressure from loan sharks and mob bosses. The open world design lets players freely roam Liberty City, consisting of three main islands.', 40.00, 'Rockstar North', '2008-12-03', 2),
(3, 'Grand Theft Auto V', 'Open World', 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency and powerful crime figures. The open world design lets players freely roam San Andreas\' open countryside and the fictional city of Los Santos, based on Los Angeles.', 69.00, '	Rockstar North', '2013-09-17', 2),
(4, 'Grand Theft Auto: San Andreas', 'Open World', 'Grand Theft Auto: San Andreas is a 2004 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh title in the Grand Theft Auto series, and the first main entry since 2002\'s Grand Theft Auto: Vice City. San Andreas is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. Players use firearms and melee weapons to combat hostile enemies.', 20.00, '	Rockstar North', '2004-10-26', 3),
(5, 'Grand Theft Auto: Vice City', 'Open World', 'Grand Theft Auto: Vice City is a 2002 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the sixth title in the Grand Theft Auto series and the first main entry since 2001\'s Grand Theft Auto III. Set within the fictional Vice City, based on Miami, the game follows Tommy Vercetti following his release from prison. After he is caught up in an ambushed drug deal, he seeks out those responsible while building a criminal empire and seizing power from other criminal organisations in the city.', 15.00, '	Rockstar North', '2002-10-29', 2),
(6, 'Grand Theft Auto III', 'Open World', 'Grand Theft Auto III is a 2001 action-adventure game developed by DMA Design and published by Rockstar Games. It is the fifth title in the Grand Theft Auto series, and the first main entry since 1999\'s Grand Theft Auto 2. Set within the fictional Liberty City, based on New York City, the game follows a criminal named Claude after he is left for dead and quickly becomes entangled in a world of gangs, crime and corruption. The game is played from a third-person perspective and its world is navigated on foot or by vehicle. The open world design lets players freely roam the three islands of Liberty City.', 10.00, 'DMA Design Limited', '2001-10-22', 2),
(7, 'Grand Theft Auto 2', 'Open World', 'Grand Theft Auto 2 is a 1999 action-adventure game developed by DMA Design and published by Rockstar Games. It is the sequel to 1997\'s Grand Theft Auto as well as the second installment of the Grand Theft Auto series. The open world design lets players freely roam Anywhere City, the setting of the game. It was released in October 1999 for Microsoft Windows and the PlayStation, followed by Dreamcast and Game Boy Color releases in 2000.', 5.00, 'DMA Design Limited', '1999-10-22', 3),
(8, 'Grand Theft Auto', 'Open World', 'Grand Theft Auto is a 1997 action-adventure game developed by DMA Design and published by BMG Interactive. It is the first instalment of the Grand Theft Auto series, and has led to five main entries and several spinoff games over 16 years, selling more than 150 million units as of September 2013. The story follows a group of criminals in three fictionalised versions of US cities as they perform bank robberies, assassinations, and other illegal activities for their respective crime syndicates. It was first released in Europe in October 1997 for MS-DOS and Microsoft Windows. It was later re-released in December 1997 in Europe and June 1998 in North America for the PlayStation.', 2.50, 'DMA Design Limited', '1997-10-21', 3),
(12, 'The Sims 3', 'Simulation', 'The Sims é uma série de jogos eletrônicos de simulação de vida real criado pelo designer de jogos Will Wright e produzida pela Maxis. O primeiro jogo da série, The Sims, foi lançado em 4 de fevereiro de 2000. Os jogos da série The Sims são, em grande parte, jogos sandbox, pois não possuem objetivos definidos', 40.00, ' Electronic Arts', '2008-12-03', 2),
(13, 'Forza Horizon 5', 'Racing', 'Explore um mundo aberto vibrante nas terras mexicanas com corridas divertidas e sem limites enquanto pilota os melhores carros do mundo. Acelere para o Parque Hot Wheels e corra nas pistas mais radicais já criadas. Requer Forza Horizon 5, expansão vendida separadamente. ', 98.99, 'Playground Games	', '2008-12-03', 2),
(14, 'God of War', 'Adventure', 'Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.', 199.90, 'Santa Monica Studio	', '1111-11-11', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `password`, `country`) VALUES
(2, 'Joao', 'email@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Brazil'),
(3, 'Lucas', 'lucas@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Brazil'),
(4, 'Usuário Teste', 'email@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Brazil');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_games`
--
ALTER TABLE `tb_games`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_games`
--
ALTER TABLE `tb_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
