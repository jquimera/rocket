<?php include 'include/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 id=""><span>slider: </span>carousel</h2>
    </div>
    <div class="content">
      <div class="slider">
        <input type="radio" name="option-carousel" id="carousel-normal" checked="">
        <input type="radio" name="option-carousel" id="slide-by-page">
        <input type="radio" name="option-carousel" id="slider-center">
        <input type="radio" name="option-carousel" id="carousel-autoplay-css">
        <input type="radio" name="option-carousel" id="carousel-autoplay-js">
        <input type="radio" name="option-carousel" id="carousel-autoheight">
        <input type="radio" name="option-carousel" id="carousel-vertical">
        <div class="slider-labels">
          <div>
            <div class="title">Options: </div>
            <label for="carousel-normal">normal</label>
            <label for="slide-by-page">slide-by-page</label>
            <label for="slider-center">center</label>
            <label for="carousel-autoplay-css">autoplay (css)</label>
            <label for="carousel-autoplay-js">autoplay (js)</label>
            <label for="carousel-autoheight">autoheight</label>
            <label for="carousel-vertical">vertical</label>
          </div>
        </div>
        <div class="carousel-a">
          <input type="radio" name="carousel-a" id="carousel-a-1" checked="">
          <input type="radio" name="carousel-a" id="carousel-a-2">
          <input type="radio" name="carousel-a" id="carousel-a-3">
          <input type="radio" name="carousel-a" id="carousel-a-4">
          <input type="radio" name="carousel-a" id="carousel-a-5">
          <input type="checkbox" name="carousel-a-autoplay" id="carousel-a-autoplay" checked="">
          <div class="outer">
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/88cc0e/88cc0e"></a>
                  <div class="info"><h3>3 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>4 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>5 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-a-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-a-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-a-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-a-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-a-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-a-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-a-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-a-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-a-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-a-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-a-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-d">
          <input type="radio" name="carousel-d" id="carousel-d-1" checked="">
          <input type="radio" name="carousel-d" id="carousel-d-2">
          <input type="radio" name="carousel-d" id="carousel-d-3">
          <input type="radio" name="carousel-d" id="carousel-d-4">
          <input type="radio" name="carousel-d" id="carousel-d-5">
          <input type="checkbox" name="carousel-d-autoplay" id="carousel-d-autoplay">
          <div class="outer">
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/88cc0e/88cc0e"></a>
                  <div class="info"><h3>3 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>4 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-d-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-d-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-d-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-d-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-d-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-d-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-d-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-d-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-d-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-d-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-d-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-e">
          <input type="radio" name="carousel-e" id="carousel-e-1" checked="">
          <input type="radio" name="carousel-e" id="carousel-e-2">
          <input type="radio" name="carousel-e" id="carousel-e-3">
          <input type="radio" name="carousel-e" id="carousel-e-4">
          <input type="radio" name="carousel-e" id="carousel-e-5">
          <input type="checkbox" name="carousel-e-autoplay" id="carousel-e-autoplay">
          <div class="outer">
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/88cc0e/88cc0e"></a>
                  <div class="info"><h3>3 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>4 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-e-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-e-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-e-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-e-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-e-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-e-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-e-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-e-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-e-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-e-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-e-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-f">
          <input type="radio" name="carousel-f" id="carousel-f-1" checked="">
          <input type="radio" name="carousel-f" id="carousel-f-2">
          <input type="radio" name="carousel-f" id="carousel-f-3">
          <input type="radio" name="carousel-f" id="carousel-f-4">
          <input type="radio" name="carousel-f" id="carousel-f-5">
          <input type="checkbox" name="carousel-f-autoplay" id="carousel-f-autoplay" checked="">
          <div class="outer">
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>3 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/88cc0e/88cc0e"></a>
                  <div class="info"><h3>4 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-f-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-f-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-f-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-f-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-f-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-f-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-f-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-f-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-f-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-f-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-f-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-g">
          <input type="radio" name="carousel-g" id="carousel-g-1" checked="">
          <input type="radio" name="carousel-g" id="carousel-g-2">
          <input type="radio" name="carousel-g" id="carousel-g-3">
          <input type="radio" name="carousel-g" id="carousel-g-4">
          <input type="radio" name="carousel-g" id="carousel-g-5">
          <input type="checkbox" name="carousel-g-autoplay" id="carousel-g-autoplay" checked="">
          <div class="outer" autoheight-carousel>
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>3 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/88cc0e/88cc0e"></a>
                  <div class="info"><h3>4 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-g-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-g-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-g-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-g-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-g-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-g-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-g-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-g-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-g-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-g-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-g-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-h">
          <input type="radio" name="carousel-h" id="carousel-h-1" checked="">
          <input type="radio" name="carousel-h" id="carousel-h-2">
          <input type="radio" name="carousel-h" id="carousel-h-3">
          <input type="radio" name="carousel-h" id="carousel-h-4">
          <input type="radio" name="carousel-h" id="carousel-h-5">
          <input type="checkbox" name="carousel-h-autoplay" id="carousel-h-autoplay" checked="">
          <div class="outer" autoheight-carousel>
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x919/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x719/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/15a9dd/15a9dd"></a>
                  <div class="info"><h3>3 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x519/88cc0e/88cc0e"></a>
                  <div class="info"><h3>4 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x619/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-h-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-h-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-h-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-h-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-h-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-h-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-h-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-h-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-h-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-h-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-h-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
        <div class="carousel-i">
          <input type="radio" name="carousel-i" id="carousel-i-1" checked="">
          <input type="radio" name="carousel-i" id="carousel-i-2">
          <input type="radio" name="carousel-i" id="carousel-i-3">
          <input type="radio" name="carousel-i" id="carousel-i-4">
          <input type="radio" name="carousel-i" id="carousel-i-5">
          <input type="checkbox" name="carousel-i-autoplay" id="carousel-i-autoplay" checked="">
          <div class="outer" autoheight-carousel>
            <ul class="inner">
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x900/15a9dd/15a9dd"></a>
                  <div class="info"><h3>1 Cloud Dragon</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x900/e3b134/e3b134"></a>
                  <div class="info"><h3>2 Mountain Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x900/15a9dd/15a9dd"></a>
                  <div class="info"><h3>3 Mountain Outpost</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x900/88cc0e/88cc0e"></a>
                  <div class="info"><h3>4 Cliffs</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
              <li>
                <div class="item"><a href=""><img src="http://placehold.it/1100x900/ee41a3/ee41a3"></a>
                  <div class="info"><h3>5 Hill Fort</h3> by <a href="http://voyager3.tumblr.com">Brendan Zabarauskas</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="dots">
            <label for="carousel-i-1"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-i-2"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-i-3"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-i-4"><span class="normal"></span><span class="active"></span></label>
            <label for="carousel-i-5"><span class="normal"></span><span class="active"></span></label>
          </div>
          <div class="controls">
            <label for="carousel-i-1"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-i-2"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-i-3"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-i-4"><span class="prev">Previous</span><span class="next">Next</span></label>
            <label for="carousel-i-5"><span class="prev">Previous</span><span class="next">Next</span></label>
          </div>
          <div class="autoplay">
            <span class="autoplay-progress"></span>
            <label for="carousel-i-autoplay"><span class="play"></span><span class="pause"></span></label>
          </div>
        </div>
      </div>
      <div>
        <h4>SCSS</h4>
        <pre class="language-scss"><code>
