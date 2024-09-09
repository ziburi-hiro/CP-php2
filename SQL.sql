INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES('hiro','test02@example.com','ないよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES('taro','test03@example.com','ないよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES('tes','test04@example.com','ないよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES('aaa','test05@example.com','ないよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES('brd','test06@example.com','ないよ',sysdate());

SELECT * FROM gs_an_table;
SELECT name,email FROM gs_an_table;
SELECT * FROM gs_an_table WHERE id=1;
SELECT * FROM gs_an_table WHERE id>=2;

SELECT * FROM gs_an_table ORDER BY id DESC;

INSERT INTO gs_an_table(name,email,naiyo,indate)VALUES(:name,:email,:naiyo,sysdate());
