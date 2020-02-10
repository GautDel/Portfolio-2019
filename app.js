// Global variables
//// Mobile Variables
let chevron = document.querySelector(".chevron");
let quote = document.querySelector(".quote");
let about = document.querySelector(".mobile-menu-about-me");
let contact = document.querySelector(".mobile-menu-contact");
let social = document.querySelector(".mobile-menu-social");
let whatIDo = document.querySelector(".mobile-menu-what-i-do");
let portfolio = document.querySelector(".mobile-menu-portfolio");
let testimonial = document.querySelector(".mobile-menu-testimonial");
let buttonCont = document.querySelector(".cloud-buttons-container");
let contactLink = document.querySelector(".contact-link");
let desc = document.querySelector(".description");

//// Desktop Variables
let aboutD = document.querySelector(".about-me");
let whatIDoD = document.querySelector(".what-i-do");
let contactD = document.querySelector(".contact");
let portfolioD = document.querySelector(".portfolio");
let testimonialD = document.querySelector(".testimonial");
let socialD = document.querySelector(".social");
let aboutCont = document.querySelector(".about-cont");
let contactCont = document.querySelector(".contact-cont");
let portfolioCont = document.querySelector(".portfolio-cont");
let testimonialCont = document.querySelector(".testimonial-cont");
let whatIDoCont = document.querySelector(".what-i-do-cont");
let socialCont = document.querySelector(".social-cont");
let deskLink = document.querySelector(".desktop-contact-link");

let resetImg = document.createElement("img");
let resetEl = document.createElement("div");
let leftChevron = document.querySelectorAll(".left-chevron");
resetEl.classList.add("reset");
resetImg.src = "./assets/partum-media-x.png";
resetEl.appendChild(resetImg);

// Main function
const app = () => {
  scrollUp();
  quoteScroll();

  about.addEventListener("click", () => {
    scrollDownHandler(about, contact, social, whatIDo, portfolio, testimonial);
  });
  contact.addEventListener("click", () => {
    scrollDownHandler(contact, about, social, whatIDo, portfolio, testimonial);
  });
  social.addEventListener("click", () => {
    scrollDownHandler(social, contact, about, whatIDo, portfolio, testimonial);
  });
  whatIDo.addEventListener("click", () => {
    scrollDownHandler(whatIDo, contact, social, about, portfolio, testimonial);
    desc.classList.add("show");
  });
  portfolio.addEventListener("click", () => {
    scrollDownHandler(portfolio, contact, social, whatIDo, about, testimonial);
  });

  testimonial.addEventListener("click", () => {
    scrollDownHandler(testimonial, portfolio, contact, social, whatIDo, about);
  });

  resetEl.addEventListener("click", e => {
    e.stopPropagation();
    resetHandler(about, contact, portfolio, whatIDo, testimonial, social, e);
  });

  aboutD.addEventListener("click", () => {
    contentHandler(aboutCont);
  });

  whatIDoD.addEventListener("click", () => {
    contentHandler(whatIDoCont);
  });

  portfolioD.addEventListener("click", () => {
    contentHandler(portfolioCont);
  });

  testimonialD.addEventListener("click", () => {
    console.log('clic')
    contentHandler(testimonialCont);
  });

  socialD.addEventListener("click", () => {
    contentHandler(socialCont);
  });

  contactD.addEventListener("click", () => {
    contentHandler(contactCont);
  });

  contactLink.addEventListener("click", e => {
    e.stopPropagation();
    contact.classList.remove("slideDown");
    contact.classList.add("slide-contact");
    resetButton(contact);
  });

  deskLink.addEventListener("click", () => {
    aboutCont.classList.remove("contentAnim");
    aboutCont.classList.add("contentReset");
    contactCont.classList.add("contentAnim");
    setTimeout(() => {
      aboutCont.classList.remove("contentReset");
    }, 1500);
  });
};

