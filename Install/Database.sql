create table vicards_cards
(
    key_card bigint unsigned auto_increment,
    title varchar(250) not null,
    status tinyint unsigned not null,
    program text null,
    constraint vicards_cards_pk
        primary key (key_card)
);