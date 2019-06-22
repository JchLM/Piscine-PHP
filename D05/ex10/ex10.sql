SELECT title AS 'Title', summary AS 'Summary', prod_year FROM film INNER JOIN genre ON film.id_genre = genre.id_genre WHERE genre.id_genre = 'erotic' ORDER BY prod_year DESC;
