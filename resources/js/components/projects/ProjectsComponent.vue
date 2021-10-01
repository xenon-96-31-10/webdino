<template>
    <div class="my-5">
      <div class="row row-cols-1 row-cols-sm-2 g-2" id="masonry">
        <div v-for="project in projects" :key="projects.id" class="col">
          <a href="#" class="tilter">
            <figure class="tilter__figure">
              <img class="tilter__image  rounded" :src="project.src" alt="img05" />
              <div class="tilter__deco tilter__deco--overlay rounded"></div>
              <figcaption class="tilter__caption">
                <h3 class="tilter__title">{{project.title}}</h3>
                <p class="tilter__description">Paris</p>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>
</template>

<script>
    $(document).ready(function(){


        [].slice.call(document.querySelectorAll('a[href="#"]')).forEach(function(el) {
  				el.addEventListener('click', function(ev) { ev.preventDefault(); });
  			});

    });
    var msnry;
    var tiltSettings = {
      movement: {
        imgWrapper : {
          rotation : {x: -5, y: 10, z: 0},
          reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
        },
        caption : {
          translation : {x: 20, y: 20, z: 0},
          reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
        },
        overlay : {
          translation : {x: 5, y: -5, z: 0},
          rotation : {x: 0, y: 0, z: 6},
          reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
        },
        shine : {
          translation : {x: 50, y: 50, z: 0},
          reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
        }
      }
    }


    function init() {
      [].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) {
        new TiltFx(el, tiltSettings);
      });
    }

    function initGrid(){
      var elem = document.querySelector('#masonry');
      msnry = new Masonry( elem, {
        // options
        percentPosition: true
      });
    }


    export default {
        mounted() {
            console.log('Component mounted.')
            // now use .imagesLoaded() jQuery plugin
            $('#masonry').imagesLoaded( function() {
              init();
              initGrid();
            });


            setTimeout(() => {
              this.projects.push(this.add)
              $('#masonry').imagesLoaded( function() {
                init();
                initGrid();
              });
            }, 5000)

        },
        data() {
            return {
              preloader: true,
              projects: [
                {
                  id: 1,
                  title: 'Проект 1',
                  src: '/storage/images/item1.png',
                },
                {
                  id: 2,
                  title: 'Проект 2',
                  src: '/storage/images/logo.jpg',
                },
                {
                  id: 3,
                  title: 'Проект 3',
                  src: '/storage/images/logo1.jpg',
                },
              ],
              add: {
                id: 4,
                title: 'Проект 4',
                src: '/storage/images/logo1.jpg',
              }
            }

        },
    }
</script>
<style scope>
.tilter {
	display: block;
	position: relative;
	color: black;
	flex: none;
	perspective: 1000px;
}

.tilter * {
	pointer-events: none;
}

.tilter:hover,
.tilter:focus {
	color: #6574cd;
	outline: none;
}

/*
.tilter__figure,
.tilter__deco,
.tilter__caption {
	will-change: transform;
}*/

.tilter__figure,
.tilter__image {
	margin: 0;
	width: 100%;
	height: 100%;
	display: block;
}

.tilter__figure > * {
	transform: translateZ(0px); /* Force correct stacking order */
}

.smooth .tilter__figure,
.smooth .tilter__deco--overlay,
.smooth .tilter__deco--lines,
.smooth .tilter__deco--shine div,
.smooth .tilter__caption {
	transition: transform 0.2s ease-out;
}

.tilter__figure {
	position: relative;
}

.tilter__figure::before {
	content: '';
	position: absolute;
	width: 90%;
	height: 90%;
	top: 5%;
	left: 5%;
	box-shadow: 0 30px 20px rgba(35,32,39,0.5);
}

.tilter__deco {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.tilter__deco--overlay {
  background-color: rgba(220, 220, 220, .1);
}

.tilter__deco--shine div {
	position: absolute;
	width: 200%;
	height: 200%;
	top: -50%;
	left: -50%;
	background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0.25) 50%, transparent 100%);
}

.tilter__deco--lines {
	fill: none;
	stroke: #fff;
	stroke-width: 1.5px;
}

.tilter__caption {
	position: absolute;
	bottom: 0;
	width: 100%;
	padding: 4em;
}

.tilter__title {
	margin: 0;
	font-weight: normal;
	font-size: 2.5em;
	line-height: 1;
}

.tilter__description {
	margin: 1em 0 0 0;
	font-size: 0.85em;
	letter-spacing: 0.15em;
}



</style>
