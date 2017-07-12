 <!DOCTYPE html>
  <html>
    <head>
      <title>Materialize CSS Sandbox</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">



      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <div class="container">
        <h1>COLORS</h1>
        <div class="red white-text">Div with color red class</div>
        <div class="blue white-text darken-2">Div with color red class</div>
        <div class="deep-purple lighten-3 blue-text">Div with color red class</div>

        <h1>BUTTONS</h1>
        <button class="btn">Read More</button>
        <button class="btn waves-effect waves-light">Read More</button>
        <button class="btn btn-large">Read More</button>
        <button class="btn disabled">Read More</button>
        <button class="btn btn-large red darken-3">Read More</button>
        <!-- Colors -->
        <button class="btn btn-large blue">Read More</button>
        <button class="btn btn-large green">Read More</button>
        <button class="btn btn-large purple">Read More</button>
        <button class="btn btn-large black">Read More</button>
        <button class="btn btn-large yellow black-text">Read More</button>
        <!-- Icons -->
        <button class="btn btn-large brown"><i class="material-icons left">cloud</i>Read More</button>
        <!-- Floating Buttons -->
        <a href="#" class="btn-floating red btn-large"><i class="material-icons left">add</i></a>
        <!-- Fixed Action Button -->
        <div class="fixed-action-btn">
          <a href="#" class="btn-floating red btn-large"><i class="material-icons left">mode_edit</i></a>
          <ul>
            <li>
              <a href="#" class="btn-floating yellow btn-large"><i class="material-icons left">insert_chart</i></a>
            </li>
            <li>
              <a href="#" class="btn-floating blue btn-large"><i class="material-icons left">format_quote</i></a>
            </li>
            <li>
              <a href="#" class="btn-floating green btn-large"><i class="material-icons left">publish</i></a>
            </li>
            <li>
              <a href="#" class="btn-floating orange btn-large"><i class="material-icons left">attach_file</i></a>
            </li>
          </ul>
        </div>
        <!-- Flat Button -->
        <a href="#" class="waves-effect waves-teal btn-flat">Flat Button</a>

        <h1>HELPERS</h1>
        <!-- Alignment -->
        <div>
          <h5 class="left-align">This aligns to the left</h5>
        </div>
        <div>
          <h5 class="right-align">This aligns to the right</h5>
        </div>
        <div>
          <h5 class="center-align">This aligns to the center</h5>
        </div>

        <!-- Quick Floats -->
        <div class="left">Left Float</div>
        <div class="right">Right Float</div>

        <!-- Clear -->
        <div class="clearfix"></div>

        <!-- Hide Content -->
        <div class="hide">Hidded for all devices</div>
        <div class="hide-on-small-only">Hidded for mobile devices</div>
        <div class="hide-on-med-only">Hidded for tablets devices</div>
        <div class="hide-on-med-and-down">Hidded for tablets and smaller</div>
        <div class="hide-on-med-and-up">Hidded for tablets and larger</div>
        <div class="hide-on-large-only">Hidded for desktop</div>

        <!-- Truncate -->
        <h4 class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

        <!-- Effects -->
          <!-- Hoverable -->
          <div class="red white-text hoverable">
            Lorem ipsum dolor sit amet.
          </div>

          <!-- Pulse -->
          <div class="blue white-text _pulse">
            Lorem ipsum dolor sit amet.
          </div>

          <!-- Shadow -->
          <p class="z-depth-1">z-depth-1</p>
          <p class="z-depth-2">z-depth-2</p>
          <p class="z-depth-3">z-depth-3</p>
          <p class="z-depth-4">z-depth-4</p>
          <p class="z-depth-5">z-depth-5</p>

          <!-- Flow Text -->
          <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <!-- Images -->
          <img class="responsive-img" src="http://via.placeholder.com/600x300">

          <img class="responsive-img circle" src="http://via.placeholder.com/300">


      </div><!-- conainer end -->

      <!-- NAVIGATION -->
      <!-- Right Logo  -->
      <nav>
        <div class="nav-wrapper blue">
          <a href="#" class="brand-logo">LOGO</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Right Logo  -->
      <nav>
        <div class="nav-wrapper red">
          <a href="#" class="brand-logo right">LOGO</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Center Logo  -->
      <nav>
        <div class="nav-wrapper green">
          <a href="#" class="brand-logo center">LOGO</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Dropdown  -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li class="divider"></li>
        <li><a href="#">Link 4</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper green">
          <a href="#" class="brand-logo center">LOGO</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="" class="dropdown-button" data-activates="dropdown1">Dropdown <i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Nav Icons  -->
      <nav>
        <div class="nav-wrapper black">
          <a href="#" class="brand-logo right">LOGO</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#"><i class="material-icons">search</i></a></li>
            <li><a href="#"><i class="material-icons left">refresh</i>Link With left Icon</a></li>
            <li><a href="#" class="waves-effect waves-light btn">Button</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Search Bar  -->
      <nav>
        <div class="nav-wrapper">
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
      <br>
      <br>
      <br>

      <!-- Mobile Collapse Bar  -->
      <!-- Don't forget to initialize the hamburger menu -->
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">LOGO</a>
          <a href="#" class="button-collapse" data-activates="mobile-demo"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul id="mobile-demo" class="side-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <!-- COLLECTIONS/LISTS -->
        <h1>COLLECTIONS/LISTS</h1>
        <ul class="collection">
          <li class="collection-item">Item 1</li>
          <li class="collection-item">Item 2</li>
          <li class="collection-item">Item 3</li>
          <li class="collection-item">Item 4</li>
        </ul>

        <!-- Link Collections -->
        <div class="collection">
          <a href="#" class="collection-item">Link 1</a>
          <a href="#" class="collection-item">Link 2</a>
          <a href="#" class="collection-item">Link 3</a>
          <a href="#" class="collection-item">Link 4</a>
        </div>

        <!-- Link Collections w/ Header -->
        <ul class="collection with-header">
          <li class="collection-item"><h4>Header</h4></li>
          <li class="collection-item">Item 1</li>
          <li class="collection-item">Item 2</li>
          <li class="collection-item">Item 3</li>
        </ul>

        <!-- Icon Collection -->
        <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
        </ul>

        <!-- PAGINATION -->
        <h1>Pagination</h1>
        <ul class="pagination">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

        <!-- BREADCRUMBS -->
        <h1>Breadcrumbs</h1>
        <nav>
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="#!" class="breadcrumb">First</a>
              <a href="#!" class="breadcrumb">Second</a>
              <a href="#!" class="breadcrumb">Third</a>
            </div>
          </div>
        </nav>

        <!-- CARDS -->
        <h1>Cards</h1>

        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="http://materializecss.com/images/sample-1.jpg">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>

        <div class="card horizontal">
          <div class="card-image">
            <img src="https://lorempixel.com/100/190/nature/6">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>

        <!-- CHIPS -->
        <h1>Chips</h1>

        <div class="chip">
          Tag 1
          <i class="close material-icons">close</i>
        </div>
        <div class="chip">
          Tag 2
          <i class="close material-icons">close</i>
        </div>

        <!-- FORMS -->
        <h1>Forms</h1>

        <form>
          <div class="input-field">
            <input type="text" id="name">
            <label for="name" class="active">Name</label>
          </div>

          <div class="input-field">
            <input type="email" id="email" class="validate">
            <label for="email" class="active">Email</label>
          </div>

          <div class="input-field">
            <textarea id="textarea" class="materialize-textarea">

            </textarea>
            <label for="email" class="active">Textarea</label>
          </div>
        </form>

        <!-- PRELOADERS -->
        <h1>Preloaders</h1>

        <div class="progress">
          <div class="determinate" style="width: 40%"></div>
        </div>

        <div class="progress">
          <div class="indeterminate"></div>
        </div>

        <div class="preloader-wrapper big active">
          <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div><div class="gap-patch">
              <div class="circle"></div>
            </div><div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>

        <!-- GRID SYSTEM -->
        <h1>Grid System</h1>

        <div class="row">
          <div class="col s1"><div class="card-panel grey">1</div></div>
          <div class="col s1"><div class="card-panel grey">2</div></div>
          <div class="col s1"><div class="card-panel grey">3</div></div>
          <div class="col s1"><div class="card-panel grey">4</div></div>
          <div class="col s1"><div class="card-panel grey">5</div></div>
          <div class="col s1"><div class="card-panel grey">6</div></div>
          <div class="col s1"><div class="card-panel grey">7</div></div>
          <div class="col s1"><div class="card-panel grey">8</div></div>
          <div class="col s1"><div class="card-panel grey">9</div></div>
          <div class="col s1"><div class="card-panel grey">10</div></div>
          <div class="col s1"><div class="card-panel grey">11</div></div>
          <div class="col s1"><div class="card-panel grey">12</div></div>
        </div>

        <div class="row">
          <div class="col s8"><div class="card-panel grey">Col 8</div></div>
          <div class="col s4"><div class="card-panel grey">Col 4</div></div>
        </div>

        <div class="row">
          <div class="col s4"><div class="card-panel grey">Col 4</div></div>
          <div class="col s4"><div class="card-panel grey">Col 4</div></div>
          <div class="col s4"><div class="card-panel grey">Col 4</div></div>
        </div>

        <div class="row">
          <div class="col s12"><div class="card-panel grey">Col 12</div></div>
          <div class="col s6 offset-s6"><div class="card-panel grey">Col 6 Off 6</div></div>
        </div>

        <div class="row">
          <div class="col s7 push-s5"><div class="card-panel grey">Col 7</div></div>
          <div class="col s5 pull-s"><div class="card-panel grey">Col 5</div></div>
        </div>

      </div><!-- conainer end -->

      <div style="margin-bottom: 500px;"></div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>