const contentHandler = content => {
  content.classList.add("contentAnim");
  content.classList.remove("contentReset");
  buttonCont.classList.add("hide");

  leftChevron.forEach(element => {
    element.addEventListener("click", () => {
      if (element.parentElement.classList.contains("contentAnim")) {
        element.parentElement.classList.remove("contentAnim");
        element.parentElement.classList.add("contentReset");
      }
      buttonCont.classList.remove("hide");
      buttonCont.classList.add("show");

      setTimeout(() => {
        buttonCont.classList.remove("show");
        content.classList.remove("contentReset");
      }, 1500);
    });
  });
};

// Scrolls viewport down and slides up cards when chevron is clicked
const scrollUp = () => {
  let elementArray = [about, contact, portfolio, whatIDo, social, testimonial];

  chevron.addEventListener("click", () => {
    about.classList.add("slideUp1");
    contact.classList.add("slideUp2");
    portfolio.classList.add("slideUp3");
    whatIDo.classList.add("slideUp4");
    testimonial.classList.add("slideUp5");
    social.classList.add("slideUp6");

    setTimeout(() => {
      about.classList.remove("slideUp1");
      contact.classList.remove("slideUp2");
      portfolio.classList.remove("slideUp3");
      whatIDo.classList.remove("slideUp4");
      testimonial.classList.remove("slideUp5");
      social.classList.remove("slideUp6");
    }, 4000);

    elementArray.forEach(element => {
      element.classList.remove("slideDown");
      element.classList.remove("slideUp1");
      element.classList.remove("slideTop");
    });
  });
};

const quoteScroll = () => {
  quote.addEventListener("click", e => {
    e.stopPropagation();
    scrollDownHandler(contact, about, social, whatIDo, portfolio, testimonial);
  });



}
// Animation handler for cards to slide down, and chosen one to slide to top
const scrollDownHandler = (el1, el2, el3, el4, el5, el6) => {
  let elementArray = [el2, el3, el4, el5, el6];
  let element1 = [...el1.classList];
  el1.classList.remove(element1[1]);
  el1.classList.add("slideTop");

  elementArray.forEach(element => {
    element.classList.add("slideDown");
  });
  resetButton(el1);
};

// Reset button logic
const resetHandler = (el1, el2, el3, el4, el5, el6) => {
  let elementArray = [el1, el2, el3, el4, el5, el6];
  let element1 = [...el1.classList];
  let element2 = [...el2.classList];
  let element3 = [...el3.classList];
  let element4 = [...el4.classList];
  let element5 = [...el5.classList];
  let element6 = [...el6.classList];

  el1.classList.add("slideReset1");
  setTimeout(() => {
    el1.classList.remove("slideReset1");
  }, 1000);

  el2.classList.add("slideReset2");
  setTimeout(() => {
    el2.classList.remove("slideReset2");
  }, 1000);

  el3.classList.add("slideReset3");
  setTimeout(() => {
    el3.classList.remove("slideReset3");
  }, 1000);

  el4.classList.add("slideReset4");
  setTimeout(() => {
    el4.classList.remove("slideReset4");
  }, 1000);

  el5.classList.add("slideReset5");
  setTimeout(() => {
    el5.classList.remove("slideReset5");
  }, 1000);

  el6.classList.add("slideReset6");
  setTimeout(() => {
    el6.classList.remove("slideReset6");
  }, 1000);

  // Removing slide animations

  elementArray.forEach(element => {
    element.classList.remove(element[1]);
  });

  el1.classList.remove(element1[1]);
  el2.classList.remove(element2[1]);
  el3.classList.remove(element3[1]);
  el4.classList.remove(element4[1]);
  el5.classList.remove(element5[1]);
  el6.classList.remove(element6[1]);

  // Reset positions
  setTimeout(() => {
    elementArray.forEach(element => {
      element.classList.remove("slideUp1");
    });
  }, 1500);

  // When clicked, remove element from parent
  elementArray.forEach(element => {
    if (element.childNodes.length >= 4 && element.lastChild.nodeName == "DIV") {
      element.removeChild(element.lastChild);
    }
  });

  if (desc.classList.contains("show")) {
    desc.classList.remove("show");
  }
};

// Creating reset button
const resetButton = el1 => {
  el1.appendChild(resetEl);
  setTimeout(() => {
    resetEl.classList.add("slideButtonUp");
  }, 1000);
};
app();
