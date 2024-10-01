<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tag -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- SEO -->
    <meta name="description" content="150 words" />
    <meta name="author" content="uipasta" />
    <meta name="url" content="http://www.yourdomainname.com" />
    <meta name="copyright" content="company name" />
    <meta name="robots" content="index,follow" />

    <title>DevBlog - Personal Blog Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      type="image/x-icon"
      href="images/favicon/apple-touch-icon.png"
    />

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css" />

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Google Web Fonts  -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"
    />

    <!-- Syntax Highlighter  -->
    <link rel="stylesheet" type="text/css" href="css/syntax/shCore.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/syntax/shThemeDefault.css"
    />

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Preloader Start -->
    <div class="preloader">
      <div class="rounder"></div>
    </div>
    <!-- Preloader End -->

    <div id="main">
      <div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <div class="col-md-3">
            <div class="about-fixed">
              <div class="my-pic">
                <a href="index.html"
                  ><img src="images/pic/my-pic.png" alt=""
                /></a>
                <nav id="menu">
                  <ul class="menu-link">
                    <li><a href="index.html">My blog</a></li>
                  </ul>
                </nav>
                <ul class="menu-link">
                  <li><a href="index.html">Life style [12]</a></li>
                  <li><a href="index.html">Sport[23]</a></li>
                  <li><a href="index.html">Music[46]</a></li>
                </ul>
              </div>

              <div class="my-detail">
                <div class="white-spacing">
                  <h1>Alex Parker</h1>
                  <span>Web Developer</span>
                </div>

                <ul class="social-icon">
                  <li>
                    <a href="#" target="_blank" class="facebook"
                      ><i class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="twitter"
                      ><i class="fa fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="linkedin"
                      ><i class="fa fa-linkedin"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" target="_blank" class="github"
                      ><i class="fa fa-github"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="index.html" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>Post Form</h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Form Start -->
                    <form action="">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input
                          type="text"
                          name="title"
                          id="title"
                          class="form-control"
                          placeholder="Enter your title here"
                        />
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <textarea
                          id="text"
                          name="text"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your text here"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1"> Image</label>
                        <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
                      </div>
                      <div class="form-group">
                        <label for="text">Quote</label>
                        <textarea
                          id="quote"
                          name="quote"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your quote here"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="text">Category</label>
                        <select
                          id="category"
                          name="category_id"
                          class="form-control"
                        >
                          <option disabled selected>
                            Select your category
                          </option>
                          <option value="1">Life style</option>
                          <option value="2">Sport</option>
                        </select>
                      </div>
                      <div>
                        <input
                          class="btn btn-primary"
                          type="submit"
                          value="submit"
                        />
                        <input
                          class="btn btn-secondary"
                          type="reset"
                          value="reset"
                        />
                      </div>
                    </form>
                    <!-- Form End -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
                <ul class="menu-link">
                  <li><a href="index.html">My Blog</a></li>
                </ul>

                <p>© Copyright 2016 DevBlog. All rights reserved</p>

                <!-- UiPasta Credit Start -->
                <div class="uipasta-credit">
                  Design By
                  <a href="http://www.uipasta.com" target="_blank">UiPasta</a>
                </div>
                <!-- UiPasta Credit End -->
              </footer>
            </div>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>

    <!-- Endpage Box (Popup When Scroll Down) Start -->
    <div id="scroll-down-popup" class="endpage-box">
      <h4>Read Also</h4>
      <a href="#"
        >How to make your company website based on bootstrap framework...</a
      >
    </div>
    <!-- Endpage Box (Popup When Scroll Down) End -->

    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->

    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- Syntax Highlighter Javascript File  -->
    <script type="text/javascript" src="js/syntax/shCore.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushCss.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushJScript.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushPerl.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushPhp.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushPlain.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushPython.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushRuby.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushSql.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushVb.js"></script>
    <script type="text/javascript" src="js/syntax/shBrushXml.js"></script>

    <!-- Syntax Highlighter Call Function -->
    <script type="text/javascript">
      SyntaxHighlighter.config.clipboardSwf = "js/syntax/clipboard.swf";
      SyntaxHighlighter.all();
    </script>
  </body>
</html>
