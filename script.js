window.onload = init

document.addEventListener("DOMContentLoaded", ready);

function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

function ready() {
  document.body.style.background = "white"
  sleep(500).then(()=>{
    document.body.style.background = "#FFBE00"
  })

}







function init() {
console.log("init")


const check = (e) => {
    const form = new FormData(e.target);
    const formula = form.get("zxc");
    console.log(zxc.names.value);
    console.log(zxc.email1.value);
    console.log(zxc.exampleCheck1.checked);
    return false
};



const tasksListElement = document.querySelector(`.tasks__list`);
var taskElements = tasksListElement.getElementsByClassName(`tasks__item`);



// Перебираем все элементы списка и присваиваем нужное значение
for (const task of taskElements) {
  task.draggable = true;
}

tasksListElement.addEventListener(`dragstart`, (evt) => {
    evt.target.classList.add(`selected`);
  });
  
  tasksListElement.addEventListener(`dragend`, (evt) => {
    evt.target.classList.remove(`selected`);
  });

  tasksListElement.addEventListener(`dragover`, (evt) => {
    // Разрешаем сбрасывать элементы в эту область
    evt.preventDefault();
  
    // Находим перемещаемый элемент
    const activeElement = tasksListElement.querySelector(`.selected`);
    // Находим элемент, над которым в данный момент находится курсор
    const currentElement = evt.target;
    // Проверяем, что событие сработало:
    // 1. не на том элементе, который мы перемещаем,
    // 2. именно на элементе списка
    const isMoveable = activeElement !== currentElement &&
      currentElement.classList.contains(`tasks__item`);
  
    // Если нет, прерываем выполнение функции
    if (!isMoveable) {
      return;
    }
  
    // Находим элемент, перед которым будем вставлять
    const nextElement = (currentElement === activeElement.nextElementSibling) ?
        currentElement.nextElementSibling :
        currentElement;
  
    // Вставляем activeElement перед nextElement
    tasksListElement.insertBefore(activeElement, nextElement);
    //setTimeout(checkrainbow(taskElements), 1000)
    checkrainbow(taskElements)
    checkprogress(taskElements)
  });

}

// sleep time expects milliseconds
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

// Usage!
sleep(500).then(() => {
    // Do something after the sleep!
});

function checkrainbow(elements) {
  console.log(elements)
  let rightcolors = "redorangeyellowgreenskybluebluepurple"
  let result = ""
  for (el of elements){
    result+=el.style.background
  }
  sleep(1000).then(()=>
  {
    if (result===rightcolors)
    {
      alert("rainbow")
    }
    console.log(result)
  })
}

function checkprogress(elements) {
  console.log(elements)
  let rightcolors = ["red","orange","yellow","green","skyblue","blue","purple"]
  let result = []
  for (let p=0; p<7; p++){
    result[p]=elements[p].style.background
  }
  let count=0;
  for (let p=0; p<7; p++){
    if (result[p]===rightcolors[p])
      count++
  }
  console.log(count)
  let progressbar = document.querySelector(".progress")
  progressbar.style.width = 0.48*count*100/7 + '%'
  console.log(progressbar.style.width)

}

