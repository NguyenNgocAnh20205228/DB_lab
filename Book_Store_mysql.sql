
CREATE DATABASE BK_Book_Store;  /*Tạo cơ sở dữ liệu*/
USE BK_Book_Store  ;/*Sử dụng cơ sở dữ liệu */


/* Tạo bảng */
/*
CSDL gồm 5 bảng:
-Book: Thông tin của sách 
-Customer: Thông tin của khách hàng
-Order_i: Thông tin đơn hàng 
-Book-order: Danh sách những cuốn sách có trong đơn hàng
-Adminstrator: Lưu tài khoản admin
*/
use app;

/*Bảng sách*/
CREATE TABLE Book(
book_id int, primary key(book_id) , /*Khóa chính book_id*/
book_name varchar(255),
price int,
publication_date date,
quantity int,
publisher_name varchar(255),
author_name varchar(255),
image varchar(255),
category varchar(255),
description varchar(2000),
check (quantity>0) /*Kiểm tra số lượng sách lớn hơn 0*/
)
;

/*Bảng khách hàng*/
CREATE TABLE Customer( 
customer_id int,
account varchar(255),
password varchar(255),
name varchar(255),
sex varchar(10),
dob date, 
email varchar(255),
phone_number varchar(11),
address varchar(255),
primary key(customer_id) /*Khóa chính customer_id*/
);

