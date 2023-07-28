const variantsContainer = document.querySelector('.variant-lists-container');
const addOptionBtn = document.querySelector('.add-option');
const optionLists = document.querySelector('.option-lists');
const alert = document.querySelector('.alert-message');
let lists = [];
const sizes = ["XL", "L", "M", "S", "XS"];
const colors = ["red", "blue", "green", "yellow", "white", "black"];
const rams = ["1GB", "2GB", "3GB"];

addOptionBtn.addEventListener('click', addVariants);

function addVariants(e) {
    e.preventDefault();
    const optionValue = Number(optionLists.value);
    if (optionValue === 1) {
        //sizes
        if (!lists.includes(optionValue)) {
            createVariant("size", sizes, optionValue);
            lists.push(optionValue);
        } else {
            showMessage("size options are already added");
        }
    } else if (optionValue === 2) {
        //colors
        if (!lists.includes(optionValue)) {
            createVariant("color", colors, optionValue);
            lists.push(optionValue);
        } else {
            showMessage("color options are already added");
        }

    } else if (optionValue === 3) {
        //ram
        if (!lists.includes(optionValue)) {
            createVariant("ram", rams, optionValue);
            lists.push(optionValue);
        } else {
            showMessage("ram options are already added");
        }
    } else if (optionValue === 4) {
        //other

    }
};

function createVariant(variantName, variantLists, variantValue) {
    let result = "";
    const variant = document.createElement('div');
    variant.className = "variant mb-3 flex space-x-5 items-center";

    variantLists.forEach(value => {
        result += `
            <div class="flex items-center">
                <input type="checkbox" id="sizeSmall" name="size" value="Small" class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="sizeSmall" class="ml-2 text-gray-700">${value}</label>
            </div>
        `;
    });

    variant.innerHTML = `
        <div>
            <button class="remove-option rounded-md bg-red-500 px-2 py-1">
                <ion-icon name="close" class="text-white"></ion-icon>
            </button>
            </div>
                <div class="flex space-x-5 items-center">
                    <h2 class="block text-gray-700 text-sm font-bold uppercase">${variantName} :</h2>
                    <div class="flex space-x-6">
                        ${result}
                    </div>
            </div>
        `
        ;

    const removeBtn = variant.querySelector('.remove-option');
    removeBtn.addEventListener('click', function () {
        const variant = this.parentElement.parentElement;
        variantsContainer.removeChild(variant);
        lists = lists.filter( list => list !== variantValue);
    });
    variantsContainer.appendChild(variant);
}

function showMessage(message) {
    alert.innerHTML += `<small class="text-red-500 font-semibold">${message}</small>`;
    setTimeout(function () {
        alert.innerHTML = "";
    }, 1000);
}

