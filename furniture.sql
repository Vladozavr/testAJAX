-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 10 2022 г., 17:32
-- Версия сервера: 5.7.18-log
-- Версия PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `furniture`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sofas`
--

CREATE TABLE `sofas` (
  `id` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `color` varchar(120) NOT NULL,
  `material` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sofas`
--

INSERT INTO `sofas` (`id`, `name`, `color`, `material`, `country`, `price`) VALUES
(1, 'Диван-книжка АСТРА ПБ', 'Коричневый', 'Велюр', 'Россия', '11990.00'),
(2, 'Диван-книжка ШЕНИЛЛ', 'Белый', 'Велюр', 'Германия', '9990.00'),
(3, 'Диван \"Лидер\"', 'Чёрный', 'Кожа', 'Россия', '23790.00'),
(4, 'Диван \"Вега-18\"', 'Коричневый', 'Кожа', 'Германия', '21790.00'),
(5, 'Диван \"Стиль\"', 'Синий', 'Рогожка', 'Россия', '23790.00'),
(6, 'Диван-книжка однотонный АСТРА ППУ', 'Чёрный', 'Велюр', 'Россия', '9990.00'),
(7, 'Диван-книжка ВЕЛЮР ПБ', 'Красный', 'Рогожка', 'Россия', '10990.00'),
(8, 'Диван \"Фиджи\"', 'Белый', 'Велюр', 'Швеция', '18990.00'),
(9, 'Диван \"Анна\"', 'Красный', 'Велюр', 'Германия', '19490.00'),
(10, 'Диван \"Премьер\"', 'Коричневый', 'Кожа', 'Швеция', '24290.00'),
(11, 'Диван \"Ника\"', 'Синий', 'Рогожка', 'Швеция', '24990.00'),
(12, 'Диван Олимп', 'Синий', 'Велюр', 'Германия', '19790.00'),
(13, 'Диван \"Виктория\"', 'Красный', 'Велюр', 'Россия', '25990.00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sofas`
--
ALTER TABLE `sofas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sofas`
--
ALTER TABLE `sofas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
