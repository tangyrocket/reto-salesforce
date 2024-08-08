# Bienvenidos

## Herramientas
* Se utilizó Postman como herramienta para probar el backend (fue lo primero que se realizó)
* API para obtener los datos de las personas de forma aleatoria https://randomuser.me/documentation
* VsCode: Editor de texto

## Backend
* Se realizó el backend utilizando PHP utilizando como servidor local Xampp
* Dentro del Backend se verifica que tipo de solicitud se realiza (si es GET, POST, etc) 
* Se verifica que las rutas sean válidas
* Luego de verificar las rutas y el tipo de solicitud que se realizó. Se procede a devolver los datos en el formato json.
* Iteramos la solicitud el numero de veces según lo solicitado por el frontend.

## Frontend
* Utilizamos HTML, CSS, JavaScript
* Dentro de JS se realizó la lógica de solicitud para obtener los datos del servicio.
* Manejamos el endpoint http://localhost:8081/backend-nttdata/obtener-datos, esta ruta dependerá del lugar donde se aloje el backend
* De cambiar el dominio del backend, sólo se tendrá que cambiar la constante 'dominio' dentro del archivo js.
* La solicitud sólo se realiza una vez porque el backen ya se encarga de devolvernos los datos necesarios dependiendo del valor que indiquemos en el endpoint 
http://localhost:8081/backend-nttdata/obtener-datos?cantidad=1.


## Utilización del backend
1. Utilizar el endpoint 
http://localhost:8081/backend-nttdata/obtener-datos?cantidad=10

2. Indicar el número de datos que necesitamos en el query cantidad, si no se indica se utilizará el valor 1