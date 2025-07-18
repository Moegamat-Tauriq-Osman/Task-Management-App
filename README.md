📩 Start Mailpit in a separate terminal:

bash
Copy
Edit
mailpit
Then visit http://127.0.0.1:8025 to see test emails.

👥 Default Users
Role	Email	Password
Admin	admin@example.com	password
Team Member	team@example.com	password
Guest	guest@example.com	password

📁 Folder Structure Highlights
app/Models/TITtask.php – Task model with accessors, mutators, scope

app/Http/Controllers/ – Controllers for Tasks, Categories, Dashboard

database/seeders/ – Preloaded roles, users, categories, and tasks

resources/views/ – Blade templates for dashboard, task CRUD

✅ Tests
bash
Copy
Edit
php artisan test
Includes unit tests for model logic and feature tests for task actions.

🔗 Template Credits
UI Template adapted from BootstrapMade / Tailwind UI

🧑‍🎓 Developed For
ICE360S - Web Frameworks Laravel Project
Faculty of Informatics & Design
Cape Peninsula University of Technology
