class Client {
    constructor(fio, diadnoz) {
        this.fio = fio;
        this.diagnoz = diadnoz;
    }

    saveToLS() {
        localStorage.setItem(this.fio, this.diagnoz);
    }


}

function checkField() {
    let fio = document.getElementById("p1").value;
    let throat = document.getElementById("p5").value.toLowerCase();
    let fail = false;

    if (fio == "" || fio == " ") {
        fail = "Введите ФИО";
    } else if ((throat != "да") && (throat != "нет")) {
        fail = "Неверный формат ввода";
    }
    if (fail) {
        alert(fail);
        return false;
    }

    return true;
}

function getDiagnosis(form) {
    if (checkField()) {
        let gripp = 0;
        let angina = 0;
        let coronavirus = 0;
        let prost = 0;
        let fio = document.getElementById("p1").value;


        let temp = document.getElementById("p3").value;
        let throat = document.getElementById("p5").value.toLowerCase();
        let kashel = document.getElementById("p6").value.toLowerCase();
        let oznob = document.getElementById("p7").value.toLowerCase();
        let musc = document.getElementById("p8").value.toLowerCase();
        let utoml = document.getElementById("p9").value.toLowerCase();
        let otdishka = document.getElementById("p10").value.toLowerCase();
        let nos = document.getElementById("p11").value.toLowerCase();


        if (temp >= 37) {
            gripp += 10;
            coronavirus += 10;
            prost += 20;
            angina += 20;
        }
        if (temp >= 38) {
            gripp += 25;
            coronavirus += 30;
            angina += 5;
            prost -= 5;
        }
        if (throat) {
            gripp += 5;
            coronavirus += 3;
            angina += 35;
            prost += 20;
        }
        if (kashel == "да") {
            gripp += 15;
            coronavirus += 18;
            prost += 5;
        }
        if (oznob == "да") {
            gripp += 10;
            coronavirus += 5;
            prost += 5;
        }
        if (musc == "да") {
            gripp += 15;
            coronavirus += 10;
            prost += 20;
        }
        if (utoml == "да") {
            gripp += 10;
            coronavirus += 5;
            prost += 10;
        }
        if (otdishka == "да") {
            coronavirus += 14;
        }
        if (nos == "да") {
            gripp += 5;
            angina += 15;
        }

        let result = "Вероятные диагнозы:" +
            "\nГрипп: " + gripp + "%" +
            "\nКоронавирус: " + coronavirus + "%" +
            "\nАнгина: " + angina + "%" +
            "\nПростуда: " + prost + "%";



        var client = new Client(fio, result);
        client.saveToLS();

        document.getElementById("myTextarea").value = localStorage.getItem(client.fio);
    }
}

function loadInf() {
    for (let i = 0; i < localStorage.length; i++) {
        let key = localStorage.key(i);
        document.getElementById("myTextarea").value += (i + 1) + ". " + key + "\n" + localStorage.getItem(key) + "\n" + "\n";
    }
}

function clearLS() {
    localStorage.clear();
}