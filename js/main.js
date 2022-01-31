 $('.owl-carousel').owlCarousel({
  loop:true,
  margin:40,
  nav:false,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  },
  autoWidth: true
})
