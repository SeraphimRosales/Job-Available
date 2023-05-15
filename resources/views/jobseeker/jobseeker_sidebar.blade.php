<head>

    <!-- CSS for Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

</head>


<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <li>
            <a href="{{ route('jobseeker.dashboard') }}"><i class="bi bi-briefcase"></i> Job Feed</a>
        </li>
        <li>
            <a href="{{ route('jobseeker.profile') }}"><i class="bi bi-person"></i> Profile</a>
        </li>
        <li>
            <a href="{{ route('jobseeker.settings') }}"><i class="bi bi-gear"></i> Settings</a>
        </li>
        <li>
            <hr style="border-top: 1px solid #bbb">
        </li>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <li>
            <a href="{{ route('aboutUs') }}">About Us</a>
        </li>
        <li>
            <a href="{{ route('contactUs') }}">Contact Us</a>
        </li>
        <li>
            <a href="{{ route('terms') }}">Terms and Conditions</a>
        </li>
        <li>
            <a href="{{ route('policy') }}">Privacy Policy</a>
        </li>
    </ul>
</div>
<style>
    .sidebar {
        position: fixed;
        left: 0;
        top: 80px; /* Adjust this value based on your top navigation bar's height */
        width: 200px;
        height: calc(100% - 80px); /* Adjust this value based on your top navigation bar's height */
        background-color: #f5f5f5;
        padding: 20px;
        box-sizing: border-box;
        overflow-y: auto; /* Add this to enable scrolling */
        z-index: 100; /* Add this to ensure the sidebar is in front of other elements */
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin-bottom: 10px;
    }

    .sidebar a {
        display: block;
        padding: 10px 0;
        color: #333;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .sidebar a:hover {
        background-color:gray;
        color: #fff;
    }

    .sidebar a i {
        margin-right: 10px;
    }
</style>