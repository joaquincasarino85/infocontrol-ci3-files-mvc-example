InfoControl - Document Management for Contractors
This project is a web platform developed with CodeIgniter 3 (MVC) to upload and manage contractor documents. It’s ready to run in Docker environments and can easily scale to infrastructures like AWS.

🚀 Quick Installation with Docker
Clone the repository:

git clone https://github.com/joaquincasarino85/infocontrol-ci3-files-mvc-example.git
cd infocontrol-ci3-files-mvc-example
Start the containers:

docker-compose up --build
Access the application:

Web App: http://localhost:8080

📦 Database
The MySQL container automatically creates the infocontrol database.
The db/init.sql file defines and creates the documentos table on first startup (if it doesn't exist).

Default MySQL credentials:

User: root

Password: rootpass

Database: infocontrol

🗂️ File Structure
app/: Project source code (Controllers, Models, and Views from CodeIgniter 3)

uploads/: Local folder where uploaded documents are stored (simulates S3 in development)

db/init.sql: Auto-executed table creation script

docker/: Dockerfile and configuration for PHP/Apache

docker-compose.yml: Service orchestration

🧱 MVC Pattern
The MVC (Model-View-Controller) pattern divides the application into three components:

Model: Handles data access logic (database)

View: User interface (HTML + forms)

Controller: Connects the model and the view

This structure promotes clean, reusable, and maintainable code.

☁️ Scalability
The project is ready to integrate with cloud services such as:

S3 for real document storage

RDS/MySQL for managed database services

ECS/EKS for scalable deployments

Git for version control

