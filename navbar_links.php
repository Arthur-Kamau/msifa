<ul class="navbar-nav ml-auto">
  <li id="home" class="nav-item"><a href="index.php" class="nav-link">Home </a></li>
  <li id="about" class="nav-item"><a href="about.php" class="nav-link">About</a></li>
  <li id="profile" class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
  <li id="donate" class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
  <li id="gallery" class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
  <li id="team" class="nav-item"><a href="team.php" class="nav-link">Team</a></li>
  <li id="contact" class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
  <li id="volunteer" class="nav-item"><a href="volunteer.php" class="nav-link">Volunteer</a></li>
</ul>
<script>
  const path = window.location.pathname;
  const page = path.substring(path.lastIndexOf('/') + 1);
  console.log("page " + page);

  if (page == "index.php") {
    document.getElementById("home").classList.add("active");
  } else if (page == "about.php") {
    document.getElementById("about").classList.add("active");
  } else if (page == "about.php") {
    document.getElementById("causes").classList.add("active");
  } else if (page == "profile.php") {
    document.getElementById("profile").classList.add("active");
  } else if (page == "donate.php") {
    document.getElementById("donate").classList.add("active");
  } else if (page == "gallery.php") {
    document.getElementById("gallery").classList.add("active");

  } else if (page == "team.php") {
    document.getElementById("team").classList.add("active");

  } else if (page == "contact.php") {
    document.getElementById("contact").classList.add("active");

  } else if (page == "volunteer.php") {
    document.getElementById("volunteer").classList.add("active");

  }
</script>