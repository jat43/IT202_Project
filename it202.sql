/*drop table if exists clients;
create table clients
  (
    clientId INT(11) primary key auto_increment,
    clientName varchar(32),
    clientPW   varchar(64),
    activeSession varchar(128),
    firstLogin datetime,
    lastLogin  datetime
  );
  
drop table if exists products;
create table products
  (
    productId INT(11) primary key auto_increment,
    productName varchar(32),
    productImage varchar(255),
    productPricing INT(11),
    productReview varchar(64),
    productStock INT(11),
    tags varchar(64)
  );
*/

insert into products (productName, productImage, productPricing, productReview, productStock, tags) values ("Fuchai 200W", 
"https://www.elementvape.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/i/sigelei_fuchai_200w_tc_box_mod_cover.jpg",
70,
"http://www.vapemodsreviews.com/sigelei-fuchai-200w/",
10,
"red");

insert into products (productName, productImage, productPricing, productReview, productStock, tags) values ("SMOK R-Steam Mini",
"http://www.vapemodsreviews.com/wp-content/uploads/2016/03/SMOK-R-Steam-Mini-Red-300x317.jpg",
22,
"http://www.vapemodsreviews.com/smok-r-steam-mini/",
25,
"bitchin");

insert into products (productName, productImage, productPricing, productReview, productStock, tags) values ("SnowWolf 75W Mini",
"http://www.vapemodsreviews.com/wp-content/uploads/2015/11/SnowWolf-75W-Mini-300x300.jpg",
45,
"http://www.vapemodsreviews.com/snowwolf-75w-mini/",
25,
"Gayyyyyyy");

drop table if exists orders;
create table orders
  (
    orderId INT(11) primary key auto_increment,
    name varchar(64),
    Address varchar(128),
    itemName varchar(128),
    itemNum INT(11)
    );
    
insert into orders (Address, itemName, itemNum) values (
  "55 walter street Paterson NJ",
  "SMOK R-Steam",
  2);
  
 