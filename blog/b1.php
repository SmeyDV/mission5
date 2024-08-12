<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog 1</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="pic/logo.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/styles.css" />
    <style>
      .kroma {
        padding: 30px;
      }
      .boxbgblue {
        background-color: #0a283f;
      }
      .boxbgwhite {
        background-color: #f8f9fa;
        padding: 50px;
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .aha-photo {
        margin-top: 55px;
      }
      .samephotoUnderlay {
        background-image: url("pic/AHA-Official-Seal-of-Authenticity.jpg");
        background-size: cover;
        background-position: center;
        padding: 150px;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $navbarClass = ''; // No additional classes for navbar
    $searchBoxClass = false; // Custom class for search box
    $showLoginDropdown = false; // Show login dropdown
    include '../components/navbar.php';
    ?>

    <main>
      <section class="background-image samephotoUnderlay">
        <div class="container text-center aha-photo mb-10"></div>
      </section>

      <article class="container boxbgwhite">
        <h1>Finding Genuine Cambodian Handmade Gifts</h1>
        <p>
          Imagine a place where time seems to slow down, where the rhythm of
          life is dictated by the gentle caress of hands shaping clay, wood, or
          silk. This is the Lohak Handicraft Market in Cambodia, a haven for
          artisans whose skills have been passed down through generations.
        </p>

        <p>
          For millennia, the Khmer people have woven intricate tales into their
          crafts. Each piece is a story, a whisper of the land and its people.
          From the vibrant hues of silk scarves to the delicate curves of
          ceramic vases, the artistry is profound. Yet, in recent times, a
          shadow has fallen over this living heritage. Cheap, mass-produced
          imitations have flooded the market, threatening to eclipse the
          brilliance of authentic Khmer craftsmanship.
        </p>

        <p>
          Jake, a potter with hands as weathered as the clay he shapes, speaks
          with a quiet passion. "These hands, they hold the soul of our land,"
          he says, his eyes filled with a determination that belies his gentle
          demeanor. He and countless others like him are fighting to keep their
          traditions alive.
        </p>

        <p>
          Tom, a woodcarver, adds, "Each piece I create is a dialogue with the
          wood. It's about respecting the material, understanding its grain, and
          letting its spirit guide my chisel." His words paint a picture of a
          deep connection to nature, a philosophy that has shaped Khmer art for
          centuries.
        </p>

        <p>
          The Angkor Handicraft Association is the heart and soul of this
          battle. They're the guardians of a legacy, working tirelessly to
          protect and promote authentic Khmer crafts. Emma, the association's
          president, explains, "It's about more than just selling products. It's
          about preserving a way of life, empowering communities, and sharing
          the true spirit of Cambodia with the world."
        </p>

        <p>
          Every purchase of an authentic Khmer piece is a vote of confidence in
          these artisans, a way of saying, "Your work matters." It's an
          investment in a future where tradition and modernity coexist
          harmoniously. So, the next time you find yourself in Siem Reap, don't
          just buy a souvenir - buy a story.
        </p>

        <p>
          Let your heart be your guide. Seek out the yellow Seal of
          Authenticity, a mark of genuine craftsmanship. And remember, behind
          every piece lies a human story, a testament to the enduring spirit of
          the Khmer people.
        </p>
      </article>
    </main>

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