/*Bảng đơn hàng*/
CREATE TABLE Order_i(
order_id int,
customer_id int,
purchased varchar(255),
shipping_status varchar(255),
order_date date,
shipping_date date,
primary key(order_id), /*Khóa chính order_id*/
CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES Customer(customer_id) /*Khóa ngoài customer_id để kết nối bảng Customer*/
)
;
CREATE TABLE  Book_order(
order_id int,
book_id int,
quantity int,
primary key(order_id,book_id), /*Khóa chính order_id và book_id*/
CONSTRAINT fk_book_id FOREIGN KEY (book_id) REFERENCES Book(book_id), /*Khóa ngoài book_id để kết nối bảng Book*/
CONSTRAINT fk_order_id FOREIGN KEY (order_id) REFERENCES Order_i(order_id) /*Khóa ngoài order_i để kết nối bảng Order*/
)
;
CREATE TABLE  Administrator(
account varchar(255),
password varchar(255)
);
CREATE TABLE  admin_i(
tk varchar(255),
mk varchar(255)
);
insert into admin_i(tk,mk)
values('admin','1234');
--to_date('2022/6/7','%y/%m/%d')
insert into Book(book_id,book_name,price,publication_date,quantity,publisher_name,author_name,image,category,description) values 
(1,'The Heart of the Deal','157000','2022/6/7',100,'Alcove Press','Lindsay MacMillan','1.jpg','Romance','Perfect for fans of Emily Giffin and Jojo Moyes, Lindsay MacMillan''s debut novel deftly captures the feeling of being adrift in your late twenties, with poignant commentary on female friendships, mental health, and what happiness really looks like.
Rae is in a romantic recession.
The Wall Street banker is single in New York City and overwhelmed by the pressure to scramble up the corporate and romantic ladders. Feeling her biological clock ticking, she analyzes her love life like a business deal and vows to lock in a husband before her 30th birthday.
The Manhattan dating app scene has as many ups and downs as the stock market, and outsourcing dates to an algorithm isn''t exactly Rae''s idea of romance. She considers cutting her losses, but her friends help her stay invested, boosting her spirits with ice cream and cheap wine that they share in their sixth-floor walk-up while recapping cringe-worthy dates.
And then Rae meets Dustin, a poetic soul trapped in a business suit, just like her. She starts to hear wedding bells, but Dustin''s struggles with depression will test their relationship, and no amount of financial modeling can project what their future will look like.
Can Rae free herself from the idea she had of what thirty was supposed to look like and let love breathe on its own timeline? Or is she too conditioned to stay on the "right track" to follow her unpaved intuition?
Moving and timely, The Heart of the Deal is the story of one woman''s reckoning with what success really is in a city, an industry, and a relationship whose low lows continually challenge the enchantment of the high highs.
'),
(2,'Moon Knight Omnibus Vol. 2','116000','2022/5/10',100,'Marvel','Doug Moench','2.jpg','Superheroes','The end of the beginning! Doug Moench and Bill Sienkiewicz''s landmark, critically acclaimed run comes to a close. But first Moon Knight must survive threats old and new -- including the madness of Morpheus, the deadly return of Stained Glass Scarlet, the devious Black Spectre and a rematch against the Werewolf by Night! Moon Knight teams with Iron Man, Brother Voodoo, Doctor Strange, Spider-Man and more -- but when tragedy strikes, the dead walk and secrets come to light, will Moon Knight meet his final rest? Or will he rise again, reinvigorated as the Fist of Khonshu?'),
(3,'The Calculating Stars: A Lady Astronaut Novel','176000','2018/7/3',100,'Tor Books','Mary Robinette Kowal','3.jpg','Science Fiction','On a cold spring night in 1952, a huge meteorite fell to earth and obliterated much of the east coast of the United States, including Washington D.C. The ensuing climate cataclysm will soon render the earth inhospitable for humanity, as the last such meteorite did for the dinosaurs. This looming threat calls for a radically accelerated effort to colonize space, and requires a much larger share of humanity to take part in the process.
Elma York''s experience as a WASP pilot and mathematician earns her a place in the International Aerospace Coalition''s attempts to put man on the moon, as a calculator. But with so many skilled and experienced women pilots and scientists involved with the program, it doesn''t take long before Elma begins to wonder why they can''t go into space, too.
Elma''s drive to become the first Lady Astronaut is so strong that even the most dearly held conventions of society may not stand a chance against her.'),
(4,'The Final Girl Support Group','158000','2022/6/14',100,'Berkley Books','Grady Hendrix','4.jpg','Horror','In horror movies, the final girls are the ones left standing when the credits roll. They made it through the worst night of their lives...but what happens after?
Like his bestselling novel The Southern Book Club''s Guide to Slaying Vampires, Grady Hendrix''s latest is a fast-paced, frightening, and wickedly humorous thriller. From chain saws to summer camp slayers, The Final Girl Support Group pays tribute to and slyly subverts our most popular horror films--movies like The Texas Chainsaw Massacre, A Nightmare on Elm Street, and Scream.
Lynnette Tarkington is a real-life final girl who survived a massacre. For more than a decade, she''s been meeting with five other final girls and their therapist in a support group for those who survived the unthinkable, working to put their lives back together. Then one woman misses a meeting, and their worst fears are realized--someone knows about the group and is determined to rip their lives apart again, piece by piece.
But the thing about final girls is that no matter how bad the odds, how dark the night, how sharp the knife, they will never, ever give up.'),
(5,'Jujutsu Kaisen, Vol. 8: Volume 8','92000','2022/2/2',100,'Viz Media','Gege Akutami','5.jpg','Manga','To gain the power he needs to save his friend from a cursed spirit, Yuji Itadori swallows a piece of a demon, only to find himself caught in the midst of a horrific war of the supernatural!
In a world where cursed spirits feed on unsuspecting humans, fragments of the legendary and feared demon Ryomen Sukuna were lost and scattered about. Should any demon consume Sukuna''s body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of jujutsu sorcerers who exist to protect the precarious existence of the living from the supernatural!
Yuji Itadori and his classmates are fighting two of the three reincarnated Cursed Womb: Death Paintings brothers. Meanwhile, Megumi Fushiguro loses consciousness after finally defeating a special grade curse that possessed a Sukuna finger! Whoever wins the fight between Itadori and the brothers will be the one to secure the prized finger!')
;

insert into Customer(customer_id,account,password,name,sex,dob,email,phone_number,address) values
(1,'anhnon','1234','Nguyen Ngoc Anh','male','2000/5/6','abc@gmail.com','098234232','Hai Ba Trung, Ha Noi'),
(2,'anhga','1234','Ha Buu Dinh','male','2002/12/26','habuudinh@gmail.com','0917973399','Thanh Xuan, Ha Noi');


insert into Order_i(order_id,customer_id,purchased,shipping_status,order_date,shipping_date) values
(1,1,'yes','yes','2020/3/2','2020/3/14'),
(2,2,'no','yes','2020/5/6','2020/5/12'),
(3,1,'yes','no','2020/12/5','2020/12/10');

insert into Book_order(order_id,book_id,quantity) values
(1,4,6),
(2,5,2),
(3,2,1),
(1,2,5);

insert into Administrator(account, password) values
('Anhnn', 1234),
('Dinhhb', 1234),
('Duongnd', 1234),
('Minhdx', 1234);