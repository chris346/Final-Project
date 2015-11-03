drop database if exists abunai;
create database abunai;
use abunai;

create table students (
	studentID int AUTO_INCREMENT primary key not null,
	studentName varchar(255) not null,
	studentPhone int
);

insert into students (studentName, studentPhone) values ("Eddie", "555-555-5555");
insert into students (studentName, studentPhone) values ("Brian", "555-555-5555");
insert into students (studentName, studentPhone) values ("Kyler", "555-555-5555");
insert into students (studentName, studentPhone) values ("Christopher", "555-555-5555");
insert into students (studentName, studentPhone) values ("Hieu", "555-555-5555");
insert into students (studentName, studentPhone) values ("Chance", "555-555-5555");
insert into students (studentName, studentPhone) values ("Keenan", "555-555-5555");
insert into students (studentName, studentPhone) values ("Kobe", "555-555-5555");
insert into students (studentName, studentPhone) values ("Zachary", "555-555-5555");
insert into students (studentName, studentPhone) values ("Mackenzie", "555-555-5555");
insert into students (studentName, studentPhone) values ("Joshua", "555-555-5555");
insert into students (studentName, studentPhone) values ("Louie", "555-555-5555");
insert into students (studentName, studentPhone) values ("James", "555-555-5555");
insert into students (studentName, studentPhone) values ("Damien", "555-555-5555");
insert into students (studentName, studentPhone) values ("Christopher", "555-555-5555");
insert into students (studentName, studentPhone) values ("Mike", "555-555-5555");
insert into students (studentName, studentPhone) values ("Amelia", "555-555-5555");
insert into students (studentName, studentPhone) values ("Mary", "555-555-5555");
insert into students (studentName, studentPhone) values ("Delfina", "555-555-5555");
insert into students (studentName, studentPhone) values ("Cathrine", "555-555-5555");
insert into students (studentName, studentPhone) values ("Carla", "555-555-5555");


--------------------------------------------------------------------------------------------------------

create table notices (
	noticeID int AUTO_INCREMENT primary key not null,
	noticeContent varchar(255) not null
	
);

insert into notices (noticeContent) values ("Class will be no class oct. 31st. Happy Halloween!");
insert into notices (noticeContent) values ("Don't forget to sign up for naga tournament. Today is the last day");
insert into notices (noticeContent) values ("special guest intructor teaching advanced techniques on x-guards tonight");
insert into notices (noticeContent) values ("people are leaving too much trash behind. Please clean up after yourselves when leaving");
insert into notices (noticeContent) values ("there will be a cookout after class tomorrow evening. Bring your appetites");
insert into notices (noticeContent) values ("Watch me whip, watch me nae nae. Watch me whip whip watch me nae nae");


--------------------------------------------------------------
drop database if exists abunai;
create database abunai;
use abunai;
drop table if exists students;
create table students (
	studentID int AUTO_INCREMENT primary key not null,
	studentName varchar(255) not null,
	studentRank varchar(255) not null,
	studentPhone int,
	img1 varchar(255),
	img2 varchar(255),
	img3 varchar(255),
	img4 varchar(255),
	img5 varchar(255),
	coming boolean default 0
	
);

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Batman", "black", "555 555 5555", "batman.jpg", "batman2.jpg", "batman3.jpg", "batman4.jpg", "batman5.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Ironman", "black", "555 555 5555", "ironman.jpg", "ironman2.jpg", "ironman3.jpg", "ironman4.jpg", "ironman5.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Hulk", "black", "555 555 5555", "hulk.jpg", "hulk2.jpg", "hulk3.jpg", "hulk4.jpg", "hulk5.jpg");

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Joker", "brown", "555 555 5555", "joker.jpg", "joker2.jpg", "joker3.jpg", "joker4.jpg", "joker5.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Deadpool", "brown", "555 555 5555", "deadpool.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Harley", "brown", "555 555 5555", "harley.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Superman", "purple", "555 555 5555", "superman.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Captain America", "purple", "555 555 5555", "captainAmerica.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Ghostrider", "purple", "555 555 5555", "ghostrider.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Spiderman", "purple", "555 555 5555", "spiderman.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Nightwing", "blue", "555 555 5555", "nightwing.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Black Widow", "blue", "555 555 5555", "blackWidow.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Hell Boy", "blue", "555 555 5555", "hellBoy.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Wolverine", "blue", "555 555 5555", "wolverine.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Gambit", "blue", "555 555 5555", "gambit.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Bane", "blue", "555 555 5555", "bane.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Thing", "blue", "555 555 5555", "thing.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Silver Surfer", "white", "555 555 5555", "silverSurfer.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Psylocke", "white", "555 555 5555", "psylocke.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Thor", "white", "555 555 5555", "thor.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Wonder Woman", "white", "555 555 5555", "wonderWoman.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Ironman", "white", "555 555 5555", "ironman.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("War Machine", "white", "555 555 5555", "warMachine.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Quicksilver", "white", "555 555 5555", "quicksilver.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Flash", "white", "555 555 5555", "flash.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Blink", "white", "555 555 5555", "blink.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Antman", "white", "555 555 5555", "antman.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Colossus", "white", "555 555 5555", "collosus.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");

insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Jubilee", "kids", "555 555 5555", "jubilee.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Robin", "kids", "555 555 5555", "robin.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");
insert into students (studentName, studentRank, studentPhone, img1, img2, img3, img4, img5) values ("Supergirl", "kids", "555 555 5555", "supergirl.jpg", "na.jpg", "na.jpg", "na.jpg", "na.jpg");


