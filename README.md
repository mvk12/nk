# Instalación 
- Clonar repositorio
- Copiar archivo *.env.example* a *.env* y configurar Credenciales de DB (por el momento no se utilizarán) y APP_URL
- Ejecutar `composer install` en directorio
- Si llega a ser necesario, ejecutar `php artisan key:generate`
# Pruebas de generación de reportes
Librería *barryvdh/laravel-dompdf*


| Domain | Method   | URI                                  | Name |
|--------|----------|--------------------------------------|------|
|        | GET|HEAD | pdf/examples/account_status_report   | Ejemplo de estado de cuenta |
|        | GET|HEAD | pdf/examples/hello_world             | Hello World |
|        | GET|HEAD | pdf/examples/hello_world_with_styles | Hello World con estilos |
|        | GET|HEAD | pdf/examples/layout                  | Pruebas de layout |

# Notas:
Ignorar por el momento la dirección "/" que se encuentra en desarrollo
