USE book_store1;

CREATE TABLE IF NOT EXISTS `BookInventory` (
  `book_id` int(4) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(60) NOT NULL,
  `book_desc` longtext NOT NULL,
  `book_publisher` varchar(40) NOT NULL,
  `book_quantity` int(5) NOT NULL,
  `book_price` int(5) NOT NULL,
  `book_img` longtext NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51;


CREATE TABLE IF NOT EXISTS `customers` (
  `custid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `address` varchar(25) NOT NULL,
  `cust_pwd` varchar(20) NOT NULL,
  `cust_email` varchar(35) NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `custid` int(10) unsigned NOT NULL,
  `firstname` char(60) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastname` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,    
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`orderid`)    
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE IF NOT EXISTS `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `book_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

