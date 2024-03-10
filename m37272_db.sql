-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql.ct8.pl
-- Tempo de geração: 10/03/2024 às 14:41
-- Versão do servidor: 8.0.35
-- Versão do PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `m37272_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `feed`
--

CREATE TABLE `feed` (
  `id` int NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL,
  `isGroup` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `feed`
--

INSERT INTO `feed` (`id`, `message`, `time`, `isGroup`) VALUES
(1, 'air', '0000-00-00 00:00:00', 0),
(0, 'hi ballers', '2023-09-07 15:56:14', 0),
(0, '', '0000-00-00 00:00:00', 0),
(132, '<a class=\"btn-small btn-primary\">Primary</a>\r\n<a class=\"btn-small btn-disabled-primary\" disabled=\"\">Disabled</a>\r\n<a class=\"btn-small btn-neutral\">Neutral</a>\r\n<a class=\"btn-small btn-disabled-neutral\" disabled=\"\">Disabled</a>\r\n<a class=\"btn-small btn-negative\">Negative</a>\r\n<a class=\"btn-small btn-disabled-negative\" disabled=\"\">Disabled</a>', '0000-00-00 00:00:00', 0),
(0, '', '0000-00-00 00:00:00', 0),
(4, 'I AM ROBLOX', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `forums`
--

CREATE TABLE `forums` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `topic` text NOT NULL,
  `lastpost_id` int NOT NULL,
  `lastpost_hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `forums`
--

