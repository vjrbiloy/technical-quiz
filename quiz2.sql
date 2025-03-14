/* Assume the following tables: */

CREATE TABLE user (
    user_id INT UNSIGNED AUTO_INCREMENT,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    first_name VARCHAR(128),
    last_name VARCHAR(128),
    email VARCHAR(256),
    dob DATETIME,
    PRIMARY KEY (user_id),
    INDEX (created)
);

CREATE TABLE user_phone (
    phone_id INT UNSIGNED AUTO_INCREMENT,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT UNSIGNED NOT NULL,
    phone VARCHAR(32),
    PRIMARY KEY (phone_id),
    INDEX (created),
    INDEX (user_id)
);

/* Create a query that returns results formatted as follows: */
+------------+-----------+-----------------------+------------+------------------------------------------+
| first_name | last_name | email                 | dob        | phones                                   |
+------------+-----------+-----------------------+------------+------------------------------------------+
| John       | Doe       | john@doe.com          | 1987-01-23 | 602-555-1212, 480-341-0658               |
| Jenny      | Smith     | jenny1974@hotmail.com | 1974-05-12 | 623-894-9034, 602-867-5309, 602-555-0012 |
+------------+-----------+-----------------------+------------+------------------------------------------+

