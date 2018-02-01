<?php /* Template Name: homepage */ ?>

<?php get_header(); ?>

<div class="hero">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-phoneregular.jpg" class="hero__image hero__image--scale-pan" alt="hero image">
<div class="grid hero__content heading-group heading-group--white">
  <h1 class="heading-group__title hero-content">Digital Creative Services</h1>
  <hr class="hr">
  <h2 class="heading-group__subtitle">Websites, front end development & web graphics</h2>
</div>
</div>

<main>
<article class="page-section page-section--mgn-v-offset" id="services">
<h2 class="offset-display">Creative Services</h2>
<div class="grid">
<section class="row row--gutters-xl  row--equal-heights">
  <div class="col col--sm__6 col--md__6">
    <div class="ad ad--shadow ad--hover-animation feature-item">
      <div class="ad__image-wrapper">
        <div class="ad__image ad__image--websites"></div>
          <div class="ad__image-content ad__image-text heading-group heading-group--white heading-group--md">
            <h2 class="heading-group__title">Websites</h2>
            <hr class="hr">
            <h3 class="heading-group__subtitle">Mobile-first UI / UX</h3>
              <p class="hide-md"><a class="button button--brand-1  button--open-websites">Find Out More <i class="ficon ficon-chevron-right" aria-hidden="true"></i></a></p>
          </div>
      </div>
      <div class="ad__content hide-sm">
        <p>I design and build website frontends with a mobile-first approach with well structured semantic html5, css3 and javascript.</p>
          <hr class="hr hr--dark">
        <p class="ad__button-wrapper ad__button-wrapper--center hide-sm"><a class="button  button--open-websites">Take a Peek</a></p>
      </div>
      <div class="ad__badges">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/css3.svg" alt="css3 logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/html5.svg" alt="html5 logo">
      </div>
    </div>
  </div>
<div class="col col--sm__6 col--md__6">
<div class="ad ad--shadow ad--hover-animation feature-item">
  <div class="ad__image-wrapper">
    <div class="ad__image ad__image--devices"></div>
      <div class="ad__image-content heading-group heading-group--white heading-group--md">
        <h2 class="heading-group__title">Creative</h2>
        <hr class="hr">
        <h3 class="heading-group__subtitle">Web Banners &amp; Email Marketing</h3>
        <p class="hide-md"><a class="button button--brand-1 button--open-creative">Find Out More <i class="ficon ficon-chevron-right" aria-hidden="true"></i></a></p>
      </div>
  </div>
  <div class="ad__content hide-sm">
    <p>I can design and create both static and animated web banners, social media ads and imagery, html emails, logos and more.</p>
      <hr class="hr hr--dark">
<p class="ad__button-wrapper ad__button-wrapper--center hide-sm"><a class="button  button--open-creative">Take a Peek</a></p>
  </div>
</div>
</div>
</section>
</div>
</article>

<!--Begin Modal for Websites-->
<div class="modal wrapper" id="modal-websites" role="dialog" aria-labelledby="WebsiteExamples" aria-describedby="WebsiteExamplesContent">
<a class="modal__overlay"></a>
<div class="modal__inner">
<button class="modal__btn__close button--close-modal"  title="close this dialog">
<span class="modal__btn__close__x modal__btn__close__x--left"></span>
<span class="modal__btn__close__x modal__btn__close__x--right"></span>
</button>

<div class="ad">
  <div class="ad__image-wrapper">
    <div class="ad__image ad__image ad__image--websites"></div>
      <div class="ad__image-content heading-group heading-group--white heading-group--md" id="WebsiteExamples">
        <h2 class="heading-group__title">Websites</h2>
        <hr class="hr">
        <h3 class="heading-group__subtitle">Methodology and Examples</h3>

      </div>
  </div>
</div>

<div class="modal__scrollable wrapper">
<article id="WebsiteExamplesContent">

  <section class="page-section  centered">
    <div class="grid">
      <div class="heading-group heading-group--md heading-group--bottom-margin-sm">
      <h5 class="heading-group__title">Examples</h5>
      <hr class="hr hr--dark">
      <h6 class="heading-group__subtitle">Content coming soon!</h6>
      </div>
      <p>Due to me working for the same company for the last 19 years, and the fact that it was recently liquidated, the websites that I helped build have been taken offline and i do not have access to the uncompiled .NET code.</p>
      <p>I will endeavour to upload the frontend files as soon as I have stripped them of any dynamic server side code.</p>
    </div>
  </section>


