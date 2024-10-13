<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Management</title>
    <link rel="stylesheet" href="Partner.css">
</head>
<body>

    <div class="wrapper">
        <!-- Side Menu -->
        <div class="side-menu">
            <ul>
                <li><a href="#">Bookmarks</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Reader Settings</a></li>
                <li><a href="#" class="active">Partner Management</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="conta   iner">
            <!-- Partner Info Section -->
            <div class="section partner-info">
                <h3>Partner Information</h3>
                <label for="partner-name">Partner Name</label>
                <input type="text" id="partner-name" value="blackprince81" readonly>
                <label for="partner-email">Partner Email</label>
                <input type="email" id="partner-email" value="nbq2607@gmail.com" readonly>
            </div>

            <!-- Car Management Section -->
            <div class="section car-management">
                <h3>Car Management</h3>

                <!-- Add Car Button -->
                <button id="add-car-btn">Add Car</button>

                <!-- Car List Table -->
                <table class="car-table">
                    <thead>
                        <tr>
                            <th>Car ID</th>
                            <th>Car Name</th>
                            <th>License Plate</th>
                            <th>Status</th> <!-- Thêm cột Tình trạng -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Toyota Corolla</td>
                            <td>29A-12345</td>
                            <td>Chưa thuê</td> <!-- Hiển thị tình trạng xe -->
                            <td>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Honda Civic</td>
                            <td>30B-67890</td>
                            <td>Đã thuê</td> <!-- Hiển thị tình trạng xe -->
                            <td>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>