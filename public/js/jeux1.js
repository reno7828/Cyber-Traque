function playVictoryAnimation() {
  // Sélectionnez l'élément que vous souhaitez animer (par exemple, la boîte d'alerte en cas de réussite)
  const successAlert = document.querySelector(".alert-success");

  // Utilisez Anime.js pour créer une animation personnalisée
  const animation = anime.timeline({
    easing: "easeOutExpo",
    duration: 1000,
  });

  animation.add({
    targets: successAlert,
    scale: [0, 1],
    opacity: [0, 1],
  });

  animation.finished.then(() => {
    // Animation terminée, vous pouvez effectuer des actions supplémentaires ici si nécessaire
  });
}

$(document).ready(function () {
  $(".password-container").click(function () {
    $("#secret-text").css("color", "black");
  });
});
