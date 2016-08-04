-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 06 2016 г., 16:21
-- Версия сервера: 5.6.28-76.1-beget-log
-- Версия PHP: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `group9ut_my_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main_category`
--
-- Создание: Июл 05 2016 г., 06:56
--

DROP TABLE IF EXISTS `main_category`;
CREATE TABLE `main_category` (
  `idmain_cat` int(11) NOT NULL,
  `name` varchar(90) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `name_uri` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_category`
--

INSERT INTO `main_category` (`idmain_cat`, `name`, `status`, `sort_order`, `name_uri`) VALUES
(1, 'Работа с землей', 1, 1, 'earth'),
(2, 'Стрижка травы', 1, 2, 'grass'),
(3, 'Уход за газоном', 1, 3, 'lawn'),
(4, 'Многофункциональные мини-тракторы', 1, 4, 'mini-traktors'),
(5, 'Работа с деревьями и кустарниками', 1, 5, 'trees'),
(6, 'Техника для резервного энергоснабжения', 1, 6, 'energy');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--
-- Создание: Июл 02 2016 г., 14:36
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-12 10:05:04', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2017-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:05', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-05-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2016-03-11 21:00:00', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Июл 05 2016 г., 07:16
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `products_idproducts` int(11) NOT NULL,
  `products_second_category_idsecond_cat` int(11) NOT NULL,
  `products_second_category_main_category_idmain_cat` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL,
  `date_reg` varchar(45) DEFAULT NULL,
  `user_phone` varchar(45) DEFAULT NULL,
  `user_comment` text,
  `card` varchar(45) DEFAULT NULL,
  `sposob` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--
-- Создание: Июл 05 2016 г., 06:58
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `description` text,
  `characteristic` text,
  `is_new` varchar(45) DEFAULT NULL,
  `is_recommended` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `second_category_idsecond_cat` int(11) NOT NULL,
  `second_category_main_category_idmain_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`idproducts`, `name`, `image`, `code`, `price`, `availability`, `brand`, `description`, `characteristic`, `is_new`, `is_recommended`, `status`, `second_category_idsecond_cat`, `second_category_main_category_idmain_cat`) VALUES
