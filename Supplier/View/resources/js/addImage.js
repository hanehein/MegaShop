const addImage = document.querySelector('.add-image');
const imageContainer = document.querySelector('.image-container');
const imageWarningMessage = document.querySelector('.image-warning-message');
const product_images = imageContainer.querySelectorAll('.product_image');
let imageCount = Number(product_images.length);

const imageInput1 = document.getElementById('product_image1');
const imageDispaly1 = document.getElementById('out_image1');

init();
function init() {
    addClickEventToImage(imageInput1, imageDispaly1);

    if (imageCount > 1) {
        product_images.forEach((product_image, idx) => {
            if (!idx == 0) {
                const removeImageBtn = product_image.querySelector(`.remove-image`);
                removeImageBtn.addEventListener('click', removeImage);
                addClickEventToImage(
                    product_image.querySelector(`#product_image${idx + 1}`),
                    product_image.querySelector(`#out_image${idx + 1}`)
                );
            }
        });
    }
}


addImage.addEventListener('click', function () {
    if (imageCount < 8) {
        imageCount++;
        const uniqueId = getUniqueId(8);
        const imageDiv = document.createElement('div');
        imageDiv.className = "product_image w-[300px] min-h-[150px] p-4 rounded-md shadow relative mr-5 mb-3 relative";
        imageDiv.innerHTML += `
            <label for="product_image_${uniqueId}">
                <img id="out_image_${uniqueId}" class="w-full" src="../resources/img/upload_image.jpg" alt="">
            </label>
            <input id="product_image_${uniqueId}" type="file" name="photo_${uniqueId}" accept="image/*" hidden>
            <button class="remove-image w-[35px] h-[35px] bg-red-500 rounded-md text-white absolute right-1 top-1">
                <ion-icon class="text-lg font-bold" name="close-outline"></ion-icon>
            </button>
        `;
        const imageInput = imageDiv.querySelector(`#product_image_${uniqueId}`);
        const imageDispaly = imageDiv.querySelector(`#out_image_${uniqueId}`);
        const removeImageBtn = imageDiv.querySelector(`.remove-image`);
        // adding click event
        addClickEventToImage(imageInput, imageDispaly);
        removeImageBtn.addEventListener('click', removeImage);
        imageContainer.appendChild(imageDiv);
    } else {
        imageWarningMessage.innerHTML += `<small class="text-red-500 font-semibold">You can only add 8 images</small>`;
        setTimeout(function () {
            imageWarningMessage.innerHTML = "";
        }, 1000);
    }

});

function addClickEventToImage(imageInput, imageDispaly) {
    imageInput.onchange = function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                imageDispaly.src = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }

        // Not supported
        else {
            // fallback -- perhaps submit the input to an iframe and temporarily store
            // them on the server until the user's session ends.
        }
    }
}

function removeImage(e) {
    e.preventDefault();
    const imageDiv = this.parentElement;
    imageContainer.removeChild(imageDiv);
    imageCount--;
}

function getUniqueId(count) {
    let uniqueId = "";
    const characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for (let i = 0; i < count; i++) {
        const random = Math.floor(Math.random() * characters.length);
        const randomCharacter = characters[random];
        uniqueId += randomCharacter;
    }
    return uniqueId;
}

