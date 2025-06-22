# InfoControl - Gestión de Documentos para Contratistas

Este proyecto es una plataforma web desarrollada en **CodeIgniter 3 (MVC)** para cargar y gestionar documentos de contratistas. Está lista para ejecutarse en entornos Docker y puede escalarse fácilmente a infraestructuras como AWS.

---

## 🚀 Instalación rápida con Docker

1. Cloná el repositorio:

```bash
git clone https://github.com/joaquincasarino85/infocontrol-ci3-files-mvc-example.git
cd infocontrol-ci3-mvc

2. Iniciá los contenedores:

docker-compose up --build

3. Accedé a la aplicación:

App Web: http://localhost:8080

---

Base de Datos

El contenedor de MySQL crea automáticamente la base infocontrol.
El archivo db/init.sql define y crea la tabla documentos al iniciar por primera vez (si no existe).
El acceso por defecto a MySQL es:
usuario: root
contraseña: rootpass
base de datos: infocontrol

---

Estructura de archivos

app/: Código fuente del proyecto (Controladores, Modelos y Vistas de CodeIgniter 3).
uploads/: Carpeta local donde se almacenan los documentos subidos (simula S3 en desarrollo).
db/init.sql: Script de creación automática de tabla.
docker/: Archivos Dockerfile y configuraciones para PHP/Apache.
docker-compose.yml: Orquestación de servicios.

---

MVC

El patrón MVC (Modelo-Vista-Controlador) divide la aplicación en tres componentes:

Modelo: Lógica de acceso a datos (base de datos).
Vista: Interfaz del usuario (HTML + formularios).
Controlador: Lógica que conecta el modelo con la vista.
Esto permite mantener un código organizado, reutilizable y fácil de mantener.

---

Escalabilidad

El proyecto está preparado para integrarse con servicios cloud como:

S3 para almacenamiento real.
RDS/MySQL para base de datos gestionada.
ECS/EKS para despliegues escalables.
Versionado con Git para control de cambios.