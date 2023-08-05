const variantContainer = document.querySelector(".variant-lists-container");
const variantLists = document.querySelector(".variant-lists");
const addVariantBtn = document.querySelector(".add-variant");
const alertMessage = document.querySelector(".alert-message");
let lists = [];
const sizeLists = ["XS", "S", "M", "L", "XL", "XXL", "XXXL"];
const colorLists = ["black","white","grey","brown","blue","red","yellow","green","purple","orange"];


//adding variants
addVariantBtn.addEventListener('click', addVariant);

function addVariant() {
    const variantValue = variantLists.value;
    if (variantValue == 1) {
        createVarint(variantValue, "size", sizeLists);
    } else if (variantValue == 2) {
        createVarint(variantValue, "color", colorLists);
    }
}

function createVarint(variantValue, variantName, optionLists) {
    if (!lists.includes(variantValue)) {
        const variant = document.createElement('div');
        variant.className = "variant mb-3 flex space-x-5 items-center";

        let result = "";
        optionLists.forEach(list => {
            result += `
                <div class="flex items-center">
                    <input type="checkbox" id="sizeSmall" name="size" value="Small" class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="sizeSmall" class="ml-2 text-gray-700">${list}</label>
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
            variantContainer.removeChild(variant);
            lists = lists.filter( list => list !== variantValue);
        });
        variantContainer.appendChild(variant);

        lists.push(variantValue);
    } else {
        alertMessage.innerHTML += `<small class="text-red-500 font-semibold">This variant is already added</small>`;
        setTimeout(function () {
            alertMessage.innerHTML = "";
        }, 1000);
    }
}

