<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Resume</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">


</head>

<body>



    <div id="startup-screen">
        <h1>Welcome</h1>
    </div>



    <form id="portfolioForm" action="./view/output.php" method="POST" enctype="multipart/form-data" class="single-card" novalidate>

        <div class="form-grid">

            <div class="column">
                <h2 class="column-header">Profile</h2>

                <div class="form-group photo-wrapper">
                    <div id="imgPreview">
                        <img id="chosenImg" src="" alt="Avatar">
                    </div>
                    <div>
                        <label for="fileInput" class="file-upload-btn">Upload Photo</label>
                        <input type="file" name="file" id="fileInput" accept="image/*" required>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 10px;">
                    <label>Full Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" required>
                </div>
            </div>

            <div class="column">
                <h2 class="column-header">Education</h2>
                <div class="form-group">
                    <label>University / College</label>
                    <input type="text" name="college" required>
                </div>
                <div class="form-group">
                    <label>High School</label>
                    <input type="text" name="highschool" required>
                </div>
                <div class="form-group">
                    <label>Elementary</label>
                    <input type="text" name="elementary" required>
                </div>
            </div>

            <div class="column">
                <h2 class="column-header">Skills</h2>

                <div class="form-group">
                    <label>Programming</label>
                    <select name="programming" required>
                        <option value="" disabled selected>Select Level</option>
                        <option value="100">100%</option>
                        <option value="80">80%</option>
                        <option value="60">60%</option>
                        <option value="30">30%</option>
                        <option value="10">10%</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Data Management</label>
                    <select name="data_management" required>
                        <option value="" disabled selected>Select Level</option>
                        <option value="100">100%</option>
                        <option value="80">80%</option>
                        <option value="60">60%</option>
                        <option value="30">30%</option>
                        <option value="10">10%</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Networking</label>
                    <select name="networking" required>
                        <option value="" disabled selected>Select Level</option>
                        <option value="100">100%</option>
                        <option value="80">80%</option>
                        <option value="60">60%</option>
                        <option value="30">30%</option>
                        <option value="10">10%</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Web Developing</label>
                    <select name="web_developing" required>
                        <option value="" disabled selected>Select Level</option>
                        <option value="100">100%</option>
                        <option value="80">80%</option>
                        <option value="60">60%</option>
                        <option value="30">30%</option>
                        <option value="10">10%</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>UI/UX Design</label>
                    <select name="ui_ux_design" required>
                        <option value="" disabled selected>Select Level</option>
                        <option value="100">100%</option>
                        <option value="80">80%</option>
                        <option value="60">60%</option>
                        <option value="30">30%</option>
                        <option value="10">10%</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <span id="errorMsg">Please fill out all the required fields.</span>
            <button type="submit" id="submitBtn" name="submit">Generate</button>
        </div>

    </form>

    <script src="./assets/js/script.js"></script>
</body>

</html>