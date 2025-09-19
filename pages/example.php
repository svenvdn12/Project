<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="NL-nl">

<head>
  <meta charset="UTF-8">
  <title - Chaos Atelier</title>
  <link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
  <meta name="description" content="Chaos Atelier Home">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/modules/header.css">
  <link rel="stylesheet" href="../css/modules/footer.css">
  <link rel="stylesheet" href="../css/pages/example.css">
  <script src="../js/header-dropdown-menu-toggle.js" defer></script>
</head>

<body>
  <div id="container">
    <?php include_once('../views/header.php'); ?>
    <div id="page-content-container">
      <main>
        <section class="important">
          <header>
            <h1>IMPORTANT!</h1>
            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
          </header>
          <h2>
            Important to know is that this is just an example page which can be used to copy parts and as a reference
            what is already styled by <strong>main.css</strong>
          </h2>
          <h2>
            Some elements are not (yet) shown here so PLEASE check <strong>main.css</strong> for elements / components
            or specific styles before creating them yourself in a page-specific page to minimize <strong>code
              duplication</strong>.
          </h2>
          <h2>
            Some things not shown here are:<br>
            forms (Currently the styles only work in flex direction row, this will be fixed down the line)<br>
            heading elements as shown above with a h1 and img element are created by putting a header element inside a
            section element and inside putting a h1 and optionally img element.
          </h2>
        </section>
        <hr>
        <section class="variables-example">
          <header>
            <h1>VARIABLES</h1>
            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
          </header>
          <p>
            Variables are important to use and make it easier to have a coherent design.<br>
            Below are all the as of making this page variables, which can be found at the top of
            <strong>main.css</strong>:
          </p>
          <h2>PLEASE use these variables when possible.</h2>
          <p>
            :root {<br>
            /* colors */<br>
            --color-primary: #2231b4;<br>
            --color-secondary: #000060;<br>
            --color-accent: #ff611b;<br>
            --color-accent-hover: #c34400;<br>
            <br>
            /* typography */<br>
            --text-color-primary: #ffffff;<br>
            --text-color-secondary: #ff611b;<br>
            --font-size-s: 14px;<br>
            --font-size-m: 15px;<br>
            --font-size-l: 16px;<br>
            --font-size-xl: 32px;<br>
            <br>
            /* spacing */<br>
            --padding-gap-primary: 20px;<br>
            --padding-gap-secondary: 50px;<br>
            --padding-btn: 10px 20px;<br>
            <br>
            /* borders */<br>
            --border-primary: 5px solid #ffffff;<br>
            --border-primary-accent: 5px solid #ff611b;<br>
            --border-secondary: 1px solid #ffffff;<br>
            --border-secondary-accent: 1px solid #ff611b;<br>
            <br>
            /* transition(s)? */<br>
            --transition: 0.2s ease;<br>
            <br>
            /* shadows? */<br>
            --shadow-top: 0px -5px 10px rgba(0, 0, 0, 0.2);<br>
            --shadow-right: 5px 0px 10px rgba(0, 0, 0, 0.2);<br>
            --shadow-bottom: 0px 5px 10px rgba(0, 0, 0, 0.2);<br>
            }
          </p>
        </section>
        <hr>
        <section class="example-section">
          <header>
            <h1>TYPOGRAPHY</h1>
            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
          </header>
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <p>Paragraph</p>
          <a href="#">link</a>
          <hr>
          <section class="item-grid-example">
            <header>
              <h1>ITEM GRID</h1>
              <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
            </header>
            <p>
              This is a re-usable item grid which shows all item below each other on mobile and in rows of
              <strong>3</strong>.<br>
              You create this using a <strong>&lt;section class="item-grid"&gt;</strong>, with it's children being
              <strong>&lt;article class="item"&gt;</strong>'s. <br>The contents of the <strong>&lt;article
                class="item"&gt;</strong>'s can then be styled in a page-specific stylesheet in <strong>css > pages >
                example.css</strong>
            </p>
            <section class="item-grid">
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
              <article class="item">
                <div class="test-block">
                  <h1>TEST BLOCK</h1>
                </div>
              </article>
            </section>
          </section>
          <hr>
          <section class="borders-example">
            <header>
              <h1>BORDERS</h1>
              <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
            </header>
            <p class="border-bottom">
              Borders can be easely added using the existing <strong>variables</strong> found at the top of
              <strong>main.css</strong>. <br>
              On this Paragraph I used <strong>border-bottom: var(--border-primary)</strong>.<br>
              Below are some examples of the available borders with their used variable.
            </p>
            <section class="wrapper">
              <div class="example-block border-primary">
                <h2>var(--border-primary)</h2>
              </div>
              <div class="example-block border-primary-accent">
                <h2>var(--border-primary-accent)</h2>
              </div>
              <div class="example-block border-secondary">
                <h2>var(--border-secondary)</h2>
              </div>
              <div class="example-block border-secondary-accent">
                <h2>var(--border-secondary-accent)</h2>
              </div>
            </section>
          </section>
          <hr>
          <section class="colors-examplel">
            <header>
              <h1>COLORS</h1>
              <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
            </header>
            <p>
              Colors are <strong>very</strong> important to use variables for so that the look of the website can be
              easely changed. <br>
              Here are the currently supported colors from variables:
            </p>
            <section class="wrapper">
              <article class="example-block bg-primary">
                <p>var(--color-primary)</p>
              </article>
              <article class="example-block bg-secondary">
                <p>var(--color-secondary)</p>
              </article>
              <article class="example-block bg-accent">
                <p>var(--color-accent)</p>
              </article>
              <article class="example-block bg-accent-hover">
                <p>var(--color-accent)</p>
              </article>
            </section>
          </section>
          <hr>
          <section class="buttons-example">
            <header>
              <h1>BUTTONS</h1>
              <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
            </header>
            <p>
              Below are all the styled buttons supported by <strong>main.css</strong> (so without page-specific styling
              needed!)
            </p>
            <button>normal button</button>
            <a href="#" class="btn">link styled as button using class "btn"</a>
            <button class="filter">filter button using class "filter"</button>
            <a href="#" class="btn filter">link styled as filter button using classes "btn" and "filter"</a>
            <button class="filter active">'active' / selected filter button using classes "filter" and "active"</button>
            <a href="#" class="btn filter active">'active' / selected filter a button using classes "btn", "filter" and
              "active"</a>
            <p>So basicly when you want a link which is styled as a button use the same classes as a normal button but
              add "btn"</p>
          </section>
        </section>
      </main>
      <?php include_once('../views/footer.php'); ?>
    </div>
  </div>
</body>

</html>