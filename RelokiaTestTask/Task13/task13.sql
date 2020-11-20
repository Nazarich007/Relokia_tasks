-- USE db;
--   DROP TABLE migration;
-- CREATE TABLE migration (
-- 	migration_id  int PRIMARY KEY,
-- 	migration_name int NOT NULL
-- );
-- INSERT migration(migration_id, migration_name) 
-- VALUES
-- 	(1,10), 
--     (2, 11),
--     (3,12);
-- DROP TABLE User;
-- CREATE TABLE User (
-- 	user_id  int PRIMARY KEY,
-- 	user_name varchar(20) NOT NULL
-- );
-- INSERT User(user_id,user_name)
--    VALUES 
--     (1,'Igor') , 
--     (2, 'Ira'),
--     (3, 'Max');
-- DROP TABLE relations;
-- CREATE TABLE relations (
-- 	user_id1  int NOT NULL,
-- 	migration_id int 
-- );

-- INSERT relations (user_id1, migration_id)
--    VALUES (1,3), 
--     (2,2),
--     (3,1),
--     (3,3), 
--     (3,2),
--     (1,2);
--     
-- ALTER TABLE relations
-- ADD CONSTRAINT migration_relations
-- FOREIGN KEY(migration_id)  REFERENCES migration(migration_id);

-- ALTER TABLE relations
-- ADD CONSTRAINT relations_user
-- FOREIGN KEY (user_id1)  REFERENCES User(user_id);

SELECT relations.user_id1, User.user_name, migration.migration_name 
FROM relations
JOIN User ON User.user_id= relations.user_id1
JOIN migration ON migration.migration_id=relations.migration_id;