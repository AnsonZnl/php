Git bash 链接mysql 数据库
winpty mysql -uroot -p
1.建数据库语句 
create database Message;
//创建 数据库   数据库名字

使用数据库
use Message;
//使用数据库 名字

1.创建表语句
create table hha (id int auto_increment,name varchar(15),age int,sex char(2),primary key(id));
//          名称   id 类型      自增     名字 可变的最多15                         主键数据唯一标示

2.删除表
drop table hha;

3.修改表
增加列
alter table hha add place varchar(20);
删除列
alter table hha drop place;

4.向数据表中插入数据
insert into hha(name,age,sex) values("zhang","10","male");

5.删除数据表中的数据
 delete  from hha where name="zhang";

6.修改表中的数据
update hha set name="www" where name="zhang";

7.查询数据表中的数据
select * from hha;
**SQL语句要以分号结尾**
