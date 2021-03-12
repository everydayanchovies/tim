create table books
(
    title VARCHAR(255), # wat is een varchar? varchar == variable characters == string van lengte 255
    author VARCHAR(50), # waarom nu opeens 50 in plaats van 255? Is dit wel een goed idee?
    genre VARCHAR(50)
);

delete from books;

select * from books;