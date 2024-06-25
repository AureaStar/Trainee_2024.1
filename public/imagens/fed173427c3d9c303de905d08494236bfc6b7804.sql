-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2024 às 22:01
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_do_sabio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `author` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `author`, `category`) VALUES
(1, 'Novo RPG de Mesa de Star Wars é Incrível!', 'Star Wars Roleplaying Game: Edge of The Galaxy. Este será o novo título de RPG de mesa oficial da franquia Star Wars, após acordo com Disney e LucasFilm com a Edge Studios.\r\nNão há previsão de data de lançamento do livro, assim como não foi divulgada nenhuma informação sobre tradução para português.\r\nA editora Edge Studios, que pertence ao conglomerado Asmodee, também é responsável atualmente pelo desenvolvimento de A Lenda dos Cinco Anéis com regras de D&D 5E.', '../../public/assets/StarWars.jpg', '2023-06-15', 1, 'Novidades e lançamentos'),
(3, 'A Origem do Ludo', ' Ludo é um jogo de tabuleiro popular que tem suas raízes na Índia antiga. A versão moderna do Ludo foi inspirada no jogo indiano tradicional chamado Pachisi. Vamos explorar a origem e a evolução do Ludo:\r\n\r\nOrigem e História\r\n\r\nAntiguidade: O Pachisi é um jogo de tabuleiro originário da Índia, datado do século VI.\r\nJogo Real: Era frequentemente jogado por reis e nobres, e as versões do jogo eram frequentemente encontradas em grandes tabuleiros de tecido ou diretamente no chão.\r\nRegras: No Pachisi, os jogadores movem suas peças ao redor de um tabuleiro em formato de cruz, baseado nos resultados de seis ou sete conchas de cauri lançadas como dados.\r\n\r\nSéculo XIX: O Pachisi foi introduzido no Ocidente pelos britânicos durante o período colonial. Eles ficaram fascinados pelo jogo e adaptaram suas regras para torná-lo mais adequado ao gosto ocidental.\r\n\r\nPatentização: Em 1896, Alfred Collier patenteou uma versão modificada do Pachisi na Inglaterra, conhecida como Ludo.', '../../public/assets/Ludo.png', '2024-06-11', 1, 'História de Jogos'),
(4, 'A Origem do Xadrez', 'A origem do xadrez é fascinante e complexa, refletindo um rico legado cultural e histórico que atravessa várias civilizações. Aqui está uma visão detalhada da origem e evolução do xadrez:\r\n\r\nOrigem e História do Xadrez\r\nChaturanga na Índia Antiga:\r\n\r\nInício: O xadrez moderno é amplamente considerado como tendo suas raízes no jogo indiano chamado Chaturanga, que surgiu por volta do século VI.\r\nTabuleiro e Peças: Chaturanga era jogado em um tabuleiro de 8x8, similar ao xadrez moderno. O jogo envolvia quatro divisões do exército: infantaria (peões), cavalaria (cavalos), elefantes (bispos) e carros de guerra (torres).\r\nObjetivo: O objetivo era capturar todas as peças do adversário, refletindo a estratégia militar da época.\r\nTransmissão para a Pérsia:\r\n\r\nShatranj: O Chaturanga foi introduzido na Pérsia, onde evoluiu para Shatranj. Este jogo manteve a essência do Chaturanga, mas as regras e o nome das peças foram adaptados. Por exemplo, o \"raja\" (rei) e o \"mantri\" (ministro) se tornaram \"shah\" (rei) e \"vizir\" (conselheiro).\r\nTerminologia: A palavra \"xeque-mate\" deriva do persa \"shah mat\", que significa \"o rei está morto\".\r\nDisseminação pelo Mundo Islâmico:\r\n\r\nExpansão: Com a expansão do Império Islâmico, Shatranj se espalhou pelo Oriente Médio, Norte da África e Espanha.\r\nAdaptações: Os jogadores muçulmanos adicionaram novas regras e terminologias ao jogo.\r\nIntrodução na Europa:\r\n\r\nIdade Média: Shatranj chegou à Europa através das invasões árabes na Península Ibérica e do contato entre cristãos e muçulmanos durante as Cruzadas.\r\nTransformação: No final da Idade Média, o jogo começou a evoluir para a forma que conhecemos hoje. As peças foram renomeadas e suas movimentações ajustadas.\r\n', '../../public/assets/xadrez.jpg', '2024-06-07', 2, 'História de Jogos'),
(5, 'Lançamento Inédito! Duna: Imperium - Imortalidade', 'Os Bene Tleilax avançam em sua própria agenda negociando inovações genéticas. Você vai contratar espiões Face Dancer de habilidade incomparável? Regenerar tecidos e órgãos danificados? Ou ousar empregar pessoas restauradas à vida como gholas?\r\n\r\nFaça acordos sombrios com os Tleilaxu para colher espécimes genéticos. Desbloqueie o potencial da pesquisa científica. Transfira cartões juntos para capacitar seus agentes.\r\n\r\nExplore um universo de possibilidades com Dune: Imperium – Immortality.', '../../public/assets/duna.jpg', '2024-06-11', 2, 'Novidades e lançamentos'),
(7, 'Review de Jogo: Zombicide', 'Gosta de Left 4 Dead? É fã de filmes de zumbi? Então, você vai adorar Zombicide. A premissa deste board game é simples e objetiva: os jogadores precisam sobreviver a cenários tomados por infectados. Para isso, é preciso coletar armas, exterminar zumbis e realizar missões. Tudo de forma cooperativa.\r\n\r\nJogável por até 6 pessoas. É indicado tanto para quem quer conhecer a série Zombicide, quanto para quem quer continuar aventuras com a galera. Há opções da 2ª edição do jogo base e da 2ª temporada da franquia. ', '../../public/assets/zombicide.jpg', '2024-06-11', 3, 'Reviews'),
(8, 'Post Antigo Não Aparece', 'Post antigo não aparece, como você pode observar.', '../../public/assets/block.png', '2022-05-26', 3, 'Antigo'),
(11, 'Data Data Data', 'Testando data automática S2', 'public/imagens/4d4ae4034a881bc2ab6e7dd6cb10cf17eeb3c88f.png', '2024-06-20', 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Webson Codinson', 'websoncodinson@gmail.com', 'websonEhTop', '../../public/assets/WebsonCodinson.png'),
(2, 'Miranha', 'miranha10@gmail.com', 'miranhaEhTop', '../../public/assets/Spiderman.png'),
(3, 'Link ', 'linkdazelda@gmail.com', 'LoveZelda<3', '../../public/assets/Link.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`author`) USING BTREE;

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
