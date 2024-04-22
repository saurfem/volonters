const menu = document.getElementById("Header_menu")

function menu_open() {
    if (menu.style.display == "flex") {
        menu.style.display = "none"
    }
    else {
        menu.style.display = "flex"
    }
}


function menu_close() {
    menu.style.display = "none"
}

function draki() {
    let name = prompt("Привет! Как тебя зовут?");
    let age = prompt("Сколько тебе лет?");
    let dream = prompt("Расскажи, какая у тебя мечта?");
    let fear = prompt("Что тебя больше всего пугает?");
    let hobby = prompt("Какое у тебя хобби?");
    let friendName = prompt("Есть ли у тебя лучший друг или подруга? Как его зовут?");
    let favoritePlace = prompt("Какое твое любимое место?");
    let superpower = prompt("Если бы у тебя была одна сверхспособность, какую бы ты выбрал(а)?");
    let favoriteFood = prompt("Какое твое любимое блюдо?");
    let wish = prompt("Что бы ты хотел(а) изменить в мире?");

    // Создаем историю на основе ответов пользователя
    let story = "Был-был человек по имени " + name + ". Ему (ей) было " + age + " лет. Вот что произошло с этим человеком... " + name + " мечтал(а) о " + dream + ", но однажды столкнулся(ась) с своим страхом: " + fear + ". Но " + name + " не сдавался(ась), ведь его(ее) хобби - " + hobby + ", а лучший друг " + name + " - это " + friendName + ". Они всегда помогали друг другу. " + name + " любил(а) проводить время в " + favoritePlace + ", мечтая о сверхспособности - " + superpower + ". В свободное время " + name + " любил(а) готовить " + favoriteFood + ". И вот, думая о том, что бы изменить в мире, " + name + " решил(а) - " + wish + ".";
    // Выводим историю в консоль
    console.log(story);
}