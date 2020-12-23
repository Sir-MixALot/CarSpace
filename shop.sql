-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 23 2020 г., 13:37
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `car_id` int(100) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `speed` varchar(20) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`car_id`, `model`, `speed`, `type`, `description`, `price`, `img`) VALUES
(1, 'BMW i8', '155mph', 'concept car', 'BMW Vision Efficient Dynamics, BMW i8 is a BMW car. The concept car was presented in 2009, the first production model was at the Frankfurt Motor Show in September 2013.\r\n\r\nBMW Vision Efficient Dynamics is a four-wheel drive two-door coupe. The chassis and suspension are made of aluminum, the roof and doors are made of polycarbonate. The drag coefficient is 0.26.\r\n\r\nThe dashboard is located on the center head-up display and windshield. This combination creates the impression of a three-dimensional space. The most important information, such as the speedometer and the route, is displayed on the windshield in the background for the greatest safety, as the driver does not have to look at the dashboard.\r\n\r\nThe power plant of the vehicle is a plug-in hybrid system. The system uses a combination of 2 electric motors powered by lithium-ion batteries and a 1.5-liter three-cylinder turbocharged gasoline engine B38K15T0. with a power of 170 kW (231 hp). The first electric motor is located on the front axle and delivers a constant power of 60 kW, and a maximum of 96 kW. The second electric motor is located between the main electric motor and the gasoline engine, produces a constant power of 25 kW and serves to start the internal combustion engine. The transmission is a second generation six-speed robotic gearbox.\r\n\r\nIn total, the vehicle develops an output of 266 kW (362 hp) and a maximum torque of 570 Nm. Accelerates from 0 to 100 km / h in 4.4 seconds and has a top speed of 250 km / h (electronically limited). Combined fuel consumption is 2.1 liters per 100 km. The power reserve from rechargeable batteries is on average about 30 km. The maximum total cruising range is 600 km.', 147500, 'img/i8.jpg'),
(2, 'Koenigsegg Agera', '279mph', 'hypercar', 'The Koenigsegg Agera prototype is powered by a standard 4.7 liter V8 engine. with a capacity of 910 liters. from. with two fixed geometry turbochargers. The gearbox installed on the prototype is six-speed. Acceleration from 0-100 km / h takes 3.1 seconds, to 200 km / h in 8.9 seconds. The theoretical maximum speed is 440 km / h.\r\n\r\nThe production model is equipped with a 5 liter 940 hp engine. at 6900 rpm. Test racer Loris Bikocchi assisted in the development of the new model.', 2100000, 'img/Agera.jpg'),
(3, 'Bugatti Chiron', '261mph', 'Hypercar', 'The Bugatti Chiron is a hypercar of the Bugatti company (part of the Volkswagen AG concern), officially presented to the public in 2016. The model was named in honor of race car driver Louis-Alexander Chiron, who competed for the brand from 1928 to 1958. The name of the model has several readings: \"Chiron, Chiron\" is the Greek name for the centaur, teacher of Achilles and Hercules; \"Chiron\" - the name is used in the media.', 3000000, 'img/chiron.jpg'),
(5, 'Lamborghini Aventador', '217mph', 'Supercar', 'Lamborghini Aventador (body code - LP700-4) is a sports car manufactured by Lamborghini. The supercar replaced the Lamborghini Murciélago in 2011.\r\nAs with the Murciélago, parent company Audi exploited the bullfighting theme. Lamborghini advertisements claimed that the Aventador was the famous bull raised by the sons of Don Celestino Cuadri Vides, who rose to fame after one of the bloodiest battles in Zaragoza, for which he received the prestigious Trofeo de la Peña La Madroñera award for outstanding bravery in the arena. The prefix LP 700-4 at the end of the name means the technical equipment of the car, where 700 represents power in hp, and 4 represents four-wheel drive.', 421000, 'img/Aventador.jpg'),
(6, 'Lamborghini Huracan', '202mph', 'Supercar', 'Lamborghini Huracán (body code - LB724) is a sports car manufactured by the Italian company Lamborghini, which replaced the Lamborghini Gallardo. Debuted at the Geneva Motor Show in March 2014, Huracán was the name of the ancient Maya god of wind, and the same name was given to the fighting bull that performed in bullfights in the late 19th century. As with the Pagani Huayra (Huayra is another windy deity from South America), Huracán is pronounced with the first letter missing (i.e. Huracan). The full official name is Lamborghini Huracan LP 610-4. The last four numbers traditionally indicate horsepower and the number of driven wheels. The Lamborghini Huracán is the world\'s first production car to use an inertial navigation system (LPI - Lamborghini Piattaforma Inerziale). The use of gyroscopic sensors and accelerometers allows more accurate measurements of the vehicle\'s movement, thereby significantly increasing the quality of its handling.', 215000, 'img/Huracan.jpg'),
(7, 'Ferrari SF90 Stradale', '211mph', 'Supercar', 'The manufacturer claims the SF90 Stradale can generate 390 kg (860 lb) downforce at 250 km / h (155 mph) thanks to new discoveries in aerodynamics and thermodynamics.\r\n\r\nThe main design feature is the two-piece rear wing, which is an application of the drag reduction system (DRS) used in Formula 1. The fixed element in the wing includes the taillight, the movable parts of the wing (the manufacturer calls them \"off gurney\") are integrated into the body using electric actuators to maximize downforce. The SF90 Stradale uses an evolution of Ferrari\'s vortex generators installed at the front of the car.\r\n\r\nThe vehicle uses an extended cab design to make better use of the vehicle\'s new aerodynamic parts and to enable radiators or cooling requirements for the vehicle\'s hybrid system. The design of the car was developed in close collaboration between Ferrari Styling Center and Ferrari engineers.\r\n\r\nThe rear of the vehicle houses many iconic Ferrari styling elements such as flying buttresses. The engine cover has been kept as low as possible to maximize airflow. According to the car\'s lead designer, Flavio Manzoni, the car\'s design sits between a spaceship and a race car. The rear side profile dates back to a 1960s Ferrari P.', 625000, 'img/SF90Stradale.jpg'),
(8, 'Porshe 911 Carrera', '205mph', 'Sportcar', 'The Porsche 991 is the internal designation for the seventh generation Porsche 911, which was unveiled at the Frankfurt Motor Show on 15 September 2011 as a replacement for the 997. The first photos and information were found on 23 August 2011.\r\n\r\nIt is currently equipped with 2 engines of 3.4 and 3.8 liters, as well as an additional start-stop system and an electromechanical power steering. The car also features a new seven-speed manual transmission, a pioneer in automotive production, along with a seven-speed dual-clutch transmission that was already available on the 997.\r\n\r\nCompared to the outgoing Porsche 997, the 991\'s wheelbase has been increased by 100 mm to 2,450 mm, and overall length by 70 mm to 4,490 mm. The new Transaxle has been designed so that the rear wheels have been moved 76 mm to the rear of the engine position, which significantly improves the weight distribution and performance of the new 911. Due to the use of high-strength steels, aluminum and some alloys, the weight has been reduced by 45 kg to 1470 kg.\r\n\r\nThe images of the 991 were posted online on August 18, 2011, before the car\'s official debut. Photos of the 991 show that Porsche has taken an evolutionary step in design, just like the previous generations 997 and 996.\r\n\r\nThe Porsche 991 won the 2012 World Performance Car title, shortly after the death of renowned Porsche designer Ferdinand Alexander Porsche.\r\n\r\nIn March 2013, the 911 GT3 coupe was shown at the Geneva Motor Show. It has the same 3.8-liter engine increased to 475 hp. from. power and a 7-speed Porsche Doppelkupplung gearbox.\r\n\r\nIn May 2013, the 911 Turbo was introduced, the most powerful in the 911 range. It is powered by a 3.8-liter engine boosted to 520 horsepower and an exclusively robotized transmission (previously the Turbo models were equipped with a manual transmission). In addition, along with the Turbo model, the Turbo S model appeared, the power of which was increased to 560 hp. from.\r\n\r\nThe Porsche 911 GT3 RS in the back of the 991 debuted at the 2015 Geneva Motor Show. The car received a new 4-liter engine with a capacity of 500 hp. from. and a 7-speed robotic gearbox. Acceleration to 100 km / h takes 3.3 seconds. The maximum speed is 310 km / h. The car weighs 1420 kg, 10 kg lighter than the standard GT3. The 911 GT3 RS completed the Nürburgring lap in 7 minutes 20 seconds. By comparison, the old GT3 RS (997) and all-wheel drive 911 Turbo S are 7 seconds slower.\r\n\r\nOn March 1, 2016, the 911R was introduced. It has a lot in common with the GT3RS, but there are differences, the roll cage, rear spoiler and body lightened were removed, which reduced the weight by 50 kilograms. The car is equipped exclusively with a six-speed manual transmission, the maximum speed is 323 km / h. The mintage of the car is limited to 991 copies.', 100000, 'img/911.jpg'),
(9, 'Bentley Continental GT', '205mph', 'Luxury', '207Bentley Continental GT — dvukhdvernoye 4-mestnoye kupe lyuks klassa vypuskayemoye kompaniyey Bentley Motors. Nesmotrya na vnushitel\'nyye gabarity, Bentley Continental GT chetyrokhmestnyy avtomobil\'. Po zayavleniyam Bentley Motors, chelovek rostom 180 sm s komfortom pomestitsya kak na perednikh ,tak i na zadnikh sideniyakh. Na vybor kliyenta predostavlyayetsya ogromnoye kolichestvo vsevozmozhnykh tsvetov kozhi i porod dereva dlya obivki salona. Panel\' priborov vmeste s tsentral\'noy konsol\'yu vypolneny simmetrichno i napominayut simvoliku Bentley — krylo. Bol\'shinstvom samykh chasto ispol\'zuyemykh funktsiy mozhno upravlyat\' s trokhspitsevogo rulevogo kolesa. Bazovyye versii avtomobilya osnashchayutsya akusticheskoy sistemoy BOSE i mul\'timediynym interfeysom Logic by Pioneer, premial\'nyye 7.2-mi kanal\'noy Bang & Olufsen s interfeysom Onkyo.\r\nЕщё\r\n796 / 5000\r\nРезультаты перевода\r\nBentley Continental GT is a two-door 4-seater luxury coupe manufactured by Bentley Motors.\r\nDespite its impressive dimensions, the Bentley Continental GT is a four-seater car. According to Bentley Motors, a 180 cm person will comfortably fit in both the front and rear seats. The client can choose from a huge number of all kinds of leather colors and wood species for upholstery.\r\n\r\nThe dashboard, along with the center console, are symmetrical and resemble Bentley\'s fender. Most of the most frequently used functions can be operated from the three-spoke steering wheel. The basic versions of the car are equipped with a BOSE speaker system and a Logic by Pioneer multimedia interface, a premium 7.2-channel Bang & Olufsen with an Onkyo interface.', 207000, 'img/ContinentalGT.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carts`
--

INSERT INTO `carts` (`cart_id`, `id`) VALUES
(1, 3),
(2, 5),
(3, 6),
(4, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(100) NOT NULL,
  `cart_id` int(100) NOT NULL,
  `car_id` int(100) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart_items`
--

INSERT INTO `cart_items` (`cart_item_id`, `cart_id`, `car_id`, `count`) VALUES
(18, 3, 1, 2),
(19, 3, 8, 2),
(20, 3, 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(3, 'Starman', 'str@gmail.com', '478e971014c05d2665ce447399e86319'),
(5, 'Papaya', 'papaya@gmail.com', '765ec6198dd650955438689dce16df67'),
(6, 'Polly', 'polly@gmail.com', '765ec6198dd650955438689dce16df67'),
(7, 'Pulse4', 'pulse@gmail.com', '765ec6198dd650955438689dce16df67'),
(8, 'Dimka', 'dimka@gmail.com', '6fbc0a802ebff387d0c7418ecd746eba');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Индексы таблицы `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
