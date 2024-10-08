<?php
session_start();
@include 'connect.php';

// Check if admin is NOT logged in
if (!isset( $_SESSION['user_name'])) {
    header('Location: signin.php');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTech skilLab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="htql.css">
</head>
<body>
    <header class="header">
      <img src="skill2.png" alt="">
        <div class="hamburger">&#9776;</div>
        <div class="header-title">iTech SkilLab / <span id="current-page">Home</span></div>
        <nav class="header-nav">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-bell"></i>
            <div class="user-greeting">Hello,<span><?php echo htmlspecialchars( $_SESSION['user_name']); ?></span></div>
            <div class="user-dropdown">
                <i class="fas fa-user"></i>
                <div class="user-dropdown-content">
                    <a href="#">Edit Profile</a>
                    <a href="#">Messages</a>
                    <a href="#">Notifications</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </nav>
        <div class="userR">
        <i class="fas fa-user"></i>
        </div>
        <div class="three-dot-menu">&#8942;</div>
        <div class="mobile-dropdown">
            <a href="#"><i class="fas fa-envelope"></i> Messages</a>
            <a href="#"><i class="fas fa-bell"></i> Notifications</a>
            <a href="#"><i class="fas fa-user"></i> Profile</a>
            <hr>
            <a href="#"><i class="fas fa-power-off"></i> Logout</a>

        </div>
    </header>

    <nav class="sidenav">
        <div class="nav-item" data-section="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </div>
        <div class="nav-item" data-section="programs">
            <i class="fas fa-project-diagram"></i>
            <span>Programs</span>
        </div>
        <div class="nav-item" data-section="solutions">
            <i class="fas fa-lightbulb"></i>
            <span>Solutions</span>
        </div>
        <div class="nav-item" data-section="courses">
            <i class="fas fa-graduation-cap"></i>
            <span>Courses</span>
        </div>
        <div class="nav-item" data-section="my-lab">
            <i class="fas fa-flask"></i>
            <span>My Lab</span>
        </div>
        <div class="nav-item" data-section="organizations">
            <i class="fas fa-building"></i>
            <span>Organizations</span>
        </div>
        <div class="nav-item" data-section="resources">
            <i class="fas fa-toolbox"></i>
            <span>HighTech Resources</span>
        </div>
    </nav>

   
    <main class="main-content">
        <section id="home" class="section active">
            <h1>Welcome to HighTech Lab</h1>
            <p>Explore the future of technology and innovation in our state-of-the-art digital laboratory. HighTech Lab is your gateway to cutting-edge research, learning, and development in the world of technology.</p>
            <div class="card-grid">
                <div class="card">
                    <i class="fas fa-microscope"></i>
                    <h3>Advanced Research</h3>
                    <p>Access cutting-edge technology and research facilities.</p>
                </div>
                <div class="card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Expert-Led Courses</h3>
                    <p>Learn from industry professionals and academic experts.</p>
                </div>
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3>Collaborative Environment</h3>
                    <p>Connect with like-minded innovators and work on projects together.</p>
                </div>
                <div class="card">
                    <i class="fas fa-rocket"></i>
                    <h3>Startup Incubator</h3>
                    <p>Turn your tech ideas into reality with our startup support.</p>
                </div>
            </div>
        </section>

        <section id="programs" class="section">
            <h1>Empowering the Next Generation of Tech Leaders</h1>
            <p class="intro">Discover our wide array of cutting-edge technology programs designed to propel your career in various tech domains.</p>
            <div class="card-grid">
                <div class="card">
                    <img src="aiicon.png" alt="AI icon" >
                    <h3>AI Research Program</h3>
                    <p>Dive deep into artificial intelligence and machine learning, working on real-world projects.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="cyber2.png" alt="Cybersecurity icon" >
                    <h3>Cybersecurity Initiative</h3>
                    <p>Develop skills to protect digital assets and combat cyber threats in our state-of-the-art lab.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="iot.png" alt="IoT icon" >
                    <h3>IoT Innovation Lab</h3>
                    <p>Create and test cutting-edge Internet of Things solutions with industry-leading equipment.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="block.png" alt="Blockchain icon" >
                    <h3>Blockchain Technology</h3>
                    <p>Explore the potential of blockchain and develop decentralized applications.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="web.png" alt="Web Dev icon" >
                    <h3>Full-Stack Web Development</h3>
                    <p>Master both front-end and back-end technologies to build robust, scalable web applications.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="app.png" alt="Mobile Dev icon" >
                    <h3>Mobile App Development</h3>
                    <p>Learn to create innovative mobile applications for iOS and Android platforms.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="ux2.png" alt="Graphics icon" >
                    <h3>3D Graphics and Animation</h3>
                    <p>Develop skills in 3D modeling, rendering, and animation for games and visual effects.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="data.png" alt="Data Science icon" >
                    <h3>Data Science and Analytics</h3>
                    <p>Harness the power of big data to derive insights and drive decision-making.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="cta-container">
                <a href="#" class="cta-button">Apply Now</a>
                <a href="#" class="secondary-cta">Download Program Catalog</a>
            </div>
        </section>

        <section id="solutions" class="section">
            <p>Discover innovative technological solutions to address modern challenges.</p>
            <div class="card-grid">
                <div class="card">
                    <i class="fas fa-robot"></i>
                    <h3>AI-Powered Analytics</h3>
                    <p>Harness the power of AI for data-driven insights.</p>
                </div>
                <div class="card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Advanced Cybersecurity</h3>
                    <p>Protect your digital assets with our security solutions.</p>
                </div>
                <div class="card">
                    <i class="fas fa-network-wired"></i>
                    <h3>IoT Ecosystem</h3>
                    <p>Connect and optimize your devices with our IoT platform.</p>
                </div>
            </div>
        </section>

        <section id="courses" class="section">
            <p class="courses-description">Unlock your potential with our diverse range of expert-led technology courses.</p>
            <div class="courses-grid">
                <div class="course-card">
                  <div class="course-image">
                    <img src="coding.png" alt="Introduction to Coding">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Introduction to Coding</h3>
                    <p class="course-description">Learn the fundamentals of programming and build your first simple applications.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="web2.png" alt="Web Development Basics">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Web Development Basics</h3>
                    <p class="course-description">Gain a solid foundation in HTML, CSS, and JavaScript to create responsive and interactive websites.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="data2.png" alt="Database Fundamentals">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Database Fundamentals</h3>
                    <p class="course-description">Understand the principles of database management and learn to design and query databases.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="machine.png" alt="Introduction to Machine Learning">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Introduction to Machine Learning</h3>
                    <p class="course-description">Dive into the world of machine learning and learn the fundamentals of algorithms that power intelligent systems.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="advance.png" alt="Advanced Web Development">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Advanced Web Development</h3>
                    <p class="course-description">Take your web development skills to the next level and master modern technologies and frameworks.</p>
                    <div class="course-branches">
                      <a href="#" class="course-branch">Front-End Development</a>
                      <a href="#" class="course-branch">Back-End Development</a>
                      <a href="#" class="course-branch">Full-Stack Development</a>
                    </div>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="cyber.png" alt="Cybersecurity Fundamentals">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Cybersecurity Fundamentals</h3>
                    <p class="course-description">Protect your digital assets by learning the essential concepts and best practices in cybersecurity.</p>
                    <div class="course-branches">
                      <a href="#" class="course-branch">Network Security</a>
                      <a href="#" class="course-branch">Ethical Hacking</a>
                      <a href="#" class="course-branch">Incident Response</a>
                    </div>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="python.png" alt="Data Science with Python">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Data Science with Python</h3>
                    <p class="course-description">Harness the power of Python to analyze, visualize, and extract insights from complex data sets.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="block.png" alt="Blockchain Development">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Blockchain Development</h3>
                    <p class="course-description">Unlock the potential of decentralized applications and learn the fundamentals of blockchain technology.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="ai2.png" alt="Artificial Intelligence and Deep Learning">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Artificial Intelligence and Deep Learning</h3>
                    <p class="course-description">Explore the cutting edge of AI and deep learning, and learn to build advanced neural networks.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
              </div>
        </section>

        <section id="my-lab" class="section">
            <div class="lab-content not-logged-in">
                <div class="welcome-container">
                    <h1 class="welcome-heading">Welcome to Your <span class="highlight">Future Lab Space</span></h1>
                    <img src="https://lab.waziup.io/static/media/empty-bucket.6a7d1518daf1deda37fe5935bb9e8e31.svg" alt="Empty Bucket">
                    <p class="welcome-text">You currently have no resources in your lab.
                    <br> Sign up to start your personalized tech journey!</p>
                    <div class="cta-buttons">
                        <button class="cta-button signup-btn">
                            <span class="btn-icon">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="btn-text">Sign Up</span>
                        </button>
                        <button class="cta-button resources-btn">
                            <span class="btn-icon">
                                <i class="fas fa-book-open"></i>
                            </span>
                            <span class="btn-text">Explore Resources</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="lab-content logged-in">
                <!-- ... (keep the existing my-lab content) ... -->
            </div>
        </section>

        <section id="organizations" class="section">
            <h1>Organizations</h1>
            <p>Explore partner organizations and collaboration opportunities.</p>
            <!-- Add more content for Organizations section -->
        </section>

        <section id="resources" class="section">
            <h1>HighTech Resources</h1>
            <p>Access a wealth of tech resources and learning materials.</p>
            <!-- Add more content for HighTech Resources section -->
        </section>
    </main>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');
    const currentPage = document.getElementById('current-page');
    const hamburger = document.querySelector('.hamburger');
    const threeDotsMenu = document.querySelector('.three-dot-menu');
    const sidenav = document.querySelector('.sidenav');
    const headerNav = document.querySelector('.header-nav');
    const mobileDropdown = document.querySelector('.mobile-dropdown');
    const sections = document.querySelectorAll('.section');
    const content = document.querySelector('.content');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            const sectionName = this.querySelector('span').textContent;
            const sectionId = this.getAttribute('data-section');
            currentPage.textContent = sectionName;

            // Hide all sections and show the selected one
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');

            if (window.innerWidth <= 768) {
                sidenav.classList.remove('show');
            }
        });
    });

    hamburger.addEventListener('click', function() {
        sidenav.classList.toggle('show');

        if (window.innerWidth > 768) {
            content.classList.toggle('squeezed');
        }
    });

    threeDotsMenu.addEventListener('click', function() {
        mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            sidenav.classList.remove('show');
            content.classList.remove('squeezed');
            mobileDropdown.style.display = 'none';
        } else {
            headerNav.style.display = 'none';
        }
    });
});

   </script>
</body>
</html>