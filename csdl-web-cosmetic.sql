
CREATE DATABASE `webcosmetic` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use webcosmetic;

-- Các bảng cần tạo

-- Bảng danh mục

CREATE TABLE IF NOT EXISTS categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;


-- Bảng sản phẩm

CREATE TABLE IF NOT EXISTS products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  price float NOT NULL,
  sale_price float NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  category_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date,
  FOREIGN KEY (category_id) REFERENCES categories (`id`)
) ENGINE = InnoDB;

-- Bảng khách hàng

CREATE TABLE IF NOT EXISTS asccounts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(100) NOT NULL UNIQUE,
  address VARCHAR(255) NOT NULL,
  password VARCHAR(100) NOT NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- Bảng quản trị

CREATE TABLE IF NOT EXISTS users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- Bảng đơn hàng

CREATE TABLE IF NOT EXISTS orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  account_id int NOT NULL,
  name VARCHAR(100) NOT NULL,
  address VARCHAR(255) NOT NULL,
  order_note VARCHAR(100) NOT NULL,
  payment_method VARCHAR(100) NULL,
  shipping_method VARCHAR(100) NULL,
  status tinyint DEFAULT '1',
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date,
  FOREIGN KEY (account_id) REFERENCES asccounts (`id`)
) ENGINE = InnoDB;

-- Bảng chi tiết đơn hàng

CREATE TABLE IF NOT EXISTS orders_detail (
  product_id int NOT NULL,
  order_id int NOT NULL,
  quantity int NOT NULL,
  price float NOT NULL,
  PRIMARY KEY (product_id, order_id),
  FOREIGN KEY (product_id) REFERENCES products (`id`),
  FOREIGN KEY (order_id) REFERENCES orders (`id`)
) ENGINE = InnoDB;

-- Bảng tin tức

CREATE TABLE IF NOT EXISTS blogs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  category_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

-- Banner

CREATE TABLE IF NOT EXISTS blogs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  image VARCHAR(100) NOT NULL,
  descriptions text NULL,
  status tinyint DEFAULT '1',
  prioty tinyint DEFAULT '0',
  category_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at date
) ENGINE = InnoDB;

INSERT INTO categories (name) VALUES 
('Áo nam'),
('Áo nữ'),
('Áo trẻ em'),
('Váy dài'),
('Váy ngắn'),
('Đầm dạ hội')