<section class="page-section page-section--brand-3 centered">
  <div class="grid">
    <div class="heading-group heading-group--md heading-group--bottom-margin-sm">
    <h5 class="heading-group__title">Methodology</h5>
    <hr class="hr hr--dark">
    <h6 class="heading-group__subtitle">How I like to build my sites</h6>
    </div>
    <dl>
      <dt>Lightweight and Bespoke</dt>
      <dd>I tend not to use boilerplates or frameworks, so my html is fully bespoke and as lightweight as possible<dd>
      <dt>BEM Methodology</dt>
      <dd>I have recently adopted the BEM methodology for my CSS and classes<dd>
      <dt>Semantic HTML</dt>
      <dd>I regularly validate my html with the wc3 validion tool<dd>
    </dl>
  </div>
</section>



</article>

</div>

</div>
</div>
<!--End Modal for Websites-->

<!--Begin Modal for Creative-->
<div class="modal wrapper" id="modal-creative" role="dialog" aria-labelledby="CreativeExamples" aria-describedby="CreativeExamplesContent">
<a class="modal__overlay"></a>
<div class="modal__inner">
<button class="modal__btn__close button--close-modal"  title="close this dialog">
<span class="modal__btn__close__x modal__btn__close__x--left"></span>
<span class="modal__btn__close__x modal__btn__close__x--right"></span>
</button>

<div class="ad">
  <div class="ad__image-wrapper">
    <div class="ad__image ad__image ad__image--devices"></div>
      <div class="ad__image-content heading-group heading-group--white heading-group--md" id="CreativeExamples">
        <h2 class="heading-group__title">Creative Media</h2>
        <hr class="hr">
        <h3 class="heading-group__subtitle">Examples of banners, logos and other media</h3>

      </div>
  </div>
</div>

<div class="modal__scrollable wrapper">
<article class="examples">
<div class="page-section">
<div class="grid">
<section class="row row--gutters-xl" id="CreativeExamplesContent">
<div class="heading-group heading-group--md heading-group--bottom-margin-sm">
<h5 class="heading-group__title">CruiseSoon Logo</h5>
<hr class="hr hr--dark">
<h6 class="heading-group__subtitle">Online cruise agency</h6>
</div>
<div class="col col--md__6">
<img src="assets/images/logo-cruisesoon-blue.png" alt="cruisesoon logo 1">
</div>
<div class="col col--md__6">
<img src="assets/images/logo-cruisesoon-white.png" alt="cruisesoon logo 2">
</div>
<div class="col centered">
<p>I was not given a design brief so I came up with something that I liked. I used the nintendo switch logo as inspiration, and I wanted something that would sit well on a coloured background. I selected blue to convey both the ocean, relaxation and a sense of calm.</p>
</div>
</section>
</div>
</div>

<div class="page-section page-section--brand-3">
<div class="grid">
<section class="row row--gutters-xl">
<div class="heading-group heading-group--md heading-group--bottom-margin-sm">
<h5 class="heading-group__title">A1Travel Logo</h5>
<hr class="hr hr--dark">
<h6 class="heading-group__subtitle">Online travel agency</h6>
</div>
<div class="col centered">
<img src="assets/images/logo-a1travel.png" alt="a1travel logo" class="native">
</div>
<div class="col centered">
<p>This one was the logo for the main brand of the company I worked for for 19 years.</p>
</div>
</section>
</div>
</div>

<div class="page-section">
<div class="grid">
<section class="row row--gutters-xl">
<div class="heading-group heading-group--md heading-group--bottom-margin-sm">
<h5 class="heading-group__title">Web Banners</h5>
<hr class="hr hr--dark">
<h6 class="heading-group__subtitle">Various companies</h6>
</div>
<div class="col centered">
<img src="assets/images/web-banners.jpg" alt="cruise soon logo composition" class="native">
</div>
</section>
</div>
</div>

</article>
</div>
</div>
</div>
<!--End Modal for Creative-->

<div class="page-section page-section--brand-3 " id="about-me">
<section class="about-me">
  <div class="grid grid--md">
  <div class="heading-group heading-group--bottom-margin">
  <h2 class="heading-group__title">About Me</h2>
  <hr class="hr hr--dark">
  <h3 class="heading-group__subtitle">What is my name? What is my quest? What is my favourite colour?</h3>
  </div>
