<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <style>
        .container {
            width: 100%;
            margin-top: 10rem;
            background-color: #111827;
            color: #d1d5db;
            padding: 8px;
        }

        .wrapper {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            border-bottom: 2px solid #4b5563;
            padding: 32px 16px;
        }

        .footer-title {
            font-weight: bold;
            text-transform: uppercase;
            padding-top: 8px;
        }

        .container .wrapper ul li {
            padding: 4px 0;
            list-style: none;
        }

        .subscribe {
            grid-column: span 2 / span 2;
            padding: 32px 0;
        }

        .subscribe .footer-name {
            font-weight: bold;
            text-transform: uppercase;
        }

        .subscribe .footer-text {
            padding: 16px 0;
        }

        .subscribe form {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 5px;
        }

        .subscribe form input {
            width: 100%;
            padding: 8px;
            right: 1rem;
            margin: 16px 0;
            border-radius: 10px;
        }

        .subscribe form .subscribe-btn {
            width: 100px;
            height: 35px;
            border-radius: 10px;
        }

        .subscribe form button:hover {
            background-color: #111827;
        }

        .social {
            display: flex;
            flex-direction: row;
            max-width: 1400px;
            padding: 16px 8px;
            margin: 0 auto;
            justify-content: space-between;
            text-align: center;
            color: #6b7280;
        }

        .social .social-title {
            padding: 32px 0;
        }

        .social .social-icons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            width: 150px;
            padding-top: 16px;
            font-size: 20px;
        }

        .social .social-icons .facebook {
            fill: blue;
        }

        .social .social-icons .instagram {
            fill: pink;
        }

        .social .social-icons .linkedin {
            fill: #2563eb;
        }

        .social .social-icons .github {
            fill: gray;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <h2 class="logo">trxvl.</h2>
        <div class="nav-list">
            <a href="#">Home</a>
            <a href="/dashboard/tugaspwl/tour.php">Tours</a>
            <a href="#">Contact</a>
            <div class="profile">
                <img src="./images/profile.jpg" alt="profile" class="profile-img">
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <div class="hero-wrapper">
            <img src="https://images.unsplash.com/photo-1529519801205-697b55d1194e?q=80&w=1455&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="hero-text">
                <p class="title">All Inclusive</p>
                <p class="subtitle">Enjoy Hiking & Getaways</p>
                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas molestiae repellat maiores optio aspernatur maxime, molestias omnis. Rerum, id sint.</p>
                <button class="btn">Reserve Now</button>
            </div>
        </div>
    </div>

    <!-- Offers -->
    <div class="offers">
        <p>Booking Incentive</p>
        <p>Book With Flexibelity</p>
        <p>Trip Insurance</p>
        <p>Compotitive Rates</p>
    </div>

    <!-- Plans -->
    <div class="plans">

        <!-- Left Side -->
        <div class="left-plans">
            <img src="https://images.unsplash.com/photo-1575573685828-7c1e20f05124?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="mountain">
            <img src="https://images.unsplash.com/photo-1671884424342-60245cd6a57b?q=80&w=1633&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="mountain">
            <img src="https://images.unsplash.com/photo-1621001481154-a52cbb91fcc2?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="mountain">
            <img src="https://images.unsplash.com/photo-1526494631344-8c6fa6462b17?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="mountain">
            <img src="https://images.unsplash.com/photo-1705682534655-c39daa35ce2e?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="mountain">
        </div>

        <!-- Right Side -->
        <div class="right-plans">
            <h3>Plan Your Trip In Indonesia</h3>
            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, unde.</p>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt eaque exercitationem perspiciatis maiores, facilis aperiam eveniet quasi sequi! Alias veritatis eos, dolorum suscipit consequatur doloribus quidem in corporis labore fugit!</p>
            <div class="buttons-plans">
                <button>Learn More</button>
                <button>Book Your Trip</button>
            </div>
        </div>
    </div>

    <!-- Camp -->
    <div class="camp">
        <div class="camp-text">
            <h3>Fine Interior Camps</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus quae at quidem explicabo nemo.</p>
        </div>

        <div class="camp-images">
            <img src="https://images.unsplash.com/photo-1565627797561-755e46e89270?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/">
            <img src="https://images.unsplash.com/photo-1682688759157-57988e10ffa8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/">
            <img src="https://images.unsplash.com/photo-1690269841828-426c38556e99?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="/">
        </div>
    </div>

    <!-- Share -->
    <div class="share">
        <div class="share-text">
            <h3>Take these tools to get to the top of the mountain</h3>
            <h5>#Rinjani 3726 Mdpl</h5>
        </div>
        <div class="share-images">
            <div class="left-share">
                <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1586685256769-4e869a64f1eb?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1535576434247-e0f50b766399?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1679958908017-9544c3a90f50?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1485809052957-5113b0ff51af?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <div class="wrapper">
            <div>
                <h5 class="footer-title">Solutions</h5>
                <ul>
                    <li>Travel</li>
                    <li>Booking</li>
                    <li>Flights</li>
                    <li>Cruises</li>
                    <li>Ground</li>
                </ul>
            </div>
            <div>
                <h5 class="footer-title">Support</h5>
                <ul>
                    <li>About</li>
                    <li>Documentation</li>
                    <li>Tours</li>
                    <li>Refunds</li>
                </ul>
            </div>
            <div>
                <h5 class="footer-title">Legal</h5>
                <ul>
                    <li>Claims</li>
                    <li>Privacy</li>
                    <li>Terms</li>
                    <li>Policies</li>
                    <li>Conditios</li>
                </ul>
            </div>
            <div class="subscribe">
                <p class="footer-name">Subscribe to our newsletters</p>
                <p class="footer-text">The Latest deals, articles and resources sent to your inbox weekly</p>
                <form>
                    <input type="email" placeholder='Enter email..'>
                    <button class="subscribe-btn">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="social">
            <p class="social-title">2022 Experiences, LLC, All right reserver</p>
            <div class="social-icons">
                <svg class="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                </svg>
                <svg class="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
                <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                </svg>
                <svg class="github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                </svg>
            </div>
        </div>
    </div>
</body>

</html>