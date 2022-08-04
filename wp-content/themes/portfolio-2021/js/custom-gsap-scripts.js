// wait until DOM is ready
var intro = document.querySelector(".intro");

if (intro) {
  console.log("Intro class found");
  document.addEventListener("DOMContentLoaded", function (event) {
    console.log("DOM loaded");

    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener(
      "load",
      function (e) {
        // custom GSAP code goes here
        console.log("window loaded");

        var tl = gsap.timeline();
        var b = document.querySelector("#b");
        var r = document.querySelector("#r");
        var i = document.querySelector("#i");
        var a = document.querySelector("#a");
        var n = document.querySelector("#n");
        var n = document.querySelector("#n");
        var introduction = document.querySelector("#introduction");
        var job = document.querySelector("#job");

        // tl.staggerFrom(
        //   introduction,
        //   1,
        //   {
        //     ease: Power1.easeOut,
        //     width: 0
        //   },
        //   0.05,
        //   "+=0.35"
        // );

        tl.staggerFrom(
          b,
          1,
          {
            x: -600,
            ease: Circ.easeOut,
            opacity: 0,
          },
          0.05,
          "+=1.3"
        );
        tl.staggerFrom(
          r,
          1,
          {
            y: -900,
            ease: Circ.easeOut,
            opacity: 0,
          },
          0.05,
          "-=0.8"
        );
        tl.staggerFrom(
          i,
          1,
          {
            y: -900,
            ease: Circ.easeOut,
            opacity: 0,
          },
          0.05,
          "-=0.8"
        );
        tl.staggerFrom(
          a,
          1,
          {
            y: -900,
            ease: Circ.easeOut,
            opacity: 0,
          },
          0.05,
          "-=0.8"
        );
        tl.staggerFrom(
          n,
          1,
          {
            y: -900,
            ease: Circ.easeOut,
            opacity: 0,
          },
          0.05,
          "-=0.8"
        );
        tl.staggerFrom(
          job,
          1.5,
          {
            ease: Power1.easeOut,
            opacity: 0,
          },
          0.05,
          "+=0.30"
        );
      },
      false
    );
  });
}
