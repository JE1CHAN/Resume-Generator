<?php
if (isset($_POST['submit'])) {
    $folder = "../assets/uploads/";

    $filename = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];

    $path = $folder . $filename;
    move_uploaded_file($tmp_file, $path);

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $college = $_POST['college'] ?? '';
    $highschool = $_POST['highschool'] ?? '';
    $elementary = $_POST['elementary'] ?? '';

    $prog = $_POST['programming'] ?? 0;
    $data = $_POST['data_management'] ?? 0;
    $net = $_POST['networking'] ?? 0;
    $web = $_POST['web_developing'] ?? 0;
    $uiux = $_POST['ui_ux_design'] ?? 0;
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/output.css">

    </head>

    <body>



        <div id="startup-screen">
            <h1>Generating...</h1>
        </div>



        <div class="cv-card">
            <div class="cv-grid">

                <div class="column">
                    <img src="<?= htmlspecialchars($path) ?>" alt="Profile Photo" class="profile-pic">

                    <h1 class="profile-name"><?= htmlspecialchars($name) ?: 'Unknown' ?></h1>

                    <div class="info-group">
                        <div class="info-label">Current Location</div>
                        <div class="info-data"><?= htmlspecialchars($address) ?></div>
                    </div>

                    <div class="info-group">
                        <div class="info-label">Phone Number</div>
                        <div class="info-data"><?= htmlspecialchars($phone) ?></div>
                    </div>

                    <div class="info-group">
                        <div class="info-label">Email Address</div>
                        <div class="info-data"><?= htmlspecialchars($email) ?></div>
                    </div>

                    <a href="../index.html" class="back-btn">Return to Form</a>
                </div>

                <div class="column">
                    <h2 class="section-title">Skills</h2>

                    <div class="skill-group">
                        <div class="skill-header">
                            <span class="skill-name">Programming</span>
                            <span class="skill-percent"><?= htmlspecialchars($prog) ?>%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: <?= htmlspecialchars($prog) ?>%;"></div>
                        </div>
                    </div>

                    <div class="skill-group">
                        <div class="skill-header">
                            <span class="skill-name">Data Management</span>
                            <span class="skill-percent"><?= htmlspecialchars($data) ?>%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: <?= htmlspecialchars($data) ?>%;"></div>
                        </div>
                    </div>

                    <div class="skill-group">
                        <div class="skill-header">
                            <span class="skill-name">Networking</span>
                            <span class="skill-percent"><?= htmlspecialchars($net) ?>%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: <?= htmlspecialchars($net) ?>%;"></div>
                        </div>
                    </div>

                    <div class="skill-group">
                        <div class="skill-header">
                            <span class="skill-name">Web Developing</span>
                            <span class="skill-percent"><?= htmlspecialchars($web) ?>%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: <?= htmlspecialchars($web) ?>%;"></div>
                        </div>
                    </div>

                    <div class="skill-group">
                        <div class="skill-header">
                            <span class="skill-name">UI/UX Design</span>
                            <span class="skill-percent"><?= htmlspecialchars($uiux) ?>%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: <?= htmlspecialchars($uiux) ?>%;"></div>
                        </div>
                    </div>

                    <hr class="sharp-hr">

                    <h2 class="section-title">Education</h2>

                    <div class="edu-item">
                        <div class="edu-level">University / College</div>
                        <div class="edu-school"><?= htmlspecialchars($college) ?></div>
                    </div>

                    <div class="edu-item">
                        <div class="edu-level">High School</div>
                        <div class="edu-school"><?= htmlspecialchars($highschool) ?></div>
                    </div>

                    <div class="edu-item">
                        <div class="edu-level">Elementary</div>
                        <div class="edu-school"><?= htmlspecialchars($elementary) ?></div>
                    </div>

                </div>

                <!-- Column 3: Job Experience (Locked) -->
                <div class="column">
                    <h2 class="section-title">Job Experience</h2>

                    <div class="locked-wrapper">
                        <!-- The Blur Overlay -->
                        <div class="locked-overlay">
                            <div class="locked-badge">Unlock Full<br>Potential Soon</div>
                        </div>

                        <!-- Fake Background Content -->
                        <div class="fake-block" style="height: 80px; width: 85%;"></div>
                        <div class="fake-block" style="height: 60px; width: 60%;"></div>
                        <div class="fake-block" style="height: 120px; width: 100%;"></div>
                        <div class="fake-block" style="height: 70px; width: 75%;"></div>
                    </div>

                </div>
            </div>
        </div>

    </body>

    </html>
<?php
} else {
}
?>