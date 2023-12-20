// Fonction pour définir la position du scroll de manière progressive
function smoothScrollTo(targetPosition, duration) {
  const startPosition = window.scrollY;
  const distance = targetPosition - startPosition;
  const startTime = performance.now();

  function step(currentTime) {
    const elapsedTime = currentTime - startTime;
    if (elapsedTime < duration) {
      window.scrollTo(
        0,
        easeInOutCubic(elapsedTime, startPosition, distance, duration)
      );
      requestAnimationFrame(step);
    } else {
      window.scrollTo(0, targetPosition);
    }
  }

  requestAnimationFrame(step);
}

// Fonction d'interpolation pour l'effet "ease-in-out" (courbe de Bézier)
function easeInOutCubic(t, b, c, d) {
  t /= d / 2;
  if (t < 1) return (c / 2) * t * t * t + b;
  t -= 2;
  return (c / 2) * (t * t * t + 2) + b;
}

// Attacher un gestionnaire d'événements pour déclencher le défilement lorsque l'utilisateur clique sur un lien
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        const targetPosition = targetElement.offsetTop;
        smoothScrollTo(targetPosition, 2000); // Durée de l'animation en millisecondes (1 seconde dans cet exemple)
      }
    });
  });
});

///////////
