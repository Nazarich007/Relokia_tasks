USE Task14;
-- ALTER TABLE order_ 
-- DROP FOREIGN KEY order_user;
-- DROP TABLE User;
-- CREATE TABLE User (
-- 	user_id int AUTO_INCREMENT PRIMARY KEY,
-- 	name varchar(20) NOT NULL
-- );
-- INSERT User(name)
--    VALUES 
--     ('Igor'), 
--     ('Ira'),
--     ('Max');
-- DROP TABLE order_;
-- CREATE TABLE order_ (
--  orders_id int AUTO_INCREMENT PRIMARY KEY,
--  user_id  int NOT NULL,
--  status int
--  );

-- INSERT order_ (user_id, status)
--    VALUES (1,1), 
--     (2,1),
--     (3,1),
--     (3,1), 
--     (3,1),
--     (1,1),
--     (1,1), 
--     (2,0),
--     (3,1),
--     (3,0), 
--     (3,0),
--     (1,1),
--     (1,1), 
--     (2,0),
--     (3,1),
--     (3,1), 
--     (3,1),
--     (1,1);
--     
-- ALTER TABLE order_
-- ADD CONSTRAINT order_user
-- FOREIGN KEY(user_id)  REFERENCES User(user_id);

SELECT order_.status,COUNT(*)>5 as 'status>5', User.name
FROM order_
JOIN User ON User.user_id= order_.user_id;