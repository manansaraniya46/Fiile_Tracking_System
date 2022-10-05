let qrCode = document.querySelector("#qr_generate");
let qrImg = document.querySelector("#qr_img");
let input = document.querySelector("#id_fileName"); 

qrCode.addEventListener("click", ()=>{

    let api = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${input}`
    qrImg.src = api;
    
})