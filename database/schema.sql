create DATABASE yeticave
  DEFAULT CHARACTER SET uft8
  DEFAULT COLLATE utf8_general_ci;

CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(128) NOT NULL UNIQUE,
  code VARCHAR(128) NOT NULL UNIQUE
);

CREATE TABLE lots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  title VARCHAR(128),
  description TEXT,
  image_src TEXT,
  start_price INT,
  end_date TIMESTAMP,
  bid_increment INT,
  FOREIGN KEY (author_id) REFERENCES user (id),
  FOREIGN KEY (winner_id) REFERENCES user (id),
  FOREIGN KEY (category_id) REFERENCES category (id)
);

CREATE TABLE bets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP,
  sum INT,
  FOREIGN KEY (user_id) REFERENCES user (id),
  FOREIGN KEY (lot_id) REFERENCES lots(id)
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP,
  email VARCHAR(128),
  name VARCHAR(128),
  password VARCHAR(255),
  contact_info JSON,
  FOREIGN KEY (created_lots) REFERENCES lots (id),
  FOREIGN KEY (bets) REFERENCES bets (id)
);
