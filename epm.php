<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="epm.css">
</head>
<body>

    <div class="wrapper">
        <!-- Side Menu -->
        <div class="side-menu">
            <ul>
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#" class="customer-management">Customer Management</a></li>
                <li><a href="#" class="booking-management">Booking Management</a></li>
                <li><a href="#" class="statistics-report">Statistics Report</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="container">
            <h2>Staff Dashboard</h2>

            <!-- Statistics Section -->
            <div class="section statistics">
                <h3>Statistics Overview</h3>
                <div class="stat-card">
                    <h4>Total Customers</h4>
                    <p>150</p>
                </div>
                <div class="stat-card">
                    <h4>Total Bookings</h4>
                    <p>200</p>
                </div>
                <div class="stat-card">
                    <h4>Total Revenue</h4>
                    <p>$25,000</p>
                </div>
            </div>

            <!-- Customer Management Section -->
            <div class="section customer-management">
                <h3>Customer Management</h3>
                <button class="add-customer-button">Add New Customer</button>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>123-456-7890</td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>987-654-3210</td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Booking Management Section -->
            <div class="section booking-management">
                <h3>Booking Management</h3>
                <button class="add-booking-button">Add New Booking</button>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Car</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Toyota Corolla</td>
                            <td>2024-10-01</td>
                            <td>2024-10-05</td>
                            <td>Confirmed</td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Honda Civic</td>
                            <td>2024-10-02</td>
                            <td>2024-10-06</td>
                            <td>Pending</td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Statistics Report Section -->
            <div class="section statistics-report">
                <h3>Statistics Report</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Report Type</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Cars Rented</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Total Revenue This Month</td>
                            <td>$5,000</td>
                        </tr>
                        <tr>
                            <td>Average Rental Duration (days)</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Top Customer</td>
                            <td>John Doe</td>
                        </tr>
                        <tr>
                            <td>Most Rented Car</td>
                            <td>Toyota Corolla</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>