<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com" crossorigin>
<link href="https" href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Article</title>
 
<body>

  <div class="container">
    <?php include("index.php");?>
    

    <?php
     //if(isset($_POST["submit-button"])) {
     //  //echo htmlspecialchars($_post['Article name']);
     //  //echo htmlspecialchars($_post['Author name']);
     //  //echo htmlspecialchars($_post['Your email ' ]);
     //  //echo htmlspecialchars($_post['Article content']);
     //  //echo htmlspecialchars($_post['your massage']); 

     //  if(empty($_POST['email'])) {
     //     if(isset($_POST['submit'])){


      // if(empty($_POST['Article name'])){  
      //    echo 'Article name is required! <br/>';
      // }else{
      //    echo $_POST['Article name'];
      // }

      //  if(empty($_POST['Author name'])){
      //    echo 'Author name is required! <br/>';
      // }else{
      //    echo $_POST['Author name'];
      // }

      // if(empty($_POST['Your name'])){
      //    echo 'Your name is required! <br/>';   
      // }else{      
      //    echo $_POST['Your name'];
      // }

      // if(empty($_POST['Article content'])){
      //    echo 'Article content is required! <br/>';   
      // }else{      
      //    echo $_POST['Article content'];
      // }
       
      //} 


     
     if(isset($_POST['submit'])){


       if(empty($_POST['Article name'])){  
          echo 'Article name is required! <br/>';
       }else{
          echo $_POST['Article name'];
       }

       if(empty($_POST['Author name'])){
          echo 'Author name is required! <br/>';
       }else{
          echo $_POST['Author name'];
       }

       if(empty($_POST['Your name'])){
          echo 'Your name is required! <br/>';   
       }else{      
          echo $_POST['Your name'];
       }

       if(empty($_POST['Article content'])){
          echo 'Article content is required! <br/>';   
       }else{      
          echo $_POST['Article content'];
       }
       
      }  
    ?>
  </div>
</body>