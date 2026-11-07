
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nova - Modern Website</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    scroll-behavior: smooth;
}

body {
    background: #0f172a;
    color: white;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 8%;
    background: #111c33;
    position: sticky;
    top: 0;
    z-index: 10;
}

.logo {
    font-size: 27px;
    font-weight: bold;
    color: #38bdf8;
}

nav a {
    text-decoration: none;
    color: white;
    margin-left: 20px;
    font-size: 15px;
}

nav a:hover {
    color: #38bdf8;
}

.hero {
    min-height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 30px;
    background: radial-gradient(circle at center, #1e3a5f, #0f172a 70%);
}

.hero-content {
    max-width: 750px;
}

.hero h1 {
    font-size: 55px;
    margin-bottom: 20px;
}

.hero h1 span {
    color: #38bdf8;
}

.hero p {
    color: #cbd5e1;
    line-height: 1.7;
    font-size: 17px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background: #38bdf8;
    color: #0f172a;
    padding: 14px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
}

.btn:hover {
    background: #0ea5e9;
}

section {
    padding: 80px 8%;
    text-align: center;
}

.section-title {
    font-size: 35px;
    margin-bottom: 15px;
    color: #38bdf8;
}

.subtitle {
    color: #94a3b8;
    margin-bottom: 40px;
}

.services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.card {
    background: #1e293b;
    padding: 35px 20px;
    border-radius: 12px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-8px);
    background: #263852;
}

.card h3 {
    margin: 15px 0;
    color: #38bdf8;
}

.card p {
    color: #cbd5e1;
    line-height: 1.6;
}

.about {
    background: #111c33;
}

.about p {
    max-width: 700px;
    margin: auto;
    color: #cbd5e1;
    line-height: 1.8;
}

.contact {
    background: #0f172a;
}

.contact input,
.contact textarea {
    width: 100%;
    max-width: 500px;
    padding: 14px;
    margin: 10px auto;
    display: block;
    border: none;
    border-radius: 7px;
    outline: none;
}

.contact textarea {
    height: 120px;
    resize: vertical;
}

.contact button {
    border: none;
    cursor: pointer;
    font-size: 15px;
}

footer {
    background: #111c33;
    padding: 25px;
    text-align: center;
    color: #94a3b8;
}

@media(max-width: 600px) {
    header {
        flex-direction: column;
        gap: 15px;
    }

    nav a {
        margin: 0 7px;
        font-size: 13px;
    }

    .hero h1 {
        font-size: 38px;
    }

    section {
        padding: 60px 6%;
    }
}
</style>
</head>

<body>

<header>
    <div class="logo">NOVA.</div>

    <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero" id="home">
    <div class="hero-content">
        <h1>Build Your <span>Digital Future</span></h1>

        <p>
            Welcome to NOVA! We create modern digital experiences
            with beautiful designs, creative ideas, and powerful technology.
        </p>

        <a href="#services" class="btn">Explore More</a>
    </div>
</section>

<section id="services">
    <h2 class="section-title">Our Services</h2>
    <p class="subtitle">What we can offer to you</p>

    <div class="services">

        <div class="card">
            <h1>💻</h1>
            <h3>Web Development</h3>
            <p>We create modern and responsive websites for your business.</p>
        </div>

        <div class="card">
            <h1>🎨</h1>
            <h3>Web Design</h3>
            <p>Beautiful and creative designs for a better user experience.</p>
        </div>

        <div class="card">
            <h1>🚀</h1>
            <h3>Digital Solutions</h3>
            <p>Smart digital solutions to help your business grow.</p>
        </div>

    </div>
</section>

<section class="about" id="about">
    <h2 class="section-title">About Us</h2>
    <br>
    <p>
        NOVA is a creative digital platform focused on building
        modern websites and providing innovative digital solutions.
        Our goal is to make technology simple, useful, and beautiful.
    </p>
</section>

<section class="contact" id="contact">
    <h2 class="section-title">Contact Us</h2>
    <p class="subtitle">Send us a message</p>

    <form onsubmit="sendMessage(event)">
        <input type="text" id="name" placeholder="Your Name" required>
        <input type="email" id="email" placeholder="Your Email" required>
        <textarea id="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<footer>
    <p>© 2026 NOVA. All Rights Reserved.</p>
</footer>

<script>
function sendMessage(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;

    alert("Thank you, " + name + "! Your message was received.");

    event.target.reset();
}
</script>

</body>
</html>
