-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2023 г., 15:31
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(8,2) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Пицца \"Три сыра\"', 'Вкуснейшая пицца приготовленная из отборного сыра трёх видов', '150.00', 'pizzaPhoto1'),
(2, 'Паста \"Болоньезе\"', 'Ароматная паста с мясным соусом Болоньезе', '120.00', 'pastaPhoto1'),
(3, 'Салат \"Цезарь\"', 'Классический салат Цезарь с курицей и заправкой', '80.00', 'saladPhoto1'),
(4, 'Стейк \"Нью-Йорк\"', 'Отличный стейк из нью-йоркского мраморного мяса', '200.00', 'steakPhoto1'),
(5, 'Суши \"Дракон\"', 'Роллы с угрем, огурцом и авокадо, украшенные креветкой', '180.00', 'sushiPhoto1'),
(6, 'Бургер \"Чизбургер\"', 'Сочный бургер с говяжьей котлетой и сыром', '130.00', 'burgerPhoto1'),
(7, 'Десерт \"Тирамису\"', 'Итальянский десерт с маскарпоне и кофе', '60.00', 'tiramisuPhoto1'),
(8, 'Напиток \"Мохито\"', 'Освежающий мохито с лаймом и мятой', '40.00', 'mojitoPhoto1'),
(9, 'Паста \"Альфредо\"', 'Паста Альфредо с кремовым соусом и пармезаном', '110.00', 'pastaAlfredoPhoto1'),
(10, 'Роллы \"Филадельфия\"', 'Роллы с лососем, сыром и огурцом', '160.00', 'sushiPhiladelphiaPhoto1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
