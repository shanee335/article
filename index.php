<?php
  include("Navbar.php");
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--Linking Font Awesome for icons-->
  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!--linkking swiper CSS--> 
  <link rel="stylesheet"  href= "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet"  href= "style.css">

 <!--linking tailwindcss-->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 
 <!--linking bootstrap--> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
 
  <title>Artical</title>
</head>
<body>
  <!--Article section-->
    <section class="article-section" >
      <h2 class="section-title">*Blog*Article</h2>
      <br>
      <div class="section-content">
        <form action="index.php" class="article-form" method="POST">
          <label for="">Article name</label>
          <input type="text" placeholder="Article name" class="form-input" required>
          <label for="">Author name</label>
          <input type="text" placeholder="Author name" class="form-input" required>
          <label for="">Your email</label>
          <input type="email" placeholder="Your email" class="form-input" required>
          <label for="">Article content</label>
          <textarea placeholder="Article content(Min 400 characters)" class="form-input" required></textarea>
          <label for="">Your massage</label>
          <textarea placeholder="Your massage" class="form-input" ></textarea>
          <button type="submit-button" name="submit-button" value="submit-button" class="submit-button">Submit</button>
          
        </form>
      </div>
    </section>
</body>
</html>
<?php
  include("footer.php");
?>

 