<?php
// ==========================================
// PORTFOLIO DATA (Satish Uddanaik)
// ==========================================
$data = [
    'personal' => [
        'name' => 'Satish Uddanaik',
        'title' => 'Java Backend & Full-Stack Developer',
        'location' => 'Bengaluru, Karnataka',
        'phone' => '+91 81474 03538',
        'email' => 'satishuddanaik@gmail.com',
        'leetcode' => 'https://leetcode.com/u/satish%20Uddanaik/',
        'linkedin' => 'https://www.linkedin.com/in/satish-uddanaik-86a30b297',
        'github' => 'https://github.com/Satish-Uddanaik',
        'bio' => 'Passionate Java Backend Developer with hands-on experience in building secure full-stack applications using Spring Boot, React, REST APIs, and MySQL. Seeking a software engineering role to develop scalable solutions and contribute to impactful products.'
    ],
    'education' => [
        [
            'degree' => 'B.Tech in Information Science and Engineering',
            'institution' => 'University of Visvesvaraya College of Engineering',
            'location' => 'Bengaluru, Karnataka',
            'period' => '2023 - Present',
            'score' => 'CGPA: 9.21'
        ],
        [
            'degree' => 'Class XII (PUC)',
            'institution' => 'ST Ekalavya Model Residential PU College',
            'location' => 'Tavag, Karnataka',
            'period' => '2021 - 2023',
            'score' => 'Percentage: 95.83%'
        ],
        [
            'degree' => 'Class X (SSLC)',
            'institution' => 'ST Ekalavya Model Residential School',
            'location' => 'Tavag, Karnataka',
            'period' => '2016 - 2021',
            'score' => 'Percentage: 93.44%'
        ]
    ],
    'skills' => [
        'frontend' => [
            ['name' => 'React.js', 'level' => 85],
            ['name' => 'HTML5', 'level' => 90],
            ['name' => 'CSS3', 'level' => 85],
            ['name' => 'JavaScript', 'level' => 80]
        ],
        'backend' => [
            ['name' => 'Spring Boot', 'level' => 90],
            ['name' => 'Spring Data JPA', 'level' => 85],
            ['name' => 'Spring Security / JWT', 'level' => 80],
            ['name' => 'REST APIs', 'level' => 90]
        ],
        'database' => [
            ['name' => 'MySQL', 'level' => 85],
            ['name' => 'PostgreSQL', 'level' => 75]
        ],
        'languages' => [
            ['name' => 'Java', 'level' => 90],
            // ['name' => 'Python', 'level' => 75],
            ['name' => 'C', 'level' => 70]
        ],
        'tools' => [
            ['name' => 'Git & GitHub', 'level' => 85],
            ['name' => 'VS Code', 'level' => 90],
            ['name' => 'IntelliJ IDEA', 'level' => 85],
            ['name' => 'Eclipse', 'level' => 80],
            ['name' => 'MySQL Workbench', 'level' => 85]
        ],
        'coreCS' => [
            'Object Oriented Programming (OOPS)',
            'Data Structures and Algorithms (DSA)',
            'Database Management Systems (DBMS)',
            'Operating Systems',
            'Computer Networking'
        ]
    ],
    'projects' => [
        [
            'title' => 'StayEase – Full Stack Hostel Management System',
            'description' => 'Developed a full-stack, role-based Hostel Management System with separate Student and Warden portals, implementing secure authentication and authorization.',
            'techStack' => ['React.js', 'Spring Boot', 'Spring Security', 'JWT', 'Spring Data JPA', 'MySQL', 'BCrypt'],
            'features' => [
                'Role-based authentication using Spring Security & JWT with BCrypt encryption',
                'RESTful APIs and layered MVC architecture for application management and room allocation',
                'Core logic for room assignment with seat availability validation and daily dinner confirmation tracking',
                'Responsive React frontend integrated using Axios and React Router'
            ],
            'github' => 'https://github.com/Satish-Uddanaik',
            'demo' => null
        ],
        [
            'title' => 'Eye Disease Detection System Using Deep Learning',
            'description' => 'Developed a deep learning-based Eye disease detection system to classify retinal OCT images into CNV, DME, DRUSEN, and NORMAL categories.',
            'techStack' => ['Python', 'TensorFlow', 'OpenCV', 'Streamlit', 'CNN'],
            'features' => [
                'Preprocessed images via resizing, noise removal, normalization, and data augmentation',
                'Trained Convolutional Neural Network (CNN) achieving 97–99% classification accuracy on OCT2017 dataset',
                'Interactive Streamlit dashboard displaying prediction confidence scores and highlighted regions'
            ],
            'github' => 'https://github.com/Satish-Uddanaik',
            'demo' => null
        ],
        [
            'title' => 'BloodLink – Blood Donation Management System',
            'description' => 'Full-stack blood donation management platform connecting donors and hospitals, enabling donation booking, request tracking, and hospital-specific blood stock management.',
            'techStack' => ['Spring Boot', 'React.js', 'MySQL', 'Recharts'],
            'features' => [
                'End-to-end donation workflow for hospitals to approve, reject, or complete donation requests',
                'Automatic blood stock updates and real-time status tracking',
                'Interactive analytics dashboards using Recharts to visualize monthly donation trends and blood group distribution'
            ],
            'github' => 'https://github.com/Satish-Uddanaik',
            'demo' => null
        ]
    ],
    'certifications' => [
        [
            'title' => 'Spring Boot 3 and Spring Framework 6 Certification',
            'issuer' => 'in28Minutes (Udemy)',
            'details' => 'Practical experience in Spring Boot, RESTful APIs, Hibernate, JPA, MySQL, and backend application development.'
        ],
        [
            'title' => 'CodeStorm, IMPETUS 25.0 Participation',
            'issuer' => 'IEEE UVCE',
            'details' => 'Participated in the National-level tech event organized by IEEE UVCE.'
        ],
        [
            'title' => 'Campus Champ Training Program',
            'issuer' => '10-Day Soft Skills Program',
            'details' => 'Developed soft skills including communication, time management, and teamwork.'
        ]
    ],
    'achievements' => [
        [
            'title' => '290+ Coding Problems Solved',
            'platform' => 'LeetCode',
            'description' => 'Strengthened problem-solving skills and Data Structures & Algorithms expertise.'
        ],
        [
            'title' => 'First Prize - Best Class Competition',
            'platform' => 'UVCE',
            'description' => 'Collaborated with teammates to win the overall best class award organized by UVCE.'
        ]
    ]
];

