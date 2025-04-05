document.addEventListener("DOMContentLoaded", () => {
  const printButton = document.querySelector("#rep");
  printButton?.addEventListener("click", (e) => {
    e.preventDefault();
    const originalContent = document.getElementById("container_content");
    if (!originalContent) return;

    const clone = originalContent.cloneNode(true);

    const wrapper = document.createElement("div");
    wrapper.style.backgroundColor = "#F5F5F5";
    wrapper.style.padding = "40px";
    wrapper.style.width = "816px";
    wrapper.style.margin = "auto";
    wrapper.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.1)";

    wrapper.appendChild(clone);
    document.body.appendChild(wrapper);

    const options = {
      margin: 0,
      filename: "Louise_Invoice.pdf",
      image: { type: "jpeg", quality: 0.98 },
      html2canvas: {
        scale: 2,
        useCORS: true,
        backgroundColor: "#ffffff",
      },
      jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
    };

    html2pdf()
      .set(options)
      .from(wrapper)
      .save()
      .then(() => {
        document.body.removeChild(wrapper);
      });
  });
});
