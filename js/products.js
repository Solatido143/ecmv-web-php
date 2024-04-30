document.addEventListener("DOMContentLoaded", function () {
  let previewContainer = document.querySelector(".products-preview");
  let previewBox;

  let products = document.querySelectorAll(".products-container .product");
  let activePage = 0;

  let tabButtons = document.querySelectorAll('input[name="product-tab"]');
  if (tabButtons) {
    tabButtons.forEach((tab) => {
      tab.addEventListener("change", function () {
        filterProducts(this.id);
      });
    });
  }

  function filterProducts(category) {
    const filteredProducts = Array.from(products).filter((product) => {
      const isHardware = product.classList.contains("hardware");
      const isSoftware = product.classList.contains("software");

      return (
        category === "tab-all" ||
        (category === "tab-web" && isHardware) ||
        (category === "tab-uiux" && isSoftware)
      );
    });

    const pageSize = 8;
    const totalPages = Math.ceil(filteredProducts.length / pageSize);
    const currentPage = 0;

    showPage(filteredProducts, currentPage, pageSize);
  }

  function showPage(productsArray, pageNum, pageSize) {
    const start = pageNum * pageSize;
    const end = start + pageSize;
    const currentPageProducts = productsArray.slice(start, end);

    if (products) {
      products.forEach((product) => {
        product.style.display = "none";
      });
    }

    currentPageProducts.forEach((product) => {
      product.style.display = "block";
    });

    if (document.querySelector(".pagination")) {
      updatePagination(productsArray, pageNum, pageSize);
    }

    activePage = pageNum;
  }

  function updatePagination(productsArray, pageNum, pageSize) {
    const totalPages = Math.ceil(productsArray.length / pageSize);
    const pagination = document.querySelector(".pagination");
    pagination.textContent = "";

    for (let i = 0; i < totalPages; i++) {
      const pageNumber = i + 1;
      const pageButton = document.createElement("button");
      pageButton.textContent = pageNumber;
      pageButton.onclick = () => {
        showPage(productsArray, i, pageSize);
      };

      if (i === pageNum) {
        pageButton.classList.add("active");
      }

      pagination.appendChild(pageButton);
    }
  }

  if (products) {
    document
      .querySelectorAll(".products-container .product")
      .forEach((product) => {
        product.onclick = () => {
          if (!previewBox && previewContainer) {
            previewBox = previewContainer.querySelectorAll(".preview");
          }
          if (previewContainer) {
            previewContainer.style.display = "flex";
            document.documentElement.style.setProperty('--overflow-y', 'hidden');
            let name = product.getAttribute("data-name");
            previewBox.forEach((preview) => {
              let target = preview.getAttribute("data-target");
              if (name == target) {
                preview.classList.add("active");
              }
            });
          }
        };
      });
  }

  if (previewContainer) {
    previewBox = previewContainer.querySelectorAll(".preview");
    previewBox.forEach((close) => {
      close.querySelector(".fa-times").onclick = () => {
        close.classList.remove("active");
        previewContainer.style.display = "none";
        document.documentElement.style.setProperty('--overflow-y', 'scroll');
      };
    });
  }

  if (previewContainer) {
    previewContainer.addEventListener("click", function (event) {
      if (!event.target.closest(".preview")) {
        previewBox.forEach((preview) => {
          preview.classList.remove("active");
        });
        previewContainer.style.display = "none";
        document.documentElement.style.setProperty('--overflow-y', 'scroll');
      }
    });
  }

  filterProducts("tab-all");
});
