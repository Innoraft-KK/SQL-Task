create database emp;
use emp
CREATE TABLE employee_code_table (employee_code VARCHAR(20) PRIMARY KEY,employee_code_name VARCHAR(50) NOT NULL UNIQUE,employee_domain VARCHAR(50));
insert into employee_code_table values("su_john","ru_john","Java"), ("su_daenerys","du_daenerys","PHP"), ("su_cersei","ru_cersei","Java"), ("su_tyrion","tu_tyrion","Angular JS");
CREATE TABLE employee_details_table (employee_id VARCHAR(10) PRIMARY KEY,employee_first_name VARCHAR(50) NOT NULL,employee_last_name VARCHAR(50) NOT NULL,graduation_percentile INT NOT NULL);

insert into employee_details_table values("RU122","John","Snow",60), ("RU123","Daenerys","Targaryen",88), ("RU124","Cersei","Lannister",72), ("RU125","Tyrion","Lannister",64);

CREATE TABLE employee_salary_table ( employee_id VARCHAR(10), employee_salary VARCHAR(10), employee_code VARCHAR(20), FOREIGN KEY (employee_code) REFERENCES employee_code_table (employee_code), FOREIGN KEY (employee_id) REFERENCES employee_details_table (employee_id));

