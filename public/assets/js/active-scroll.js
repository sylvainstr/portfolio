let section = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

if (window.outerWidth > 800) {

  window.onscroll = () => {
    section.forEach((sec) => {
      let top = window.scrollY;
      let offset = sec.offsetTop;
      let height = sec.offsetHeight;
      let id = sec.getAttribute("id");
      let dataName = sec.dataset.name;

      if (top >= offset && top < offset + height) {
        navLinks.forEach((links) => {
          links.classList.remove("active");

          const nameId = document.querySelector(
            "header nav a[href*=" + dataName + "]"
          );

          if (nameId != null) {          
            nameId.style.transition = "ease-in-out 0.5s";
          } else {
            console.log(dataName);
          }

          const containName = document.querySelector("header nav a[href*=" + dataName + "]");

          if (containName != null) {
            containName.classList.add("active");
          } else {
            console.log(dataName);
          }

        });
      }
    });
  };
}
