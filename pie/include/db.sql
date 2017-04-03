CREATE TABLE announcement(
	id		INT(11) NOT NULL AUTO_INCREMENT,
	subject	VARCHAR(255) NOT NULL,
	message	TEXT,
	type	CHAR(1),
	posted	DATETIME,
	PRIMARY KEY(id)
);
