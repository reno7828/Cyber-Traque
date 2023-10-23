document.addEventListener("DOMContentLoaded", function () {
  const audio = document.querySelector("audio");
  const audioToggle = document.getElementById("audio-toggle");

  if (audio && audioToggle) {
    audioToggle.addEventListener("click", function () {
      if (audio.paused) {
        audio.play();
        audioToggle.innerText = "Désactiver le son";
      } else {
        audio.pause();
        audioToggle.innerText = "Activer le son";
      }
    });
  }
});
