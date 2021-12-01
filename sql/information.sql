drop database information ;
create database information;
use information;


/*建表*/
/*学生*/
create table student
(
    s_id varchar(20),
	name varchar(20) not null,
	gender varchar(5),
	class_name varchar(20),
	date_birth varchar(20),
	data_enrollment varchar(20),
	native_place varchar(20),
	nationality varchar(20),
	home_address varchar(20),
	users_name varchar(20),
	primary key(s_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*用户*/
create table users
( 
     userName char(20) not null unique, 
     password char(20) not null, 
     name varchar(30),
     primary key(userName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- select * from users;

/*课程*/
create table course
(   
    course_name varchar(20),
	course_id varchar(20),
	semester varchar(20),
	year numeric(4,0),
	primary key(course_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*学生-选课*/
create table section
(
    s_id varchar(20),
	course_id varchar(20),
	score int,
	primary key(s_id,course_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*社会实践*/
create table social_practice
(
    practice_id varchar(20),
	practice_experience varchar(20),
	date varchar(20),
	place varchar(20),
	pracetice_time varchar(20),
	instructor varchar(20),
	primary key(practice_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table student_social_practice
(	
	s_id varchar(20),
	practice_id varchar(20),
	primary key(practice_id,s_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create view  student_course as select s_id,course_id,course_name,semester,year,score from student natural join course natural join section;
create view  student_practice as select s_id,practice_id,practice_experience,date,place,pracetice_time,instructor  from student natural join social_practice natural join student_social_practice;


/*插入数据*/
/*学生*/

insert into student values('201909101','杨丽丽','女','会计1903班','2000.09.09','2019.09.07','广东省深圳市','汉族','广东省深圳市南山区大河街道','Anna');
insert into student values('201909102','梵高','男','软件工程1901班','2001.07.23','2019.09.07','河南省安阳市','汉族','河南省安阳市北区光明街道','Hello');
insert into student values('201909103','蔡健雅','女','法学1902班','2000.03.02','2019.09.07','黑龙江省齐齐哈尔市','满族','黑龙江省齐齐哈尔市龙沙区雨亭街道','Ygrittee');
insert into student values('201909104','张震岳','男','软件工程1904班','2001.11.08','2019.09.07','湖南省长沙市','汉族','广东省深圳市龙华区沙河街道','ZZ');
insert into student values('201909105','迪丽热巴','女','会计1905班','2000.03.13','2019.09.07','新疆省乌鲁木齐市','维吾尔族','广州省广州市天河区天河北路','REb');
insert into student values('201909106','莫文蔚','女','会计1905班','2001.10.09','2019.09.07','广东省佛山市','汉族','广东省佛山市顺德区大得街区','HaHa');
insert into student values('201909107','何以琛','男','法学1901班','2000.11.12','2019.09.07','浙江省杭州市','汉族','上海市松江区莱特小城','Opijo');


/*用户*/
insert into users values('20191003027','123','邬坤源');
insert into users values('20191003155','123','sanen');


/*课程*/
insert into course values('数据结构','001','Spring','2019');
insert into course values('JAVA','002','Spring','2020');
insert into course values('法律基础','003','Fall','2019');
insert into course values('微观经济学','004','Fall','2020');
insert into course values('宏观经济学','005','Spring','2019');

/*学生-选课*/
insert into section values('201909101','001',98);
insert into section values('201909103','001',92);
insert into section values('201909104','003',96);
insert into section values('201909105','004',96);
insert into section values('201909106','005',80);
insert into section values('201909107','006',69);



/*社会实践*/
insert into social_practice values('001','三下乡','暑假','清远市','50','卢思浩');
insert into social_practice values('002','关爱老人每周行活动','每周末','天河区敬老院','30','Baby');
insert into social_practice values('003','寒宣','寒假','学生高中','30','Stark');
insert into social_practice values('004','省长杯',' 4月','广外','30','Baby');
insert into social_practice values('005','亚运会','暑假','学生高中','30','Stark');
insert into social_practice values('006','广交会','暑假','广州琶洲','30','Baby');
insert into social_practice values('007','社区核酸检测支援','寒假','小谷围街道','30','Stark');
/*学生-社会实践*/
insert into student_social_practice values('201909101','001');
insert into student_social_practice values('201909102','001');
insert into student_social_practice values('201909103','003');
insert into student_social_practice values('201909104','002');
insert into student_social_practice values('201909105','005');
insert into student_social_practice values('201909106','006');
insert into student_social_practice values('201909107','007');
