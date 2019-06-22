SELECT film.id_genre AS 'id_genre' , genre.name AS 'name_genre', film.id_distrib AS 'id_distrib', distrib.name AS 'name_distrib', title AS 'title_film' FROM film, genre, distrib WHERE film.id_genre BETWEEN 4 AND 8;