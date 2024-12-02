// Referências aos botões
const toggleDarkModeButton = document.getElementById("toggleDarkMode");

// Função para aplicar o estado inicial ao carregar a página
function applyInitialSettings() {
    const isDarkMode = localStorage.getItem("darkMode") === "true";
    
    if (isDarkMode) {
        document.body.classList.add("dark-mode");
        document.querySelector("header").classList.add("dark-mode");
        document.querySelector("footer").classList.add("dark-mode");
    }


}

applyInitialSettings();

toggleDarkModeButton.addEventListener("click", () => {
    const isDarkMode = document.body.classList.toggle("dark-mode");
    document.querySelector("header").classList.toggle("dark-mode");
    document.querySelector("footer").classList.toggle("dark-mode");

    //Local Storage
    localStorage.setItem("darkMode", isDarkMode);
});

// Function to calculate price with 19% tax
function getTotalPrice(priceWOTax) {
    const taxRate = 0.19; // 19% tax
    return priceWOTax + (priceWOTax * taxRate);
}

// Function to calculate and display the results
function calculatePrice() {
    const priceInput = document.getElementById("priceWOTax").value;
    const priceWithoutTax = parseFloat(priceInput);

    if (isNaN(priceWithoutTax) || priceWithoutTax <= 0) {
        alert("Please enter a valid price greater than 0.");
        return;
    }

    // Calculate price with tax
    const priceWithTax = getTotalPrice(priceWithoutTax);

    // Display results
    document.getElementById("priceWithoutTax").innerText = priceWithoutTax.toFixed(2);
    document.getElementById("priceWithTax").innerText = priceWithTax.toFixed(2);


    
}



