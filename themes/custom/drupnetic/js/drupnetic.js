(function (Drupal, once) {
  Drupal.behaviors.customScriptBehavior = {
    attach: function (context, settings) {
      //track clicks on Resume button
      document.addEventListener("DOMContentLoaded", () => {
        const btn = document.querySelector(".hero__btn");
        if (btn) {
          btn.addEventListener("click", () => {
            console.log("Resume button clicked");
          });
        }
      });

      // Code for accordion functionality
      document.addEventListener('DOMContentLoaded', () => {
      const items = document.querySelectorAll('.accordion-item');

      items.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');
        const toggle = item.querySelector('.accordion-toggle');

        header.addEventListener('click', () => {
          const isActive = item.classList.contains('active');
          items.forEach(i => {
            i.classList.remove('active');
            i.querySelector('.accordion-content').style.display = 'none';
            i.querySelector('.accordion-toggle .symbol').textContent = '+';
          });

          if (!isActive) {
            item.classList.add('active');
            content.style.display = 'block';
            toggle.querySelector('.symbol').textContent = '-';
          }
        });
      });
    });
    $(document).ready(function () {

      // Smooth scroll for anchor links with hashes
        $('a[href^="#"]').on('click', function (e) {
          var target = $(this.getAttribute('href'));

          if (target.length) {
            e.preventDefault();

            $('html, body').animate(
              {
                scrollTop: target.offset().top
              },
              600, // duration in ms
              'swing'
            );
          }
        });

      });
    }
  };


})(Drupal, once);
