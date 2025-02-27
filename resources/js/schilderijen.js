document.addEventListener("DOMContentLoaded", function () {
    let imageIds = ["channelImg", "kaneImg", "maluImg", "abbyImg", "ashaImg", "erenaImg", "esilaImg", "farahImg", "heatherImg", "hélèneImg", "jannesImg", "lailaImg", "lanahImg", "lenaImg", "loisImg", "lorenaImg", "merelImg", "naomiImg", "nathalieImg", "sadéImg", "suzanImg", "tomImg", "valerieImg", "victorImg", "yasmineImg", "zaraImg"];

    imageIds.forEach(function (id) {
        let image = document.getElementById(id);
        if (image) {
            image.onclick = function () {
                let fullscreenDiv = document.createElement("div");
                fullscreenDiv.classList.add("fullscreen");

                let fullscreenImg = document.createElement("img");
                fullscreenImg.src = image.src;
                fullscreenImg.alt = image.alt;

                fullscreenDiv.appendChild(fullscreenImg);
                document.body.appendChild(fullscreenDiv);

                fullscreenDiv.onclick = function () {
                    document.body.removeChild(fullscreenDiv);
                };
            };
        } else {
            console.log(`Afbeelding met id ${id} niet gevonden.`);
        }
    });
});
