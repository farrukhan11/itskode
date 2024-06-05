 // BrandSlider start

 document.addEventListener("DOMContentLoaded", function () {
    const marquees = document.querySelectorAll(".marquee");

    marquees.forEach((marquee) => {
      const images = marquee.querySelectorAll("text1");
      images.forEach((img) => {
        const clone = img.cloneNode(true);
        marquee.appendChild(clone);
      });
    });
  });




  document.addEventListener('DOMContentLoaded', function () {
    const switchButton = document.getElementById('theme-switch');

    switchButton.addEventListener('click', function () {
        toggleTheme();
    });

    function toggleTheme() {
        const body = document.body;
        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');
    }
});

  // BrandSlider end
  
  