-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2023 г., 07:51
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `day910`
--

-- --------------------------------------------------------

--
-- Структура таблицы `collective`
--

CREATE TABLE `collective` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `collective`
--

INSERT INTO `collective` (`id`, `first_name`, `last_name`, `experience`, `img`) VALUES
(1, ' ПОЛУПАЛЬТО ЖЕНСКОЕ / С-0226', 'норка', '500', '1.jpg'),
(2, 'КУРТКА ЖЕНСКАЯ / С-0362', 'змея', '999', '2.jpg'),
(3, 'КУРТКА ЖЕНСКАЯ / 1-М-23.77', 'гусь', '3500', '3.jpg'),
(4, 'ПОЛУПАЛЬТО ЖЕНСКОЕ / 23001-20', 'норка', '325', '4.jpg'),
(5, 'ПАЛЬТО ЖЕНСКОЕ / 23004-11', 'шиншилы', '475', '5.jpg'),
(6, 'ПОЛУПАЛЬТО ЖЕНСКОЕ / 02139-125', 'кошки', '675', '6.jpg'),
(7, 'ПАЛЬТО ЖЕНСКОЕ / 12109-90', 'тигры', '200', '7.jpg'),
(8, 'ПОЛУПАЛЬТО ЖЕНСКОЕ / 12111-109', 'крокодил', '505', '8.jpg'),
(9, 'ПОЛУПАЛЬТО ЖЕНСКОЕ / 1-ИВЕТТА', 'гусь', '780', '9.jpg'),
(10, 'КУРТКА ЖЕНСКАЯ / 1-ГУЧЧИ', 'леопард', '1560', '10.jpg'),
(11, 'шуба шуба', 'треска', '9999', '11.jpg'),
(12, 'wert*-/-+', 'треска', '8888888', '12.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int NOT NULL,
  `Content` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`id`, `Content`) VALUES
(1, '\"Ваш ассортимент просто впечатляет! Всегда здесь нахожу нужные мне препараты.\"'),
(2, '\"Спасибо за оперативную доставку. Радуете своим сервисом!\"'),
(3, '\"Удобно, что можно заказать онлайн. Сэкономила много времени.\"'),
(4, '. \"Аптека с широким выбором товаров. У меня всегда получается найти то, что нужно.\"'),
(6, '. \"Профессиональные фармацевты всегда готовы помочь и дать консультацию.\"'),
(7, '\"Заказываю уже не первый раз - надежный поставщик медикаментов.\"'),
(8, '\"Широкий ассортимент и доступные цены. Очень довольна!\"'),
(9, '\"Актуальная информация о наличии товаров. Экономит мое время.\"'),
(10, 'Заказывала лекарства с доставкой. Все привезли вовремя, без нареканий.\"'),
(12, '\"Отличный выбор товаров для здоровья и красоты. Спасибо!\"'),
(13, '\"Быстрая доставка, отличное качество. С уверенностью рекомендую.\"'),
(14, '\"Надежный поставщик. Теперь обращаюсь только к вам за лекарствами.\"'),
(15, '\"Пользуюсь услугами данной аптеки уже давно. Всегда довольна выбором и обслуживанием.\"'),
(16, '\"Очень удобный сайт, легко найти необходимые медикаменты.\"'),
(17, '\"Доступность и удобство сервиса - ваши сильные стороны. Спасибо!\"');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `birthday`, `password`, `email`, `card`) VALUES
(1, 'admin', 'admin', '12345678', '2023-06-07', '123123', '11111', 0),
(2, '2', '2', '222222222222', '2023-06-09', '2', '', 0),
(3, '2', '2', '222222222222', '2023-06-03', '2', '', 0),
(4, 'игорь', 'линков', '123456889', '2023-06-10', '321321', '', 0),
(5, '2', '2', '222222222222', '2023-11-02', '3', '', 0),
(7, 'a', 'a', '2', '2023-11-30', '2', '2', 0),
(17, '3', '3', '3333333333333333', '2023-12-01', '3', '3', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `workout`
--

CREATE TABLE `workout` (
  `id` int NOT NULL,
  `first_namee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lek_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workout`
--

INSERT INTO `workout` (`id`, `first_namee`, `lek_id`) VALUES
(149, 'артур', 2),
(158, 'влад', 1),
(159, 'влад', 3),
(160, 'влад', 4),
(161, 'влад', 5),
(163, 'коля', 3),
(164, 'коля', 4),
(165, 'коля', 5),
(168, '9', 3),
(169, '9', 6),
(171, 'admin', 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `collective`
--
ALTER TABLE `collective`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lek_id` (`lek_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `collective`
--
ALTER TABLE `collective`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `workout`
--
ALTER TABLE `workout`
  ADD CONSTRAINT `workout_ibfk_1` FOREIGN KEY (`lek_id`) REFERENCES `collective` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