(1, 'Культиватор Husqvarna TR530', NULL, NULL, 11900, NULL, NULL, 'Культиватор Husqvarna new TR 530 имеет большие размеры и максимальную мощность,\nон подойдет для владельцев маленьких земельных участков и для опытных землевладельцев.\nОборудование справится даже с вспашкой плотной почвы. Колеса «обуты» в шины под названием «Шеврон».\nКачественные фрезы обеспечат простоту использования благодаря обратному вращению.\nРукоятку можно регулировать для удобного использования. На колеса нанесен протекторный рисунок, это нужно для обеспечения необходимого уровня тяги.\nПротивовесы нужны для безопасной и результативной работы, они увеличивает общий вес, который действует на колеса. ', ' ПроизводительHusqvarna\nКатегория применения Бытовая техника\nСтрана-производитель Швеция\nПлощадь обработки (сот/га)_ ---\nВид земли Для целинных земель\nТип культиватора Тяжелый культиватор\nТип двигателя 4-тактный бензиновый\nМодель двигателя EX21\nПроизводитель двигателя Subaru\nМощность (кВт) 3,9\nОбъем топливного бака (л) 3,6\nПривод на колеса Самоходная техника\nСцепление ---\nТрансмиссия. ---\nКоличество передач вперед+назад 1+1\nРеверс. ?	Да\nРедуктор Цепной\nОхлаждение Воздушное\nШирина вскопки, max, см 53\nГлубина вскопки, max, см 18\nКоличество фрез 4\nУправление ---\nРукоятка регулируемая ---\nСкладная рукоятка ---\nГарантия (мес.) 12', '1', 1, 1, 1, 1),
(2, 'Культиватор Husqvarna new TR430 DUAL', NULL, NULL, 94900, NULL, NULL, 'Культиватор Husqvarna new TR 430 DUAL подойдет частным пользователям и крупным земледельцам.\nВыполняет несколько работ, начиная от вспашки плотной почвы и заканчивая рыхлением грядок и клумб.\nФрезы агрегата вращаются не в одном, а в 2-ух направлениях, они обеспечат глубинную вспашку грядки или газона.\nРеверс обеспечивает удобство в проводимых работах. Удобную рукоятку можно регулировать под пользователя.\nHusqvarna new TR 430 DUAL имеет два хода и две скорости. Оборудование работает на бензине, мощность двигателя – 3, 3 кВт.', ' ПроизводительHusqvarna\nКатегория применения Бытовая техника\nСтрана-производитель Швеция\nПлощадь обработки (сот/га)_ ---\nВид земли Для целинных земель\nТип культиватора Тяжелый культиватор\nТип двигателя 4-тактный бензиновый\nМодель двигателя EX17\nПроизводитель двигателя Subaru\nМощность (кВт) 3,2\nОбъем топливного бака (л) 3,4\nПривод на колеса Самоходная техника\nСцепление ---\nТрансмиссия. ---\nКоличество передач вперед+назад 1+1\nРеверс. ?	Да\nРедуктор Цепной\nОхлаждение Воздушное\nШирина вскопки, max, см 43\nГлубина вскопки, max, см 15\nКоличество фрез 4\nУправление ---\nРукоятка регулируемая ---\nСкладная рукоятка ---\nГарантия (мес.) 12', '0', 0, 1, 1, 1),
(3, 'Мотоблок Caiman 340 13 л.с.', NULL, NULL, 199990, NULL, NULL, 'Простой в использовании мотоблок Caiman 340 отличается передовыми технологиями,которые позволяют качественно обрабатывать землю на больших участках.\nОборудован четырехтактным надежным двигателем Subaru производства Японии, обладает высокой мощностью, легко запускается.\nИзносостойкость и повышенную надежность обеспечивают гильза цилиндра и система охлаждения и смазки.\nВсе элементы управления удобно расположены, что обеспечивают комфорт пользователю при работе с машиной.\nМотоблок может быстро менять направление движения благодаря установленному инвертору.\nВысокую проходимость и маневренность машины обеспечивают пневматические колеса со специальным протектором.', ' ПроизводительCaiman\nКатегория применения Профессиональная техника\nСтрана-производитель Франция\nПлощадь обработки (сот/га)_ ---\nВид земли Для целинных земель\nТип культиватора Тяжелый мотоблок с ВОМ\nТип двигателя 4-тактный бензиновый\nМодель двигателя Subaru EX 40\nПроизводитель двигателя Subaru\nМощность двигателя (л.с.) 13 л.с.\nПривод на колеса ---\nСцепление ---\nТрансмиссия. Шестеренчатый редуктор\nКоличество передач вперед+назад ---\nРеверс. ?	Да\nРедуктор ---;Червячный;Цепной;\nОхлаждение ---\nУправление ---\nРукоятка регулируемая Да\nСкладная рукоятка ---\nГарантия (мес.) 12', '1', 1, 1, 2, 1),
(4, 'Комплект навесного оборудования Maxi', NULL, NULL, 9535, NULL, NULL, 'Навесное оборудование для мотоблоков и культиваторов Master Yard/Pubert/Caiman. В комплект входят окучник,плуг, картофелекопатель, грунтозацепы(пара). ', NULL, '1', 1, 1, 3, 1),
(5, 'Бензокоса Oleo-Mac 755 MASTER 2,8 л.с.', NULL, NULL, 49990, NULL, NULL, 'Бензокоса Oleo-Mac 755 MASTER 2,8 л.с. работает на бензине, она справляется с самыми сложными задачами.\nК агрегату подключаются дополнительные насадки, поэтому можно выполнять несколько различных работ.\nБлагодаря охлаждающей системе двигатель не перегревается при сильных нагрузках.\nТехника работает с кустарниками, травой и порослью.\nЕсли заменить штатную насадку на диск, оборудование валит деревья, диаметр которых до 10 см.\nПоверхность современного фильтра увеличена, рукоять можно c легкостью отрегулировать.\nТехника подходит для обработки территорий с большой площадью в парке или в саду.', ' ПроизводительOleo-Mac\nСтрана-производитель Италия\nКатегория применения Профессиональная техника\nТип двигателя 2-тактный бензиновый\nМодель двигателя EMAK\nМощность двигателя (л.с.) 2,8 л.с.\nПроизводитель двигателя Emak\nОбъем цилиндра (см³) 52,5 см³\nЭлектрозапуск Нет\nОбъем топливного бака (л) 1,5 л.\nОхлаждение ---\nСцепление ---\nРукоятка мотокосы В виде руля\nВал триммера Неразборный\nТип вала триммера Прямой вал\nКомплектация Триммерная головка + Нож для травы\nДиаметр лески (мм) 3,3 мм.\nГарантия производителя (мес.) 12', '1', 0, 1, 4, 2),
(6, 'Электротриммер Oleo-Mac TR130E 1,3 кВт', NULL, NULL, 12900, NULL, NULL, 'Электротриммер Oleo-Mac TR130E 1,3 кВт – инструмент, который поможет вам поддерживать порядок на газоне.\nОн имеет компактные габариты, и справляется с различными видами сорняков.\nВ конструкции оборудования есть мотор электрический, его мощность – 1,7 лошадиных сил.\nРежущий инструмент – леска и пластиковый нож. При использовании лески обработанная полоса будет иметь ширину 25 см, а с ножом – 23 см.\nНа режущем элементе есть специальный щиток, он обеспечит безопасность. Мотор выносливый и выдерживает большую нагрузку.\nЩиток оснащен реле, оно защищает агрегат от перегрева.\nБлагодаря уникальной конструкции электротриммер отличается низкими вибрациями и практически бесшумной работой. ', ' ПроизводительOleo-Mac\nСтрана-производитель Италия\nКатегория применения Бытовая техника\nТип двигателя Электрический\nПроизводитель двигателя --\nМощность (кВт) 1,3 кВт\nЭлектрозапуск Нет\nОхлаждение ---\nСцепление ---\nРукоятка мотокосы Петлеобразная\nВал триммера Неразборный\nТип вала триммера Изогнутый вал\nКомплектация Триммерная головка + Нож для травы\nДиаметр лески (мм) 2,0 мм.\nГарантия производителя (мес.) 12', '0', 1, 1, 5, 2),
(7, 'Сенозаготовительная машина Pubert RM 60B 6 л.с.', NULL, NULL, 99900, NULL, NULL, '\nСенокосилка RM 60B создана так , что каждый нож машины срезает растения один раз и не измельчая, складывает их в ряды.\nТаким образом трава хорошо высыхает и легко собирается в стог.\nОснащена четырехтактный американским двигателем Briggs & Stratton, который отличается надежностью и долговечностью, имеет отличный сервис в России.\nБлагодаря установленному на машине праймеру подкачки топлива, можно заводить сенокосилку при холодном старте.\nPubert RM 60 B может выдержить большие нагрузки, благодаря стальной раме, металлическому защитному кожуху.\nОтличную проходимость в труднодоступных местах обеспечивают пневмоколеса со специальным протектором.\nСенокосилка оборудована объемным топливным баком, что повышает автономность работы машины.\nУстановлена автоматическая система отключения ножей.\n', ' ПроизводительPubert (Франция)\nТип газонокосилки Бензиновая\nСамоход Самоходная модель\nЭлектрозапуск Нет\nТравосборник ---\nМульчирование ---\nШирина кошения (см) 60\nРегулировка высоты ---\nВысота стрижки, min, мм 50\nВысота стрижки, max, мм 100\nКатегория применения Фермерская техника\nПлощадь обработки (сот/га) от 50 сот\nПривод на колеса ---\nМодель двигателя 850\nМощность двигателя (л.с.) 6\nПроизводитель двигателя Briggs&Staratton\nОбъем цилиндра (см³) 190\nОбъем топливного бака (л) 3.6\nМатериал корпуса Металл\nВыброс травы вбок ---\nСтрана-производитель Франция\nГарантия производителя (мес.) 12', '0', 0, 0, 6, 2),
(8, 'Газонокосилка Husqvarna LB 553S e', NULL, NULL, 75900, NULL, NULL, 'Простая в управлении газонокосилка Husqvarna LB 553S E обеспечивает превосходный результат кошения травы на небольших участках.\nКосилка  имеет надежную  конструкцию, которая изготовлена  из высокопрочных материалов.\nОна оборудована  мощным японским двигателем Honda, который отличается низким расходом бензина при максимальной нагрузке.\nИспользуется функция BioClip - трава измельчается на мелкие частицы и выбрасывается на газон в качестве естественного удобрения.\nРежущая дека изготовлена из высококачественной стали, что повышает долгий период эксплуатации.\nРегулировка высоты скашивания фиксируется по пяти положениям.\nСкладная рукоятка регулируется под рост оператора, создавая максимальный комфорт, а также удобна при транспортировки и хранении.\nБольшим плюсом является антивибрационная защита рукояток,  которая позволяет обеспечить  комфортное  управление. ', ' ПроизводительHusqvarna\nСамоход Самоходная модель\nЭлектрозапуск Нет\nТравосборник Нет\nМульчирование ---\nШирина кошения (см) 53\nРегулировка высоты Центральная\nКоличество положений высоты стрижки 5\nВысота стрижки, min, мм 27\nВысота стрижки, max, мм 65\nКатегория применения Профессиональная техника\nПлощадь обработки (сот/га) ---\nПривод на колеса ---\nПроизводитель двигателя Honda\nОбъем цилиндра (см³) 160\nМатериал корпуса Металл\nВыброс травы вбок ---\nСтрана-производитель Швеция\nГарантия производителя (мес.) 12', '0', 0, 1, 7, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `second_category`
--
-- Создание: Июл 05 2016 г., 06:57
--

DROP TABLE IF EXISTS `second_category`;
CREATE TABLE `second_category` (
  `idsecond_cat` int(11) NOT NULL,
  `name` varchar(90) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort_order` varchar(45) DEFAULT NULL,
  `main_category_idmain_cat` int(11) NOT NULL,
  `name_uri` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `second_category`
--

INSERT INTO `second_category` (`idsecond_cat`, `name`, `status`, `sort_order`, `main_category_idmain_cat`, `name_uri`) VALUES
(1, 'Культиваторы', 1, '1', 1, 'cultivators'),
(2, 'Мотоблоки', 1, '2', 1, 'motoblocks'),
(3, 'Навесное оборудование', 1, '3', 1, 'naves'),
(4, 'Мотокосы, бензокосы, бензо- триммеры', 1, '4', 2, 'brushcutters'),
(5, 'Электрокосы, электрические, аккумуляторные триммеры', 1, '5', 2, 'electrocutters'),
(6, 'Сенокосилки, колесные триммеры', 1, '6', 2, 'trimmers'),
(7, 'Подметально-Уборочные машины', 1, '7', 3, 'cleaning'),
(8, 'Газонокосики бензиновые', 1, '8', 3, 'oil-cutters'),
(9, 'Газонокосилки электрические, механические, аккамуляторные', 1, '9', 3, 'energy-cutters'),
(10, 'Роботы газонокосилки', 1, '10', 3, 'robots'),
(11, 'Минитракторы', 1, '11', 4, 'mini-tractors'),
(12, 'Навеска', 0, '12', 4, 'naveska'),
(13, 'Бензопилы, электропилы', 1, '13', 5, 'chainsaw'),
(14, 'Высоторезы', 1, '14', 5, 'viatores'),
(15, 'Кусторезы - подрезчики поросли', 1, '15', 5, 'porosli'),
(16, 'Бензиновые генераторы', 1, '16', 6, 'oil-generators'),
(17, 'Инверторные цифровые генераторы', 1, '17', 6, 'invertor-generators'),
(18, 'Дизельные электростанции', 1, '18', 6, 'disel');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июл 05 2016 г., 07:15
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `second_name` varchar(45) DEFAULT NULL,
  `third_name` varchar(45) DEFAULT NULL,
  `address` mediumtext,
  `phone` varchar(45) DEFAULT NULL,
  `date_reg` date DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`idmain_cat`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`users_idusers`,`products_idproducts`,`products_second_category_idsecond_cat`,`products_second_category_main_category_idmain_cat`),
  ADD KEY `fk_products_has_users_users1_idx` (`users_idusers`),
  ADD KEY `fk_products_has_users_products1_idx` (`products_idproducts`,`products_second_category_idsecond_cat`,`products_second_category_main_category_idmain_cat`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`,`second_category_idsecond_cat`,`second_category_main_category_idmain_cat`),
  ADD KEY `fk_products_second_category1_idx` (`second_category_idsecond_cat`,`second_category_main_category_idmain_cat`);

--
-- Индексы таблицы `second_category`
--
ALTER TABLE `second_category`
  ADD PRIMARY KEY (`idsecond_cat`,`main_category_idmain_cat`),
  ADD KEY `fk_second_category_main_category_idx` (`main_category_idmain_cat`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `main_category`
--
ALTER TABLE `main_category`
  MODIFY `idmain_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `second_category`
--
ALTER TABLE `second_category`
  MODIFY `idsecond_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_products_has_users_products1` FOREIGN KEY (`products_idproducts`,`products_second_category_idsecond_cat`,`products_second_category_main_category_idmain_cat`) REFERENCES `products` (`idproducts`, `second_category_idsecond_cat`, `second_category_main_category_idmain_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_users_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_second_category1` FOREIGN KEY (`second_category_idsecond_cat`,`second_category_main_category_idmain_cat`) REFERENCES `second_category` (`idsecond_cat`, `main_category_idmain_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `second_category`
--
ALTER TABLE `second_category`
  ADD CONSTRAINT `fk_second_category_main_category` FOREIGN KEY (`main_category_idmain_cat`) REFERENCES `main_category` (`idmain_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
