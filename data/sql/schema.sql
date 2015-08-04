CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE collection (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, name_image VARCHAR(255) NOT NULL, backgroud_image VARCHAR(255) NOT NULL, is_active TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE contacts (id BIGINT AUTO_INCREMENT, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE index_content (id BIGINT AUTO_INCREMENT, newsletter TEXT NOT NULL, catalogue TEXT NOT NULL, thebrand LONGTEXT NOT NULL, thedesigner LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE news (id BIGINT AUTO_INCREMENT, news_title VARCHAR(255) NOT NULL, news_content TEXT NOT NULL, news_image VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_catalogue (id BIGINT AUTO_INCREMENT, link VARCHAR(255) NOT NULL, cover VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_collection (id BIGINT AUTO_INCREMENT, product_image VARCHAR(255) NOT NULL, package_location VARCHAR(255) NOT NULL, collection_id BIGINT NOT NULL, product_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX collection_id_idx (collection_id), INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_cover_image (id BIGINT AUTO_INCREMENT, link VARCHAR(255) NOT NULL, cover VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_cover_video (id BIGINT AUTO_INCREMENT, link VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_logo (id BIGINT AUTO_INCREMENT, jpg_location VARCHAR(255) NOT NULL, png_location VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_main_area (id BIGINT AUTO_INCREMENT, cover VARCHAR(255) NOT NULL, catalogue VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_product_concept (id BIGINT AUTO_INCREMENT, package_location VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, product_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_product_concept_image (id BIGINT AUTO_INCREMENT, image VARCHAR(255) NOT NULL, jpg_location VARCHAR(255) NOT NULL, png_location VARCHAR(255) NOT NULL, press_product_concept_id BIGINT NOT NULL, product_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX press_product_concept_id_idx (press_product_concept_id), INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_product_image (id BIGINT AUTO_INCREMENT, high_res_img VARCHAR(255) NOT NULL, low_res_img VARCHAR(255) NOT NULL, collection_id BIGINT NOT NULL, product_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX collection_id_idx (collection_id), INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE press_release (id BIGINT AUTO_INCREMENT, link VARCHAR(255) NOT NULL, cover VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, main_img_path VARCHAR(255) NOT NULL, main_img_alt VARCHAR(255) NOT NULL, context_img VARCHAR(255) NOT NULL, context_img_alt VARCHAR(255) NOT NULL, small_img VARCHAR(255), small_img_alt VARCHAR(255), citation VARCHAR(255) NOT NULL, description TEXT NOT NULL, designer VARCHAR(255), dimensions VARCHAR(255), materials VARCHAR(255), other VARCHAR(255), collection_id BIGINT NOT NULL, category_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX collection_id_idx (collection_id), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_image (id BIGINT AUTO_INCREMENT, product_id BIGINT NOT NULL, location VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE slider_image (id BIGINT AUTO_INCREMENT, path VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE press_collection ADD CONSTRAINT press_collection_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE press_collection ADD CONSTRAINT press_collection_collection_id_collection_id FOREIGN KEY (collection_id) REFERENCES collection(id);
ALTER TABLE press_product_concept ADD CONSTRAINT press_product_concept_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE press_product_concept_image ADD CONSTRAINT press_product_concept_image_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE press_product_concept_image ADD CONSTRAINT pppi FOREIGN KEY (press_product_concept_id) REFERENCES press_product_concept(id);
ALTER TABLE press_product_image ADD CONSTRAINT press_product_image_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE press_product_image ADD CONSTRAINT press_product_image_collection_id_collection_id FOREIGN KEY (collection_id) REFERENCES collection(id);
ALTER TABLE product ADD CONSTRAINT product_collection_id_collection_id FOREIGN KEY (collection_id) REFERENCES collection(id);
ALTER TABLE product ADD CONSTRAINT product_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id);
ALTER TABLE product_image ADD CONSTRAINT product_image_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
