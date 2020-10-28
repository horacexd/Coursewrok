CREATE SCHEMA vms;
USE vms;

CREATE TABLE video (
	video_id int auto_increment,
    video_title varchar(50) not null,
    video_description varchar(2000),
    video_link varchar(500),
    primary key (video_id)
);

CREATE TABLE comment (
	comment_id int auto_increment,
    comment_body varchar(500) not null,
    video_id int,
    primary key(comment_id),
    foreign key(video_id) REFERENCES video(video_id)
    on update cascade 
    on delete cascade
);

INSERT INTO video (video_title, video_description, video_link)
VALUES ('Video Title 1', 'Video Description 1', 'video_link_1.mp4'), 
('Video Title 2', 'Video Description 2', 'video_link_2.mp4'), 
('Video Title 3', 'Video Description 3', 'video_link_3.mp4'), 
('Video Title 4', 'Video Description 4', 'video_link_4.mp4'), 
('Video Title 5', 'Video Description 5', 'video_link_5.mp4');

INSERT INTO comment (comment_body, video_id)
VALUES ('Video Comment 1', 1), 
('Video Comment 2', 1), 
('Video Comment 3', 2), 
('Video Comment 4', 3);

 