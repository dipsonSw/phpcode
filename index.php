<?php
// Define user data
$portfolio = [
    "name" => "Dipson sludgsa ukdg asudg uaisg djashdkja shdahgisdhgkljdhs gkjdshgkjldhs",
    "title" => "Full Stack Developer",
    "bio" => "Passionate about web development and creating intuitive user experiences.",
    "image" => "https://via.placeholder.com/150", // Placeholder profile image
    "education" => [
        ["degree" => "Bachelor of Science in Computer Science", "school" => "XYZ University", "year" => "2018 - 2022"],
        ["degree" => "Master of Science in Web Technologies", "school" => "ABC Institute", "year" => "2023 - Present"]
    ],
    "experience" => [
        ["role" => "Software Engineer", "company" => "TechCorp Inc.", "year" => "2022 - Present", "description" => "Developing web applications and enhancing UI/UX."],
        ["role" => "Intern Web Developer", "company" => "Web Solutions Ltd.", "year" => "2021", "description" => "Worked on front-end development for client projects."]
    ],
    "skills" => ["HTML", "CSS", "JavaScript", "PHP", "SQL", "React", "Node.js"],
    "projects" => [
        ["title" => "E-commerce Website", "description" => "An online store with payment integration.", "link" => "#"],
        ["title" => "Portfolio Site", "description" => "A sleek personal portfolio to showcase my skills.", "link" => "#"],
        ["title" => "Blog Platform", "description" => "A dynamic content-driven blog.", "link" => "#"]
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; text-align: center; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0,0,0,0.2); }
        .profile img { width: 100px; border-radius: 50%; }
        .profile h2, .profile h3 { margin: 5px 0; }
        .section { text-align: left; margin-top: 20px; }
        .item { border-bottom: 1px solid #ddd; padding: 10px; }
        .project a { text-decoration: none; color: blue; }
        ul { list-style-type: none; padding: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="<?php echo $portfolio['image']; ?>" alt="Profile Picture">
            <h2><?php echo $portfolio["name"]; ?></h2>
            <h3><?php echo $portfolio["title"]; ?></h3>
            <p><?php echo $portfolio["bio"]; ?></p>
        </div>
        
        <hr>

        <div class="section">
            <h3>Education</h3>
            <?php foreach ($portfolio["education"] as $edu): ?>
                <div class="item">
                    <h4><?php echo $edu["degree"]; ?></h4>
                    <p><?php echo $edu["school"]; ?> (<?php echo $edu["year"]; ?>)</p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <h3>Experience</h3>
            <?php foreach ($portfolio["experience"] as $exp): ?>
                <div class="item">
                    <h4><?php echo $exp["role"]; ?></h4>
                    <p><?php echo $exp["company"]; ?> (<?php echo $exp["year"]; ?>)</p>
                    <p><?php echo $exp["description"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <h3>Skills</h3>
            <ul>
                <?php foreach ($portfolio["skills"] as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h3>Projects</h3>
            <?php foreach ($portfolio["projects"] as $project): ?>
                <div class="item">
                    <h4><?php echo $project["title"]; ?></h4>
                    <p><?php echo $project["description"]; ?></p>
                    <a href="<?php echo $project["link"]; ?>">View Project</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
