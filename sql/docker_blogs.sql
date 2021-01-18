create table blogs
(
    id         int unsigned auto_increment
        primary key,
    category   varchar(255) not null,
    title      varchar(255) not null,
    content    text         not null,
    slug       varchar(255) not null,
    image      varchar(255) null,
    created_at timestamp    null,
    updated_at timestamp    null,
    constraint blogs_slug_unique
        unique (slug),
    constraint blogs_title_unique
        unique (title)
);