.carousel-a { @include slider-carousel(5 by 1 default); } // normal
.carousel-d { @include slider-carousel(5 by 2 bypage default); } // slide-by-page
.carousel-e { @include slider-carousel(5 by 2 center default); } // center
.carousel-f { @include slider-carousel(5 by 2 autoplay progress-bar bypage default); } // autoplay (css)
.carousel-g { @include slider-carousel(5 by 2 bypage autoplay-js default); } // autoplay (js)
.carousel-h { @include slider-carousel(5 by 1 default); } // autoheight
.carousel-i { @include slider-carousel(5 by 1 vertical autoplay progress-bar default); } // vertical
@include breakpoint('min' 700) {
  .carousel-a { @include slider-carousel(5 by 2); }
  .carousel-d { @include slider-carousel(5 by 3 bypage); }
  .carousel-h { @include slider-carousel(5 by 2); }
}
@include breakpoint('min' 1000) {
  .carousel-a { @include slider-carousel(5 by 3); }
  .carousel-h { @include slider-carousel(5 by 3); }
}
        </code></pre>
        <pre class="language-javascript"><code>
ready(function () {
  sliderAutoplay('.carousel-g', 3000, 4);
  autoheightCarousel('.carousel-h'); 
});
        </code></pre>
      </div>
    </div>
    
    <?php include "include/more-demos.php" ?>
  </div>
  <?php include "include/site-footer.php" ?>
</div>
<script>
  ready(function () {
    sliderAutoplay('.carousel-g', 3000, 4);
    autoheightCarousel('.carousel-h'); 
  })
</script>
</body>
</html>

