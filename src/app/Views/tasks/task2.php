<div style="display:flex">
<div>
<h1>Задание №2 SQL</h2>
<pre>
Запрос из ТЗ 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `availabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `availabilities` (`id`, `amount`, `product_id`, `stock_id`) VALUES
(1, 3, 1, 1),
(2, 2, 1, 5),
(5, 5, 2, 1),
(6, 2, 5, 5),
(9, 1, 6, 1),
(10, 1, 6, 5);

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Электроника'),
(2, 'Бытовая техника'),
(5, 'Аксессуары'),
(6, 'Расходные материалы'),
(9, 'Мебель'),
(10, 'Товары для дачи');

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`id`, `title`, `category_id`) VALUES
(1, 'Телевизор LG', 1),
(2, 'Смартфон Samsung', 1),
(5, 'Микроволновая печь Redmond', 2),
(6, 'Кухонная вытяжка Elica', 2),
(9, 'Кабель питания HDMI', 6),
(10, 'Сетевой фильтр', 6);

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `stocks` (`id`, `title`) VALUES
(1, 'Главный склад'),
(2, 'Склад на Невской'),
(5, 'Склад на Бакинской');
</pre>
</div>
<div>
<pre>
Запрос с корректировкой

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  FOREIGN KEY (category_id) REFERENCES categories(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `availabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL ,
  `stock_id` int(11) NOT NULL,
  FOREIGN KEY (product_id) REFERENCES products(id)
    ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (stock_id) REFERENCES stocks(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Электроника'),
(2, 'Бытовая техника'),
(5, 'Аксессуары'),
(6, 'Расходные материалы'),
(9, 'Мебель'),
(10, 'Товары для дачи');

INSERT INTO `products` (`id`, `title`, `category_id`) VALUES
(1, 'Телевизор LG', 1),
(2, 'Смартфон Samsung', 1),
(5, 'Микроволновая печь Redmond', 2),
(6, 'Кухонная вытяжка Elica', 2),
(9, 'Кабель питания HDMI', 6),
(10, 'Сетевой фильтр', 6);

INSERT INTO `stocks` (`id`, `title`) VALUES
(1, 'Главный склад'),
(2, 'Склад на Невской'),
(5, 'Склад на Бакинской');

INSERT INTO `availabilities` (`id`, `amount`, `product_id`, `stock_id`) VALUES
(1, 3, 1, 1),
(2, 2, 1, 5),
(5, 5, 2, 1),
(6, 2, 5, 5),
(9, 1, 6, 1),
(10, 1, 6, 5);
</pre>
</div>
<div>
<object data="src/task2.pdf" type="application/pdf" width="100%" height="800px">
    <a href="src/task2.pdf">Download PDF file</a>
</object>
</div>
</div>