CREATE TABLE STUDENT2
(STUDENT_ID INTEGER NOT NULL UNIQUE,
SURNAME CHAR (25) NOT NULL,
NAME CHAR (10) NOT NULL,
STIPEND INTEGER,
KURS INTEGER,
CITY CHAR (15),
BIRTHDAY DATE,
UNIV_ID INTEGER);

INSERT INTO STUDENT2 (STUDENT_ID,SURNAME, NAME)
VALUES (11,111,1111)

INSERT INTO STUDENT2 (STUDENT_ID,SURNAME, NAME)
VALUES (11,'���','���')
