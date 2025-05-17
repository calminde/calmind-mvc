<footer class="footer-copy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p>2025 &copy; Calmind. Site desenvolvido por <a  target="_blank"
              rel="dofollow">Giovani C. Luvizuto</a> e <a target="_blank"
              rel="dofollow">Matheus Wiezel Medeiros</a> </p>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <!-- scrollIt js -->
  <script src="js/scrollIt.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>

    wow = new WOW();
    wow.init();
    $(document).ready(function (e) {

      $('#video-icon').on('click', function (e) {
        e.preventDefault();
        $('.video-popup').css('display', 'flex');
        $('.iframe-src').slideDown();
      });
      $('.video-popup').on('click', function (e) {
        var $target = e.target.nodeName;
        var video_src = $(this).find('iframe').attr('src');
        if ($target != 'IFRAME') {
          $('.video-popup').fadeOut();
          $('.iframe-src').slideUp();
          $('.video-popup iframe').attr('src', " ");
          $('.video-popup iframe').attr('src', video_src);
        }
      });

      $('.slider').bxSlider({
        pager: false
      });
    });

    $(window).on("scroll", function () {

      var bodyScroll = $(window).scrollTop(),
        navbar = $(".navbar");

      if (bodyScroll > 50) {
        $('.navbar-logo img').attr('src', 'images/logo.png');
        navbar.addClass("nav-scroll");

      } else {
        $('.navbar-logo img').attr('src', 'images/logo.png');
        navbar.removeClass("nav-scroll");
      }

    });
    $(window).on("load", function () {
      var bodyScroll = $(window).scrollTop(),
        navbar = $(".navbar");

      if (bodyScroll > 50) {
        $('.navbar-logo img').attr('src', 'images/logo-black.png');
        navbar.addClass("nav-scroll");
      } else {
        $('.navbar-logo img').attr('src', 'images/logo-white.png');
        navbar.removeClass("nav-scroll");
      }

      $.scrollIt({

        easing: 'swing',      // the easing function for animation
        scrollTime: 900,       // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null,    // function(pageIndex) that is called when page is changed
        topOffset: -63
      });
    });





    // Configuração do Three.js
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: false });
    renderer.setSize(700, 350);
    document.getElementById('brainContainer').appendChild(renderer.domElement);

    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(2, 1, 3);
    scene.add(light);

    const loader = new THREE.GLTFLoader();
    let brain;
    loader.load('images/roxo.glb', function (gltf) {
      brain = gltf.scene;
      brain.scale.set(0.7, 0.7, 0.7);
      scene.add(brain);
      animate();
    });

    camera.position.z = 4;



    let targetRotation = 0;
    const paragraph1 = document.getElementById('paragraph1');
    const paragraph2 = document.getElementById('paragraph2');
    const paragraph3 = document.getElementById('paragraph3');
    const paragraph4 = document.getElementById('paragraph4');
    const paragraph5 = document.getElementById('paragraph5');


    let scrollPercentage = 0;

    const paragraph1AppearAt = 0.56; 
    const paragraph1HideAt = 0.63;  
    const paragraph2AppearAt = 0.63;  
    const paragraph2HideAt = 0.67;    
    const paragraph3AppearAt = 0.67;  
    const paragraph3HideAt = 0.71;    
    const paragraph4AppearAt = 0.71;  
    const paragraph4HideAt = 0.76;    
    const paragraph5AppearAt = 0.77;  
    const paragraph5HideAt = 0.81;    

    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;
      const scrollHeight = document.body.scrollHeight - window.innerHeight;
      scrollPercentage = scrollY / scrollHeight;
      let telaLargura = window.innerWidth;
      targetRotation = scrollPercentage * Math.PI * 4; // 2 rotações completas

   
      
      if (scrollPercentage >= paragraph1AppearAt && scrollPercentage < paragraph1HideAt) {
        paragraph1.classList.add('visible');
      window.addEventListener('scroll', () => {
        const scrollHeight = document.body.scrollHeight - window.innerHeight;
        const scrolled = window.pageYOffset;
        const scrollPercentage = (scrolled / scrollHeight) * 450;
        document.getElementById('progressBar').style.width = `${scrollPercentage}%`;
        if (brain) {
          brain.rotation.y = scrollPercentage * 0.1;
          brain.rotation.x = Math.sin(scrollPercentage * 0.05) * 0.5;
        }
      });
      } 

      if (scrollPercentage >= paragraph2AppearAt) {
        paragraph2.classList.add('visible');
      } else {
        paragraph2.classList.remove('visible');
      }
      if (scrollPercentage >= paragraph3AppearAt) {
        paragraph3.classList.add('visible');
        
      } else {
        paragraph3.classList.remove('visible');
      }
      if (scrollPercentage >= paragraph4AppearAt) {
        paragraph4.classList.add('visible');
        
      } else {
        paragraph4.classList.remove('visible');
      }
      if (scrollPercentage >= paragraph5AppearAt) {
        paragraph5.classList.add('visible');
      } else {
        paragraph5.classList.remove('visible');
      }

      
    });









    function animate() {
      requestAnimationFrame(animate);
      renderer.render(scene, camera);
    }




  </script>
</body>

</html>