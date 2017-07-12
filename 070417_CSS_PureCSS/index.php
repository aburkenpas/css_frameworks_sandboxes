<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" >
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Pure CSS Sandbox</title>


  <!-- Adding this style tag b/c Pure CSS has no container like css -->
  <!-- This is basically Bootstraps way of doing it -->
  <style type="text/css">
    .pure-g {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }
    @media (min-width: 768px) {
      .pure-g {
        width: 750px;
      }
    }
    @media (min-width: 992px) {
      .pure-g {
        width: 970px;
      }
    }
    @media (min-width: 1200px) {
      .pure-g {
        width: 1170px;
      }
    }
    /*Adding this for the grid*/
    .grey-column {
      background: #CCC;
      text-align: center;
      box-shadow: inset 0 0 10px
    }
  </style>
</head>
<body>

  <div class="pure-g" style="margin-bottom: 500px;">
    <div class="pure-u-24-24">
      <h1>Buttons</h1>

      <h3>Basic Default</h3>
      <a class="pure-button" href="#">A Pure Button</a>
      <button class="pure-button">A Pure Button</button>

      <h3>Disabled</h3>
      <button class="pure-button pure-button-disabled">A Disabled Button</button>
      <button class="pure-button" disabled>A Disabled Button</button>

      <h3>Active</h3>
      <a class="pure-button pure-button-active" href="#">An Active Button</a>
      <button class="pure-button pure-button-active">An Active Button</button>

      <h3>Primary</h3>
      <a class="pure-button pure-button-primary" href="#">A Primary Button</a>
      <button class="pure-button pure-button-primary">A Primary Button</button>

      <h3>Icons</h3>
      <button class="pure-button">
        <i class="fa fa-cog"></i>
          Settings
      </button>
      <a class="pure-button" href="#">
        <i class="fa fa-shopping-cart fa-lg"></i>
        Checkout
      </a>

      <h3>Groups</h3>
      <div class="pure-button-group" role="group" aria-label="...">
        <button class="pure-button">A Pure Button</button>
        <button class="pure-button">A Pure Button</button>
        <button class="pure-button pure-button-active">A Pure Button</button>
      </div>


      <h1>Tables</h1>

      <h3>Default</h3>
      <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Honda</td>
                <td>Accord</td>
                <td>2009</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Toyota</td>
                <td>Camry</td>
                <td>2012</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Hyundai</td>
                <td>Elantra</td>
                <td>2010</td>
            </tr>
        </tbody>
      </table>

      <h3>Bordered</h3>
      <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Honda</td>
                <td>Accord</td>
                <td>2009</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Toyota</td>
                <td>Camry</td>
                <td>2012</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Hyundai</td>
                <td>Elantra</td>
                <td>2010</td>
            </tr>
        </tbody>
      </table>

      <h3>Horizontal Borders</h3>
      <table class="pure-table pure-table-horizontal">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Honda</td>
                <td>Accord</td>
                <td>2009</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Toyota</td>
                <td>Camry</td>
                <td>2012</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Hyundai</td>
                <td>Elantra</td>
                <td>2010</td>
            </tr>
        </tbody>
      </table>

      <h3>Striped</h3>
      <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr class="pure-table-odd">
                <td>1</td>
                <td>Honda</td>
                <td>Accord</td>
                <td>2009</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Toyota</td>
                <td>Camry</td>
                <td>2012</td>
            </tr>

            <tr class="pure-table-odd">
                <td>3</td>
                <td>Hyundai</td>
                <td>Elantra</td>
                <td>2010</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Ford</td>
                <td>Focus</td>
                <td>2008</td>
            </tr>

            <tr class="pure-table-odd">
                <td>5</td>
                <td>Nissan</td>
                <td>Sentra</td>
                <td>2011</td>
            </tr>

            <tr>
                <td>6</td>
                <td>BMW</td>
                <td>M3</td>
                <td>2009</td>
            </tr>

            <tr class="pure-table-odd">
                <td>7</td>
                <td>Honda</td>
                <td>Civic</td>
                <td>2010</td>
            </tr>

            <tr>
                <td>8</td>
                <td>Kia</td>
                <td>Soul</td>
                <td>2010</td>
            </tr>
        </tbody>
      </table>
      <br>
      <br>
      <br>
      <table class="pure-table pure-table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Honda</td>
                <td>Accord</td>
                <td>2009</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Toyota</td>
                <td>Camry</td>
                <td>2012</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Hyundai</td>
                <td>Elantra</td>
                <td>2010</td>
            </tr>
        </tbody>
      </table>


      <h1>Menus</h1>

      <h3>Vertical</h3>
      <div class="pure-menu custom-restricted-width">
        <span class="pure-menu-heading">Yahoo Sites</span>

        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Flickr</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Messenger</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sports</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Finance</a></li>
          <li class="pure-menu-heading">More Sites</li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Games</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">News</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">OMG!</a></li>
        </ul>
      </div>

      <h3>Horizontal</h3>
      <div class="pure-menu pure-menu-horizontal">
        <a href="#" class="pure-menu-heading pure-menu-link">BRAND</a>
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">News</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sports</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Finance</a></li>
        </ul>
      </div>

      <h3>Selected and Disabled Items</h3>
      <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
          <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Selected</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Normal</a></li>
          <li class="pure-menu-item pure-menu-disabled">Disabled</li>
        </ul>
      </div>

      <h3>Dropdowns</h3>
      <h6>Requires JS to function</h6>
      <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
          <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
          <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">Contact</a>
            <ul class="pure-menu-children">
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Email</a></li>
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Twitter</a></li>
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tumblr Blog</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <h3>Vertical Menu with Submenus</h3>
      <h6>Requires JS to function</h6>
      <div class="pure-menu custom-restricted-width">
        <ul class="pure-menu-list">
          <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Flickr</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Messenger</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sports</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Finance</a></li>
          <li class="pure-menu-item pure-menu-has-children">
            <a href="#" id="menuLink1" class="pure-menu-link">More</a>
            <ul class="pure-menu-children">
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Autos</a></li>
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Flickr</a></li>
              <li class="pure-menu-item pure-menu-has-children">
                <a href="#" id="menuLink1" class="pure-menu-link">Even More</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Foo</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Bar</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Baz</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <h3>Scrollable Horizontal</h3>
      <div class="pure-menu pure-menu-horizontal pure-menu-scrollable">
        <a href="#" class="pure-menu-link pure-menu-heading">Yahoo</a>
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Flickr</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Messenger</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sports</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Finance</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Autos</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Beauty</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Movies</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Small Business</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Cricket</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tech</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">World</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">News</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Support</a></li>
        </ul>
      </div>

      <h1>Menus</h1>

      <h3>Default</h3>
      <form class="pure-form">
        <fieldset>
          <legend>A compact inline form</legend>

          <input type="email" placeholder="Email">
          <input type="password" placeholder="Password">

          <label for="remember">
              <input id="remember" type="checkbox"> Remember me
          </label>

          <button type="submit" class="pure-button pure-button-primary">Sign in</button>
        </fieldset>
      </form>

      <h3>Stacked</h3>
      <form class="pure-form pure-form-stacked">
          <fieldset>
              <legend>A Stacked Form</legend>

              <label for="email">Email</label>
              <input id="email" type="email" placeholder="Email">
              <span class="pure-form-message">This is a required field.</span>

              <label for="password">Password</label>
              <input id="password" type="password" placeholder="Password">

              <label for="state">State</label>
              <select id="state">
                  <option>AL</option>
                  <option>CA</option>
                  <option>IL</option>
              </select>

              <label for="remember" class="pure-checkbox">
                  <input id="remember" type="checkbox"> Remember me
              </label>

              <button type="submit" class="pure-button pure-button-primary">Sign in</button>
          </fieldset>
      </form>

      <h3>Aligned</h3>
      <form class="pure-form pure-form-aligned">
          <fieldset>
              <div class="pure-control-group">
                  <label for="name">Username</label>
                  <input id="name" type="text" placeholder="Username">
                  <span class="pure-form-message-inline">This is a required field.</span>
              </div>

              <div class="pure-control-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" placeholder="Password">
              </div>

              <div class="pure-control-group">
                  <label for="email">Email Address</label>
                  <input id="email" type="email" placeholder="Email Address">
              </div>

              <div class="pure-control-group">
                  <label for="foo">Supercalifragilistic Label</label>
                  <input id="foo" type="text" placeholder="Enter something here...">
              </div>

              <div class="pure-controls">
                  <label for="cb" class="pure-checkbox">
                      <input id="cb" type="checkbox"> I've read the terms and conditions
                  </label>

                  <button type="submit" class="pure-button pure-button-primary">Submit</button>
              </div>
          </fieldset>
      </form>

      <h3>Grouped</h3>
      <form class="pure-form">
          <fieldset class="pure-group">
              <input type="text" class="pure-input-1-2" placeholder="Username">
              <input type="text" class="pure-input-1-2" placeholder="Password">
              <input type="email" class="pure-input-1-2" placeholder="Email">
          </fieldset>

          <fieldset class="pure-group">
              <input type="text" class="pure-input-1-2" placeholder="A title">
              <textarea class="pure-input-1-2" placeholder="Textareas work too"></textarea>
          </fieldset>

          <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Sign in</button>
      </form>

      <h3>Sizing</h3>
      <form class="pure-form">
          <input class="pure-input-1" type="text" placeholder=".pure-input-1"><br>
          <input class="pure-input-2-3" type="text" placeholder=".pure-input-2-3"><br>
          <input class="pure-input-1-2" type="text" placeholder=".pure-input-1-2"><br>
          <input class="pure-input-1-3" type="text" placeholder=".pure-input-1-3"><br>
          <input class="pure-input-1-4" type="text" placeholder=".pure-input-1-4"><br>
      </form>
      <br>
      <br>
      <br>
      <form class="pure-form pure-g">
          <div class="pure-u-1-4">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-4">
          </div>
          <div class="pure-u-3-4">
              <input class="pure-input-1" type="text" placeholder=".pure-u-3-4">
          </div>

          <div class="pure-u-1-2">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
          </div>
          <div class="pure-u-1-2">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
          </div>

          <div class="pure-u-1-8">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-8">
          </div>
          <div class="pure-u-1-8">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-8">
          </div>
          <div class="pure-u-1-4">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-4">
          </div>
          <div class="pure-u-1-2">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-2">
          </div>

          <div class="pure-u-1-5">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1-5">
          </div>
          <div class="pure-u-2-5">
              <input class="pure-input-1" type="text" placeholder=".pure-u-2-5">
          </div>
          <div class="pure-u-2-5">
              <input class="pure-input-1" type="text" placeholder=".pure-u-2-5">
          </div>

          <div class="pure-u-1">
              <input class="pure-input-1" type="text" placeholder=".pure-u-1">
          </div>
      </form>

      <h3>Required</h3>
      <form class="pure-form">
          <input type="email" placeholder="Requires an email" required>
      </form>

      <h3>Disabled</h3>
      <form class="pure-form">
          <input type="text" placeholder="Disabled input here..." disabled>
      </form>

      <h3>Rounded</h3>
      <form class="pure-form">
          <input type="text" class="pure-input-rounded">
          <button type="submit" class="pure-button">Search</button>
      </form>

      <h3>Checkboxes and Radios</h3>
      <form class="pure-form">
          <label for="option-one" class="pure-checkbox">
              <input id="option-one" type="checkbox" value="">
              Here's option one.
          </label>

          <label for="option-two" class="pure-radio">
              <input id="option-two" type="radio" name="optionsRadios" value="option1" checked>
              Here's a radio button. You can choose this one..
          </label>

          <label for="option-three" class="pure-radio">
              <input id="option-three" type="radio" name="optionsRadios" value="option2">
              ..Or this one!
          </label>
      </form>


       <h1>Grid</h1>

    </div>
    <div class="pure-g">
      <div class="pure-u-1-24 grey-column"><p>1</p></div>
      <div class="pure-u-1-24 grey-column"><p>2</p></div>
      <div class="pure-u-1-24 grey-column"><p>3</p></div>
      <div class="pure-u-1-24 grey-column"><p>4</p></div>
      <div class="pure-u-1-24 grey-column"><p>5</p></div>
      <div class="pure-u-1-24 grey-column"><p>6</p></div>
      <div class="pure-u-1-24 grey-column"><p>7</p></div>
      <div class="pure-u-1-24 grey-column"><p>8</p></div>
      <div class="pure-u-1-24 grey-column"><p>9</p></div>
      <div class="pure-u-1-24 grey-column"><p>10</p></div>
      <div class="pure-u-1-24 grey-column"><p>11</p></div>
      <div class="pure-u-1-24 grey-column"><p>12</p></div>
      <div class="pure-u-1-24 grey-column"><p>13</p></div>
      <div class="pure-u-1-24 grey-column"><p>14</p></div>
      <div class="pure-u-1-24 grey-column"><p>15</p></div>
      <div class="pure-u-1-24 grey-column"><p>16</p></div>
      <div class="pure-u-1-24 grey-column"><p>17</p></div>
      <div class="pure-u-1-24 grey-column"><p>18</p></div>
      <div class="pure-u-1-24 grey-column"><p>19</p></div>
      <div class="pure-u-1-24 grey-column"><p>20</p></div>
      <div class="pure-u-1-24 grey-column"><p>21</p></div>
      <div class="pure-u-1-24 grey-column"><p>22</p></div>
      <div class="pure-u-1-24 grey-column"><p>23</p></div>
      <div class="pure-u-1-24 grey-column"><p>24</p></div>
    </div>
    <div class="pure-g">
      <div class="pure-u-1-12 grey-column"><p>1</p></div>
      <div class="pure-u-1-12 grey-column"><p>2</p></div>
      <div class="pure-u-1-12 grey-column"><p>3</p></div>
      <div class="pure-u-1-12 grey-column"><p>4</p></div>
      <div class="pure-u-1-12 grey-column"><p>5</p></div>
      <div class="pure-u-1-12 grey-column"><p>6</p></div>
      <div class="pure-u-1-12 grey-column"><p>7</p></div>
      <div class="pure-u-1-12 grey-column"><p>8</p></div>
      <div class="pure-u-1-12 grey-column"><p>9</p></div>
      <div class="pure-u-1-12 grey-column"><p>10</p></div>
      <div class="pure-u-1-12 grey-column"><p>11</p></div>
      <div class="pure-u-1-12 grey-column"><p>12</p></div>
    </div>
    <div class="pure-g">
      <div class="pure-u-1-6 grey-column"><p>1</p></div>
      <div class="pure-u-1-6 grey-column"><p>2</p></div>
      <div class="pure-u-1-6 grey-column"><p>3</p></div>
      <div class="pure-u-1-6 grey-column"><p>4</p></div>
      <div class="pure-u-1-6 grey-column"><p>5</p></div>
      <div class="pure-u-1-6 grey-column"><p>6</p></div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-3 grey-column"><p>Thirds</p></div>
        <div class="pure-u-1-3 grey-column"><p>Thirds</p></div>
        <div class="pure-u-1-3 grey-column"><p>Thirds</p></div>
    </div>
    <div class="pure-g">
      <div class="pure-u-1-2 grey-column"><p>1</p></div>
      <div class="pure-u-1-2 grey-column"><p>2</p></div>
    </div>


    <div class="pure-g">

        <div class="pure-u-1-4">
          <img src="http://via.placeholder.com/600/D46A6A" alt="" class="pure-img">
        </div>

        <div class="pure-u-1-4">
          <img src="http://via.placeholder.com/600/D4B46A" alt="" class="pure-img">
        </div>

        <div class="pure-u-1-4">
          <img src="http://via.placeholder.com/600/D46A6A" alt="" class="pure-img">
        </div>

        <div class="pure-u-1-4">
          <img src="http://via.placeholder.com/600/D4B46A" alt="" class="pure-img">
        </div>

    </div>

  </div> <!-- container end -->
</body>
</html>
