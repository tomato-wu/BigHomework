drop database information;
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

/*班级*/
create table class
(
    class_name varchar(20),
	major varchar(20),
	counselor varchar(20) not null
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
    course_id varchar(20),
    course_name varchar(20),
	course_code varchar(20),
	semester varchar(20),
	year numeric(4,0),
	primary key(course_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*学生-选课*/
create table section
(
    s_id varchar(20),
	course_id varchar(20),
	course_name varchar(20),
	grade varchar(5),
	primary key(s_id,course_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*综测评分*/
create table com_test
(
    event varchar(20),
	event_id varchar(20),
	score varchar(20),
	semester varchar(20),
	year numeric(4,0),
	primary key(event_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*学生-综合测评*/
create table s_com_test
(
    s_id varchar(20),
	event varchar(20),
	event_id varchar(20),
	score varchar(20),
	primary key(s_id,event_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*奖学金*/
create table scholarship
(
    category varchar(20),
	amount numeric(8,2),
	primary key(category)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*学生-奖学金*/
create table student_scholarship
(
    s_id varchar(20),
	total_grade varchar(20),
	total_score varchar(20),
	category varchar(20),
	primary key(s_id,category)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*贷款*/
create table loan
(
    loan_form varchar(20),
	loan_bank varchar(20),
	repayment_method varchar(20),
	loan_amount numeric(8,2),
	primary key(loan_form,loan_bank,repayment_method,loan_amount)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*学生-贷款*/
create table student_loan
(
    s_id varchar(20),
	loan_form varchar(20),
	loan_bank varchar(20),
	repayment_method varchar(20),
	loan_amount numeric(8,2),
	primary key(s_id,loan_form,loan_bank,repayment_method,loan_amount)
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

/*学生-社会实践*/
create table student_social_practice
(
    s_id varchar(20),
	practice_id varchar(20),
	primary key(s_id,practice_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



/*插入数据*/
/*学生*/
insert into student values('201909100','李晓宁','男','软件工程1904班','2000.01.10','2019.09.07','广东省广州市','汉族','广东省广州市番禺区花园街道','Peter');
insert into student values('201909101','杨丽丽','女','会计1903班','2000.09.09','2019.09.07','广东省深圳市','汉族','广东省深圳市南山区大河街道','Anna');
insert into student values('201909102','梵高','男','软件工程1901班','2001.07.23','2019.09.07','河南省安阳市','汉族','河南省安阳市北区光明街道','Hello');
insert into student values('201909103','蔡健雅','女','法学1902班','2000.03.02','2019.09.07','黑龙江省齐齐哈尔市','满族','黑龙江省齐齐哈尔市龙沙区雨亭街道','Ygrittee');
insert into student values('201909104','张震岳','男','软件工程1904班','2001.11.08','2019.09.07','湖南省长沙市','汉族','广东省深圳市龙华区沙河街道','ZZ');
insert into student values('201909105','迪丽热巴','女','会计1905班','2000.03.13','2019.09.07','新疆省乌鲁木齐市','维吾尔族','广州省广州市天河区天河北路','REb');
insert into student values('201909106','莫文蔚','女','会计1905班','2001.10.09','2019.09.07','广东省佛山市','汉族','广东省佛山市顺德区大得街区','HaHa');
insert into student values('201909107','何以琛','男','法学1901班','2000.11.12','2019.09.07','浙江省杭州市','汉族','上海市松江区莱特小城','Opijo');

/*班级*/
insert into class values('Comp.Sci','软件工程1901班','Stark');
insert into class values('Comp.Sci','软件工程1904班','Ella');
insert into class values('Accountant','会计1905班','卢思浩');
insert into class values('Accountant','会计1903班','Baby');
insert into class values('Law','法学1901班','Alin');
insert into class values('Law','法学1902班','赵默笙');

/*用户*/
insert into users values('20191003027','123','邬坤源');



/*课程*/
insert into course values('001','数据结构','CS-001','Spring','2019');
insert into course values('002','JAVA','CS-002','Spring','2020');
insert into course values('003','法律基础','Law-001','Fall','2019');
insert into course values('004','微观经济学','Acca-001','Fall','2020');
insert into course values('005','宏观经济学','Acca-002','Spring','2019');

/*学生-选课*/
insert into section values('2019001','CS-001','数据结构','89');
insert into section values('2019003','CS-001','数据结构','78');
insert into section values('2019003','CS-002','JAVA','88');
insert into section values('2019005','CS-002','JAVA','90');
insert into section values('2019002','Acca-002','宏观经济学','80');
insert into section values('2019002','Acca-001','微观经济学','69');
insert into section values('2019007','Acca-002','宏观经济学','85');
insert into section values('2019006','Acca-002','宏观经济学','88');
insert into section values('2019004','Law-001','法律基础','89');
insert into section values('2019008','Law-001','法律基础','90');


/*综测评分*/
insert into com_test values('参加讲座','Com_test-1','1','Spring','2019');
insert into com_test values('参加比赛','Com_test-2','5','Fall','2019');
insert into com_test values('企业参观','Com_test-3','1','Spring','2018');
insert into com_test values('班委','Com_test-4','5','Spring','2018');
insert into com_test values('参加社团','Com_test-5','5','Fall','2018');
insert into com_test values('志愿者','Com_test-6','2','Fall','2018');

/*学生-综合测评*/
insert into s_com_test values('2019001','Com_test-1','参加讲座','1');
insert into s_com_test values('2019001','Com_test-3','企业参观','1');
insert into s_com_test values('2019002','Com_test-1','参加讲座','1');
insert into s_com_test values('2019003','Com_test-4','班委','5');
insert into s_com_test values('2019003','Com_test-6','志愿者','2');
insert into s_com_test values('2019003','Com_test-1','参加讲座','1');
insert into s_com_test values('2019004','Com_test-2','参加比赛','5');
insert into s_com_test values('2019005','Com_test-2','参加比赛','5');
insert into s_com_test values('2019005','Com_test-4','班委','5');
insert into s_com_test values('2019006','Com_test-5','参加社团','5');
insert into s_com_test values('2019007','Com_test-5','参加社团','5');
insert into s_com_test values('2019008','Com_test-5','参加社团','5');
insert into s_com_test values('2019008','Com_test-6','志愿者','2');

/*奖学金*/
insert into scholarship values('国家奖学金','2000');
insert into scholarship values('一等奖','2000');
insert into scholarship values('二等奖','1000');
insert into scholarship values('三等奖','600');
insert into scholarship values('安慰奖','300');

/*学生-奖学金*/
insert into student_scholarship values('2019001','89','2','国家奖学金');
insert into student_scholarship values('2019002','74.5','1','安慰奖');
insert into student_scholarship values('2019003','83','8','二等奖');
insert into student_scholarship values('2019004','89','5','二等奖');
insert into student_scholarship values('2019005','90','10','一等奖');
insert into student_scholarship values('2019006','88','5','三等奖');
insert into student_scholarship values('2019007','85','5','三等奖');
insert into student_scholarship values('2019008','91.5','7','一等奖');

/*助学贷款*/
insert into loan values('国家助学贷款','中国银行','银行还款','50000');
insert into loan values('国家助学贷款','中国银行','支付宝还款','70000');
insert into loan values('生源地信用助学贷款','建设银行','支付宝还款','60000');
insert into loan values('生源地信用助学贷款','中国银行','支付宝还款','70000');

/*学生-贷款*/
insert into student_loan values('2019001','国家助学贷款','中国银行','银行还款','50000');
insert into student_loan values('2019004','生源地信用助学贷款','中国银行','支付宝还款','70000');

/*社会实践*/
insert into social_practice values('001','三下乡','暑假','清远市','50','卢思浩');
insert into social_practice values('002','关爱老人每周行活动','每周末','天河区敬老院','30','Baby');
insert into social_practice values('003','寒宣','寒假','学生高中','30','Stark');
insert into social_practice values('004','省长杯',' 4月','广外','30','Baby');
insert into social_practice values('005','亚运会','暑假','学生高中','30','Stark');
insert into social_practice values('006','广交会','暑假','广州琶洲','30','Baby');
insert into social_practice values('007','社区核酸检测支援','寒假','小谷围街道','30','Stark');
/*学生-社会实践*/
insert into student_social_practice values('2019001','social-001');
insert into student_social_practice values('2019002','social-001');
insert into student_social_practice values('2019003','social-001');
insert into student_social_practice values('2019004','social-001');
insert into student_social_practice values('2019005','social-001');
insert into student_social_practice values('2019006','social-002');
insert into student_social_practice values('2019006','social-003');
insert into student_social_practice values('2019007','social-002');
insert into student_social_practice values('2019007','social-003');
insert into student_social_practice values('2019008','social-001');