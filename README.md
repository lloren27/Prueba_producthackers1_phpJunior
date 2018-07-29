DESCRIPCION DEL ESCENARIO
 En un entorno Wordpress, utilizado para desarrollar un medio de opini ́on compuesto por autores, que crean contenido, y miembros, que pagan una cuota para poder leer todo este contenido que se genera. Existe un tercer tipo de usuario, que no paga cuota, pero que ha proporcionado un correo electronico para poder disfrutrar de algunos servicios libres que tiene este medio. El más utilizado ahora mismo es el de Suscribirse a un Autor, que permite que un usuario, miembro o no miembro, suscribirse a los autores que quiera, y así recibir un correo electro ́nico cada dıa, mostrando los nuevos contenidos publicados por los autores a los que esta ́suscrito. Para esta prueba vamos a centrarnos en los usuarios no miembros. A continuaci ́on explicaremos la arquitectura que sera ́ el escenario donde se debera ́ desarrollar la solucíon de este ejercicio.

 BASE DE DATOS 
 Para registrar los usuarios no miembros, debido a que sus datos son muy limitados (solamente tenemos su correo electronico), hemos creado una tabla nueva en la base de datos de nuestra aplicacion llamada wp_unknown_followers, y para registrar las suscripciones, como es una relacion de varios a varios la que habría entre los usuarios y los autores, hemos creado una tabla llamada wp_followings. La definición de cada tabla es la siguiente:

 CREATE TABLE wp_followings (
follower_id BIGINT (20) UNSIGNED DEFAULT 0 NOT NULL , author_id BIGINT (20) UNSIGNED DEFAULT 0 NOT NULL , enabled BOOLEAN DEFAULT true NOT NULL ,
PRIMARY KEY (follower_id , author_id , follower_type)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;

CREATE TABLE wp_unknown_followers (
id BIGINT (20) UNSIGNED AUTO_INCREMENT PRIMARY KEY , token VARCHAR (24) DEFAULT '' NOT NULL ,
email VARCHAR (100) DEFAULT '' NOT NULL ,
UNIQUE (token),
INDEX USING HASH (token)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;

 CODIGO SERVIDOR 
 Para manejar los datos de estas tablas, se ha decidido seguir una arquitectura orientada a objetos parecida a la definida por el patrón de diseño Repository. De esta manera se abstraen los datos de la propia base de datos para que el código no dependa de la estructura de la base de datos. Esta arquitectura consiste por una parte en clases que hacen de entidades que hacen de estructuras de datos fáciles de manejar, y por otro lado manejadores que se encargan de alimentar dichas entidades,llevar los datos de una entidad a la base de datos y viceversa, etc... La estructura de esta parte de la aplicación es la siguiente:

 Entity --> Following , Unknown
 EntityManager --> FollowingManager , UnknownManager
 
 SOLUCIONAR

 Se trata de implementar tres metodos y todo lo necesario para que funcionen. Estos metodos deben permitir lo siguiente:
Añadir a la base de datos un usuario unknown dado su email (la función que se encarga de generar el token puede obviarse y llamar a un método imaginario que sea \TokenGenerator::getNewToken()).

Añadir a un usuario unknown una suscripción dado el token del usuario y el nombre de login del autor (el autor es un usuario tıpico de wordpress).
Eliminar una suscripcion de un usuario unknown dado el id del usuario y el email del autor.