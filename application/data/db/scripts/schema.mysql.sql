CREATE TABLE guestbook (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    email VARCHAR(32) NOT NULL DEFAULT 'noemail@test.com',
    comment TEXT NULL,
    created DATETIME NOT NULL
);
 
CREATE INDEX id ON guestbook(id);