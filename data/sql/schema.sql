CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE collections (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, is_active TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE contacts (id BIGINT AUTO_INCREMENT, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE index_content (id BIGINT AUTO_INCREMENT, newsletter VARCHAR(255) NOT NULL, catalogue VARCHAR(255) NOT NULL, thebrand VARCHAR(255) NOT NULL, thedesigner VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE news (id BIGINT AUTO_INCREMENT, news_title VARCHAR(255) NOT NULL, news_content VARCHAR(255) NOT NULL, news_image VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_images (id BIGINT AUTO_INCREMENT, product_id BIGINT NOT NULL, location VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE products (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, main_img_path VARCHAR(255) NOT NULL, main_img_alt VARCHAR(255) NOT NULL, citation VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, designer VARCHAR(255), width VARCHAR(255), height VARCHAR(255), diameter VARCHAR(255), depth VARCHAR(255), materials VARCHAR(255), other VARCHAR(255), collection_id BIGINT NOT NULL, category_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX collection_id_idx (collection_id), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE slider_images (id BIGINT AUTO_INCREMENT, path VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE product_images ADD CONSTRAINT product_images_product_id_products_id FOREIGN KEY (product_id) REFERENCES products(id);
ALTER TABLE products ADD CONSTRAINT products_collection_id_collections_id FOREIGN KEY (collection_id) REFERENCES collections(id);
ALTER TABLE products ADD CONSTRAINT products_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id);
