/**
 * Vermi-Farm Initiative Main JavaScript
 * Author: Vermi-Farm Team
 * Version: 1.0
 */

document.addEventListener("DOMContentLoaded", () => {
  // Add any necessary JavaScript functionality here
  console.log("Vermi-Farm Initiative website loaded")

  // Mobile Menu Toggle
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle")
  const mobileMenu = document.querySelector(".mobile-menu")
  const body = document.body

  if (mobileMenuToggle && mobileMenu) {
    mobileMenuToggle.addEventListener("click", function () {
      this.classList.toggle("active")
      mobileMenu.classList.toggle("active")
      body.classList.toggle("mobile-menu-open")
    })
  }

  // Close mobile menu when clicking outside
  document.addEventListener("click", (event) => {
    if (!mobileMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
      mobileMenuToggle.classList.remove("active")
      mobileMenu.classList.remove("active")
      body.classList.remove("mobile-menu-open")
    }
  })

  // Prevent clicks inside the mobile menu from closing it
  mobileMenu.addEventListener("click", (event) => {
    event.stopPropagation()
  })

  // Mobile Dropdown Toggle
  const mobileDropdowns = document.querySelectorAll(".mobile-dropdown")

  if (mobileDropdowns.length > 0) {
    mobileDropdowns.forEach((dropdown) => {
      const dropdownToggle = dropdown.querySelector(".dropdown-toggle")

      if (dropdownToggle) {
        dropdownToggle.addEventListener("click", (e) => {
          e.preventDefault()
          dropdown.classList.toggle("active")
        })
      }
    })
  }

  // Hero Slider
  const heroSlides = document.querySelectorAll(".hero-slide")
  const sliderDots = document.querySelectorAll(".slider-dot")
  const prevSlideBtn = document.querySelector(".prev-slide")
  const nextSlideBtn = document.querySelector(".next-slide")
  let currentSlide = 0
  let slideInterval

  function showSlide(index) {
    // Hide all slides
    heroSlides.forEach((slide) => {
      slide.classList.remove("active")
    })

    // Remove active class from all dots
    sliderDots.forEach((dot) => {
      dot.classList.remove("active")
    })

    // Show the current slide and activate the corresponding dot
    heroSlides[index].classList.add("active")
    sliderDots[index].classList.add("active")
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % heroSlides.length
    showSlide(currentSlide)
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + heroSlides.length) % heroSlides.length
    showSlide(currentSlide)
  }

  // Initialize slider
  if (heroSlides.length > 0) {
    // Start automatic slideshow
    slideInterval = setInterval(nextSlide, 5000)

    // Add click event to dots
    sliderDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        currentSlide = index
        showSlide(currentSlide)
        resetSlideInterval()
      })
    })

    // Add click events to arrows
    if (prevSlideBtn && nextSlideBtn) {
      prevSlideBtn.addEventListener("click", () => {
        prevSlide()
        resetSlideInterval()
      })

      nextSlideBtn.addEventListener("click", () => {
        nextSlide()
        resetSlideInterval()
      })
    }
  }

  function resetSlideInterval() {
    clearInterval(slideInterval)
    slideInterval = setInterval(nextSlide, 5000)
  }

  // Pillars Carousel
  const pillarSlides = document.querySelectorAll(".pillar-slide")
  const pillarDots = document.querySelectorAll(".pillar-dot")
  const prevPillarBtn = document.querySelector(".prev-pillar")
  const nextPillarBtn = document.querySelector(".next-pillar")
  let currentPillar = 0
  let pillarInterval

  function showPillar(index) {
    // Hide all pillar slides
    pillarSlides.forEach((slide) => {
      slide.classList.remove("active")
    })

    // Remove active class from all dots
    pillarDots.forEach((dot) => {
      dot.classList.remove("active")
    })

    // Show the current pillar and activate the corresponding dot
    pillarSlides[index].classList.add("active")
    pillarDots[index].classList.add("active")
  }

  function nextPillar() {
    currentPillar = (currentPillar + 1) % pillarSlides.length
    showPillar(currentPillar)
  }

  function prevPillar() {
    currentPillar = (currentPillar - 1 + pillarSlides.length) % pillarSlides.length
    showPillar(currentPillar)
  }

  // Initialize pillars carousel
  if (pillarSlides.length > 0) {
    // Start automatic carousel
    pillarInterval = setInterval(nextPillar, 4000)

    // Add click event to dots
    pillarDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        currentPillar = index
        showPillar(currentPillar)
        resetPillarInterval()
      })
    })

    // Add click events to arrows
    if (prevPillarBtn && nextPillarBtn) {
      prevPillarBtn.addEventListener("click", () => {
        prevPillar()
        resetPillarInterval()
      })

      nextPillarBtn.addEventListener("click", () => {
        nextPillar()
        resetPillarInterval()
      })
    }
  }

  function resetPillarInterval() {
    clearInterval(pillarInterval)
    pillarInterval = setInterval(nextPillar, 4000)
  }

  // Testimonials Carousel
  const testimonialSlides = document.querySelectorAll(".testimonial-slide")
  const testimonialDots = document.querySelectorAll(".testimonial-dot")
  const prevTestimonialBtn = document.querySelector(".prev-testimonial")
  const nextTestimonialBtn = document.querySelector(".next-testimonial")
  let currentTestimonial = 0
  let testimonialInterval

  function showTestimonial(index) {
    // Hide all testimonial slides
    testimonialSlides.forEach((slide) => {
      slide.classList.remove("active")
    })

    // Remove active class from all dots
    testimonialDots.forEach((dot) => {
      dot.classList.remove("active")
    })

    // Show the current testimonial and activate the corresponding dot
    testimonialSlides[index].classList.add("active")
    testimonialDots[index].classList.add("active")
  }

  function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonialSlides.length
    showTestimonial(currentTestimonial)
  }

  function prevTestimonial() {
    currentTestimonial = (currentTestimonial - 1 + testimonialSlides.length) % testimonialSlides.length
    showTestimonial(currentTestimonial)
  }

  // Initialize testimonials carousel
  if (testimonialSlides.length > 0) {
    // Start automatic carousel
    testimonialInterval = setInterval(nextTestimonial, 6000)

    // Add click event to dots
    testimonialDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        currentTestimonial = index
        showTestimonial(currentTestimonial)
        resetTestimonialInterval()
      })
    })

    // Add click events to arrows
    if (prevTestimonialBtn && nextTestimonialBtn) {
      prevTestimonialBtn.addEventListener("click", () => {
        prevTestimonial()
        resetTestimonialInterval()
      })

      nextTestimonialBtn.addEventListener("click", () => {
        nextTestimonial()
        resetTestimonialInterval()
      })
    }
  }

  function resetTestimonialInterval() {
    clearInterval(testimonialInterval)
    testimonialInterval = setInterval(nextTestimonial, 6000)
  }

  // Back to Top Button
  const backToTopBtn = document.querySelector(".back-to-top")

  if (backToTopBtn) {
    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 300) {
        backToTopBtn.classList.add("active")
      } else {
        backToTopBtn.classList.remove("active")
      }
    })

    backToTopBtn.addEventListener("click", (e) => {
      e.preventDefault()
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    })
  }

  // Form Validation
  const newsletterForm = document.querySelector(".newsletter-form")

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      const emailInput = this.querySelector('input[type="email"]')
      const emailValue = emailInput.value.trim()

      if (!isValidEmail(emailValue)) {
        e.preventDefault()
        alert("Please enter a valid email address.")
      }
    })
  }

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    return emailRegex.test(email)
  }
})

