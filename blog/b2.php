<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog 2</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="pic/logo.png" />
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
        background-image: url("pic/holpidan.jpg");
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
        <div class="container text-center aha-photo"></div>
      </section>

      <article class="container boxbgwhite">
        <h1>Hol Pidan Exhibition in Phnom Penh</h1>
        <p>
          Phnom Penh Cambodia - The timeless beauty of Khmer culture is being
          celebrated through a captivating exhibition titled "Hol Pidan," which
          is currently showcasing the intricate and vibrant world of Khmer
          handicraft. This event, hosted at the National Museum of Cambodia,
          offers a deep dive into the rich textile heritage that has been woven
          into the fabric of Cambodian history.
        </p>
        <br />
        <p>
          The exhibition is a mesmerizing display of the traditional "pidan"
          textiles, renowned for their complex patterns and cultural
          significance. Pidan, a type of ikat textile, is a vital part of
          Cambodia's cultural and religious ceremonies, often used as ceremonial
          cloths in pagodas and homes. The meticulous craftsmanship and detailed
          designs highlight the skill and dedication of Khmer weavers, many of
          whom have passed down their techniques through generations.
        </p>
        <br />
        <p>
          Visitors to the Hol Pidan Exhibition are treated to an array of
          handwoven textiles, each piece telling its own story. The patterns,
          rich in symbolism, depict scenes from Buddhist mythology, daily life,
          and nature. The exhibition not only showcases the artistic excellence
          of these textiles but also underscores the importance of preserving
          this traditional craft in the face of modern challenges.
        </p>
        <br />
        <p>
          Curated by experts in Cambodian textiles, the exhibition aims to raise
          awareness and appreciation for this unique art form. It also seeks to
          support local artisans by promoting their work and ensuring that these
          traditional skills are not lost. Interactive displays and
          demonstrations by master weavers offer a hands on experience, allowing
          visitors to witness the intricate process of creating pidan.
        </p>
        <br />
        <p>
          One of the highlights of the exhibition is a collection of rare
          antique pidan, some of which date back several centuries. These
          historical pieces provide a glimpse into the evolution of Khmer
          textile art and the cultural narratives embedded within the weaves.
        </p>
        <br />
        <p>
          The Hol Pidan Exhibition is more than just a display of beautiful
          textiles; it is a celebration of Khmer heritage and an educational
          journey into the heart of Cambodian craftsmanship. For students,
          historians, and art enthusiasts alike, the exhibition offers a
          profound understanding of the cultural and historical significance of
          pidan.
        </p>
        <br />
        <p>
          As the exhibition continues to draw visitors, it serves as a reminder
          of the resilience and creativity of the Khmer people. The Hol Pidan
          Exhibition not only honors the past but also inspires future
          generations to embrace and continue the legacy of Khmer handicraft.
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
