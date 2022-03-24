<!DOCTYPE html>
<html lang="en">

<head>
  <?php require("templates/head.php"); ?>
  <link rel="stylesheet" href="styles/contact.css">
  <title>Contact Kasia Grabara | RMT</title>
</head>

<body>
  <?php require("templates/header.php"); ?>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="contact-text">
      <h3>Contact</h3>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima facilis neque error, similique adipisci impedit!</p>
    </div>
    <div class="form-container">
      <form method="post" action="form.php">
        <div class="form-control">
          <label for="Name">Name</label>
          <input type="text" name="Name" id="" />
        </div>
        <div class="form-control">
          <label for="name">Email</label>
          <input type="email" name="Name" id="" />
        </div>
        <div class="form-control">
          <label for="phone">Phone</label>
          <input type="tel" name="phone" id="" />
        </div>
        <div class="form-control">
          <label for="message">Message</label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <button class="btn">Submit</button>
      </form>
    </div>
  </section>


  <?php require("templates/footer.php"); ?>
</body>

</html>