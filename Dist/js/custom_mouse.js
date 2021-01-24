(function() {
  let mouse = document.querySelector('.mouse')

  document.addEventListener('mousemove', (e) => {
    let x = e.clientX
    let y = e.clientY

    let newX = x - 10
    let newY = y - 10

    mouse.style.transform = 'translate3d(' + newX + 'px, ' + newY + 'px, 0)'
  })
})();