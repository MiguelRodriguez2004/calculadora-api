# API Externa para Procesos Aritméticos 📟
Este proyecto es una API REST desarrollada con PHP Nativo para la ejecución de operaciones aritméticas sencillas.

## Objetivo
El objetivo fundamental de esta API es brindar una solución eficaz y sencilla para realizar operaciones aritméticas esenciales. Estas operaciones abarcan la suma, resta, multiplicación y división. La API se ha diseñado con la premisa de ser accesible y fácil de utilizar, proporcionando una documentación clara y ejemplos prácticos que permitan a los desarrolladores integrar estas funcionalidades en sus aplicaciones de manera eficiente y sin complicaciones.

## Instrucciones de Ejecución

*IMPORTANTE: Si deseas realizar validaciones en un tu navegador puedes realizarlo mediante el siguiente proyecto que ya tiene configurado los diferentes parametros que la API recibe para cada uno de sus endpoints. Sin embargo, debes primero alojar esta API en tu servidor local para realizar las diferentes pruebas.*

Link del Repositorio: https://github.com/MiguelRodriguez2004/calculadora-prueba-tecnica

1. Asegúrate de tener configurado un entorno de desarrollo local que incluya Apache (por ejemplo, XAMPP) y Postman.
2. Utiliza el comando git clone https://github.com/MiguelRodriguez2004/calculadora-api.git para clonar el repositorio en la carpeta HTDOCS dentro de la raíz de tu instalación de XAMPP.
3. Abre la aplicación Postman para probar los diferentes endpoints que ofrece la API.
- La URL base para acceder a la calculadora es: http://localhost/calculadora-api/.
- El header de la solicitud debe tener como parametros los siguientes valores:

      Key: Content-Type
      Value: application/json

- El body de la solicitud debe estar en formato JSON, utilizando el modo "raw" en Postman.
- La solicitud debe incluir los siguientes parámetros:

    {
      "operation": "String",
      "num1": number,
      "num2": number
    }

***Recuerda que el valor del parámetro "operation" puede ser cualquiera de las operaciones básicas, como suma, resta, multiplicación y división. Mientras que los valores numéricos pueden ser cualquiera, siempre y cuando se cumplan las reglas aritméticas para que el resultado sea exitoso.***

## Versión
Versión 1.0.0
Esta es la primera versión del proyecto.

## Autor
Miguel Angel Núñez Rodriguez 
Desarrollador aspirante al puesto de desarrollador en Strategico Tech.
**Contacto:** miguelangelnunezrodriguez2004@gmail.com

## Notas Finales
Este proyecto ha sido desarrollado como parte de una prueba de habilidades en desarrollo full stack. Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto conmigo.

¡Gracias por revisar este proyecto!