// PHP Contact Form Processing
$formMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message)) {
        // You can add mail() logic here if configured on server
        $formMessage = "<div class='alert success'>Thank you, $name! Your message has been recorded.</div>";
    } else {
        $formMessage = "<div class='alert error'>Please fill in all required fields properly.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['personal']['name'] ?> | Software Developer Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #0f172a;
            --accent-color: #38bdf8;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --border-color: #e2e8f0;
            --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 30px -10px rgba(37, 99, 235, 0.2);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --nav-height: 80px;
        }

        [data-theme='dark'] {
            --bg-color: #0b0f19;
            --card-bg: #1e293b;
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --border-color: #334155;
            --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
            --shadow-hover: 0 20px 30px -10px rgba(56, 189, 248, 0.25);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; font-family: 'Inter', sans-serif; }
        body { background-color: var(--bg-color); color: var(--text-primary); transition: var(--transition); overflow-x: hidden; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }
        a { text-decoration: none; color: inherit; }
        button { cursor: pointer; border: none; background: none; font-family: inherit; }

        /* Progress Bar */
        #progress-bar {
            position: fixed; top: 0; left: 0; height: 4px;
            background-color: var(--primary-color); z-index: 9999; width: 0%; transition: width 0.1s ease-out;
        }

        /* Navbar */
        .navbar {
            position: fixed; top: 0; left: 0; width: 100%; height: var(--nav-height);
            background: transparent; z-index: 1000; transition: var(--transition); display: flex; align-items: center;
        }
        .navbar.scrolled { background: var(--card-bg); box-shadow: var(--shadow); height: 70px; }
        .nav-container { width: 90%; max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: 700; color: var(--text-primary); }
        .logo span { color: var(--primary-color); }
        .nav-links { display: flex; align-items: center; gap: 1.5rem; }
        .nav-link { font-weight: 500; font-size: 0.95rem; color: var(--text-secondary); transition: var(--transition); position: relative; }
        .nav-link:hover, .nav-link.active { color: var(--primary-color); }
        .theme-toggle { padding: 8px; border-radius: 50%; color: var(--text-primary); transition: var(--transition); }
        .theme-toggle:hover { background-color: var(--border-color); }

        /* Mobile Menu */
        .mobile-btn { display: none; font-size: 1.5rem; color: var(--text-primary); }
        .mobile-menu { display: none; flex-direction: column; position: absolute; top: 100%; left: 0; width: 100%; background: var(--card-bg); border-top: 1px solid var(--border-color); box-shadow: var(--shadow); padding: 1rem 0; }
        .mobile-menu.active { display: flex; }
        .mobile-menu a { padding: 0.75rem 2rem; color: var(--text-primary); font-weight: 500; }

        /* Sections */
        .section-padding { padding: 100px 8%; }
        .section-title { text-align: center; margin-bottom: 3rem; }
        .section-title h2 { font-size: 2.2rem; margin-bottom: 0.5rem; }
        .underline { width: 60px; height: 4px; background-color: var(--primary-color); margin: 0 auto; border-radius: 2px; }

        /* Hero */
        .hero { min-height: 100vh; display: flex; align-items: center; padding-top: calc(var(--nav-height) + 20px); }
        .hero-container { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center; }
        .badge { display: inline-block; padding: 6px 16px; background-color: rgba(37, 99, 235, 0.1); color: var(--primary-color); border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1rem; }
        .name { font-size: 3.2rem; font-weight: 800; margin-bottom: 0.5rem; }
        .name span { color: var(--primary-color); }
        .title { font-size: 1.8rem; font-weight: 600; color: var(--text-secondary); margin-bottom: 1.5rem; min-height: 2.5rem; }
        .typing { color: var(--accent-color); }
        .description { font-size: 1.1rem; line-height: 1.6; color: var(--text-secondary); margin-bottom: 2rem; }
        .hero-actions { display: flex; gap: 1rem; margin-bottom: 2.5rem; }
        .btn-primary, .btn-secondary { display: flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 8px; font-weight: 600; transition: var(--transition); }
        .btn-primary { background-color: var(--primary-color); color: white; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: var(--shadow-hover); }
        .btn-secondary { border: 2px solid var(--border-color); color: var(--text-primary); }
        .btn-secondary:hover { border-color: var(--primary-color); color: var(--primary-color); }
        .socials { display: flex; gap: 1rem; }
        .socials a { display: flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 50%; border: 1px solid var(--border-color); color: var(--text-primary); transition: var(--transition); }
        .socials a:hover { background-color: var(--primary-color); color: white; border-color: var(--primary-color); transform: translateY(-3px); }

        .avatar-card { width: 280px; height: 280px; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); display: flex; align-items: center; justify-content: center; margin: 0 auto; }
        .avatar-placeholder { width: 260px; height: 260px; border-radius: inherit; background-color: var(--card-bg); display: flex; align-items: center; justify-content: center; font-size: 4rem; font-weight: 800; color: var(--primary-color); }

        /* Grid layouts */
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto; }
        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto; }

        /* Cards */
        .card { background-color: var(--card-bg); border: 1px solid var(--border-color); border-radius: 12px; padding: 2rem; transition: var(--transition); position: relative; }
        .card:hover { transform: translateY(-5px); box-shadow: var(--shadow-hover); border-color: var(--primary-color); }

        /* Skills */
        .skill-item { margin-bottom: 1.2rem; }
        .skill-info { display: flex; justify-content: space-between; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.3rem; }
        .progress-bar { width: 100%; height: 8px; background-color: var(--border-color); border-radius: 4px; overflow: hidden; }
        .progress { height: 100%; background-color: var(--primary-color); border-radius: 4px; }
        .tags { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1rem; }
        .tag { font-size: 0.75rem; background-color: var(--bg-color); border: 1px solid var(--border-color); padding: 4px 10px; border-radius: 4px; color: var(--text-secondary); }

        /* Contact Form & Alerts */
        .contact-container { display: grid; grid-template-columns: 1fr 1.2fr; gap: 3rem; max-width: 1100px; margin: 0 auto; }
        .contact-form { display: flex; flex-direction: column; gap: 1.2rem; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .contact-form input, .contact-form textarea { width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid var(--border-color); background-color: var(--card-bg); color: var(--text-primary); outline: none; }
        .alert { padding: 12px; border-radius: 8px; margin-bottom: 1rem; text-align: center; }
        .alert.success { background-color: rgba(34, 197, 94, 0.1); color: #16a34a; }
        .alert.error { background-color: rgba(239, 68, 68, 0.1); color: #dc2626; }

        /* Footer */
        footer { background-color: var(--card-bg); border-top: 1px solid var(--border-color); padding: 2rem 8%; text-align: center; }

        /* Responsive */
        @media (max-width: 900px) {
            .hero-container, .contact-container { grid-template-columns: 1fr; text-align: center; }
            .hero-actions, .socials { justify-content: center; }
            .nav-links { display: none; }
            .mobile-btn { display: block; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div id="progress-bar"></div>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo"><span>Satish_Uddanaik</span></a>
            
            <div class="nav-links">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#education" class="nav-link">Education</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#experience" class="nav-link">Experience</a>
                <a href="#certifications" class="nav-link">Certifications</a>
                <a href="#contact" class="nav-link">Contact</a>
                <button class="theme-toggle" id="theme-btn"><i class="fa-solid fa-moon"></i></button>
            </div>

            <button class="mobile-btn" id="mobile-btn"><i class="fa-solid fa-bars"></i></button>
        </div>

        <div class="mobile-menu" id="mobile-menu">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#experience">Experience</a>
            <a href="#certifications">Certifications</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero section-padding">
        <div class="hero-container">
            <div>
                <span class="badge">Welcome to my portfolio</span>
                <h1 class="name">Hi, I'm <span><?= $data['personal']['name'] ?></span></h1>
                <h2 class="title">I am a <span class="typing" id="typing-text"></span></h2>
                <p class="description"><?= $data['personal']['bio'] ?></p>
                
                <div class="hero-actions">
                    <a href="#resume" class="btn-primary"><i class="fa-solid fa-download"></i> Get Resume</a>
                    <a href="#contact" class="btn-secondary"><i class="fa-solid fa-envelope"></i> Contact Me</a>
                </div>

                <div class="socials">
                    <a href="<?= $data['personal']['github'] ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="<?= $data['personal']['linkedin'] ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="<?= $data['personal']['leetcode'] ?>" target="_blank"><i class="fa-code"></i></a>
                </div>
            </div>

            <div class="avatar-card">
                <div class="avatar-placeholder">SU</div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="section-title">
            <h2>About Me</h2>
            <div class="underline"></div>
        </div>
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <h3>Career Objective</h3>
            <p style="margin-top: 1rem; line-height: 1.7; color: var(--text-secondary);"><?= $data['personal']['bio'] ?></p>
        </div>
    </section>

    <!-- EDUCATION -->
    <section id="education" class="section-padding">
        <div class="section-title">
            <h2>Education</h2>
            <div class="underline"></div>
        </div>
        <div class="grid-3">
            <?php foreach ($data['education'] as $edu): ?>
                <div class="card">
                    <span class="badge" style="float: right;"><?= $edu['score'] ?></span>
                    <i class="fa-solid fa-graduation-cap" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 1rem;"></i>
                    <h3><?= $edu['degree'] ?></h3>
                    <p style="color: var(--text-secondary); margin: 0.5rem 0;"><?= $edu['institution'] ?></p>
                    <p style="font-size: 0.85rem; color: var(--text-secondary);"><i class="fa-solid fa-calendar"></i> <?= $edu['period'] ?> | <i class="fa-solid fa-location-dot"></i> <?= $edu['location'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section-padding">
        <div class="section-title">
            <h2>Technical Skills</h2>
            <div class="underline"></div>
        </div>
        <div class="grid-3">
            <?php 
            $skillCategories = [
                'Frontend' => $data['skills']['frontend'],
                'Backend' => $data['skills']['backend'],
                'Languages' => $data['skills']['languages'],
                'Databases' => $data['skills']['database'],
                'Tools' => $data['skills']['tools']
            ];
            foreach ($skillCategories as $title => $skills): ?>
                <div class="card">
                    <h3 style="margin-bottom: 1.5rem; border-bottom: 2px solid var(--border-color); padding-bottom: 0.5rem; color: var(--primary-color);"><?= $title ?></h3>
                    <?php foreach ($skills as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span><?= $skill['name'] ?></span>
                                <span><?= $skill['level'] ?>%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: <?= $skill['level'] ?>%;"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section-padding">
        <div class="section-title">
            <h2>Projects</h2>
            <div class="underline"></div>
        </div>
        <div class="grid-3">
            <?php foreach ($data['projects'] as $project): ?>
                <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <i class="fa-regular fa-folder-open" style="font-size: 2rem; color: var(--primary-color);"></i>
                            <a href="<?= $project['github'] ?>" target="_blank"><i class="fa-brands fa-github" style="font-size: 1.2rem;"></i></a>
                        </div>
                        <h3><?= $project['title'] ?></h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0.8rem 0;"><?= $project['description'] ?></p>
                        <ul style="padding-left: 1.2rem; font-size: 0.85rem; color: var(--text-secondary);">
                            <?php foreach ($project['features'] as $feat): ?>
                                <li><?= $feat ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tags">
                        <?php foreach ($project['techStack'] as $tech): ?>
                            <span class="tag"><?= $tech ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section id="experience" class="section-padding">
        <div class="section-title">
            <h2>Experience</h2>
            <div class="underline"></div>
        </div>
        <div class="card" style="max-width: 700px; margin: 0 auto; text-align: center; border: 2px dashed var(--border-color);">
            <i class="fa-solid fa-briefcase" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 1rem;"></i>
            <h3>Currently Seeking Software Developer Opportunities</h3>
            <p style="color: var(--text-secondary); margin-top: 0.5rem;">Actively looking for full-time Software Engineering roles to build scalable backend solutions.</p>
        </div>
    </section>

    <!-- CERTIFICATIONS & ACHIEVEMENTS -->
    <section id="certifications" class="section-padding">
        <div class="section-title">
            <h2>Certifications & Achievements</h2>
            <div class="underline"></div>
        </div>
        <div class="grid-2">
            <div class="card">
                <h3>Certifications</h3>
                <ul style="margin-top: 1rem; list-style: none;">
                    <?php foreach ($data['certifications'] as $cert): ?>
                        <li style="margin-bottom: 1rem;">
                            <strong><?= $cert['title'] ?></strong> - <span style="color: var(--primary-color);"><?= $cert['issuer'] ?></span>
                            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?= $cert['details'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="card">
                <h3>Achievements</h3>
                <ul style="margin-top: 1rem; list-style: none;">
                    <?php foreach ($data['achievements'] as $ach): ?>
                        <li style="margin-bottom: 1rem;">
                            <strong><?= $ach['title'] ?></strong> (<?= $ach['platform'] ?>)
                            <p style="font-size: 0.85rem; color: var(--text-secondary);"><?= $ach['description'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- RESUME -->
    <section id="resume" class="section-padding">
        <div class="card" style="max-width: 600px; margin: 0 auto; text-align: center;">
            <i class="fa-solid fa-file-pdf" style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;"></i>
            <h3>Satish Uddanaik - Resume</h3>
            <p style="color: var(--text-secondary); margin: 0.5rem 0 1.5rem;">Java Backend & Full Stack Engineer</p>
            <button class="btn-primary" style="margin: 0 auto;" onclick="alert('Resume download trigger')"><i class="fa-solid fa-download"></i> Download Resume</button>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section-padding">
        <div class="section-title">
            <h2>Contact Me</h2>
            <div class="underline"></div>
        </div>
        <div class="contact-container">
            <div class="card">
                <h3>Get In Touch</h3>
                <p style="color: var(--text-secondary); margin: 1rem 0;"><i class="fa-solid fa-envelope" style="color: var(--primary-color);"></i> <?= $data['personal']['email'] ?></p>
                <p style="color: var(--text-secondary); margin-bottom: 1rem;"><i class="fa-solid fa-phone" style="color: var(--primary-color);"></i> <?= $data['personal']['phone'] ?></p>
                <p style="color: var(--text-secondary);"><i class="fa-solid fa-location-dot" style="color: var(--primary-color);"></i> <?= $data['personal']['location'] ?></p>
            </div>

            <form class="card contact-form" method="POST" action="#contact">
                <?= $formMessage ?>
                <div class="form-row">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn-primary"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; <?= date('Y') ?> <?= $data['personal']['name'] ?>. All rights reserved.</p>
    </footer>

    <!-- JAVASCRIPT FOR INTERACTIVITY -->
    <script>
        // Theme Toggle
        const themeBtn = document.getElementById('theme-btn');
        themeBtn.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const nextTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', nextTheme);
            themeBtn.innerHTML = nextTheme === 'light' ? '<i class="fa-solid fa-moon"></i>' : '<i class="fa-solid fa-sun"></i>';
        });

        // Mobile Menu
        const mobileBtn = document.getElementById('mobile-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // Typing Effect
        const titles = ["Java Backend Developer", "Full Stack Developer", "Spring Boot Specialist"];
        let count = 0, index = 0, currentText = '', letter = '';
        (function type() {
            if (count === titles.length) count = 0;
            currentText = titles[count];
            letter = currentText.slice(0, ++index);
            document.getElementById('typing-text').textContent = letter;
            if (letter.length === currentText.length) {
                count++;
                index = 0;
                setTimeout(type, 1500);
            } else {
                setTimeout(type, 100);
            }
        })();

        // Scroll Progress Bar & Navbar Shadow
        window.addEventListener('scroll', () => {
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            document.getElementById('progress-bar').style.width = progress + '%';

            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>