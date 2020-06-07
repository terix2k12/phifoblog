INSERT INTO ARTICLES
(id, name, created, content, active)
VALUES
(1, 'Start', '2020-05-01', 'Hello welcome', True),
(2, 'Not there', '2020-05-02', 'is inactive', False),
(3, 'Content', '2020-05-02', 'With category', True);

INSERT INTO CATEGORY
(id, name)
VALUES
(1, "cat1"),
(2, "cat2"),
(3, "cat3");

INSERT INTO ART_CAT
(article, category)
VALUES
(3, 1), 
(3, 2);