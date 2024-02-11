# Project Name: Task Manager

Task Manager is a comprehensive web application built to facilitate task management within your organization. It allows entry makers to input records which can be tracked by all employees, including the admin and other workers. The system is designed to enhance organization, collaboration, and productivity.

## Features

- **Record Entry:** Entry makers can easily input records into the system, providing necessary details for task tracking.
- **Dashboard for Entry Makers:** Entry makers have access to their dashboard, where they can view and manage the records they've entered.
- **Dashboard for Employees:** All employees, including the admin and other workers, have access to a dashboard where they can track and manage records entered by entry makers.
- **Search and Filter Functionality:** Users can quickly search for specific records and apply filters to find relevant information.
- **User Authentication:** Secure authentication ensures that only authorized users can access the system.
- **Admin Privileges:** The admin has additional privileges for managing users, accessing reports, and overseeing the overall functioning of the system.

## Installation

To run the Task Manager locally using XAMPP, follow these steps:

1. Download and install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/).
2. Clone the repository into the `htdocs` directory of your XAMPP installation:

   ```bash
   git clone https://github.com/yourusername/task-manager.git
   ```

3. Start the Apache and MySQL services using the XAMPP control panel.
4. Import the project's database:

   - Open phpMyAdmin by navigating to [http://localhost/phpmyadmin](http://localhost/phpmyadmin) in your browser.
   - Create a new database named `task_manager`.
   - Import the database schema from the `database.sql` file located in the project's directory.

5. Start the XAMPP server.
6. Access the Task Manager in your browser:

   ```
   http://localhost/task-manager
   ```

## Usage

1. Register an account or log in if you already have one.
2. Entry makers can input records into the system by navigating to the "New Record" page.
3. Employees can view and manage records from their dashboard, where they can track tasks entered by entry makers.
4. The admin has additional privileges for managing users, accessing reports, and overseeing the overall functioning of the system.

## Contributing

Contributions to the Task Manager project are welcome! If you'd like to contribute, please follow these guidelines:

- Fork the repository and create a new branch for your contributions.
- Make your changes, ensuring all tests pass.
- Submit a pull request detailing your changes and any related issues.

## License

This project is licensed under the [MIT License](LICENSE).
