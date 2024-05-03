<!-- ======= Header ======= -->
<style type="text/css">
    /* Initially hide dropdown menu */
/* Initially hide dropdown menu */
#navbar-menu {
    display: block;
    font-weight: bold;
    color: #012970;
}
/* Make dropdown menu visible and regular nav links hidden on smaller screens */
@media (max-width: 800px) {
    /* Show toggle button on smaller screens */
    #navbar-toggler {
        display: block;
    }

    /* Hide regular nav links */
    .header-nav ul {
        display: none;
        width: auto;
    }
    .header-nav ul li {
        font-size: 10px;
        margin-left: 15px;
    }
    .nav-text {
        display: none;
    }

    /* Show dropdown menu when toggled */
    #navbar-menu.show {
        display: none;
        flex-direction: column;
    }
    .header-nav ul li:hover {
        background-color: #F6B825; 
        color: white; 
        padding: 5px;
        border-radius: 4px;
    }
    .nav-item:hover .nav-link {
        background-color: #F6B825; 
    }
    title {
        padding: 10px;
        background-color: #ccc;
    }
    /* Base styling for tooltip */
    a title {
        position: absolute;
        background-color: #333;
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 1000; /* Ensure tooltip appears above other elements */
    }

    /* When tooltip is visible */
    .title.show {
        opacity: 1;
        visibility: visible;
    }

}

    
</style>
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-lg d-flex justify-content-between px-4">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url ?>" class="logo d-flex align-items-center">
                <img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo">
                <span class="d-none d-lg-block"><?= $_settings->info('short_name') ?></span>
            </a>
        </div>
        <button class="navbar-toggler d-lg-none" id="navbar-toggler" type="button" aria-expanded="false">
            <span class="navbar-toggler-icon">☰</span>
        </button>
        <nav class="header-nav me-auto" id="navbar-menu">
            <ul class="d-flex align-items-center h-100">
                <nav class="header-nav me-auto" id="navbar-menu">
    <ul class="d-flex align-items-center h-100">
        <!-- Your navigation items here -->
    </ul>
</nav>

    <li class="nav-item pe-3">
    <a href="<?= base_url ?>" class="nav-link" 
       title="Go to Home Page">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home">
            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
        <span class="nav-text">Home</span>
    </a>
</li>

                <!-- Add the rest of the navigation links similarly -->
                <li class="nav-item pe-3" class="active">
                    <a href="<?= base_url.'?page=items' ?>" id="home-link" class="nav-link" title="Lost and Found">
                        <svg title="This is a icon!" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-search">
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                            <path d="M4.268 21a2 2 0 0 0 1.727 1H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v3"/>
                            <path d="m9 18-1.5-1.5"/>
                            <circle cx="5" cy="14" r="3"/>
                        </svg>
                        <span class="nav-text" id="text-1">Lost Properties</span>
                    </a>
                </li>
                <li class="nav-item pe-3">
                    <a href="<?= base_url.'?page=found' ?>" class="nav-link" title="Post an Item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signpost">
                            <path d="M12 3v3"/>
                            <path d="M18.5 13h-13L2 9.5 5.5 6h13L22 9.5Z"/>
                            <path d="M12 13v8"/>
                        </svg>
                        <span class="nav-text" id="text-1">Post an Item</span>
                    </a>
                </li>
                <li class="nav-item pe-3">
                    <a href="<?= base_url.'?page=about' ?>" class="nav-link" title="About Page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-slash">
                            <path d="m13.5 8.5-5 5"/>
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.3-4.3"/>
                        </svg>
                        <span class="nav-text">About</span>
                    </a>
                </li>
                <li class="nav-item pe-3">
                    <a href="<?= base_url.'?page=contact' ?>" class="nav-link" title="Message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mails">
                            <rect width="16" height="13" x="6" y="4" rx="2"/>
                            <path d="m22 7-7.1 3.78c-.57.3-1.23.3-1.8 0L6 7"/>
                            <path d="M2 8v11 c0 1.1.9 2 2 2h14"/>
                        </svg>
                        <span class="nav-text">Message</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="d-flex align-items-center justify-content-between">
            <a href="http://localhost/lostgemramonian//admin" class="btn btn-primary">Login</a>
        </div>
    </div>
</header>

<script type="text/javascript">
    document.getElementById('navbar-toggler').addEventListener('click', function() {
    const navbarMenu = document.getElementById('navbar-menu');
    navbarMenu.classList.toggle('show');
});

var element = document.querySelector('#text-1');
        
</script>
