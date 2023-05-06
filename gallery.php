<style>
/* Grid styles */
.gallery {
  padding: 20px;
  background-color: var(--white) !important;
}
@media only screen and (max-width: 600px) {
  .gallery {
    grid-template-columns: repeat(2, 1fr);
  }
}
.gallery .grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
  margin: 0 auto;
  max-width: 1200px;
  overflow: hidden;
}
.gallery .grid-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}
.gallery .grid-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  position: relative;
  cursor: pointer;
  vertical-align: bottom;
}
.gallery .grid-item img:hover {
  z-index: 9;
  transform: scale(1.3);
  transition: transform ease 0.5s;
}

#imgContainer {
  display: none;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0; z-index: 999;
  width: 100vw; height: 100vh;
  background: rgba(0, 0, 0, 0.9);
  cursor: pointer;
}
#imgContainer.show {
  display: flex;
  justify-content: center;
  align-items: center;
}
#imgWrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 66vw;
  height: 80% !important;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}
#imgWrapper img {
  display: block;
  max-width: 100%;
  max-height: 100%;
  border-radius: 10px;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@-webkit-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@-o-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@-ms-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
</style>

<section class="container gallery pb-6">
  <div class="grid-container">
    <?php
      $dir = 'data/files/gallery/random';
      $file_display = array('jpg', 'jpeg', 'png', 'gif');

      if (file_exists($dir) == false) {
        echo 'Directory \'', $dir, '\' not found!';
      } else {
        $dir_contents = scandir($dir);
        foreach ($dir_contents as $file) {
          $file_type = @end(explode('.', $file));
          if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {

            echo '<div class="grid-item">';
            echo '<img src="', $dir, '/', $file, '" alt="Image">';
            echo '</div>';
          }
        }
      }
    ?>
  </div>
</section>

<div id="imgContainer">
  <div id="imgWrapper"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $('.gallery img').click(function () {
      var img_type = $(this).attr("src");
      $('#imgWrapper').append('<img src=' + img_type + '>');
      $('#imgContainer').toggleClass('show');
    });
    $('#imgContainer').click(function () {
      $('#imgContainer img').remove();
      $('#imgContainer').toggleClass('show');
    })
  });
</script>