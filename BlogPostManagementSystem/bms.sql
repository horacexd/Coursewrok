CREATE SCHEMA bms;
USE bms;

CREATE TABLE post (
	post_id int auto_increment,
    post_title varchar(50),
    post_body varchar(1000),
    primary key(post_id)
);

CREATE TABLE comment (
	comment_id int auto_increment,
    comment_body varchar(500),
    post_id int,
    primary key(comment_id),
	foreign key(post_id) REFERENCES post(post_id)
    on update cascade on delete cascade
);

INSERT INTO post (post_title, post_body) 
VALUES ('post title 1', 'post body 1'),  ('post title 2', 'post body 2'), ('post title 3', 'post body 3'), ('post title 4', 'post body 4'), ('post title 5', 'post body 5');

INSERT INTO comment (comment_body, post_id)
VALUES ('comment body 1', 1), ('comment body 2', 1), ('comment body 3', 2), ('comment body 4', 1), ('comment body 5', 2), ('comment body 6', 4);


