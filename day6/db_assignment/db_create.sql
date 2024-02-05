CREATE DATABASE blog_info;
USE blog_info;

CREATE TABLE blog_posts(
    id serial,
    title VARCHAR(50),
    content TEXT,
    catname VARCHAR(50),
    images BLOB
);

CREATE TABLE blog_categories(
    id serial,
    catname VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE blog_users(
    id serial,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE blog_comments(
    id serial,
    content TEXT,
    postId INT NOT NULL
);