<div class="row row--gutters-xl generic-content">
<div class="col col--md__6">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rikk-ogden.jpg" alt="Rikk Ogden" title="Photo Of Rikk Ogden" />
</div>
<div class="col col--md__6">
My <b>name</b> is Rikk Ogden and I'm website and creative media designer / frontend developer. I'm also a husband and a father, a keen music lover and an noob video gamer.
<p>Having a passion for design and technology, my <b>quest</b> is to continue to grow as a frontend developer, improve my programming and learn React.</p>
<p>My <b>favourite colour</b> depends on my mood. Currently its <b class="brand-3">#401F3E</b>.</p>

</div>
</div>
</div>

<div class="grid grid--sm grid--mt-lg centered">
<div class="row row--gutters-xl">
<div class="col col--md__12">
<div class="about-me__button-group">
<p><a class="button button--lg button--brand-1 button--fw button--open-work-history" role="button">Work History & Experience</a></p>
<hr class="hr hr--dark">
<p><a class="button " href="downloads/rikk-ogden-cv.pdf" role="button" download>Download my CV <i class="ficon ficon-download" aria-hidden="true"></i></a>
</p>
<i class="ficon ficon-pdf" aria-hidden="true"></i> <small> Format: PDF | File size: 100kb</small>
</div>
</div>
</div>
</div>
</section>

</div>

<!--modal-about-me -->
<div class="modal wrapper" id="modal-workhistory" role="dialog" aria-labelledby="WorkHistoryTitle" aria-describedby="WorkHistoryContent">
<a class="modal__overlay"></a>
<div class="modal__inner">
<button class="modal__btn__close button--close-modal"  title="close this dialog">
<span class="modal__btn__close__x modal__btn__close__x--left"></span>
<span class="modal__btn__close__x modal__btn__close__x--right"></span>
</button>

<div class="ad">
  <div class="ad__image-wrapper">
    <div class="ad__image ad__image ad__image--devices"></div>
      <div class="ad__image-content heading-group heading-group--white heading-group--md" id="WorkHistoryTitle">
        <h2 class="heading-group__title">Work History &amp; Experience</h2>
        <hr class="hr">
        <h3 class="heading-group__subtitle">Where I began to where I am now</h3>

      </div>
  </div>
</div>

<div class="modal__scrollable wrapper work-history">
<article id="WorkHistoryContent">
<div class="page-section">
<div class="grid">
<section class="row row--gutters-xxl">
<div class="col col--md__6">
      <div class="heading-group heading-group--md heading-group--bottom-margin-sm">
      <h4 class="heading-group__title">Chadwell Travel Ltd</h4>
      <h5 class="heading-group__subtitle">February 1998 - October 2017</h5>
    </div>
      <p>I started as a holiday salesman back in 1998 for Chadwell Travel Ltd. After a few years, The company needed a web presence, and having a background in art and a keen interest in technology, I was given the opportunity to see if I could build something. I bought a book on HTML and after a couple of months I had created the company's very first website.</p>
      <p>Over the course of the next decade I would continue to grow and evolve the website from it's beginnings as premier-leisure.com (a simple website with a framed third-party ecommerce solution) to a rebrand into a1travel.com. This would become the main brand and online-bookable sales platform for the company until the collapse of Monarch Airlines in October 2017 forced us into liquidation.</p>
      <p>To my knowledge, we were one of the first UK online travel agency sites to go responsive.</p>
      <p> By the end of the company's lifecycle I maintained responsibility for branding, front end design and development, email &amp; web marketing and managing a dev team in India with whom we had outsourced the backend and server side responsibilites.</p>
</div>
  <div class="col col--md__6">
  <img src="assets/images/a1travel-screens72.png" alt="Chadwell Travel -- a1travel.com">
  </div>
</section>
</div>
</div>

<div class="page-section page-section--brand-3">
<div class="grid">
  <section class="row row--gutters-xxl">
    <div class="col heading-group heading-group--md heading-group--bottom-margin-sm">
    <h4 class="heading-group__title">Experience Gained</h4>
    <h5 class="heading-group__subtitle">Chadwell Travel. 1998 - 2017</h5>
  </div>
    <div class="col col--md__6">
    <p>As I was solely responsible for the website for the first half of its life, I would gain experience in a range of technology.</p>
    <p>For the second half of the website's life we outsourced server-side development to Mumbai in India, swtching to .NET. I would gain experience in project managing this team, often writing psuedo code to assist in conveying logic requirements. I would also gain a base understanding of .NET principles and structure.</p>
    <p>During this time I maintained full front end design and development responsibilities.</p>
  </div>
  <div class="col col--md__6">
    <dl>
      <dt>HTML, CSS, Adobe Fireworks, Adobe Flash and Jquery</dt>
      <dd>These were my primary design and frontend development tools</dd>
      <dt>Classic ASP</dt>
      <dd>I built an intranet with a CMS, a CMS and dynamic pages for website offers</dd>
      <dt>MS SQL Server / SQL</dt>
      <dd>I built a database for both of the above, gaining a good understanding of DB concepts and SQL syntax.</dd>
    </dl>
    </div>
  </section>
  </div>
