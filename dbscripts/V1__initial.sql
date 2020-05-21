CREATE TABLE ARTICLES (
    id integer NOT NULL,
    name VARCHAR(100) NOT NULL,
    created DATE NOT NULL,
    content VARCHAR(1000) NOT NULL,
    active boolean NOT NULL
);

INSERT INTO ARTICLES
(id, name, created, content, active)
VALUES
(0, 'Start', '2020-05-01', 'Hello welcome', True),
(1, 'Not there', '2020-05-02', 'is inactive', False),
(2, 'Content', '2020-05-02', 'With category', True);

CREATE TABLE CATEGORY (
	id integer NOT NULL,
	name VARCHAR(100) NOT NULL
);

INSERT INTO CATEGORY
(id, name)
VALUES
(1, "cat1"),
(2, "cat2"),
(3, "cat3");

CREATE TABLE ART_CAT(
	article integer NOT NULL,
	category integer NOT NULL
);

INSERT INTO ART_CAT
(article, category)
VALUES
(2, 1), 
(2, 2);