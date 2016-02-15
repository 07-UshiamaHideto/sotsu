mysql -u root -p

create database shiori_plan;

grant all on shiori_plan.* to dbuser@localhost identified by 'hu20hius';

use shiori_plan

create table users (
  u_id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(64),
  name varchar(64),
  memo varchar(1024),
  adress varchar(1024),
  created datetime,
  modified datetime,
  delate datetime
);

desc users;

INSERT INTO users (u_id, email, password, name, memo, created, modified) VALUES(NULL,'ushi@h.email.ne.jp','ushiushi','ウシアマ','入力テスト中です。入力テスト中です。入力テスト中です',SYSDATE() ,SYSDATE());
INSERT INTO users (u_id, email, password, name, memo, created, modified) VALUES(NULL,'hi20.ushi@gmail.com','ushiushi2','アマちゃん','入力テスト中です。入力テスト中です。入力テスト中です２２２２２',SYSDATE() ,SYSDATE());
INSERT INTO users (u_id, email, password, name, adress, memo, created, modified) VALUES(NULL,'ushi@cd.mbn.or.jp','ushiushi3','usshy','東京都小金井市東町４－４－８','３３３３３入力テスト中です。入力テスト中です。入力テスト中です',SYSDATE() ,SYSDATE());
create table schedule (
  s_id int not null auto_increment primary key,
  s_name varchar(64),
  u_id int,
  s_memo varchar(1024),
  adress varchar(1024),
  start datetime,
  finish datetime,
  pub_show int,
  created datetime,
  modified datetime,
  delate datetime
);

INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'新潟散歩',1,'新潟市内をゆっくり散策！！',CAST( '2016-02-13 00:00:00' AS DATETIME),CAST( '2016-02-15 00:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());
INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'CP+2016視察！！',1,'写真関連の最新情報を収集するぞ！！！',CAST( '2016-02-27 00:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());
INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'レッドブルエアレース 2016',1,'今年も熱い空の戦いを見に行くぞ！',CAST( '2016-06-4 00:00:00' AS DATETIME),CAST( '2016-06-5 00:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());
INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'2016新年会！LIGのオフィスで飲んじゃお〜（仮タイトル）',1,'IoT界隈の人を集めて新年会をやろうと思います。IoTLT、JS Board Shibuya、おうちハック、IoTあるじゃん辺りのコミュニティの人達を中心に、IoT界隈に熱い人達に声をかけてみます。',CAST( '2016-01-31 00:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());
INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'御柱祭り',1,'　樹齢150年を優に超えるモミの大木。山の中から、選ばれた16本のモミだけが御柱となり、 里に曳き出され、7年毎の寅と申の年に諏訪大社の社殿の四隅に建てられます。',CAST( '2016-04-2 00:00:00' AS DATETIME),CAST( '2016-04-4 00:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());
INSERT INTO schedule (s_id, s_name, u_id,s_memo,start ,finish , pub_show, created, modified) VALUES(NULL,'御柱祭り 里引き',1,'樹齢150年を優に超えるモミの大木。山の中から、選ばれた16本のモミだけが御柱となり、 里に曳き出され、7年毎の寅と申の年に諏訪大社の社殿の四隅に建てられます。',CAST( '2016-05-3 00:00:00' AS DATETIME),CAST( '2016-05-5 00:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());


create table event (
  e_id int not null auto_increment primary key,
  e_name varchar(64),
  u_id int,
  e_memo varchar(1024),
  adress varchar(1024),
  start datetime,
  finish datetime,
  pub_show int,
  created datetime,
  modified datetime,
  delate datetime
);
INSERT INTO event (e_id, e_name, u_id,e_memo,adress ,start ,finish , pub_show, created, modified) VALUES(NULL,'CP+2016',1,'CP+は4つのコンセプトを掲げて、カメラ・写真映像分野における技術・文化・産業のあらゆる進化を目指します。','パシフィコ横浜',CAST( '2016-02-25 12:00:00' AS DATETIME),CAST( '2016-02-28 17:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());
INSERT INTO event (e_id, e_name, u_id,e_memo,adress ,start ,finish , pub_show, created, modified) VALUES(NULL,'レッドブル・エアレース 千葉 2016',1,'国際航空連盟(FAI)公認の飛行機レース世界選手権、全8戦の第3戦目。 世界トップクラスのレースパイロット14名が参加。','千葉県立幕張海浜公園',CAST( '2016-06-4 10:00:00' AS DATETIME),CAST( '2016-06-5 16:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());

INSERT INTO event (e_id, e_name, u_id,e_memo,adress ,start ,finish , pub_show, created, modified) VALUES(NULL,'2016新年会！LIGのオフィスで飲んじゃお?（仮タイトル）',1,'2016新年会！LIGのオフィスで飲んじゃお?（仮タイトル）','LIG inc',CAST( '2016-01-31 18:00:00' AS DATETIME),CAST( '2016-01-31 22:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE()),(NULL,'IoT縛りの勉強会！ IoTLT vol.12 ＠ デジタルハリウッド ',1,'業界初？IoT縛りの勉強会/LT会です！ 大好評を受けての第11回開催！','LIG inc',CAST( '2016-02-10 19:30:00' AS DATETIME),CAST( '2016-02-10 22:30:00' AS DATETIME),1,SYSDATE() ,SYSDATE());

create table place (
  p_id int not null auto_increment primary key,
  p_name varchar(64),
  u_id int,
  p_memo varchar(1024),
  adress varchar(1024),
  start datetime,
  finish datetime,
  pub_show int,
  created datetime,
  modified datetime,
  delate datetime
);

INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'東京駅',1,'東京駅','東京駅',1,SYSDATE() ,SYSDATE());
INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'東小金井駅',1,'JR東日本 東小金井駅','東小金井駅',1,SYSDATE() ,SYSDATE());
INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'パシフィコ横浜',1,'日本最大の複合コンベンションセンター パシフィコ横浜','パシフィコ横浜',1,SYSDATE() ,SYSDATE());

INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'東京駅',1,'東京駅','東京駅',1,SYSDATE() ,SYSDATE());
INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'新潟駅',1,'新潟駅','新潟駅',1,SYSDATE() ,SYSDATE());

create table route (
  r_id int not null auto_increment primary key,
  r_name varchar(64),
  u_id int,
  r_memo varchar(1024),
  adress varchar(1024),
  st_adr varchar(512),
  fin_adr varchar(512),
  start datetime,
  finish datetime,
  pub_show int,
  created datetime,
  modified datetime,
  delate datetime
);

INSERT INTO place (p_id, p_name, u_id,p_memo,adress , pub_show, created, modified) VALUES(NULL,'東京駅',1,'東京駅','東京駅',1,SYSDATE() ,SYSDATE());


create table ev_s (
  es_id int not null auto_increment primary key,
  s_id int,
  e_id int,
  p_id int,
  ev_start datetime,
  ev_finish datetime,
  pub_show int,
  created datetime,
  modified datetime,
  delate datetime
);

INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES(NULL,2,1,NULL,CAST( '2016-02-13 10:00:00' AS DATETIME),CAST( '2016-02-27 16:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE());
INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES(NULL,2,NULL,1,CAST( '2016-02-13 08:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());
INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES(NULL,2,NULL,10,CAST( '2016-02-13 09:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());
INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES(NULL,2,NULL,3,CAST( '2016-02-13 09:30:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());

INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES
(NULL,2,1,NULL,CAST( '2016-02-13 10:00:00' AS DATETIME),CAST( '2016-02-27 16:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE()),
(NULL,2,NULL,1,CAST( '2016-02-13 08:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE()),
(NULL,2,NULL,10,CAST( '2016-02-13 09:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE()),
(NULL,2,NULL,3,CAST( '2016-02-13 09:30:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());

(NULL,1,1,NULL,CAST( '2016-02-13 10:00:00' AS DATETIME),CAST( '2016-02-27 16:00:00' AS DATETIME),1,SYSDATE() ,SYSDATE()),

INSERT INTO ev_s (es_id, s_id, e_id, p_id, ev_start, ev_finish, pub_show, created, modified) VALUES(NULL,1,NULL,1,CAST( '2016-02-13 08:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE()),(NULL,1,NULL,16,CAST( '2016-02-13 09:00:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE()),(NULL,1,NULL,5,CAST( '2016-02-13 09:30:00' AS DATETIME),NULL,1,SYSDATE() ,SYSDATE());

SELECT * FROM goods INNER JOIN cate ON goods.cateid = cate.id;

SELECT news.news_id, category.category_name, news.news_title FROM news,category WHERE news.category_id = category.category_id

SELECT * FROM ev_s JOIN place ON ev_s.p_id=place.p_id WHERE s_id=2 ev_start > now() ORDER BY ev_start ASC LIMIT 4;

SELECT * FROM schedule WHERE  u_id=1 and start > now() and ORDER BY start ASC LIMIT 4;

SELECT * FROM schedule WHERE ORDER BY start ASC LIMIT 4;

SELECT * FROM schedule WHERE u_id=1 and start > now() ORDER BY start ASC LIMIT 4 