</div>


<div class="page-section">
  <div class="grid">
  <div class="row row--gutters-xxl">
  <section class="col col--md__6">
      <div class="heading-group heading-group--md">
      <h4 class="heading-group__title">Man Overboard</h4>
      <h5 class="heading-group__subtitle">October 2017 - December 2017</h5>
    </div>
      <p>Finding myself without a job and in open waters I began to do some research and I realised that over the course of the last few years I had stagnated a little. I found myself in the position of feeling adrift in a sea of new technology.
      </p>
      <p>To that end I spent the time between October 20th 2017 and the end of December 2017 researching, learning and adapting to the modern workflow, learning NPM, Postcss,  Gulp, Git and Github</p>
</section>

<section class="col col--md__6">
  <div class="heading-group heading-group--md">
  <h4 class="heading-group__title">Moving Forward</h4>
  <h5 class="heading-group__subtitle">December 2017 - Present</h5>
</div>
<p>My aim is to focus on specialising fully into frontend development and hope to find a position in a workplace that will embrace my hard-working, loyal and enthusiastic work ethic, whilst allowing me to grow and improve. I'm most excited about learning React and Node and keeping current with the ever evolving technology and practices.</p>
  <p>
I'm currently spending my time researching and brushing up on all of my core skills, retraining myself in vanilla JS, and delving into the world of Node.js and React.
</p>
</section>

</div>
</div>
</div>

</article>
</div>
</div>
</div>



<div class="page-section page-section--brand-1 " id="toolset" data-link="link-toolset">
<article class="grid toolset">
<div class="heading-group heading-group--brand-1 heading-group--bottom-margin">
<h2 class="heading-group__title">Toolset</h2>
<hr class="hr">
<h3 class="heading-group__subtitle">I use the following tools in my current workflow</h3>
</div>
<section class="row row--gutters-xl feature-item">
<div class="col col--md__4">
  <dl>
    <dt><i class="ficon ficon--boxed  ficon-npm" aria-hidden="true"></i> Node.JS / Npm</dt>
    <dd>I use various packages to aid my workflow</dd>
    <dt><i class="ficon ficon--boxed  ficon-jquery" aria-hidden="true"></i> JQuery</dt>
    <dd>For UI and DOM manipulation</dd>
    <dt><i class="ficon ficon--boxed  ficon-gulp" aria-hidden="true"></i> Gulp</dt>
    <dd>Tasks for automation, minifying, image optimisation, browsersync and build &amp; watch tasks</dd>

  </dl>
</div>
<div class="col col--md__4">
  <dl>
    <dt><i class="ficon ficon--boxed  ficon-atom" aria-hidden="true"></i> Atom</dt>
    <dd>My current editor of choice</dd>
    <dt><i class="ficon ficon--boxed  ficon-postcss" aria-hidden="true"></i> Postcss</dt>
    <dd>Highly organised, modular CSS.<br>Coupled with postcss-next.</dd>
  </dl>
</div>
<div class="col col--md__4">
  <dl>
    <dt><i class="ficon ficon--boxed  ficon-git" aria-hidden="true"></i>  <i class="ficon ficon--boxed  ficon-github" aria-hidden="true"></i> Git &amp; GitHub</dt>
    <dd>For version control. <a href="https://github.com/RikkOgden" target="_blank" class="toolset__text-link">Visit my Gitub page</a></dd>
    <dt><i class="ficon ficon--boxed ficon-adobephotoshop" aria-hidden="true"></i> Adobe Photoshop</dt>
    <dd>I typically design in the browser on the fly, but occasionally I use this for creatives</dd>
    <dt><i class="ficon ficon--boxed ficon-adobeillustrator" aria-hidden="true"></i> Adobe Illustrator</dt>
    <dd>Initially I used this for vectors and iconography, but I'm gradualy shifting all creative work here</dd>
  </dl>
</div>
</section>
</article>
</div>

</main>

<?php get_footer(); ?>
</body>
</html>
