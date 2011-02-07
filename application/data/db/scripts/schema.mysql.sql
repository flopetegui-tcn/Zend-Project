CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    email VARCHAR(32) NOT NULL DEFAULT 'noemail@test.com',
    password
    created DATETIME NOT NULL
);
 
CREATE INDEX id ON guestbook(id);