(() => {
  // Example: track clicks on Resume button
  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".hero__btn");
    if (btn) {
      btn.addEventListener("click", () => {
        console.log("Resume button clicked");
      });
    }
  });
})();