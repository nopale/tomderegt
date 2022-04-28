window.onload = () => {
  const marquee = document.querySelector(".marquee");
  const marqueeTwo = document.querySelectorAll(".marquee-clients");
  const clientItem = document.querySelectorAll("div.client-element");
  const menuToggle = document.querySelector("a.menu-toggle");
  const mainNav = document.querySelector("nav.main-navigation");
  const mainTag = document.querySelector(".site-main");
  const postTiles = document.querySelectorAll(".grid-tile");
  const borderTags = document.querySelectorAll("div.pseudo-border");
  const borderTagsVer = document.querySelectorAll("div.pseudo-border.vertical");
  const linkTags = document.querySelectorAll(".link");
  const menuLinks = document.querySelectorAll(".menu-item a");
  const bodyTag = document.querySelector("body");

  // import Plyr from 'plyr';

  const player = new Plyr("#player", { captions: { active: true } });
  // Expose player so it can be used from the console
  window.player = player;

  const players = Plyr.setup(".js-player");

  // const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p));

  // Cursor Change

  const cursor = document.querySelector(".cursor");

  document.addEventListener("mousemove", (e) => {
    cursor.setAttribute(
      "style",
      "top: " + e.pageY + "px; left: " + e.pageX + "px;"
    );
  });

  linkTags.forEach((link) => {
    link.addEventListener("mouseover", function () {
      cursor.classList.add("hover");
    });

    link.addEventListener("mouseout", function () {
      cursor.classList.remove("hover");
    });
  });

  menuLinks.forEach((link) => {
    link.addEventListener("mouseover", function () {
      cursor.classList.add("hover");
    });

    link.addEventListener("mouseout", function () {
      cursor.classList.remove("hover");
    });
  });

  const videoPlayers = document.querySelectorAll(".video-player");

  // Intersection Observer

  function runScripts() {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.intersectionRatio >= 0.1) {
            entry.target.classList.add("in-view");
          } else {
            // entry.target.classList.remove('in-view')
          }
        });
      },
      {
        threshold: [0, 0.1, 1],
      }
    );

    borderTags.forEach((border) => {
      observer.observe(border);
    });
  }

  runScripts();

  function runVideos() {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.intersectionRatio >= 0.1) {
            entry.target.classList.add("in-view");
          } else {
            entry.target.classList.remove("in-view");
          }
        });
      },
      {
        threshold: [0, 0.1, 1],
      }
    );

    videoPlayers.forEach((player) => {
      observer.observe(player);
    });
  }

  runVideos();

  // Marquee Scripts

  if (marquee) {
    const marquees = new Array(100).fill(null);
    marquees.forEach((el) => {
      marquee.parentNode.append(marquee.cloneNode(true));
    });
  }

  function repeat(func, times) {
    func();
    times && --times && repeat(func, times);
  }

  repeat(function () {
    marqueeTwo.forEach((el) => {
      el.parentNode.append(el.cloneNode(true));
    });
  }, 50);

  // Menu Toggle Script

  menuToggle.addEventListener("click", function () {
    event.preventDefault();

    mainNav.classList.toggle("open");
    mainTag.classList.toggle("open");

    if (mainNav.classList.contains("open")) {
      //don't need a timeline cause it's happening at the same time
      gsap.to(".burger-top", {
        rotation: 45,
        transformOrigin: "50%, 50%",
        y: 8,
      });
      gsap.to(".burger-bottom", {
        rotation: -45,
        transformOrigin: "50%, 50%",
        y: -8,
      });
      gsap.to(".burger-middle", { width: 0 });
    } else {
      gsap.to(".burger-top", { rotation: 0, y: 0 });
      gsap.to(".burger-bottom", { rotation: 0, y: 0 });
      gsap.to(".burger-middle", { width: 24 });
    }
    return false;
  });

  //   Post Pop Out Script

  postTiles.forEach((tile) => {
    const popOut = tile.querySelector(".pop-out");
    const popTrigger = tile.querySelector(".pop-out-trigger");
    const popOutTimeline = gsap.timeline();
    const closeButton = popOut.querySelector(".close-button");
    const bottomCorner = popOut.querySelector(".bottom-corner");
    const postContent = popOut.querySelector(".post-content");

    popOutTimeline;

    const openModal = function () {
      popOutTimeline
        // .to(tile, {width: '100vw', height: '100vh', duration: 0.5})
        .to(borderTags, { width: 0, duration: 0.1 }, "-=0.2")
        .to(borderTagsVer, { width: "1px", height: 0, duration: 0.1 }, "-=0.2")
        .to(bodyTag, { opacity: 0, duration: 0.5 })
        .to(popOut, { scale: 1, duration: 0.2 })
        .to(popOut, { opacity: 1, duration: 0.5, ease: "power2.out" })
        .to(popOut, {
          scale: 1,
          position: "fixed",
          top: 0,
          left: 0,
          duration: 0.5,
          ease: "power2.out",
        })
        .to(bodyTag, { opacity: 1, duration: 0.2 }, "-=0.1")
        .to(closeButton, { opacity: 1, duration: 0.2 })
        .to(bottomCorner, { opacity: 1, duration: 0.2 })
        .to(borderTags, { width: "100%", duration: 0.1 })
        .to(borderTagsVer, { width: 1, height: "100%", duration: 0.1 })
        .to(postContent, { opacity: 1, duration: 0.5 }, "+=0.1");

      bodyTag.classList.add("hidden");
      popOut.classList.add("open");
    };

    popTrigger.addEventListener("click", function () {
      openModal();
    });

    const closeModal = function () {
      if (players) {
        players.forEach((player) => {
          player.pause();
        });
      } else {
      }

      player.pause();

      popOutTimeline
        .to(borderTags, { width: 0, duration: 0.2 }, "-=0.2")
        .to(borderTagsVer, { width: 1, height: 0, duration: 0.2 }, "-=0.2")
        .to(postContent, { opacity: 0 }, "+=0.3")
        .to(bodyTag, { opacity: 0 })
        .to(closeButton, { opacity: 0, duration: 0.1 })
        .to(bottomCorner, { opacity: 0, duration: 0.1 })
        .to(bodyTag, { opacity: 1, duration: 0.1 }, "+=0.1")
        .to(popOut, {
          opacity: 0,
          scale: 0,
          position: "absolute",
          duration: 0.1,
        })
        .to(borderTags, { width: "100%", duration: 0.2 })
        .to(borderTagsVer, { width: 1, height: "100%", duration: 0.2 });

      popOut.classList.remove("open");

      if (bodyTag.classList.contains("hidden")) {
        setTimeout(function () {
          bodyTag.classList.remove("hidden");
        }, 2000);
      }
    };

    document.addEventListener("keydown", function (event) {
      if (event.keyCode === 27) {
        //Esc key was pressed

        if (bodyTag.classList.contains("hidden")) {
          closeModal();
        }
      }
    });

    closeButton.addEventListener("click", function () {
      closeModal();
    });
  });

  // Scroll Trigger --> Clients Scroll Animation

  gsap.registerPlugin(ScrollTrigger);

  const clientsSection = document.querySelector("section.clients");

  if (clientsSection) {
    const scrollTimeline = gsap.timeline({
      scrollTrigger: {
        trigger: ".clients",
        start: "center bottom",
        end: "center top",
        scrub: true,
      },
    });

    const scrollTimelineRev = gsap.timeline({
      scrollTrigger: {
        trigger: ".clients",
        start: "center bottom",
        end: "center top",
        scrub: true,
      },
    });

    scrollTimeline.to(
      "div.client-element:nth-of-type(2) h2.marquee-container, div.client-element:nth-of-type(4) h2.marquee-container",
      { xPercent: 5, duration: 1 }
    );

    scrollTimelineRev.to(
      "div.client-element:nth-of-type(1) h2.marquee-container, div.client-element:nth-of-type(3) h2.marquee-container, div.client-element:nth-of-type(5) h2.marquee-container",
      { xPercent: -5, duration: 1 }
    );
  } else {
  }

  // Loader Script
  const loadingScreen = document.querySelector("div.loading-screen");

  if (loadingScreen) {
    bodyTag.classList.add("hidden");

    setTimeout(function () {
      loadingScreen.classList.add("hidden");
      bodyTag.classList.remove("hidden");
    }, 2500);

    setTimeout(function () {
      loadingScreen.remove();
    }, 4500);

    function animateValue(obj, start, end, duration) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }

    const obj = document.getElementById("value-indicator");
    animateValue(obj, 0, 100, 2500);
  } else {
  }

  // animate loader percentage
};
