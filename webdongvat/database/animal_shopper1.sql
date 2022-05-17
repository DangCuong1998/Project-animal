CREATE TABLE `category` (
  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int default '0',
  `ordring` int default '0',
  `status` tinyint(1),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
)

CREATE TABLE `product`(
	`id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
	`cat_id` int(11) NOT NULL,
	`color`varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	`age` int(11) NOT NULL,
	`weight` int(11) NOT NULL,
	`image`varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
	`price` text COLLATE utf8mb4_unicode_ci NOT NULL,
	`origin` text COLLATE utf8mb4_unicode_ci,
	`status` tinyint(1),
	`created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL
) 

CREATE TABLE `user`(
	`id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
	`email` text COLLATE utf8mb4_unicode_ci NOT NULL,
	`address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	`password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `groupid` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL

)

CREATE TABLE `orders`( 
      `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
      `iduser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `date_created`date,
      `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `payment_methods`text COLLATE utf8mb4_unicode_ci NOT NULL,
      `payment_orders` text COLLATE utf8mb4_unicode_ci NOT NULL,
      `created_at` timestamp NULL DEFAULT NULL,
      `updated_at` timestamp NUll DEFAULT NULL  
)

CREATE TABLE `orderdetail`(
	`orderid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`productid`varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`quantity`text COLLATE utf8mb4_unicode_ci NOT NULL,
	`price` int NOT NULL,
	`created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL

)