INSERT INTO `forums` (`id`, `name`, `topic`, `lastpost_id`, `lastpost_hour`) VALUES
(1, 'All Things ROBLOX', 'The area for discussions purely about ROBLOX – the features, the games, and company news.', 0, '00:00:00'),
(2, 'test', 'hi', 0, '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `forum_posts`
--

CREATE TABLE `forum_posts` (
  `forumid` int NOT NULL,
  `userid` int NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `forum_posts`
--

INSERT INTO `forum_posts` (`forumid`, `userid`, `title`, `message`) VALUES
(1, 1, 'The Rules For All Forums', 'First off, the Terms and Condition and Community Guidelines of ROBLOX apply to all the forums, all the pages of the website, and inside every game. You can check them out here:  \r\n\r\nhttps://roblox.zendesk.com/entries/221897-community-rules-and-guidelines\r\n\r\nhttp://www.roblox.com/info/terms-of-service\r\n\r\nThe rules below apply to ALL the ROBLOX forums. In addition, each forum may have its own specific rules posted in that forum. Any post that breaks any rules may be removed and the poster may receive consequences.\r\n\r\n■▬▬ ROBLOX Staff ▬▬■\r\n\r\nListen to ROBLOX Staff and heed what they say. Warnings to stop a certain behavior, whether it’s in a forum post, PM, in-game or a suspension message, are serious. \r\n\r\nROBLOX Staff are exempt from the rules we have for users. Staff can post offsite links and personal information because their posts are reviewed by the management for appropriateness.\r\n\r\n■▬▬ What Not to Post ▬▬■\r\n\r\n• Don’t Post These Topics:\r\nRacism, hate speech, bias against a gender, looking for dating partners, alcohol, gang violence, disasters, massacres, shocking real-world news, drugs, mature content.\r\n\r\n• Don’t Post Swearing\r\nCussing each other out has no place in our community. Attempts to disguise bad language or bypass the language filters will not be tolerated. It’s a swear word even if it is $pe11ed f.u.n.n.y. or has some #$@% symbols in it. If we can tell what swear word it was supposed to be, it’s still a swear word and not allowed.\r\n\r\n• Don’t Post Flame Bait and Flames\r\nYou’re welcome to disagree with another member’s opinion but attacking (flaming) and insulting another member for their beliefs is not acceptable. You may make a religious or political group. You should not talk about your political views or religious ideals on the forum. \r\n\r\n• Don’t Post Personal Attacks\r\nA personal attack is when you post about a Roblox player on the forum and talk about them in a negative way. This includes announcing that someone scammed you, or that somebody is a hacker, or cussing them out. Do not name names or call out other users for bad behavior – use the report abuse system instead. Linking to their profile is the same as naming their name. \r\n\r\n• Don’t Post Offsite Links\r\nAn offsite link is any URL that goes to a site outside of ROBLOX.com, including ROBLOX fan sites. If you want to tell someone your profile on another social website just say, “My name on ________ site is ___________.” then they can go look you up.\r\n\r\nFor the safety of our users, we allow only certain websites to be linked to from ROBLOX.\r\n\r\nException: Site links that allowed to be posted on ROBLOX\r\n\r\n*.roblox.com/ (anything that ends in .roblox.com is allowed)\r\nYoutube.com/\r\nYoutu.be/ (YouTube\'s URL shortener)\r\nTwitter.com/\r\n\r\nt.co/ (Twitter\'s URL shortener) is NOT allowed, as it can be used to mask non-Twitter URLs.\r\n\r\n• Don’t Post Your Suspensions\r\nTalking about your suspensions on the forums is not allowed because it’s just a cry for attention. We do want to hear feedback about the moderation system – post it in the Suggestions and Ideas forum. Send your specific ban complaints to appeals@roblox.com.\r\n\r\n• Don’t Post Unofficial Trades\r\nThe official way to trade is to use the RoblEX for currency trades and the Trade System for item trades. Trading accounts, selling BC, groups or Robux to each other are not allowed.\r\n\r\nNo other methods of trading are permitted.\r\n\r\n• Don’t Post Raffles or Contests\r\nWe don\'t allow user-run raffles or contests because it\'s very common that the prizes are never delivered. It\'s often a scam to get people to come to a place so the builder can earn tickets. Don\'t do it.\r\n\r\n• Don’t Post Spam\r\nSpam means saying the same thing over and over or saying something incomprehensible. If you are going to take the time to post on the forum, make sure that you actually have something relevant to say.\r\n\r\n• Don’t Post in the Wrong Forum\r\nEach forum has a topic explained in its description. If you are not certain which forum you should post on, PM a mod and ask. Posts in the wrong forum may be moved or deleted without warning. Repeat posts may be flagged as spam.\r\n\r\n• Don’t Re-post Your Deleted Thread\r\nA staff member deleted your thread for a reason. Re-posting it will probably get it deleted again and increase the chance you will receive consequences. What you should do instead is PM a mod or email info@roblox.com and ask why your thread was deleted so you can better understand the rules.\r\n\r\n• Don’t Post in Bad Threads\r\nWhen you see a bad thread just report it. Posting in the thread just bumps it and associates your name with the bad content and could get you moderated. Even if your post title and body are OK, you can still get in trouble for posting in a bad thread. Just don’t do it.\r\n\r\n• Don’t Post >1 Line Sigs\r\nYour signature line (sig) is to be 1 line tall at the most. The reason we want it so short is because so many posts are only 1 line, and it’s weird to have a 1 line post and a giant sig. \r\n\r\n• Don’t Post Raids on Other Sites or Forums\r\nRaiding other sites or ROBLOX forums is not allowed. It’s just plain uncivilized.\r\n\r\n• Don’t Be Rude\r\nRudeness is not welcome. Examples of what not to post, “Get out”, “dumb idea”, “no support”, “no, just no”. Those are all rude and not at all helpful.\r\n\r\n■▬▬ Not everything is in the rules ▬▬■\r\n\r\nYou are expected to abide by the spirit of these rules we’ve given you and try to be a good ROBLOX citizen. We cannot list absolutely every little rule and we do not appreciate Rules Lawyers who try to find loopholes to get away with bad behavior.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `forum_threads`
--

CREATE TABLE `forum_threads` (
  `forumid` int NOT NULL,
  `userid` int NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `creator_id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `thumbnail` text NOT NULL,
  `icon` text NOT NULL,
  `ip` text NOT NULL,
  `port` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `games`
--

INSERT INTO `games` (`id`, `creator_id`, `title`, `description`, `thumbnail`, `icon`, `ip`, `port`) VALUES
(0, 1, 'Plane Gaem.', 'nostalgia', '', '', '', 0),
(2, 4, 'hosting place lololol', 'yeah i h ost places and stuff', '', '', '', 0),
(4, 0, 'ROBLOCKSKS', 'NUH UH NUH UH NUH UH NUH UHNUH UH NUH UH NUH UH NUH UHNUH UH NUH UH NUH UH NUH UHNUH UH NUH UH NUH UH NUH UH', '', '', '', 0),
(6, 679, 'Baseplate', 'baseplate', '', '', '', 0),
(7, 680, 'Baseplate', 'baseplate', '', '', '', 0),
(8, 680, 'Baseplate', 'baseplate', '', '', '', 0),
(9, 680, 'Baseplate', 'baseplate', '', '', '', 0),
(8, 687, 'Baseplate', 'baseplate', '', '', '', 0),
(9, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(10, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(11, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(12, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(13, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(14, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(15, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(16, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(17, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(18, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(19, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(20, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(21, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(22, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(23, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(24, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(25, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(26, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(27, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(28, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(29, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(30, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(31, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(32, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(33, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(34, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(35, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(36, 7, 'Baseplate', 'baseplate', '', '', '', 0),
(37, 3, 'Baseplate', 'baseplate', '', '', '', 0),
(38, 12, 'Baseplate', 'baseplate', '', '', '', 0),
(39, 694, 'Baseplate', 'baseplate', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `invites`
--

CREATE TABLE `invites` (
  `id` int NOT NULL,
  `createdBy` int NOT NULL,
  `inviteKey` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `createdAt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `invites`
--

INSERT INTO `invites` (`id`, `createdBy`, `inviteKey`, `createdAt`) VALUES
(97, 0, '3da168cc271c9707c31adb8802c38427', 1693768636),
(98, 0, 'ab1ac9160246b68bfe1446cc84910a73', 1693768637),
(99, 0, '860f0206641a07bda9c9f4bd1ef47fc5', 1693768639),
(100, 0, 'f5021d1af12e12c147af150d9d79bbc0', 1693768640),
(103, 0, 'e3282c1d036f6ba0c3ace2cb87f776af', 1693832885),
(104, 0, '70309df24a2e1e11860f9d2cc37b99d2', 1693832886),
(105, 695, '01209a845cf6e37c3e4fc821ce4a9f4c', 1693835380),
(108, 0, '0ff0d4e215d214ecb306f1a4136f45cf', 1693835770);

-- --------------------------------------------------------

--
-- Estrutura para tabela `moderation_actions`
--

CREATE TABLE `moderation_actions` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `action` int NOT NULL,
  `reason` text NOT NULL,
  `moderatedBy` int NOT NULL,
  `expiresAt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `moderation_actions`
--

INSERT INTO `moderation_actions` (`id`, `user_id`, `action`, `reason`, `moderatedBy`, `expiresAt`) VALUES
(9, 35, 1, 'cum', 4, 0),
(10, 35, 6, 'offensive username', 3, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `recentlyplayed`
--

CREATE TABLE `recentlyplayed` (
  `id` int NOT NULL,
  `gameid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tokens`
--

CREATE TABLE `tokens` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `token` text NOT NULL,
  `expires` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tokens`
--

INSERT INTO `tokens` (`id`, `user_id`, `token`, `expires`) VALUES
(133, 1, '7d223104d733262c9c3b90a6a88d35750d1f48c5030c8ea412823a2b68a6e9f6', 1694217544),
(134, 1, '885c5efc183c6ce54680767a15450b3c13bcca20eac673d3034025f08faf90bf', 1694256994),
(135, 677, '118aa7c27a74623b50e0dcf8f73f688f4cd13be3792e8e3bb154577be30c90c5', 1694257065),
(141, 4, 'e8bb648937b8a559cf0aef72d3aceee402ba317c13a22ad400cbb96b4fdc5f37', 1694260272),
(143, 0, '7243d0bd7ba8a86dc73812cb4e6c460ee8783c9c7b077a457b9f7942d9ed3a62', 1694260799),
(144, 679, '3b33b7bffc5c96dbfabaa5b44e195016b1bc609b9b41fc2a74e2fe7816361a54', 1694264305),
(146, 681, 'e640a54ea0011f6bab95b696925e7ab9d56cb35d472b67879d57b364b614f423', 1694273439),
(148, 683, '9dcb8382d3c1526538c3f671f0d239b462a42d0d6dfe40694b1a99c7c3f9348a', 1694273816),
(149, 684, 'fe515e303bf9c340475f1613c2c411f1a31919b073da4f0484bb3f9febd7d2ac', 1694273961),
(150, 685, '91edce24f318163f448e5675e4b29710feb02865ebc0e7d43390261edb68d5ef', 1694274034),
(151, 686, 'cda21c9a0ccdf261198b9514c82f4d14c12e9f182a7481ae5fe3c6f2503a016a', 1694274607),
(152, 686, 'bbf9e79b86f763a1b4f852e217627329e159734b76662115259ed5f4477e3b52', 1694275489),
(153, 687, 'df09c581df25665ad5172ed106e3a2c2254ee841a3eff7cb0662f869718a3114', 1694276157),
(154, 688, 'e5a93ea1f673677cd8b6be15025e2cbef469b9001813c15b394323f6bf1e8135', 1694276460),
(155, 689, 'a8ee1ec1db907fb51ecf8da95f8ff812e297fe5aae16ca2341db6e7b14d9ea92', 1694276961),
(156, 690, '495d5070cb12b72f187d1e60267be311ee4e92857fe62b4f8d19d2a254d9b01c', 1694280265),
(157, 686, 'eed4d97945906e1a9abce2232666c0f9724218ad18fa4cabb755e43963ca3bbe', 1694290375),
(158, 2, '5a016027c22d996a0120c272cbb0dac8b443fcc2eae46c8fdbfb153e0b9953c5', 1694294717),
(159, 3, '78190e069e3912f6b1fdc34a19e68a6dfbc07ad62d7d99c1fbaf17752d836d89', 1694332285),
(160, 0, '609c7cb268509d1065e7b9aca0cc6bb6edebcb6d0cbdaf35c766eaba2043f1d8', 1694337815),
(161, 691, '2d612235462e399a730c6b2cd4b1078f56ec5bf08bd32c0590b130b6fe7a251e', 1694339019),
(162, 3, '1f14ff994ead135d362b8ee49e024518a82c2372a683197d31811b09e3469b05', 1694367845),
(163, 692, '09f040ab9fc4775fabfc60233df463d41712a97797670de322e8dccac121c32a', 1694373210),
(164, 693, 'a6cba7dd6eebaf3399167f7084a69453713c3b5da6d60b7b02dfccd592bd834b', 1694435515),
(165, 694, '8193a5578aa88b3601233978827f76110e589793744883b1f5a4f7af3eaf36d8', 1694437720),
(166, 695, '1a474ae4619f6cc644af2c04f7ef1c9f7d254aa4384b283064ce9bbb9f77d546', 1694440076),
(167, 696, 'ebdcdc7a2a18bf052ea3aa698c69306fe6fc8967b73a3b7705183a3f5ad23d3a', 1694440640),
(169, 698, '2ec332f19ca60808a72fdad2eb6a13a638ceea44969c00caac7efaa4a8103183', 1694461992),
(170, 695, '8cc92130ca169ceed4248452d452ad0db9b7dbd35c7fcb57b627925e06ca8895', 1694463800),
(171, 694, '2b577f090f8608b02f99793b4579a492372c400f55595776407f2e934f3b23d6', 1694464471),
(172, 699, '02090349c66eb8bb37ed51beb720259e29cd307e1685cbb3594b3e7830233471', 1694492981),
(173, 7, 'd4f57959e587e38e2a4751844cdec7ec264441a30b32559ac3c567338b94c217', 1694535943),
(174, 696, '7c00cc8f6838d7be2290eff5181106a324238bad5b67e476393d1ffd0fb4e509', 1694691544),
(175, 12, '3301c1200a8fa2f295b5abd4f2c38026dc9ff7a60adf16bc8608c453068e36ee', 1694698501),
(176, 0, '1fd0b3eb3b440407ce88606a8bfdb21bcf3dce6212e02dc7cc7360f055c90110', 1694698632),
(177, 2, 'e1af7060a41ea487a96d39070da7726d0893f7c27c4d475511b8a81aed999ed1', 1694698729),
(178, 1, '63f9b1a9e8e1349b2cefcdfbd8f83cda6d4f2d0ea59846ea31226989eb0ec182', 1694698734),
(179, 12, '8e64f5d5488a51c8e6d5f58dcf17f04133c6d19c430c302c765091298d91e5b6', 1694699825),
(180, 12, '94bc47049cd65fb3c37450a9fa92b1e834406beab95a4ec6de092cde4666a802', 1694699928),
(181, 0, 'e6c647f87a72cdc19c00784ae8b9967080508c1d0ee48dbf37fce270f380fdd5', 1694700720),
(182, 12, '537d078e53d7cb3cdb5e5756615877d8042b952f535a1d0d43334bccf9ac7165', 1694700906),
(183, 0, '6204c4adf485bbec7b2c677008ea411060b3adec5240e30220f624d57ecbf506', 1694702168),
(184, 12, '98762f3ef81e8c5325608ea6afee2ea9f4e7a469ece07d0cd0db6cddd22f2da2', 1694702934),
(185, 11, '77b440c825ad703b1d4afde2f303b7bbd70ef99977088304bb7ba1d1a26f5568', 1694704345),
(186, 12, '673b077dcbd1b3f55b404c7d477831c018436518416dee261ae84314a74ca496', 1694711559),
(187, 700, '74bf993b9037dd255b379764504a68f2fdb2c871a68bfa3e881d77d8be16339f', 1694711699),
(188, 3, '9a8c5fe8ae052e54927f468b716be92bc730aea55da9eddb5f3e10f1cd2c1f4e', 1694716893),
(189, 12, 'a548561643dfde5198370c6387ba595f72769b4e510e99b42eefa02e842dcd77', 1694720665),
(190, 0, '9aa965ed36b086b22a94159cc6347aa0fc3555f9e8c2844ae880693ceedbb019', 1694720795),
(191, 12, '9be2cb55ee9b00b42ecdac202cafbd29c3b66d2945c41dc03cfc2a37b757756e', 1694721292),
(192, 0, '46c9267ba3f13e3d9878f63a0de45dc6c108f2e26d921ef9f23c62b3ab14c791', 1694845234),
(193, 12, 'af2615948bc6a0fa85750c5038167c0b3088a998c35da9aab15484407670080f', 1694865430),
(194, 0, '5615fda42ca1dedb3ca89df81b90d05e05f98a81fc3fa7cad3dd1633bf604f06', 1694868524),
(195, 3, '3d9f161e8c659dab982a8fa99a163efad6acbdfe4c75e779beba4002e94d95a3', 1694950650),
(196, 4, 'bf38aa06ce4549395237101d3faf58039eb79cfe6063aaa4fa45f72bb56d5925', 1695384174),
(197, 0, '9ff87b389b342aeeb712ccb1af2fc5daea5008f5215aae390106e789adcca73e', 1695656291),
(198, 1, '4a9c34154f3d6e38414c0dae9705fc95637b95b6c0b053b6a4e9a5650944c25f', 1696690510),
(199, 0, '3d849d6481a657579d2a6b9d6f136849fab4895ba20bd899a37442aa33e683b4', 1696968609),
(200, 694, '44a87eda8805adc93144c8b7a7cac50146df0b66d014c10981678578fc36719b', 1697226329),
(201, 694, '8f21b52b1ba293ec3e7e339d3321e52fd170be103d3c80c68dc669fcb5a37a78', 1697274742),
(202, 694, '633800eaedb944ccf5fbe1ccfa0a90b0a3f272e3ed92bf993f357b9e0d83a82b', 1702986211),
(203, 694, '1fd47ed788905147222289a7dfad34a28c2cbfaf098aa2d47dadec286c8c1164', 1703618097),
(204, 694, '4f37ee62bb59619db5babaaf2ec9c93e01904ce8fd7f45411032aca5ef40ed47', 1706382929),
(205, 0, 'ec6a0c4682905e081cec45bf89db7821297032ce0a6f7eeeb22f16919254aadb', 1707577763),
(206, 1, '091df203a275cc959b893feb6eeaf214419fdc95479313c760669e437d005076', 1707577798),
(207, 2, '0722b628a70577d86efb9b965b14fc8298804bef80e567617238bdd30a8e28d5', 1710679851);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `admin` int NOT NULL DEFAULT '0',
  `about` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `ongoing_action_id` int DEFAULT NULL,
  `currency` int DEFAULT '0',
  `lastInviteKeyCreated` int DEFAULT NULL,
  `lastOnlineWebsite` int NOT NULL,
  `lastOnlineGame` int NOT NULL,
  `tix` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`, `about`, `ongoing_action_id`, `currency`, `lastInviteKeyCreated`, `lastOnlineWebsite`, `lastOnlineGame`, `tix`) VALUES
(0, 'usb', '$2y$10$ZlHY1Ww3YFAAMteRstGpf.Sw04wh9lamjTyAsx.6KnH1/Q.Ua.Iym', 'typicalmask@gmail.com', 2, 'An old owner of NoneRev. im still existent dw', NULL, 2147483647, 1693835772, 0, 0, 0),
(1, 'koutch', '$2y$10$Ojb5P5ARS0nDvMu5Yn0Pu.igglGHiePClNVPXHtFNVxumVSdJV7Ui', NULL, 2, 'only ogs of this site remembered many baseplates..', NULL, 999999, 1693652346, 0, 0, 0),
(2, 'TheGuyWhoIsIdiot', '$2y$10$dlmm/qadg2F1wJL.QbdhBeVRoAsDABj88Z16L5DNpSBCil90upR82', NULL, 2, NULL, NULL, 839292, NULL, 0, 0, 0),
(3, 'mack', '$2y$10$LItNPKz.affd49E2iRhQGOQ4ev3Z6z6bxCVt39Od1MqAvBEKfSKUu', 'mack@fbi.ac', 2, 'asd', NULL, 2147483647, NULL, 0, 0, 2147483647),
(4, 'ROBLOX', '$2y$10$Li/SC12Y4V08zqFKkaxJvuuPgAiVRltXH0YQI2lTCV.R.uSCoDlLe', 'siemakolano60@gmail.com', 2, NULL, NULL, 32945031, NULL, 0, 0, 0),
(5, 'Cozmo', '$2y$10$bQJ4.VlLrIdISWg7dpZ2wu1k36YYMCAAPSNnr6hHTKV/KoyEPikaW', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(6, 'Lee', '$2y$10$8KVIU9JA8Ti0dnX4.agoZ.e.GFQ7EYkcuqoufBbeqF.5FbKa06CnK', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(7, 'zip', '$2y$10$Bk1nZI/zz7F35dsrU/W7U.d.JKcrvHBgY3eRZkgE.OAlmsmEtKyuS', NULL, 0, 'FUCK MILK MAN', NULL, 0, NULL, 0, 0, 0),
(8, 'leith2017', '$2y$10$tH/NyJfCQbaSU0GxqGKFDe88vQjy/rl9E04NpOGe11tzdRoz7CN8e', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(9, 'PlayerValley', '$2y$10$iZCvzX6Zt49nWwXIUkQpYO.jush8tJdp.ZhmaBGyjD7xdc5.uGhHe', 'player1@shenrou.su', 0, NULL, NULL, 0, NULL, 0, 0, 0),
(10, 'robert', '$2y$10$e6DwiijIqdmJl3eJMJTnD.5HzuhPqxQm6rN2CNdywMlHLBOFXB9wG', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(11, 'Andryv', '$2y$10$GIb5nwpsYaNEpf7587eBjuvZPIMIzNZzGO2b3OclRxZqrXv00lXT.', 'szymonmorsa@gmail.com', 1, NULL, NULL, 0, NULL, 0, 0, 0),
(12, 'DoggoITA', '$2y$10$Hry6Dvrd.ggmrVR/87B9be38hgsItxJc8G4hfzvYr0skLqm5whEBi', NULL, 0, NULL, NULL, 50, NULL, 0, 0, 0),
(13, 'Xeradius', '$2y$10$QCaqLi19yhsRNOU1Byngde1.JM7ztbmOXUJ8zH47Zi3pPwskTG0X2', NULL, 1, NULL, NULL, 0, 1693672103, 0, 0, 0),
(14, 'weed', '$2y$10$Ont4y1SKSoh50baLbFLpmesn9t/tq.vnvlbdkR.76GINZsRSdIP5.', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(15, 'UTels', '$2y$10$9KqhiUvAdtNv26ZbjCI1CuT5GVojW0FtKSm3C2EcfxfgFfnXgscai', NULL, 0, 'UTels', NULL, 0, NULL, 0, 0, 0),
(691, 'fqrums', '$2y$10$CqBzTnCPKvZ39Lm99koKq.U.b4k/OuLcKiU/vPJaeaj.oQ59v8vvW', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(692, 'soupnuts6061', '$2y$10$p./Rk83hJ84lMhqgAl6G9.p6Eb32fmuIVDn9SmX2I00PNQCAu8.fa', 'soupnuts6061@gmail.com', 0, NULL, NULL, 0, NULL, 0, 0, 0),
(693, 'TheOnlyOne', '$2y$10$HlZsyrTD7l3HGq5hMrD.EuyETQC62ztLkhWkVNypiUI09759WUP62', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(694, 'Mark', '$2y$10$LrhWYfa9h.qXU.bbA5uR.esRT9E2yzgvbtLihL0wAJ3VGmH4Qouqm', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(695, 'hamzza', '$2y$10$E4MqPbLy6CeKgIuA/LLVluOXLCHbtxMH/siWCzo90v.SV5haKpTkG', NULL, 0, NULL, NULL, 0, 1693835380, 0, 0, 0),
(696, 'CoolWare', '$2y$10$v0UT54vPGAAAqEctLU9cV.Bf0qH15oKn47WfC6tIjXCYI4YZ/3Te2', 'maxmaxmashingz@gmail.com', 0, NULL, NULL, 0, NULL, 0, 0, 0),
(697, 'sisyphus06', '$2y$10$CdWmO2myxeghkWL1R1ArpOy6zp0cIpmssMiek0MXiVi.59xltthue', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(698, 'TheSillyGuitarMan', '$2y$10$oWQZoVCOAG7NvzuRd/mRVOwYnCX8fQJevNUp6Jt5ZrJTzFYqZrA4.', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(699, 'mrwii82828', '$2y$10$eTVcBhY3BGAA7yOYhYtRheTKETcDadYzuNlKuNsJKBxp7Hxpflv16', NULL, 0, NULL, NULL, 0, NULL, 0, 0, 0),
(700, 'noobe', '$2y$10$UyMoPjrcGj6kbjKJUKcnK.hvIDRVFzNLqbZ.CVlSSDy4OMufOYBy.', NULL, 2, 'im a retard woohoo', NULL, 0, NULL, 0, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `moderation_actions`
--
ALTER TABLE `moderation_actions`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `invites`
--
ALTER TABLE `invites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de tabela `moderation_actions`
--
ALTER TABLE `moderation_actions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=701;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
