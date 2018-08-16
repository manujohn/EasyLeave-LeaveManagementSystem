create table userv(id varchar(15),pass varchar(20),typ varchar(2));



create table lhistory(lid int NOT NULL AUTO_INCREMENT primary key,id varchar(15),fdate date,tdate date,reason varchar(100),duty int(2),image varchar(20),status varchar(10));

create table cses6(da varchar(10),t1 varchar(15),t2 varchar(15),t3 varchar(15),t4 varchar(15),t5 varchar(15),t6 varchar(15),t7 varchar(15));


create table sprofile(id varchar(15),rol varchar(2),aname varchar(20),dep varchar(5),sem varchar(3));


create table tprofile(id varchar(15),aname varchar(20),dep varchar(10));


create table hprofile(id varchar(15),aname varchar(20));


create table hod(id varchar(15),dep varchar(10));


create table leav(id varchar(15),s1 int DEFAULT 0,s2 int DEFAULT 0,s3 int DEFAULT 0,s4 int DEFAULT 0,s5 int DEFAULT 0,s6 int DEFAULT 0,s7 int DEFAULT 0);
