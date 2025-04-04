// Wait for the DOM to fully load
document.addEventListener("DOMContentLoaded", () => {
  const printButton = document.querySelector(".btn_print");

  if (printButton) {
    printButton.addEventListener("click", (e) => {
      e.preventDefault();

      const content = document.getElementById("container_content");
      if (!content) return;

      const options = {
        margin: 1,
        filename: "Louise_Invoice.pdf",
        image: { type: "jpeg", quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
      };

      html2pdf().set(options).from(content).save();
    });
  }
});
