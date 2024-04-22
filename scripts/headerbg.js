let Back_photo = document.getElementById("Header_background-kzovol")
let photos_num = 0

let photos = [
    "../source/images/zelenski.png",
    "../source/images/fon-green.png",
    "../source/images/donw.png"
]

setInterval(Change_photo,5000);


function Change_photo(){
    photos_num++
    if (photos_num == 3){
        photos_num = 0
    }
    console.log(photos[photos_num])
    Back_photo.style.backgroundImage = "url(" + photos[photos_num] + ")"
}