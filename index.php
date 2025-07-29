<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideathon - BVM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Background decorative elements -->
    <div class="bg-shape"></div>
    <!-- <div class="bg-shape bg-shape-2"></div> -->
    <!-- <div class="bg-shape"></div> -->
    
    <div class="stars star-1">✦</div>
    <div class="stars star-2">✦</div>
    <div class="stars star-3">✦</div>
    <div class="stars star-4">+</div>
    <div class="stars star-5">✦</div>

    <!-- Character illustration -->
    <div class="character">
        <div class="person">
            <div class="person-head">
                <div class="person-hair"></div>
            </div>
            <div class="person-body">
                <div class="person-arms"></div>
                <div class="laptop"></div>
            </div>
        </div>
    </div>

    <!-- Rocket -->
    <div class="rocket">
        <div class="rocket-body">
            <div class="rocket-window"></div>
            <div class="rocket-fin-left"></div>
            <div class="rocket-fin-right"></div>
        </div>
        <div class="rocket-flame"></div>
    </div>

    <!-- Lightbulb -->
    <div class="lightbulb">
        <div class="bulb"></div>
        <div class="bulb-base"></div>
    </div>

    <!-- Gears -->
    <div class="gear">
        <div class="gear-1"></div>
        <div class="gear-2"></div>
    </div>

    <div class="container">
        <?php include("navbar.php"); ?>
        <!-- Brain logo and title -->
        <!-- <div class="brain-container">
            <div class="brain">
                <div class="brain-left"></div>
                <div class="brain-right"></div>
                <div class="brain-details">
                    <div class="brain-line brain-line-1"></div>
                    <div class="brain-line brain-line-2"></div>
                    <div class="brain-line brain-line-3"></div>
                </div>
                <!-- <div class="brain-stem"></div> --
            </div>
            
            <div class="main-title">
                <div class="ideathon">
                    IDEATHON
                    <span class="lightbulb-icon">💡</span>
                </div>
                <div class="subtitle">IDEATE.IGNITE.IMPACT</div>
            </div>
        </div> -->
        <div class="img-container">
            <img src="ideathon_logo.png" alt="">
        </div>

        <!-- Register button -->
        <a href="#" class="register-btn">Register Now</a>

        <!-- About section -->
        <div class="card">
            <h2>About</h2>
            <p>Ideathon @ BVM is a celebration of creativity, collaboration, and innovation. Bring your ideas to life with like minded visionaries across various domains.</p>
        </div>

        <!-- Event highlights -->
        <div class="card">
            <h2>Event Highlights</h2>
            <div class="highlight-item">
                <span class="highlight-icon">👥</span>
                <span>Team-based participation only (Maximum 8 members per team, including the Team Leader)</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">👧</span>
                <span>At least one girl participant is compulsory in each team</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">🏆</span>
                <span>Exciting prizes for winners</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">📋</span>
                <span>Registration Link on this page</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">🎯</span>
                <span>🎓 Open to all First-Year students of Birla Vishvakarma Mahavidyalaya (BVM)</span>
            </div>
        </div>

        <!-- Countdown -->
        <div class="card countdown-card">
            <div class="countdown-title">Registration Opens:</div>
            <div class="countdown-time" id="countdown">13h 30m 27s</div>
        </div>

        <!-- Prizes section -->
        <div class="card prizes-card">
            <h2>Prizes</h2>
            <p>Exciting prizes await the winners!. Recognition, certificates, and goodies await the top teams.</p>
        </div>
    </div>

    <script>
        // Enhanced countdown timer
        function updateCountdown() {
            const countdownElement = document.getElementById('countdown');
            let hours = 13;
            let minutes = 30;
            let seconds = 27;

            const timer = setInterval(() => {
                seconds--;
                if (seconds < 0) {
                    seconds = 59;
                    minutes--;
                    if (minutes < 0) {
                        minutes = 59;
                        hours--;
                        if (hours < 0) {
                            hours = 0;
                            minutes = 0;
                            seconds = 0;
                            clearInterval(timer);
                            countdownElement.textContent = 'Registration Open!';
                            return;
                        }
                    }
                }
                
                const h = hours.toString().padStart(2, '0');
                const m = minutes.toString().padStart(2, '0');
                const s = seconds.toString().padStart(2, '0');
                
                countdownElement.textContent = `${h}h ${m}m ${s}s`;
            }, 1000);
        }

        // Add smooth scroll and interaction effects
        document.addEventListener('DOMContentLoaded', function() {
            updateCountdown();
            
            // Add click effect to register button
            const registerBtn = document.querySelector('.register-btn');
            registerBtn.addEventListener('click', function(e) {
                e.preventDefault();
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
                
                // Add your registration logic here
                alert('Registration functionality would be implemented here!');
            });
            
            // Add hover effects to cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>

</body>
</html>