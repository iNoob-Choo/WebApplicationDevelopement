DROP TABLE IF EXISTS announcement;

CREATE TABLE announcement (
	id		     INT(11) AUTO_INCREMENT NOT NULL,
  subeject   VARCHAR(255),
  message    text,
  type       char(1),
  posted     DATETIME,
	PRIMARY KEY (id)
);
